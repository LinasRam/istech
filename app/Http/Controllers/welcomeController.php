<?php

namespace App\Http\Controllers;

use App\Straipsniai;
use Illuminate\Http\Request;
use Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class welcomeController extends Controller
{
    public function getWelcomePage(){
        $straipsniai = Straipsniai::orderBy('id', 'DESC')->take(3)->get();
        
        return view('welcome', ['straipsniai' => $straipsniai]);
    }

    public function doAutocomplete(){
        $term = Input::get('term');

        $queries = Straipsniai::where('pavadinimas', 'LIKE', "%$term%")->get();

        foreach ($queries as $query) {
            $results[] = array('value' => $query->pavadinimas);
        }

        return Response::json($results);
    }

    public function getPaieska($zodis){
        $straipsniai = Straipsniai::where('pavadinimas', 'LIKE', "%$zodis%")->get();

        return view('paieska', ['straipsniai' => $straipsniai]);
    }
    
    public function getApieMus(){
        return view('apie');
    }

}
