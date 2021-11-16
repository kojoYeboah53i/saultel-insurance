    
@extends('layouts.index')

@section('content')


        
            <header class=" shadow">
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
      <form action="{{ route('create.partner')}}" method="POST" id="add-partner-form">
        @csrf
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Email</label>
              <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Password</label>
              <input type="password" class="form-control" id="inputPassword4">
            </div>
          </div>
          <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
          </div>
          <div class="form-group">
            <label for="inputAddress2">Address 2</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputCity">City</label>
              <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-4">
              <label for="inputState">State</label>
              <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>...</option>
              </select>
            </div>
            <div class="form-group col-md-2">
              <label for="inputZip">Zip</label>
              <input type="text" class="form-control" id="inputZip">
            </div>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                Check me out
              </label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Sign in</button>
      </form>
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