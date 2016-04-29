<?php

namespace App\Http\Controllers;

use App\Straipsniai;
use Illuminate\Http\Request;

use App\Http\Requests;

class kategorijaController extends Controller
{
    public function getKategorijaPage($kategorija){
        $title = 'Visi straipsniai';
        if($kategorija == 'visi-straipsniai'){
            $straipsniai = Straipsniai::orderBy('id', 'DESC')->get();
        }
        else{
            $straipsniai = Straipsniai::where('kategorija', $kategorija)->orderBy('id','DESC')->get();
            $title = $kategorija;
        }

        return view('kategorija', ['straipsniai' => $straipsniai, 'title' => $title]);
    }
}
