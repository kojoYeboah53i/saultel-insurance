@extends('layouts.app')
@section('title')
    {{'Dashboard'}}
@endsection
@section('content')


    <div class="main-content flex justify-between rounded-3xl">

    <!-- Main -->
    <main class="holygrail-main col-md px-6 py-2  rounded-3xl">
 
        <div class="row">
            <div class="col">
              <div class="card bg-info">
                <div class="card-body">
                    <div class="flex justify-between mb-5">
                        <span class="font-extrabold text-lg">Total Subscribers Visits</span>
                        <span class="">12%</span>
                    </div>
            
    
                  <div class="flex justify-between mt-5">
                    <i class="fas fa-chart-line fa-2x"></i>
                    <span class="users flex ">
                        45,000</span>
                        <span class="badge badge-light">April</span>
                     
                </div>
    
                </div>
              </div>
            </div>
            <div class="col rounded-2xl">
              <div class="card btn-success">
                <div class="card-body">
                    <div class="flex justify-between mb-5">
                        <span class="font-extrabold text-lg">Total Paid Claims current month</span>
                        <span class="">22%</span>
                    </div>
            
    
                  <div class="flex justify-between mt-5">
                    <i class="fas fa-chart-line fa-2x"></i>
                    <span class="users flex ">
                        15,000</span>
                        <span class="badge badge-light">April</span>
                     
                </div>
    
                </div>
              </div>
            </div>
            <div class="col rounded-3xl shadow-lg">
                <div class="card bg-danger">
                    <div class="card-body">
                        <div class="flex justify-between mb-5">
                            <span class="font-extrabold text-lg">Total Declined Claim Request</span>
                            <span class="">5%</span>
                        </div>
                
        
                      <div class="flex justify-between mt-5">
                        <i class="fas fa-chart-line fa-2x"></i>
                        <span class="users flex ">
                            4,000</span>
                            <span class="badge badge-light">April</span>
                         
                    </div>
        
                    </div>
                </div>
              </div>
              <div class="col">
                <div class="card bg-warning">
                    <div class="card-body">
                        <div class="flex justify-between mb-5">
                            <span class="font-extrabold text-xl">Total Number of Current Staff</span>
                            <span class=""></span>
                        </div>
                
        
                      <div class="flex justify-between mt-5">
                        <i class="fas fa-chart-line fa-2x"></i>
                        <span class="users flex ">
                            100</span>
                            <span class="badge badge-light">April</span>
                         
                    </div>
        
                    </div>
                </div>
              </div>
          </div>
    </main>




  


   </div>

   <style>
    .main-content{
     position: absolute;
     top: 7rem;
     left: 15.8rem;
     height: 100vh;
     width: 80vw;
     /* margin-top: -20px; */
    }

 
   </style>















@endsection