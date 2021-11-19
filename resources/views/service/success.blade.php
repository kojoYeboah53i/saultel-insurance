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
                
                
                <div class=" text-3xl text-white mt-10">
                    <header class="flex  items-center justify-between mx-auto py-4 px-6">
                        <div class="flex-col" style="visibility: hidden">
                        <h1 class="text-3xl font-bond mb-5">Pending Review</h1>

                            <div class="progress br-30">
                                <div class="progress-bar bg-success" role="progressbar" data-progressState="20" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>


                        </div>
                        <a href="/" type="button" class="text-xl font-bond text-white bg-green-600 hover:bg-green-900 py-2 px-4 rounded-xl"> Go back</a>
                
                    </header>
                </div>

                <div class="container">
                    <div class="row">
                       <div class="col-md-6 mx-auto mt-5">
                          <div class="payment">
                             <div class="payment_header">
                                <div class="check"><i class="fa fa-check" aria-hidden="true"></i></div>
                             </div>
                             <div class="content">
                                <h1>Submission Success</h1>
                                <div class="flex-col justify-center items-center mx-auto mt-5" style="width:70%;">
            
                                        <div class="progress br-30">
                                            <div class="progress-bar bg-success" role="progressbar" data-progressState="20" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
            
                                        <h5 class=" font-bond mb-2">Pending Review</h5>
            
                                    </div>
                                {{-- <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. </p> --}}
                             </div>
                             
                          </div>
                       </div>
                    </div>
                 </div>
      
             </div>
              </main>

              <style type="text/css">

                
            
                .payment
                {
                    border:1px solid #f2f2f2;
                    height:280px;
                    border-radius:20px;
                    /* background:#fff; */
                }
               .payment_header
               {
                   background:#bf9c48;
                   padding:20px;
                   border-radius:20px 20px 0px 0px;
                   
               }
               
               .check
               {
                   margin:0px auto;
                   width:50px;
                   height:50px;
                   border-radius:100%;
                   text-align:center;
                    background:#fff;

               }
               
               .check i
               {
                   vertical-align:middle;
                   line-height:50px;
                   font-size:30px;
               }
            
                .content 
                {
                    text-align:center;
                }
            
                .content  h1
                {
                    font-size:25px;
                    padding-top:25px;
                }
            
                .content a
                {
                    width:200px;
                    height:35px;
                    color:#fff;
                    border-radius:30px;
                    padding:5px 10px;
                    background:rgba(255,102,0,1);
                    transition:all ease-in-out 0.3s;
                }
            
                .content a:hover
                {
                    text-decoration:none;
                    background:#000;
                }
               
            </style>
@endsection