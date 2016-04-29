<?php

namespace App\Http\Controllers;

use App\Straipsniai;
use Illuminate\Http\Request;

use App\Http\Requests;

class kategorijaController extends Controller
{
    public function getKategorijaPage($kategorija){
        if($kategorija == 'visi-straipsniai'){
            $straipsniai = Straipsniai::all();
        }
        else{
            $straipsniai = Straipsniai::where('kategorija', $kategorija)->get();
        }

        return view('kategorija', ['straipsniai' => $straipsniai]);
    }
}
