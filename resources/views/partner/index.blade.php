
@extends('layouts.index')

@section('content')

    <div class="min-h-full">

   <div class="max-w-full mx-auto">
 
       
   </div>
   


        <main>
            <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
              <!-- Replace with your content -->
              <div class="px-4 py-6 sm:px-0">
                <div class=" h-96">
                    <div class="analytics flex justify-between items-center">
                        <div class="first four up and down">
                            <div class="flex justify-between p-2">
                                <div class="flex-col">
                                    <div class="stats"></div>
                                    <div class="revenue"></div>
                                </div>


                                    <!-- claims chart here -->
                                <div class="claims-chart">
                                    

                                </div>

                            </div>


                                <!-- bottom div here -->
                            <div class="down-two"></div>
                        </div>
                            <!-- far right  -->
                        <div class="quick-action rounded-3xl flex-col">
                            <div class="w-full h-16 bg-gray-600 text-white font-bold text-2xl flex justify-center items-center mx-auto rounded-t-2xl">
                                Quick Action
                            </div>
                            <div class="w-1/4">
                              
                                <div class=" py-4 px-6">
            
                                    <nav>
                                        <ul class="flex-col p-1 justify-around items-center">
                                            <li class="mb-3 shadow-2xl p-1 rounded-2xl font-bold flex items-center mx-auto justify-center h-14 w-60 bg-gray-600 text-white ">Task</li>
                                            <li class="mb-3 shadow-2xl p-1 rounded-2xl font-bold flex items-center mx-auto justify-center h-14 w-60 bg-gray-600 text-gray-100 mt-5">Task 2</li>
                                            <li class="mb-3 shadow-2xl p-1 rounded-2xl font-bold flex items-center mx-auto justify-center h-14 w-60 bg-gray-600 text-gray-100 mt-5"> Task 3</li>
                                            <li class="mb-3 shadow-2xl p-1 rounded-2xl font-bold flex items-center mx-auto justify-center h-14 w-60 bg-gray-600 text-gray-100 mt-5"> Task 4</li>
                                       
                                        </ul>
                                    </nav>
                        
                                </div>
                                <div class="h-40">

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
              </div>
              <!-- /End replace -->
            </div>
          </main>
        </div>


  
     
   
      {{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script> --}}

@endsection

