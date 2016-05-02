<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Straipsniai;
use App\Http\Requests;

class adminController extends Controller
{

    public function getAdminPage(){
        $straipsniai = Straipsniai::all();

        return view('admin.admin', ['straipsniai' => $straipsniai]);
    }

    public function getKategorijaPage($kategorija){
        $title = 'Visi straipsniai';
        if($kategorija == 'visi-straipsniai'){
            $straipsniai = Straipsniai::orderBy('id', 'DESC')->get();
        }
        else{
            $straipsniai = Straipsniai::where('kategorija', $kategorija)->orderBy('id','DESC')->get();
            $title = $kategorija;
        }

        return view('admin.kategorija', ['straipsniai' => $straipsniai, 'title' => $title]);
    }

    public function getNaujasPage(){
        return view('admin.naujas');
    }

    public function postNaujasStraipsnis(Request $request){
        $pavadinimas = $request['pavadinimas'];
        $ivadas = $request['ivadas'];
        $tekstas = $request['tekstas'];
        $photo = $request['photo'];
        $url = str_replace(' ', '-', $request['pavadinimas']);
        
        $straipsnis = new Straipsniai();
        $straipsnis->pavadinimas = $pavadinimas;
        $straipsnis->ivadas = $ivadas;
        $straipsnis->tekstas = $tekstas;
        $straipsnis->photo = $photo;
        $straipsnis->url = $url;
        $straipsnis->save();
        
        return redirect()->route('admin');
    }
    
}
