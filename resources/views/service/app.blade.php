    
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
    <div class="col flex justify-between">

    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8 flex-col">
        <div class="container-fluid">

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
    </div>
    <div class="col w-full  mt-10" style="">
        <div class="widget widget-chart-one">
            <div class="widget-heading ">
                <h5 class="">Approved vs Declined Claims</h5>
                <ul class="tabs tab-pills">
                    {{-- <li><a href="javascript:void(0);" id="tb_1" class="tabmenu"></a></li> --}}
                </ul>
            </div>

            <div class="widget-content ">
                <div class="tabs tab-content">
                    <div id="content_1" class="tabcontent "> 
                        <div id="revenueMonthly"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col w-full flex mt-5">
        <div class="widget widget-table-two w-full">

            <div class="widget-heading">
                <h5 class="">Recent Reports</h5>
            </div>

            <div class="widget-content">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th><div class="th-content">Subscriber</div></th>
                                <th><div class="th-content">Treatment</div></th>
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
                                <td class="text-white font-extrabold"><div class="td-content text-white font-extrabold text-xl">Jane Doe</div></td>
                                <td class="text-white font-extrabold"><div class="td-conten text-white font-extrabold text-xl">Osteoarthritis </div></td>
                                <td class="text-white font-extrabold"><div class="td-content pricing"><span class="text-white font-extrabold text-xl flex justify-center items-center">
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
       
    </div>
  </div>  

    <div class="fixed right-5 quick-action rounded-3xl flex-col ">
        <div class="w-full h-16 bg-gray-600 text-white font-bold text-xl flex justify-center items-center mx-auto rounded-t-2xl">
            Quick Action
        </div>
        <div class="w-1/4">
          
            <div class=" py-4 px-6">

                <nav>
                    <ul class="flex-col p-1 justify-around items-center">
                        <li class="mb-3 shadow-2xl p-1 rounded-2xl font-bold flex items-center mx-auto justify-center h-14 w-60 bg-gray-600 text-white ">Submit new Claim</li>
                        <li class="mb-3 shadow-2xl p-1 rounded-2xl font-bold flex items-center mx-auto justify-center h-14 w-60 bg-gray-600 text-gray-100 mt-5">View Claim Reports</li>
                        <li class="mb-3 shadow-2xl p-1 rounded-2xl font-bold flex items-center mx-auto justify-center h-14 w-60 bg-gray-600 text-gray-100 mt-5"> Settings</li>
                        {{-- <li class="mb-3 shadow-2xl p-1 rounded-2xl font-bold flex items-center mx-auto justify-center h-14 w-60 bg-gray-600 text-gray-100 mt-5"> Task 4</li> --}}
                   
                    </ul>
                </nav>
    
            </div>
</div>
</div>
</div>

    <!-- /End replace -->
  
</main>




    <style>

        
        .table {
		border-spacing: 0 15px;
	}


	.table tr {
		border-radius: 20px;
	}

	tr td:nth-child(n+5),
	tr th:nth-child(n+5) {
		border-radius: 0 .625rem .625rem 0;
	}

	tr td:nth-child(1),
	tr th:nth-child(1) {
		border-radius: .625rem 0 0 .625rem;
	}
    .line-graph {
        background-color: #161616;
        width: 100%;
    }
    </style>
<link href="{{asset('plugins/apex/apexcharts.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('assets/css/dashboard/dash_1.css')}}" rel="stylesheet" type="text/css" />
<script src="{{asset('plugins/apex/apexcharts.min.js')}}"></script>
<script src="{{asset('assets/js/dashboard/service.js')}}"></script>

@endsection

