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
    <link rel="icon" type="image/x-icon" href="{{asset('assets/img/app-logo.png')}}"/>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp">

    <!-- Styles -->
    @include('inc.styles')  
    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>

<body  class=" {{ ($page_name === 'alt_menu') ? 'alt-menu' : '' }} {{ ($page_name === 'error404') ? 'error404 text-center' : '' }} {{ ($page_name === 'error500') ? 'error500 text-center' : '' }} {{ ($page_name === 'error503') ? 'error503 text-center' : '' }} {{ ($page_name === 'maintenence') ? 'maintanence text-center' : '' }}">
    <!-- BEGIN LOADER -->
    <div id="load_screen"> 
        <div class="loader">
         <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>

    <!--  END LOADER -->

    <div class="h-screen"> 

            @include('inc.nav')
      
    
        <!--  BEGIN MAIN CONTAINER  -->
        <div class="grid grid-cols-2 gap-4">
            <div class="sidebar-div">
                @include('inc.sideba')

            </div>
            <!--  BEGIN CONTENT PART  -->
            
                <div class="bg-indigo-600 py-6 px10">
                    @yield('content')
                </div>
    
             
            <!--  END CONTENT PART  -->
    </div>
</div>
  
    @include('inc.script')


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


