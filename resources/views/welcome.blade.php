@extends('layouts.main')

@section('title')
    Istech
@endsection

@section('main_photo')
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active" style="background-image: url('https://scontent-frt3-1.xx.fbcdn.net/v/t1.0-9/10857736_635785036554764_1430993853386636908_n.jpg?oh=e16a1ae9affbc84eee153eb7d2a23b9d&oe=579EB049');">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Sveiki atvykę į ISTECH</h1>
                        <p>IsTech – tai puslapis skirtas besidomintiems istorija, aviacija, bei karine ir civiline technika.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Apie mus</a></p>
                    </div>
                </div>
            </div>
            <div class="item" style="background-image: url('https://scontent-arn2-1.xx.fbcdn.net/v/t1.0-9/1625653_476923489107587_2050337305_n.jpg?oh=8ca5936f03affbbd881c80f9a1bd2e15&oe=57ADCDE9');">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Visada idomūs straipsniai</h1>
                        <p>Straipsniai apie mašinas, lėktuvus, laivus.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Skaityti straipsnius</a></p>
                    </div>
                </div>
            </div>
            <div class="item" style="background-image: url('https://scontent-arn2-1.xx.fbcdn.net/v/t1.0-9/1903022_498848490248420_1975426505_n.jpg?oh=cb50cbf7f0f5d32ae9506b6387fc6ef3&oe=57AE3F3E');">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Sekite mus facebook'e</h1>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Facebook</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
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