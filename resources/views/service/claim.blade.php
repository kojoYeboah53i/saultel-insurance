    
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
                        <h1 class="text-3xl font-bond">New Claim Request</h1>
                        <a href="/" type="button" class="text-xl font-bond text-white bg-green-600 hover:bg-green-900 py-2 px-4 rounded-xl"> Go back</a>
                
                    </header>

                    <div class="container text-center mx-auto" style="width: 50%">
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

                    </div>
                  </div>
                </div>
            </div>
            </main>













@endsection
