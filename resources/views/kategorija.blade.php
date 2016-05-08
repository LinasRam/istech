@extends('layouts.main')

@section('title')
    {{ ucfirst($title) }}
@endsection

@section('main_photo')
    <div class="jumbotron" style="background-image: url(https://scontent-arn2-1.xx.fbcdn.net/hphotos-prn2/v/t1.0-9/10857736_635785036554764_1430993853386636908_n.jpg?oh=cb3209f078c437457ee201d40c12ec6a&oe=57772349);">

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
@endsection