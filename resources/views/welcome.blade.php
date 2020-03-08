<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Wazi</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                    @endif
                </div>
            @endif
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div><!--for styling-->
                <div class="col-md-6 jumbotron">
                    <h1>MAIN DASHBOARD</h1>
                </div>
                <div class="col-md-3"></div><!--for styling-->
            </div>
            <div class="row">
                <div class="col-md-3">
                    <button>ADMIN</button>
                </div>
                <div class="col-md-6">
                </div>
                <div class="col-md-3">
                    <button>THERAPIST</button>
                </div>
            </div>
        </div>
    </body>
</html>
