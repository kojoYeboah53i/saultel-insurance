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
                <header class="flex  items-center justify-between mx-auto py-4 px-6">
                    <h1 class="text-3xl font-bond">New Claim Request</h1>
                    <a href="{{ route('create.new-claim') }}" type="button" class="text-xl font-bond text-white bg-green-600 hover:bg-green-900 py-2 px-4 rounded-xl"> Go back</a>
            
                </header>
              </div>

                <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8 flex-col">
                    {{-- new claim form --}}
                    <div class=" flex-col">
                        <div class="widget widget-table-two flex-col">

                           
                    </div>
                        <form action="" method="post" class="form" style="width:70%">
                            <div class="flex-col justify-between first">
                                <div class="widget-content widget-content-area mb-5">
                                    <label for="">Select Department</label>
                                    <select class="form-control form-large">
                                      <option selected="selected">OPD</option>
                                      <option class="text-lg">ENT</option>
                                      <option>Maternity</option>
                                      <option>Surgical</option>
                                      <option>Dental</option>
                                      <option>Laboratory</option>
                                      <option>Pharmacy</option>
                                    </select>
                               
                                </div>
                                <div class="widget-content widget-content-area mb-5">
                                    <label for="">Select Doctor</label>
                                    <select class="form-control form-large">
                                      <option selected="selected">OPD</option>
                                      <option class="text-lg">ENT</option>
                                      <option>Maternity</option>
                                      <option>Surgical</option>
                                      <option>Dental</option>
                                      <option>Laboratory</option>
                                      <option>Pharmacy</option>
                                    </select>
                               
                                </div>
                           
                                <div class="widget-content widget-content-area mb-5 rounded-xl">
                                    <label for="">Service/Product</label>
                                    <select class="form-control form-large">
                                      <option selected="selected">OPD</option>
                                      <option class="text-lg">ENT</option>
                                      <option>Maternity</option>
                                      <option>Surgical</option>
                                      <option>Dental</option>
                                      <option>Laboratory</option>
                                      <option>Pharmacy</option>
                                    </select>
                               
                                </div>
                                <div class="flex justify-center mx-auto" style="width:30%">
                                    <button type="button" class="next-first btn btn-block py-4 text-lg"> Next</button>
                                </div>
                            </div>
                            <div class="flex-col second">
                                <div class="custom-file-container mb-5" data-upload-id="mySecondImage">
                                    <label>Upload supporting documents if any <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                    <label class="custom-file-container__custom-file" >
                                        <input type="file" class="custom-file-container__custom-file__custom-file-input" multiple>
                                        <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                        <span class="custom-file-container__custom-file__custom-file-control"></span>
                                    </label>
                                    <div class="custom-file-container__image-preview"></div>
                                </div>
                                <label for="basic-url">Diagnosis</label>
                                <div class="input-group mb-5">
                                 
                                  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="diagnosis">
                                </div>
                                <label for="basic-url">Diagnosis Description</label>
                                <div class="input-group mb-5">
                                 
                                  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="enter diagnosis description">
                                </div>
                                <label for="basic-url">Treatment Description</label>
                                <div class="input-group mb-5">
                                 
                                  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="enter treatment description">
                                </div>
                            
                                <label for="basic-url">Amount</label>
                                <div class="input-group mb-5">
                               
                                  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="enter claim amount">
                                </div>
                              
                                <div class="flex justify-between mb-5">
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox checkbox-primary">
                                          <input type="checkbox" class="new-control-input" >
                                          <span class="new-control-indicator"></span>CT Scan
                                        </label>
                                    </div>
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox checkbox-primary">
                                          <input type="checkbox" class="new-control-input" >
                                          <span class="new-control-indicator"></span>X-Ray
                                        </label>
                                    </div>
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox checkbox-primary">
                                          <input type="checkbox" class="new-control-input" >
                                          <span class="new-control-indicator"></span>MRI
                                        </label>
                                    </div>
                                </div>

                                <div class="flex justify-center mx-auto" style="width:60%">
                                    <button type="button" class=" btn btn-block py-4 text-lg"> Submit</button>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
              </main>
              <script src="{{asset('assets/js/libs/jquery-3.1.1.min.js')}}"></script>

              <script src="{{ asset('assets/js/dashboard/claim.js') }}"></script>
@endsection