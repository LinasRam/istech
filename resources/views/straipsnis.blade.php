@extends('layouts.main')

@section('title')
    {{ $straipsnis->pavadinimas }}
@endsection

@section('main_photo')
    <div class="jumbotron" style="background-image: url({{ $straipsnis->photo }});">
        <div class="container">
            <div id="Header">
                <div class="Background">
                    <h1>{{ $straipsnis->pavadinimas }}</h1>
                </div>
                <div class="Foreground">
                    <h1>{{ $straipsnis->pavadinimas }}</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('main_content')
    <div class="panel panel-default">
        <div class="panel-body">
            <p>{{ $straipsnis->tekstas }}</p>
        </div>
    </div>
@endsection