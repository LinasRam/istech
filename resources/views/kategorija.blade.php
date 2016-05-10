@extends('layouts.main')

@section('title')
    {{ ucfirst($title) }}
@endsection

@section('main_photo')
    <div class="jumbotron" style="background-image: url({{ $photo }});">
        <div class="container">
            <div id="Header">
                <div class="Background">
                    <h1>{{ ucfirst($title) }}</h1>
                </div>
                <div class="Foreground">
                    <h1>{{ ucfirst($title) }}</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('main_content')
    @foreach($straipsniai as $straipsnis)
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">{{ $straipsnis->pavadinimas }}</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-6 col-md-4">
                        <a href="{{ route('straipsnis', [$straipsnis->kategorija, $straipsnis->url]) }}" class="thumbnail">
                            <img src="{{ $straipsnis->photo }}" alt="...">
                        </a>
                    </div>
                    <p>{{ $straipsnis->ivadas }}</p>
                    <div class="read-more">
                        <a href="{{ route('straipsnis', [$straipsnis->kategorija, $straipsnis->url]) }}">Skaityti daugiau</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <div class="center">
        {!! $straipsniai->render() !!}
    </div>
@endsection