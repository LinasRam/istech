@extends('layouts.main')

@section('title')
    Paieška
@endsection

@section('main_photo')
    <div class="jumbotron" style="background-image: url('https://scontent-arn2-1.xx.fbcdn.net/v/t1.0-9/10857736_635785036554764_1430993853386636908_n.jpg?oh=e16a1ae9affbc84eee153eb7d2a23b9d&oe=579EB049');">
        <div class="container">
            <div id="Header">
                <div class="Background">
                    <h1>Paieška</h1>
                </div>
                <div class="Foreground">
                    <h1>Paieška</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('main_content')
    <div class="input-group">
        <input id="search-box" type="text" class="form-control" placeholder="Ieškokite straipsnių">
        <span class="input-group-btn">
            <button id="search-button" class="btn btn-primary" type="button">Ieškoti</button>
        </span>
    </div>
    @if(!collect($straipsniai)->isEmpty())
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
    @else
        <h2>Rezultatų nėra</h2>
    @endif
@endsection