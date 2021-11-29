
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        @yield('title')
    </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">


    @include('inc.styles')
    

</head>
<body class="g-sidenav-show">

            @yield('content')

        

            @include('inc.scripts')
<style>
    body{
        background-color: #373737;
    }
    .main-data{
     position: absolute;
     top: 7rem;
     left: 15.8rem;
     height: 100vh;
     width: 80vw;
     background: #fff;
    }

    .this-sidebar{
        background-color: #161616;
    }
    .active{
        background-image: linear-gradient(120deg,  #d1ba80, #bc9945);
        color : black;
    }

    @media only screen and (max-width: 720px) {
        .this-sidebar{
        background-color: #161616;
    }
    
    }
</style>

@include('inc.custom')

</body>
</html>


