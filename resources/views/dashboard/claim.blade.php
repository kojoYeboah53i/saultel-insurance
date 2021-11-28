@extends('layouts.app')
@section('title')
    {{'Dashboard'}}
@endsection
@section('content')


    <div class="main-content flex justify-between rounded-3xl">

    <!-- Main -->
    <main class="holygrail-main col-md-10 px-6 py-2 bg-indigo-700 rounded-3xl">
        <section class="text-center bg-warning">
            <h2>Main content</h2>
            <p class="lead">Here is where you put your main content.</p>
        </section>

        <div class="block">
            <div class="container-fluid">
                <section class="mb-4">
                    <h1>A Holygrail Layout for Bootstrap 4</h2>
                    <p class="lead">Resolved Philip Walton's Holygrail layout with Bootstrap 4 flexbox to achieve a more flexible layout template that consists of <code>nav</code>, <code>main</code> and <code>aside</code> parts</p>
                </section>

                <h5>Benefits</h5>
                <ul>
                    <li>Content + sidebars are fluid and their widths are defined by Bootstrap 4's grid system.</li>
                    <li>All columns are the same height, regardless of which column is actually the tallest.</li>
                    <li>Footer always sits at the bottom of the page, even when content is sparse.</li>
                    <li>With the use of <code>.no-gutters</code>, content and sidebars are able to manage bleeds more effectively.</li>
                    <li>No uneven breaking of background colors.</li>
                </ul>
            </div>
        </div>

        <div class="block">
          <div class="container-fluid">
            <h5>References</h5>
                <ul>
                    <li><a href="https://philipwalton.github.io/solved-by-flexbox/demos/holy-grail/">Philip Walton: Holy Grail Layout Solved By Flexbox</a></li>
                    <li><a href="https://v4-alpha.getbootstrap.com/layout/overview/">Bootstrap 4 Docs: Layout</a></li>
                </ul>
          </div>
        </div>

        <div class="h-screen max-w-5xl bg-red-500">

        </div>
    </main>



    <!-- Aside -->
    <div class="fixed right-5 quick-action rounded-3xl flex-col ">
        <div class="w-full h-10 bg-gray-600 text-white font-bold text-xl flex justify-center items-center mx-auto rounded-t-2xl">
            Quick Action
        </div>
        <div class="">
          
            <div class=" py-4 px-6">

                <nav>
                    <ul class="flex-col p-1 justify-around items-center">
                        <li class="mb-4 shadow-2xl p-1 rounded-2xl font-medium flex items-center mx-auto justify-center h-10 w-40 bg-gray-600  text-sm text-white cursor-pointer">Submit new Claim</li>
                        <li class="mb-4 shadow-2xl p-1 rounded-2xl font-medium flex items-center mx-auto justify-center h-10 w-40 bg-gray-600 text-gray-100 mt-2 text-sm cursor-pointer">View Claim Reports</li>
                        <li class="mb-4 shadow-2xl p-1 rounded-2xl font-medium flex items-center mx-auto justify-center h-10 w-40 bg-gray-600 text-gray-100 mt-2 text-sm cursor-pointer"> Settings</li>
                        {{-- <li class="mb-3 shadow-2xl p-1 rounded-2xl font-bold flex items-center mx-auto justify-center h-14 w-60 bg-gray-600 text-gray-100 mt-5"> Task 4</li> --}}
                   
                    </ul>
                </nav>
    
            </div>
    </div>

 </div>
  


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

    .quick-action{
    background-image: linear-gradient(120deg, #d8e07f, #7e6b1d);
    border-radius: 25px;
    width: 15rem;
    height: 80vh;
}

.no-decoration{ 
    text-decoration: none;
    }
   </style>















@endsection