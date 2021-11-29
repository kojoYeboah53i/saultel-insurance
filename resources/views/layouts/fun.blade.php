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

<body>
<div class="w-full flex flex-col sm:flex-row flex-wrap sm:flex-nowrap py-4 flex-grow">
    <!-- fixed-width -->
    <div class="w-fixed w-full flex-shrink flex-grow-0 ">
        <div class="sticky top-0 p-4 w-full " style="background-color: #161616">
            <!-- nav goes here -->
                <div class="flex items-center justify-between" style=" height: 7.2rem;">
                  <div class="flex items-center">
                    <div class="flex-shrink-0">
                      {{-- <img class="h-8 w-8" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Workflow"> --}}
                   
                      @if( $user->role_id == 1 || $user->role_id == 2 )
                      <a href="/" class="text-white text-2xl font-bold">
                      <img src="{{ asset('assets/img/app-logo.png') }}" alt="" class="rounded-3xl w-60 ">
                      </a>
                      @endif
                      @if( $user->role_id == 3 )
                      <a href="/" class="text-white text-2xl font-bold">
                      <img src="{{ asset('assets/img/nyaho.jpg') }}" alt="" class="rounded-full w-32">
                      </a>
                      @endif
                    </div>
                  </div>
                
                       <!-- right -->
                  
                   <div class=" inline-block text-left">
                       <div class="admin flex items-center">
                           <div class=" bg-white rounded-full p-2 mr-2">
                               <img src="https://images.unsplash.com/photo-1518806118471-f28b20a1d79d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" alt="" class="rounded-full w-8 h-8">
                           </div>
                           <div class=" text-white">
                               <h1>    {{ Auth::user()->name }}  </h1>
                           </div>
                
                       </div>
                     
                     
                       <div class="hidden origin-top-right absolute right-0 mt-2 w-40 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                         <div class="py-1" role="none">
                           <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                           <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Your Profile</a>
                           <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Settings</a>
                           <form method="POST" action="{{ route('logout') }}
                           
                           " role="none" class="" id="logout-form">
                              @csrf
                             <button type="submit" class="text-gray-700 block w-full text-left px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-3
                             " onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                             >
                              
                                <div class="flex justify-between">
                                    Sign Out
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> 
                                
                
                                </div>
                             </button>
                           </form>
                         </div>
                       </div>
                     </div>
                  </div>
                
        </div>
    </div>
    <!-- end navbar -->
    <main role="main" class="grid grid-cols-3 w-full flex-grow pt-1 px-3">
        <!-- fluid-width: main content goes here -->
        <div class="sidebar">
            <div class=" sidebar-full   transition ease-in duration-150 h-screen flex-col items-center py-2 px-4 " style="background-color: #161616">

                <nav class="nav flex items-center w-full ">
                   <ul class="list-reset w-full">
             
                       {{-- Analytics --}}
                       <li class="py-4 flex items-center justify-between px-4">
                           <a href="/" class="text-white ">
                               <i class="fas fa-chart-line fa-2x"></i>
                              
            
                           </a>
                           <a href="/" class="text-white">
                               <span class="text-2xl mx-auto"> Analytics</span>
                           </a>
                       </li>
                      @if( $user->role_id == 2  )
                      <li class="py-4 flex items-center justify-between px-4">
                       <a href="{{ route('partner.claims') }}" class="{{ $page_name === 'partners' ? 'active' : 'inactive' }} text-white flex justify-between items-center w-40">
                           {{-- <i class="fas fa-account-balance fa-2x"></i> --}}
                           <span class="material-icons">account_balance</span>
                       </a>
                       <a href="{{ route('partner.claims') }}" class="text-white">
                           <span class=" text-2xl mx-auto ">Claims</span>
                       </a>
                   </li>
                 
                       <li class="py-4 flex items-center justify-between px-4">
                           <a href="{{ route('partner.policy') }}" class="text-white flex justify-between items-center w-40">
                               <span class="material-icons-outlined">
                                   dns
                                   </span>
            
                           </a>
                           <a href="{{ route('partner.policy') }}" class="text-white">
                               <span class=" text-2xl">Policy</span>
                           </a>
            
                       </li>
               
                       <li class="py-4 flex items-center justify-between px-4">
                           <a href="/partner/service" class="text-white flex justify-between items-center w-40">
                               <span class="material-icons-outlined">
                                   local_hospital
                                   </span>
            
                           </a>
                           <a href="{{ route('partner.service') }}" class="text-white">
                               <span class=" text-2xl">Service Providers</span>
                           </a>
            
                       </li>
                       <li class="py-4   flex items-center justify-between px-4">
                           <a href="{{ route('partner.agents') }}" class="text-white  flex justify-between items-center w-40">
                                    <span class="material-icons-outlined">
                                       support_agent
                                       </span>
                           </a>
                           <a href="{{ route('partner.agents') }}" class="text-white">
                               <span class=" text-2xl mx-auto">Agents</span>
                           </a>
                       </li>
                       <li class="py-4   flex items-center justify-between px-4">
                           <a href="{{ route('partner.subscribers') }}" class="text-white  flex justify-between items-center w-40">
                                    <i class="fas fa-users fa-2x"></i>
                           </a>
                           <a href="{{ route('partner.subscribers') }}" class="text-white">
                               <span class=" text-2xl mx-auto">Subscribers</span>
                           </a>
                       </li>
                       @endif
                       <li class="py-4   flex items-center justify-between px-4">
                           <a href="#" class="text-white  flex justify-between items-center w-40">
                               <i class="fas fa-cog fa-2x"></i>
                           </a>
                           <a href="#" class="text-white">
                               <span class=" text-2xl mx-auto">Settings</span>
                           </a>
                       </li>
            
                
                       <li class="py-4   flex items-center justify-between px-4">
                           <a href="#" class="text-white flex justify-between items-center w-40">
                               <i class="fas fa-sign-out-alt fa-2x"></i>
                           </a>
                           <a href="#" class="text-white">
                               <span class="text-2xl mx-auto"> Logout</span>
                           </a>
                       </li>
                   </ul>
                
                </nav>
            
               
            
            </div>
        </div>
        main content goes here
        <div>
            @yield('content')
        </div>
        <div>
            @yield('rightbar')
        </div>

    </main>
    <div class="w-fixed w-full flex-shrink flex-grow-0 px-2">
        <!-- fixed-width -->
        <div class="flex sm:flex-col px-2">
            <!-- sidebar goes here -->
            

        </div>
    </div>
</div>
<footer class="bg-black mt-auto">
    ...
    footer
</footer>

  
<style>
    @media (min-width: 640px) {
    .w-fixed {
        flex: 0 1 230px;
        min-width: 230px;
    }
}
</style>

</body>
</html>
