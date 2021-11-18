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
                
                <div class=" text-3xl text-white">
                    <header class="flex  items-center justify-between mx-auto py-4 px-6">
                        <div class="flex-col">
                        <h1 class="text-3xl font-bond mb-5">Pending Review</h1>

                            <div class="progress br-30">
                                <div class="progress-bar bg-success" role="progressbar" data-progressState="20" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>


                        </div>
                        <a href="/" type="button" class="text-xl font-bond text-white bg-green-600 hover:bg-green-900 py-2 px-4 rounded-xl"> Go back</a>
                
                    </header>
                </div>
      
             </div>
              </main>
@endsection