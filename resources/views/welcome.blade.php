<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Istech</title>

    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">ISTECH</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ route('home') }}">Pagrindinis <span class="sr-only">(current)</span></a></li>
                <li><a href="{{ route('kategorija', ['visi-straipsniai']) }}">Visi straipsniai</a></li>
                <li><a href="{{ route('kategorija', ['istorijos']) }}">Istorijos</a></li>
                <li><a href="{{ route('kategorija', ['masinos']) }}">Mašinos</a></li>
                <li><a href="{{ route('kategorija', ['lektuvai']) }}">Lėktuvai</a></li>
                <li><a href="{{ route('kategorija', ['laivai']) }}">Laivai</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Daugiau <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<body>

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

    <div id="news" class="container">
        <div class="row">
            <div class="col-md-9">
                @foreach($straipsniai as $straipsnis)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">{{ $straipsnis->pavadinimas }}</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-6 col-md-4">
                                    <a href="#" class="thumbnail">
                                        <img src="{{ $straipsnis->photo }}" alt="...">
                                    </a>
                                </div>
                                <p>{{ $straipsnis->ivadas }}</p>
                                <div class="read-more">
                                    <a href="#">Skaityti daugiau</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div id="fb-col" class="col-md-3">
                <div class="fb-page" data-href="https://www.facebook.com/istorinetech" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                    <div class="fb-xfbml-parse-ignore">
                        <blockquote cite="https://www.facebook.com/istorinetech">
                            <a href="https://www.facebook.com/istorinetech">Istech</a>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>Kontaktai</h3>
                    <p>El. pastas</p>
                </div>
                <div class="col-md-4">
                    <h3>Kontaktai</h3>
                    <p>El. pastas</p>
                </div>
                <div class="col-md-4">
                    <h3>Kontaktai</h3>
                    <p>El. pastas</p>
                </div>
            </div>
        </div>
    </div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/lt_LT/sdk.js#xfbml=1&version=v2.5&appId=792962924158405";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>