
@extends('layouts.index')

@section('content')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp">

        <div class="Sign-Up-Partner ">
            <div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
                <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
               
            <div class="flex-auto px-4 lg:px-10 py-10 pt-0 mt-60">
                <form action={{ route('create.partner')}} method="POST" id="add-partner-form">
                    @csrf
                    <div class="flex items-center mx-auto mt-4">
                        <h6 class="text-blueGray-400 text-lg mt-3 mb-6 font-bold uppercase">
                    Partner Information
                  </h6>
                    </div>
                  <div class="flex flex-wrap previous">
                    <div class="w-full lg:w-6/12 px-4">
                      <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                          Partner Name
                        </label>
                        <input type="text" name="name" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" required>
                      </div>
                    </div>
                    <div class="w-full lg:w-6/12 px-4">
                      <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                          Email address
                        </label>
                        <input type="email" name="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                      </div>
                    </div>
                    <div class="w-full lg:w-6/12 px-4">
                      <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                          Phone Contact
                        </label>
                        <input  name="phone" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" >
                      </div>
                    </div>
                    <div class="w-full lg:w-6/12 px-4">
                      <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                          Address
                        </label>
                        <input name="address" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                      </div>
                    </div>
                    <div class="flex items-center mx-auto mt-4" style="width: 200px;">
                        <button class="hover: bg-indigo-600 text-white font-bold py-2 px-6 rounded-3xl focus:outline-none focus:ring w-full ease-linear transition-all duration-150 text-3xl" onclick="Sumbit()">
                            Submit
                        </button> 
                    </div>
                  </div>
            
               
         
                  </div>
              
                </form>
              </div>
        </div>
    </div>
</div>

<style> 
     
    .navshade {
            background-image: url("{{asset('assets/img/navshade.png')}}");
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
    body{
        background-color: #060818 !important;
    }
    .previous.next{
        transition: ease 0.8s all;
    }
    .slide{
        transition: ease 0.8s all;
        position: relative;
        top: -200px;
    }
    </style>
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