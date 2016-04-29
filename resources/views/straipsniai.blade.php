@extends('layouts.kategorija')

@section('title')
    Visi straipsniai
@stop

@section('selected tab')
    <li><a href="{{ route('home') }}">Pagrindinis <span class="sr-only">(current)</span></a></li>
    <li class="active"><a href="{{ route('straipsniai') }}">Visi straipsniai</a></li>
    <li><a href="{{ route('istorijos') }}">Istorijos</a></li>
    <li><a href="{{ route('masinos') }}">Mašinos</a></li>
    <li><a href="{{ route('lektuvai') }}">Lėktuvai</a></li>
    <li><a href="{{ route('laivai') }}">Laivai</a></li>
@stop

@section('jumbotron')
    <div class="jumbotron" style="background-image: url(https://scontent-arn2-1.xx.fbcdn.net/hphotos-prn2/v/t1.0-9/10857736_635785036554764_1430993853386636908_n.jpg?oh=cb3209f078c437457ee201d40c12ec6a&oe=57772349);">

    </div>
@stop