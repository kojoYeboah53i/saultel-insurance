    
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
                <!-- Replace with your content -->
                <div class="px-4 py-6 sm:px-0">
                  <div class="overflow-auto lg:overflow-visible ">
                    <header class="flex  items-center justify-between mx-auto py-4 px-6">
                        <h1 class="text-3xl font-bond">New Claim Request</h1>
                        <a href="/" type="button" class="text-xl font-bond text-white bg-green-600 hover:bg-green-900 py-2 px-4 rounded-xl"> Go back</a>
                
                    </header>

                    <div class="container text-center mx-auto" style="width: 50%">
                        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
                            <!-- Replace with your content -->
                            <div class=" text-2xl text-white mb-5">
                                    <h2>Search with patient's policy no.</h2>
                            </div>
                            {{-- <div class="px-4 py-6 sm:px-0"> --}}
                                <div>

                              <form action="{{ route('create.partner')}}" method="POST" id="add-partner-form">
                                @csrf
                                  {{-- <div class="form-group w-full"> --}}
                                    <div class="form-group">
                                      <div class="flex">
                                      <input type="text" class="form-control" name="policyNumber" id="policyNumber" placeholder="policy number">
                                      <button class="flex items-center py-1 px-4 bg-green-400 rounded"> 
                                        <i class="material-icons-round text-base text-white">search</i>
                                      </button>
                                </div>
                                </div>

                       

                                {{-- <div class="w-1/2 text-center mx-auto">
                                  <button type="submit" class="py-2 text-white text-2xl btn btn-block bg-green-400 hover:bg-green-500">Search</button>
                                </div> --}}
                             </form>
                            </div>
                            <!-- /End replace -->
                          {{-- </div> --}}

                    </div>
                  </div>
                </div>
            </div>
            </main>













@endsection
