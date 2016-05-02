<?php

namespace App\Http\Controllers;

use App\Kategorijos;
use Illuminate\Http\Request;
use App\Straipsniai;
use App\Http\Requests;

class adminController extends Controller
{

    public function getAdminPage(){
        $straipsniai = Straipsniai::orderBy('id', 'DECS')->get();

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
        $kategorijos = Kategorijos::all();
        
        return view('admin.naujas', ['kategorijos' => $kategorijos]);
    }

    public function postNaujasStraipsnis(Request $request){
        $this->validate($request, [
            'pavadinimas' => 'required',
            'ivadas' => 'required',
            'tekstas' => 'required',
            'photo' => 'required'
        ]);

        $pavadinimas = $request['pavadinimas'];
        $ivadas = $request['ivadas'];
        $tekstas = $request['tekstas'];
        $photo = $request['photo'];
        $kategorija = $request['kategorija'];
        $url = str_replace(' ', '-', strtolower($request['pavadinimas']));
        
        $straipsnis = new Straipsniai();
        $straipsnis->pavadinimas = $pavadinimas;
        $straipsnis->ivadas = $ivadas;
        $straipsnis->tekstas = $tekstas;
        $straipsnis->photo = $photo;
        $straipsnis->kategorija = $kategorija;
        $straipsnis->url = $url;
        $straipsnis->save();
        
        return redirect()->route('admin');
    }
    
}
