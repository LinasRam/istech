<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

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
                <li><a href="{{ route('kategorija', ['visi-straipsniai']) }}">Visi straipsniai</a></li>
                <li><a href="{{ route('kategorija', ['istorijos']) }}">Istorijos</a></li>
                <li><a href="{{ route('kategorija', ['mašinos']) }}">Mašinos</a></li>
                <li><a href="{{ route('kategorija', ['lėktuvai']) }}">Lėktuvai</a></li>
                <li><a href="{{ route('kategorija', ['laivai']) }}">Laivai</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Daugiau <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Apie mus</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<body>

@yield('main_photo')

<div id="news" class="container">
    <div class="row">
        <div class="col-md-9">
            @yield('main_content')
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
                <p>Facebook</p>
                <p>El. paštas</p>
            </div>
            <div class="col-md-4">
                <h3>Daugiau</h3>
                <p>Apie mus</p>
            </div>
        </div>
        <div class="row" id="copyright">
            <p>© 2016</p>
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/lt_LT/sdk.js#xfbml=1&version=v2.5&appId=792962924158405";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<script>
    $(document).ready(function(){
        var title = document.title;
        if(title == 'Istech')
            $("a:contains('Pagrindinis')").parent().addClass('active');
        else $("a:contains('"+title+"')").parent().addClass('active');
    });

    $('#search-box').autocomplete({
        source:"{{ route('autocomplete') }}",
        minLength:3,
        select: function(event,ui){
            var word = ui.item.value;
            window.location.href = "{{ route('paieska') }}" + "/" + word;
        }
    });

    $('#search-button').on('click', function(){
        window.location.href = "{{ route('paieska') }}" + '/' + $('#search-box').val();
    });

    $('#search-box').keypress(function (e) {
        if(e.which == 13){
            $('#search-button').click();
        }
    });
</script>

@yield('scripts')

</body>
</html>