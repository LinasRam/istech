<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Registracija</title>

    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('adminstyle.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-centered">
            <form action="{{ route('signup') }}" method="post">
                <h2 class="form-signin-heading">Priregistruokite naują vartotoją</h2>
                <div class="form-group">
                    <label for="name">Prisijungimo vardas:</label>
                    <input class="form-control" type="text" name="name" id="name">
                </div>
                <div class="form-group">
                    <label for="email">El. paštas:</label>
                    <input class="form-control" type="email" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="password">Slaptažodis:</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Užregistruoti</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/lt_LT/sdk.js#xfbml=1&version=v2.5&appId=792962924158405";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>