@extends('layouts.index')
@section('title')
    Rovo | add item
@endsection
@section('content')

    @include('inc.sidebar')
    <main class="main-content position-relative  h-screen border-radius-lg  rounded-3xl mt-2">
        <div class="main-content position-relative ">
            <!-- Navbar -->
     
            <!-- End Navbar -->
            <div class="container-fluid px-2 px-md-4 mt-lg-4">
          
              <div class="h-16 w-full mt-4">
    
              </div>
              <div class="card card-body mx-3 mx-md-4 mt-n6 default-color-dark">
                
                <form action="#" class="w-8/12 p-4">
                  <div class="form-group">
                    <label for="inputAddress">Name</label>
                    <input type="text" class="form-control bg-white" id="inputAddress" placeholder="1234 Main St">
                  </div>

                  <button type="submit" class="btn btn-primary">Sign in</button>
                </form>

                </div>
              </div>
        </div>
    </div>
    </div>
</main>