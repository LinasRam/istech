<?php

namespace App\Http\Controllers;

use App\Kategorijos;
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

        $photo = Kategorijos::where('pavadinimas', $kategorija)->first();
        if(!collect($photo)->isEmpty())
            $photo = $photo->photo;
        else $photo = 'https://scontent-frt3-1.xx.fbcdn.net/v/t1.0-9/10857736_635785036554764_1430993853386636908_n.jpg?oh=e16a1ae9affbc84eee153eb7d2a23b9d&oe=579EB049';

        return view('kategorija', ['straipsniai' => $straipsniai, 'title' => $title, 'photo' => $photo]);
    }
}
