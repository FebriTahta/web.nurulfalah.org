<?php

namespace App\Http\Controllers;
use App\Models\Posting;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function landing(Request $request)
    {
        // UNTUK AUTO SCROLL
        // $artikel = Posting::with(['jenisposting' => function($q) {
        //     $q->where('name', 'artikel');
        // }])
        // ->paginate(6);
        // $berita = Posting::with(['jenisposting' => function($q) {
        //     $q->where('name', 'berita');
        // }])->paginate(6);
        $artikels = Posting::whereHas('jenisposting', function($q) {
            $q->where('name', 'artikel');
        })->limit(4)->get();
        $beritas = Posting::whereHas('jenisposting', function($q) {
            $q->where('name', 'berita');
        })->limit(3)->get();
        return view('landing.index',compact('artikels','beritas'));
    }
}
