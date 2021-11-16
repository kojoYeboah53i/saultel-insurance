    
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
    <!-- Replace with your content -->
    <div class="px-4 py-6 sm:px-0">
      <div class="overflow-auto lg:overflow-visible ">
        <header class="flex  items-center justify-between mx-auto py-4 px-6">
            <h1 class="text-3xl font-bond">Service Providers</h1>
            <a href="/create/service-provider" type="button" class="text-xl font-bond text-white bg-indigo-600 hover:bg-indigo-900 py-2 px-4 rounded-xl"> Add Service Provider</a>
    
        </header>
     @if(!empty($partners[0]))  
    
        <table class="table text-gray-400 border-separate space-y-6 text-sm">
            <thead class="bg-gray-800 text-gray-500">
                <tr>
                    <th class="p-3">Partner</th>
                    <th class="p-3 text-left">Subscribers</th>
                    <th class="p-3 text-left">Wallect</th>
                    <th class="p-3 text-left">Status</th>
                    <th class="p-3 text-left">Action</th>
                </tr>
            </thead>
            <tbody>
         @foreach( $partners as $key=>$partner) 
    
            @endforeach
              
            
            </tbody>
        </table>
        @endif
    </div>

    </div>
    <!--  table -->
    <div class="widget widget-table-two">

     

        <div class="widget-content">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th><div class="th-content">Service Provider</div></th>
                            <th><div class="th-content">Total Claims</div></th>
                            <th><div class="th-content th-heading">Profile</div></th>
                            <th><div class="th-content th-heading">Edit</div></th>
                            <th><div class="th-content th-heading">Delete</div></th>
                            <th><div class="th-content">Date</div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td class="text-white font-extrabold"><div class="td-content text-white font-extrabold text-2xl">Nyaho Clinic</div></td>
                            <td class="text-white font-extrabold"><div class="td-conten text-white font-extrabold text-2xl">55,000</div></td>
                            <td class="text-white font-extrabold"><div class="td-content pricing"><span class="text-white font-extrabold text-xl flex justify-center items-center">
                                <a href="#" class="text-gray-400 hover:text-gray-100 mr-2">
                                    <i class="large material-icons-outlined cyan-text text-base text-darken-4 text-white ">visibility</i>
                                </a>
                            </span></div></td>
                            <td><div>
                               <span class="flex justify-center items-center">
                                <a href="#" class="text-gray-400 hover:text-gray-100  mx-2">
                                    <i class="material-icons-outlined text-base text-white">edit</i>
                                </a>
                            </span></div></td>
                            <td><div>
                                <span class="flex justify-center items-center">
                                <a href="#" class="text-gray-400 hover:text-gray-100  ml-2">
                                    <i class="material-icons-round text-base text-white">delete_outline</i>
                                </a>
                                </span></div></td>
                            <td><div class="td-content"><span class="badge text-white font-extrabold text-2xl"> 2/10/2021</span></div></td>
                        </tr>
            
                        
                    

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- paginated links -->


    <!-- /End replace -->
  </div>
</main>

<link href="{{asset('assets/css/dashboard/dash_1.css')}}" rel="stylesheet" type="text/css" />


    <style>

        
        .table {
		border-spacing: 0 15px;
	}


	.table tr {
		border-radius: 20px;
	}
    .text-base {
        font-size: 2.1rem;
    }

	tr td:nth-child(n+5),
	tr th:nth-child(n+5) {
		border-radius: 0 .625rem .625rem 0;
	}

	tr td:nth-child(1),
	tr th:nth-child(1) {
		border-radius: .625rem 0 0 .625rem;
	}
    </style>
@endsection

