@extends('layouts.index')

@section('content')
{{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> --}}
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp">


        
            <header class=" shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                  <h1 class="text-3xl font-bold text-gray-900">
                    Dashboard
                  </h1>
                </div>
              </header>
              <main>
                  
              <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8 flex-col">
            <a href="partner/service/add" type="button" class="text-xl font-bond text-white bg-indigo-600 hover:bg-indigo-900 py-2 px-4 rounded-xl"> Add Partner</a>

                <h1>list of service providers for dosh</h1>
              </div>
            </main>
@endsection