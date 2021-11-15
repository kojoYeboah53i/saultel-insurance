
@extends('layouts.index')

@section('content')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
{{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"> --}}

<header class="bg-white shadow">
  <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
    <h1 class="text-3xl font-bold text-gray-900">
      Dashboard
    </h1>
  </div>
</header>

<main>
  <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    <!-- Replace with your content -->
    <div class="px-4 py-6 sm:px-0">
      <div class="border-4 border-dashed border-gray-200 rounded-lg h-96">
        
        <div class="Sign-Up-Partner p-4 bg-white">
          <div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
              <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
             <div class="container w-4/12 bg-pink-500 p-2">
               <div class="flex-col w-10/12 bg-indigo-500 p-2" >
                 <div><input type="text"></div>
                  <button class="button py-1 px-10 bg-red-500"> submit</button>
               </div>
             </div>
      
  </div>
</div>
</div>
      </div>
    </div>
    <!-- /End replace -->
  </div>
</main>



    <script>
     
        function next(){

            previous = document.querySelector(".previous");
            next = document.querySelector(".next");
            previous.classList.add("hidden");
            next.classList.remove("hidden");
            next.classList.add("slide");
            // previous.style.transform = "translateX(-100%)";
            // next.style.transform = "translateY(100%)";
        }
      
        
        function Sumbit(){
             document.getElementById('add-partner-form').submit();
        }
    </script>
    @endsection