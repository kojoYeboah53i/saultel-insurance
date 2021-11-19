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
                <div class="row">
                    <div class="col">
                      <div class="card bg-info">
                        <div class="card-body">
                            <div class="flex justify-between mb-5">
                                <span class="font-extrabold text-lg">Total Number of Subscribers</span>
                                <span class="">15%</span>
                            </div>
                    
            
                          <div class="flex justify-between mt-5">
                            <i class="fas fa-user fa-2x"></i>
                            <span class="users flex ">
                                145,000</span>
                                <span class="badge badge-light">April</span>
                             
                        </div>
            
                        </div>
                      </div>
                    </div>
                    <div class="col rounded-2xl">
                      <div class="card btn-success">
                        <div class="card-body">
                            <div class="flex justify-between mb-5">
                                <span class="font-extrabold text-lg">Total Paid Claims <br><span class="hide">for this</span></span>
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
                    <div class="col rounded-3xl ">
                        <div class="card bg-warning">
                            <div class="card-body">
                                <div class="flex justify-between mb-5">
                                    <span class="font-extrabold text-lg">Total Pending Claim Request</span>
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
          
                   
                  </div>
                  <h1>
                    <span class="text-gray-900 font-bold text-3xl">
                      Agents
                    </span>
                  </h1>
                <div class="widget-content mt-10">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th><div class="th-content">Subscriber</div></th>
                                    <th><div class="th-content">Treatment</div></th>
                                    <th><div class="th-content">Facility</div></th>
                                    <th><div class="th-content th-heading">Amount Paid</div></th>
                                    <th><div class="th-content th-heading">Status</div></th>
                                    <th><div class="th-content th-heading">Delete</div></th>
                                    <th><div class="th-content">Date</div></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="">
                                    <td class="text-white font-extrabold"><div class="td-content text-white font-extrabold text-xl">John Doe</div></td>
                                    <td class="text-white font-extrabold"><div class="td-conten text-white font-extrabold text-xl">Acanthamoeba </div></td>
                                    <td class="text-white font-extrabold"><div class="td-conten text-white font-extrabold text-xl">Korle Bu </div></td>
                                    <td><div>
                                        <span class="flex justify-center items-center">
                                         <a href="#" class=" hover:text-gray-100  mx-2  text-white font-extrabold text-xl">
                                        7,000 
                                        </a>
                                     </span></div></td>
                                    <td class="text-white font-extrabold"><div class="td-content pricing"><span class="text-white font-extrabold text-xl flex justify-center items-center">
                                        <a href="#" class=" hover:text-gray-100 mr-2 text-base text-white badge badge-success">
                                        Approved
                                        </a>
                                    </span></div></td>
                              
                                    <td><div>
                                        <span class="flex justify-center items-center">
                                        <a href="#" class="text-gray-400 hover:text-gray-100  ml-2">
                                            <i class="material-icons-round text-base text-white">delete_outline</i>
                                        </a>
                                        </span></div></td>
                                    <td><div class="td-content"><span class="badge text-white font-extrabold text-xl"> 11/09/2020</span></div></td>
                                </tr>
                    
                                <tr class="">
                                    <td class="text-white "><div class="td-content text-white  text-lg">Jane Doe</div></td>
                                    <td class="text-white "><div class="td-conten text-white  text-lg">Osteoarthritis </div></td>
                                    <td class="text-white "><div class="td-conten text-white  text-lg">Nyaho Clinic </div></td>
                                    <td class="text-white "><div class="td-content pricing"><span class="text-white font-extrabold text-lg flex justify-center items-center">
                                        <a href="#" class=" hover:text-gray-100 mr-2 text-base text-white">
                                            5,000
                                        </a>
                                    </span></div></td>
                                    <td><div>
                                       <span class="flex justify-center items-center">
                                        <a href="#" class=" hover:text-gray-100 badge badge-warning mx-2 text-base text-white">
                                            Pending
                                        </a>
                                    </span></div></td>
                                    <td><div>
                                        <span class="flex justify-center items-center">
                                        <a href="#" class="text-gray-400 hover:text-gray-100  ml-2">
                                            <i class="material-icons-round text-base text-white">delete_outline</i>
                                        </a>
                                        </span></div></td>
                                    <td><div class="td-content"><span class="badge text-white font-extrabold text-xl"> 2/10/2021</span></div></td>
                                </tr>
                            
        
                            </tbody>
                        </table>
                    </div>
                </div>
              </div>
                </main>
@endsection