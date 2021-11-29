
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
    .default-color{
    background-color:  #201f1f67;
    color: white;
    }
    .default-color-dark{
        background-color: #0a0a0ae8;
        color: white;
    }
    .main-active-text{
    color:  #e0b26c;

    }



    .this-sidebar{
        background-color: #161616;
    }
    .active{
        background-image: linear-gradient(120deg,  #d1ba80, #bc9945);
        color : black;
    }
    .payment
                {
                    border:1px solid #f2f2f2;
                    height:280px;
                    border-radius:20px;
                    /* background:#fff; */
                }
    .payment_header
               {
                   background:#bf9c48;
                   padding:20px;
                   border-radius:20px 20px 0px 0px;
                   
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


