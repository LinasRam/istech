<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Istech</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

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
            <a class="navbar-brand" href="{{ route('home') }}">ISTECH</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="{{ route('home') }}">Pagrindinis <span class="sr-only">(current)</span></a></li>
                <li class="active"><a href="{{ route('straipsniai') }}">Visi straipsniai</a></li>
                <li><a href="{{ route('istorijos') }}">Istorijos</a></li>
                <li><a href="{{ route('masinos') }}">Mašinos</a></li>
                <li><a href="{{ route('lektuvai') }}">Lėktuvai</a></li>
                <li><a href="{{ route('laivai') }}">Laivai</a></li>
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

<div class="jumbotron" style="background-image: url(https://scontent-arn2-1.xx.fbcdn.net/hphotos-prn2/v/t1.0-9/10857736_635785036554764_1430993853386636908_n.jpg?oh=cb3209f078c437457ee201d40c12ec6a&oe=57772349);">
    <div class="container">
        <h1>Straipsnio pavadinimas</h1>
    </div>
</div>

<div id="news" class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-body">
                    <p>1939 metais amerikiečių kariuomenė paskelbė konkursą transporto priemonei, kuri turėjo būti tinkama naudoti įvairiomis sąlygomis, pavežti 270 kilogramų, būti stačiakampio formos ir turėti mažiausiai tris sėdynes. Kompanija "Willys-Overland" sukūrė galutinį džipo modelį ir pirmasis jų iš gamyklos išriedėjo 1941 metų gruodį. Įspūdinga ir novatoriška transporto priemonė galėjo prisitaikyti prie bet kokių transporto poreikių, tai suteikė jai oficialų G. P. (General Purpose) pavadinimą. Greitai transporto priemonė tapo žinoma kaip "Jeep", o dėl šio vardo kilmės egzistavo daugybė versijų. Džipas varomas keturiais ratais, neturėjo šarvo ir todėl galėdavo pasiekti didesnį nei 100 km/h greitį ir su pilnu baku kuro įveikti 500 km. Džipas tapo amerikiečių kariuomenės simboliu, kartu su kokakola ir kramtomąja guma. Džipų naudojimas truko iki pat 1981 metų, kai juos pakeitė hameriai (Hummer).</p>
                </div>
            </div>
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