@extends('layouts.fun')

@section('content')
{{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> --}}


        <div class="w-full" style="height: 40vh; background-color:yellow;">
            <div style="display:flex; justify-content:center; justify-self:center; align-item:center; margin:auto">
 
            <div style="height: 20vh; width:20vw; background-color:red">

            </div>
        </div>
        <div style="display:flex; justify-content:center; justify-self:center; align-item:center; margin:auto">
 
            <div style="height: 20vh; width:20vw; background-color:green">
                <div class="text-white text-2xl flex justify-center">unfinished</div>
            </div>
        </div>

        </div>
      
                  <div class="text-2xl text-white absolute top-10 right-1">Testing responsiveness</div>
                <main >

                {{-- </main> --}}
                  <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8 flex-col">
              
                <a href="{{ route('partner.policy.add') }}" type="button" class="text-xl font-bond text-white bg-indigo-600 hover:bg-indigo-900 py-2 px-4 rounded-xl"> Add Policy</a>

                <h1>list of policies for dosh</h1>
              </div>
            </main>
@endsection