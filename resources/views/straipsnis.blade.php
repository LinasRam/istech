@extends('layouts.main')

@section('title')
    {{ $straipsnis->pavadinimas }}
@endsection

@section('main_photo')
    <div class="jumbotron" style="background-image: url({{ $straipsnis->photo }});">
        <div class="container">
            <h1>{{ $straipsnis->pavadinimas }}</h1>
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