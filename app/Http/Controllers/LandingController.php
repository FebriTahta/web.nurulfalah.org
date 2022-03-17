<?php

namespace App\Http\Controllers;
use App\Models\Posting;
use App\Models\Social;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function landing(Request $request)
    {
        $artikels = Posting::orderBy('id','desc')->whereHas('jenisposting', function($q) {
            $q->where('name', 'artikel');
        })->limit(4)->get();
        $beritas = Posting::orderBy('id','desc')->whereHas('jenisposting', function($q) {
            $q->where('name', 'berita');
        })->limit(3)->get();
        $tgl = Carbon::now()->isoFormat('D MMMM Y');
        $social  = Social::all();
        $data = Http::get('https://api.myquran.com/v1/sholat/jadwal/1638/'.date('Y').'/'.date('m').'/'.date('d').'');
        $jadwal_sholat = $data['data']['jadwal'];
        $kota = Http::get('https://api.myquran.com/v1/sholat/kota/semua')->body();
        $daerah = json_decode($kota);
        $kab_kota = [];
        foreach ($daerah as $key => $value) {
            # code...
            array_push($kab_kota,$value);
        }
        return view('landing.index',compact('artikels','beritas','social','jadwal_sholat','kab_kota','tgl'));
    }

    public function jadwal_sholat($lokasi_id, Request $request)
    {
        if($request->ajax())
        {
            # code...
            $lokasi = $lokasi_id;
            $json   = json_decode(file_get_contents('https://api.myquran.com/v1/sholat/kota/id/'.$lokasi.''), true);
            if ($json['status'] == false) {
                # code... 
                return response()->json([
                    'status'    => 400,
                    'message'   => 'Lokasi / Daerah Tidak Ditemukan',
                ]);

            }else {
                # code...
                $data   = json_decode(file_get_contents('https://api.myquran.com/v1/sholat/jadwal/'.$lokasi.'/'.date('Y').'/'.date('m').'/'.date('d').''), true);
                return response()->json(
                    [
                    'status'  => 200,
                    'message' => 'Menampilkan Jadwal Sholat ' . $json['data']['lokasi'],
                    'jadwal'    => $data['data']
                    ]
                );
            }
        }
    }
}
