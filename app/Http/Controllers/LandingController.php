<?php

namespace App\Http\Controllers;
use App\Models\Posting;
use App\Models\Social;
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
        $social  = Social::all();
        //JADWAL SHOLAT
        $data = Http::get('https://api.myquran.com/v1/sholat/jadwal/1638/2022/03/16');
        $jadwal_sholat = $data['data']['jadwal'];
        //DAERAH JADWAL SHOLAT
        $kota = Http::get('https://api.myquran.com/v1/sholat/kota/semua')->body();
        $daerah = json_decode($kota);
        $kab_kota = [];
        foreach ($daerah as $key => $value) {
            # code...
            array_push($kab_kota,$value);
        }
        return view('landing.index',compact('artikels','beritas','social','jadwal_sholat','kab_kota'));
    }

    public function jadwal_sholat(Request $request)
    {
        $kota = Http::get('https://api.myquran.com/v1/sholat/kota/semua')->body();
        $data = Http::get('https://api.myquran.com/v1/sholat/jadwal/1638/2022/03/16');
        
        $datas= json_decode($kota);
        $kab_kota = [];
        foreach ($datas as $key => $value) {
            # code...
            array_push($kab_kota,$value);
        }
        // return $kab_kota;
        // return $data['data'];
    }
}
