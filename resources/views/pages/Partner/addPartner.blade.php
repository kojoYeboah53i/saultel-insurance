@extends('layouts.app')

@section('content')

            <div class="container">

                <div class="container">
{{--                     
                    <div id="navSection" data-spy="affix" class="nav  sidenav">
                        <div class="sidenav-content">
                            <a href="#basic" class="active nav-link">Basic</a>
                            <a href="#sizes" class="nav-link">Sizes</a>
                            <a href="#multiple" class="nav-link">Multiple</a>
                            <a href="#Input_group_action" class="nav-link">Input group with action</a>
                        </div>
                    </div> --}}



                    <div class="row layout-top-spacing">
                          <div class="add-partner-form">
                        <div id="basic" class="col-lg-12 col-sm-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Add Partner</h4>
                                        </div>
                                    </div>
                                </div>
                                <form method="POST" action="{{ route('addingPartner') }}">
                                  @csrf
                                <div class="widget-content widget-content-area">
                                  <label for="partner-name">Partner Name</label>
                                    <div class="input-group mb-4">
                                      <div class="input-group-prepend">
                                      </div>
                                      <input type="text" required id="name" class="form-control name" placeholder="Name" aria-label="Name">
                                    </div>

                                  <label for="email">Partner Email</label>
                                  <div class="input-group mb-5">
                                      <input type="email" required class="form-control" id="email" placeholder="email" aria-label="email" name="email" aria-describedby="basic-addon2">
                                      <div class="input-group-append">
                                      </div>
                                    </div>

                                    <label for="location">Partner Location</label>
                                    <div class="input-group mb-4">
                                      <div class="input-group-prepend">
                                      </div>
                                      <input type="text" class="form-control" id="location" aria-describedby="basic-addon3" placeholder="location">
                                    </div>

                                    <div class="input-group mb-4">
                                      <div class="submit-button">
                                      <button  type="submit" class="form-control btn btn-light-primary"> Submit</button>
                                    </div>
                                  </div>

          

                                </div>
                              </form>
                                {{-- form end --}}
                            </div>
                        </div>
                        {{-- add partner  end --}}

             

                                </div>
                            </div>
                        </div>

                    </div>
                    
                </div>
            </div>

            <style scoped>
                .submit-button{
                    text-align: center;
                    margin: auto;
                    padding: 20px;
                    width: 40%;
                }
                .add-partner-form{
                    width: 90%;
                    text-align: center;
                    margin: auto;
                }

            </style>
@endsection