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
            <div class="item active">
                <img class="first-slide" src="https://scontent-arn2-1.xx.fbcdn.net/hphotos-prn2/v/t1.0-9/10857736_635785036554764_1430993853386636908_n.jpg?oh=cb3209f078c437457ee201d40c12ec6a&oe=57772349" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Sveiki atvyke i ISTECH</h1>
                        <p>IsTech – tai puslapis skirtas besidomintiems istorija, aviacija, bei karine ir civiline technika.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Apie mus</a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="second-slide" src="https://scontent-arn2-1.xx.fbcdn.net/hphotos-prn2/v/t1.0-9/10292163_521131928020076_5343989860424625251_n.jpg?oh=4951b75935810352e2f329abc6276f79&oe=577B1598" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Visada idomus straipsniai</h1>
                        <p>Straipsniai apie masinas, lektuvus, laivus.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Skaityti straipsnius</a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="third-slide" src="https://scontent-arn2-1.xx.fbcdn.net/hphotos-xla1/v/t1.0-9/10365779_533169826816286_7247531531603791227_n.jpg?oh=ccb614150d0179f3be9133c900fe2381&oe=57757267" alt="Third slide">
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