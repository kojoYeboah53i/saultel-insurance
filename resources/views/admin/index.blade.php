
@extends('layouts.index')

@section('content')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

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


    <style>
     
        .navshade {
            background-image: url('assets/img/navshade.png');
            background-repeat: no-repeat;
            width: 100vw;
            height: 2.2rem;
            background-size: 100% 100%;
            z-index: 1;
        }
        .sidebar-slim{
            width: 5rem;
        }
        .sidebar{
            width: 18rem;
            transition: all 0.8s ease;
        }
        .dashboard{
            width: 92%;
            transition: all 0.8s ease;
        }
        .main-container{
            display: block;
            left: 6%;
            padding: 10px;
        }
        .quick-action{
            background-image: linear-gradient(120deg, #d8e07f, #7e6b1d);
            border-radius: 25px;
        }
        *{
            font-size: small;
        }
        [x-cloak] {
        display: none;
      }
  
      .line {
        background: repeating-linear-gradient(
          to bottom,
          #eee,
          #eee 1px,
          #fff 1px,
          #fff 8%
        );
      }
      .tick {
        background: repeating-linear-gradient(
          to right,
          #eee,
          #eee 1px,
          #fff 1px,
          #fff 5%
        );
      }
    </style>
      <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

@endsection

