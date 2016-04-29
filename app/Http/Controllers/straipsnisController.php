<?php

namespace App\Http\Controllers;

use App\Straipsniai;
use Illuminate\Http\Request;

use App\Http\Requests;

class straipsnisController extends Controller
{
    public function getStraipsnis($kategorija, $url){
        $straipsnis = Straipsniai::where('kategorija', $kategorija)->where('url', $url)->first();
        
        return view('straipsnis', ['straipsnis' => $straipsnis]);
    }
}
