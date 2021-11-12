
@extends('layouts.index')

@section('content')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp">
    <div class="min-h-full">

  
   


        <main>
            <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
              <!-- Replace with your content -->
              <div class="px-4 py-6 sm:px-0">
                <div class=" h-96">
                                    <div class="table">
                                        <div class="flex items-center justify-center min-h-screen bg-gray-900">
                                            <div class="col-span-12">
                                                <div class="overflow-auto lg:overflow-visible ">
                                                    <header class="flex  items-center justify-between mx-auto py-4 px-6">
                                                        <h1 class="text-3xl font-bond">Partners</h1>
                                                        <a href="#" type="button" class="text-xl font-bond text-white bg-indigo-600 hover:bg-indigo-900 py-2 px-4 rounded-xl"> Add Partner</a>

                                                    </header>
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
                                                            <tr class="bg-gray-800">
                                                                <td class="p-3">
                                                                    <div class="flex align-items-center">
                                                                        <img class="rounded-full h-12 w-12  object-cover" src="https://images.unsplash.com/photo-1613588718956-c2e80305bf61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=634&q=80" alt="unsplash image">
                                                                        <div class="ml-3">
                                                                            <div class="">Appple</div>
                                                                            <div class="text-gray-500">mail@rgmail.com</div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="p-3">
                                                                    7,000
                                                                </td>
                                                                <td class="p-3 font-bold">
                                                                    200.00$
                                                                </td>
                                                                <td class="p-3">
                                                                    <span class="bg-green-400 text-gray-50 rounded-md px-2">available</span>
                                                                </td>
                                                                <td class="p-3 ">
                                                                    <a href="#" class="text-gray-400 hover:text-gray-100 mr-2">
                                                                        <i class="material-icons-outlined text-base">visibility</i>
                                                                    </a>
                                                                    <a href="#" class="text-gray-400 hover:text-gray-100  mx-2">
                                                                        <i class="material-icons-outlined text-base">edit</i>
                                                                    </a>
                                                                    <a href="#" class="text-gray-400 hover:text-gray-100  ml-2">
                                                                        <i class="material-icons-round text-base">delete_outline</i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        
                                                            <tr class="bg-gray-800">
                                                                <td class="p-3">
                                                                    <div class="flex align-items-center">
                                                                        <img class="rounded-full h-12 w-12   object-cover" src="https://images.unsplash.com/photo-1600856209923-34372e319a5d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2135&q=80" alt="unsplash image">
                                                                        <div class="ml-3">
                                                                            <div class="">Samsung</div>
                                                                            <div class="text-gray-500">mail@rgmail.com</div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="p-3">
                                                                    Technology
                                                                </td>
                                                                <td class="p-3 font-bold">
                                                                    200.00$
                                                                </td>
                                                                <td class="p-3">
                                                                    <span class="bg-yellow-400 text-gray-50  rounded-md px-2">start sale</span>
                                                                </td>
                                                                <td class="p-3">
                                                                    <a href="#" class="text-gray-400 hover:text-gray-100 mr-2">
                                                                        <i class="material-icons-outlined text-base">visibility</i>
                                                                    </a>
                                                                    <a href="#" class="text-gray-400 hover:text-gray-100 mx-2">
                                                                        <i class="material-icons-outlined text-base">edit</i>
                                                                    </a>
                                                                    <a href="#" class="text-gray-400 hover:text-gray-100 ml-2">
                                                                        <i class="material-icons-round text-base">delete_outline</i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <!-- bottom div here -->
              
                </div>
              </div>
              <!-- /End replace -->
            </div>
          </main>
        </div>


    <style>
     
        .navshade {
            background-image: url('assets/img/navshade.png');
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
        .quick-action{
            background-image: linear-gradient(120deg, #d8e07f, #7e6b1d);
            border-radius: 25px;
        }
     
        
        .table {
		border-spacing: 0 15px;
	}

	i {
		font-size: 1.1rem !important;
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
@endsection

