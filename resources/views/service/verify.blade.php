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
                <header class="flex  items-center justify-between mx-auto py-4 px-6">
                    <h1 class="text-3xl font-bond">Verify One Time Pin</h1>
                    <a href="{{ route('create.new-claim') }}" type="button" class="text-xl font-bond text-white bg-green-600 hover:bg-green-900 py-2 px-4 rounded-xl"> Go back</a>
            
                </header>
              </div>

                <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8 flex-col">
                    <div class="flex-col   items-center justify-between mx-auto py-4 px-6">
                        <h1 class="flex justify-center text-3xl font-bond">Enter OTP</h1>
                        <div class=" p-2 w-1/2 items-center mx-auto">
                            <form action="" method="post" class="flex justify-between">
                                <input name="first" type="text" style="width:70px; height:10vh; border:10px solid #bf9c48" class="">
                                <input name="second"  type="text" style="width:70px; height:10vh; border:10px solid#bf9c48">
                                <input name="third" type="text" style="width:70px; height:10vh; border:10px solid#bf9c48 ; ">
                                <input name="fouth" type="text" style="width:70px; height:10vh; border:10px solid#bf9c48">
                            </form>
                        </div>
                     <div class="flex justify-between p-2 w-1/2 items-center mx-auto mt-10">
                     <a href="{{ route('new-claim-request') }}" type="button" class="text-xl btn btn-block font-bond text-white  py-4 px-6 rounded-xl" style="background:#3d2d07 "> verify</a>
                     <a href="#" type="button" class="text-xl btn font-bond text-white  py-4 px-6 rounded-xl" style="visibility:hidden "> verify</a>
                     <a href="#" type="button" class="text-xl btn btn-block font-bond text-white   py-4 px-4 rounded-xl" style="background: #bf9c48"> resend</a>
                    </div>

                    </div>
                </div>
              </main>
@endsection