@include('inc.function')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('PlatFormOwner') }}</title> --}}
    <title>
        @yield('title')
    </title>
    <link rel="icon" type="image/x-icon" href="{{asset('storage/img/favicon.ico')}}"/>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    @include('inc.styles')  
    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
</head>

<body {{ ($has_scrollspy) ? scrollspy($scrollspy_offset) : '' }} class=" {{ ($page_name === 'alt_menu') ? 'alt-menu' : '' }} {{ ($page_name === 'error404') ? 'error404 text-center' : '' }} {{ ($page_name === 'error500') ? 'error500 text-center' : '' }} {{ ($page_name === 'error503') ? 'error503 text-center' : '' }} {{ ($page_name === 'maintenence') ? 'maintanence text-center' : '' }}">
    
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->
        <div class="fixed">
            @include('inc.nav')
        </div>
      
    
        <!--  BEGIN MAIN CONTAINER  -->

            <div class="overlay"></div>
            <div class="search-overlay"></div>
            @include('inc.sideba')

    
            <!--  BEGIN CONTENT PART  -->
    
                @yield('content')
    
             
            <!--  END CONTENT PART  -->
    


    <style>
        body {
            background-color: #f5f5f5;
        }
    </style>
    @include('inc.scripts')


    <script>
        const user = document.querySelector('.admin');
        const menucontent = document.querySelector('.origin-top-right');

    user.addEventListener('click', () => {
    menucontent.classList.toggle('hidden');
    // document.querySelector('.navigation').classList.toggle('is-active');
    });

 
    //  user.onmouseout = function() {
    //     menucontent.classList.add('hidden');
    //  }

    //  user.onmouseover = function() {
    //     menucontent.classList.remove('hidden');
    //  }
    </script>

</body>
</html>