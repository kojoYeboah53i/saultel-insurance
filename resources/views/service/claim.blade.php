    
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

              <div class="w-8/12 mx-auto py-6 sm:px-6 lg:px-8 flex-col container">
                <!-- Replace with your content -->
                <div class="px-4 py-6 sm:px-0">
                  <div class="overflow-auto lg:overflow-visible ">
                    <header class="flex  items-center justify-between mx-auto py-4 px-6">
                        <h1 class="text-3xl font-bond">Service Request</h1>
                        <a href="/" type="button" class="text-xl font-bond text-white bg-green-600 hover:bg-green-900 py-2 px-4 rounded-xl"> Go back</a>
                
                    </header>

                    <div class="max-w-7xl mx-auto py-4 px-3" >
                       
                        <div class=" text-2xl text-white mb-5">
                            <h2>Search with patient's policy no.</h2>
                            </div>
                    <div class="text-center mx-auto flex justify-around w-11/12">

                        <div class="p-2" style=" height: 30vh;">
                            <!-- Replace with your content -->
                         

                              <form action="{{ route('create.search.patient')}}" method="POST" id="add-partner-form">
                                @csrf
                                    <div class="form-group">
                                      <div class="flex">
                                      <input type="text" class="form-control" name="policyNumber" id="policyNumber" placeholder="policy number">
                                      <button type="submit" class="search-form flex items-center py-1 px-4 bg-green-400 rounded"> 
                                        <i class="material-icons-round text-base text-white">search</i>
                                      </button>
                                </div>
                                </div>

                       

                             </form>
                            </div>
                            <!-- /End replace -->

                   

                    <div class="flex-col text-white  items-center bg-black py-2 px-6  mx-auto rounded-xl"  style="width: 50%;">
                        <div class="mb-10 text-white text-3xl">
                            <h2>Patient's Insurance Summary</h2>
                        </div>
                        <div class="form-group flex-col justify-start items-start ">
                            <label class=" flex justify-start" for="">Policy Number</label>
                            <input type="text" value="PD04553" class="form-control" readonly>
                        </div>
                        <div class="form-group flex-col justify-start items-start ">
                            <label class=" flex justify-start" for="">Total Claim for 2021</label>
                            <input type="text" value="40053" class="form-control" readonly>
                        </div>
                        <div class="form-group flex-col justify-start items-start ">
                            <label class=" flex justify-start" for="">Cover Balance</label>
                            <input type="text" value="20053" class="form-control" readonly>
                        </div>
                        <div class="form-group flex-col justify-start items-start ">
                            <label class=" flex justify-start" for="">Insurance Plan</label>
                            <input type="text" value="basic" class="form-control" readonly>
                        </div>
                        <div class="form-group flex-col justify-start items-start ">
                            <label class=" flex justify-start" for="">Last Visited</label>
                            <input type="text" value="23/08/2021" class="form-control" readonly>
                        </div>
                      </div>
                  </div>
                </div>

            </div>
        <div class="flex items-center justify-end mb-10">

        <a href="{{ route('verify-otp') }}" type="button" class="text-xl font-bond text-white bg-green-600 hover:bg-green-900 py-2 px-4 rounded-xl"> Proceed</a>
    </div>

        </div>
            </main>


            <script>
                search-form
            </script>










@endsection
