<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <meta charset="utf-8">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>

    <link rel="stylesheet" href="{!! asset('css/farbtastic.css') !!}">
    <script type="text/javascript" src="{!! asset('js/farbtastic.js') !!}"></script>

    <link rel="stylesheet" href="{!! asset('css/admin2.css') !!}">
    <script type="text/javascript" src="{!! asset('js/admin2.js') !!}"></script>
</head>
<body class="blue-grey lighten-4">


        <div class="row">
            <div class="col s12 m12 l12 teal darken-2">
                @include('admin.layouts.navigation')
            </div>
        </div>

        <div class="row">
            <div class="col l12 blue-grey lighten-4">
                @yield('container')
            </div>
        </div>

</body>
</html>