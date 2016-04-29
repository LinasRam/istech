<?php

namespace App\Http\Controllers;

use App\Straipsniai;
use Illuminate\Http\Request;

use App\Http\Requests;

class welcomeController extends Controller
{
    public function getWelcomePage(){
        $straipsniai = Straipsniai::orderBy('id', 'DESC')->take(3)->get();
        
        return view('welcome', ['straipsniai' => $straipsniai]);
    }
}
