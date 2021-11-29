@extends('layouts.index')
@section('title')
    Subscriber
@endsection
@section('content')
{{-- <div class="fixed top-0 p-2 mb-10 rounded-3xl shadow-lg w-full ">
    @include('inc.header')

</div> --}}
    @include('inc.sidebar')

    {{-- <div class="main-data ">

    </div> --}}
<main class="main-content position-relative  h-screen border-radius-lg  rounded-3xl mt-2">
    <div class="main-content position-relative ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
          <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
      
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
              <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                <div class="input-group input-group-outline default-color">
                  <label class="form-label">search..</label>
                  <input type="text" class=" text-white form-control">
                </div>
              </div>
              <ul class="navbar-nav  justify-content-end">
     
                <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                  <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                    <div class="sidenav-toggler-inner">
                      <i class="sidenav-toggler-line"></i>
                      <i class="sidenav-toggler-line"></i>
                      <i class="sidenav-toggler-line"></i>
                    </div>
                  </a>
                </li>

              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4 mt-lg-4">
          {{-- <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
            <span class="mask  bg-gradient-primary  opacity-6"></span>
          </div> --}}
          <div class="h-16 w-full mt-4">

          </div>
          <div class="card card-body mx-3 mx-md-4 mt-n6 default-color-dark">
            <div class="row gx-4 mb-2">
              <div class="col-auto">
                <div class="avatar avatar-xl position-relative">
                  <img src="../assets/img/bruce-mars.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                </div>
              </div>
              <div class="col-auto my-auto">
                <div class="h-100">
                  <h5 class="mb-1 main-active-text">
                    Richard Davis
                  </h5>
                  <p class="mb-0 font-weight-normal text-sm">
                    <span class="text-white"> Policy Number <br> </span>
                    PD034564
                  </p>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                <div class="nav-wrapper position-relative end-0">
                    <span class="text-3xl text-white font-bold">Total Cover Balance</span>
                  <span class="text-lg main-active-text"> 4,000 </span>
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-md-7 mt-4 rounded-2xl default-color">
                  <div class="card default-color-dark default-color">
                    <div class="card-header pb-0 px-3 default-color ">
                      <h6 class="mb-0 text-white">Recent Visits</h6>
                    </div>
                    <div class="card-body pt-4 p-3 defualt-color-dark">
                      <ul class="list-group">
                        <li class="list-group-item border-0 d-flex p-4 mb-2  border-radius-lg" style="color:black; background-image: linear-gradient(120deg,  #d1ba80, #bc9945); ">
                          <div class="d-flex flex-column ">
                            <h6 class="mb-3 text-sm text-white">Policy No.  PD0344564 </h6>
                            <span class="mb-2 text-xs text-white">Claim Amount: <span class="text-dark font-weight-bold ms-sm-2 flex justify-end">1000</span></span>
                            <span class="mb-2 text-xs text-white">Treatment: <span class="text-dark ms-sm-2 font-weight-bold flex justify-end">Malaria</span></span>
                            <span class="text-xs text-white">Doctor: <span class="text-dark ms-sm-2 font-weight-bold flex justify-end">Dr. Jeff Bridges</span></span>
                            <span class="text-xs text-white">Status: <span class="text-dark ms-sm-2 font-weight-bold flex justify-end">Pending</span></span>
                            <span class="text-xs text-white">Date: <span class="text-dark ms-sm-2 font-weight-bold flex justify-end">11 Nov 2021</span></span>
                          </div>
                          <div class="ms-auto text-end">
                            <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="material-icons text-sm me-2">delete</i>Delete</a>
                            <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="material-icons text-sm me-2">edit</i>Edit</a>
                          </div>
                        </li>
                        <li class="list-group-item border-0 d-flex p-4 mb-2  border-radius-lg" style="color:black; background-image: linear-gradient(120deg,  #d1ba80, #bc9945); ">
                            <div class="d-flex flex-column ">
                              <h6 class="mb-3 text-sm text-white">Policy No.  PD0344564 </h6>
                              <span class="mb-2 text-xs text-white">Claim Amount: <span class="text-dark font-weight-bold ms-sm-2 flex justify-end">1000</span></span>
                              <span class="mb-2 text-xs text-white">Treatment: <span class="text-dark ms-sm-2 font-weight-bold flex justify-end">Malaria</span></span>
                              <span class="text-xs text-white">Doctor: <span class="text-dark ms-sm-2 font-weight-bold flex justify-end">Dr. Jeff Bridges</span></span>
                              <span class="text-xs text-white">Status: <span class="text-dark ms-sm-2 font-weight-bold flex justify-end">Pending</span></span>
                              <span class="text-xs text-white">Date: <span class="text-dark ms-sm-2 font-weight-bold flex justify-end">11 Nov 2021</span></span>
                            </div>
                            <div class="ms-auto text-end">
                              <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="material-icons text-sm me-2">delete</i>Delete</a>
                              <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="material-icons text-sm me-2">edit</i>Edit</a>
                            </div>
                          </li>
                          <li class="list-group-item border-0 d-flex p-4 mb-2  border-radius-lg" style="color:black; background-image: linear-gradient(120deg,  #d1ba80, #bc9945); ">
                            <div class="d-flex flex-column ">
                              <h6 class="mb-3 text-sm text-white">Policy No.  PD0344564 </h6>
                              <span class="mb-2 text-xs text-white">Claim Amount: <span class="text-dark font-weight-bold ms-sm-2 flex justify-end">1000</span></span>
                              <span class="mb-2 text-xs text-white">Treatment: <span class="text-dark ms-sm-2 font-weight-bold flex justify-end">Malaria</span></span>
                              <span class="text-xs text-white">Doctor: <span class="text-dark ms-sm-2 font-weight-bold flex justify-end">Dr. Jeff Bridges</span></span>
                              <span class="text-xs text-white">Status: <span class="text-dark ms-sm-2 font-weight-bold flex justify-end">Pending</span></span>
                              <span class="text-xs text-white">Date: <span class="text-dark ms-sm-2 font-weight-bold flex justify-end">11 Nov 2021</span></span>
                            </div>
                            <div class="ms-auto text-end">
                              <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="material-icons text-sm me-2">delete</i>Delete</a>
                              <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="material-icons text-sm me-2">edit</i>Edit</a>
                            </div>
                          </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-5 mt-4" style="background-color:black;  ">
                  <div class="card h-100 mb-4" style="color:black; background-image: linear-gradient(120deg,  #d1ba80, #bc9945); ">
                    <div class="card-header pb-0 px-3" style="color:black; background-image: linear-gradient(120deg,  #d1ba80, #bc9945); ">
                      <div class="row">
                        <div class="col-md-6">
                          <h6 class="mb-0 text-black">Current Claim Request Transaction's</h6>
                        </div>
                        <div class="col-md-6 d-flex justify-content-start justify-content-md-end align-items-center">
                          <i class="material-icons me-2 text-lg">date_range</i>
                          <small>23 - 30 March 2020</small>
                        </div>
                      </div>
                    </div>
                    <div class="card-body pt-4 p-3">
                      <h6 class="text-uppercase text-body text-xs font-weight-bolder mb-3 text-black">Detail</h6>
                      <ul class="list-group">
                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg" style="color:black; background-image: linear-gradient(120deg,  #d1ba80, #bc9945); ">
                          <div class="d-flex align-items-center">
                          <div class="d-flex flex-column">
                              <h6 class="mb-1 text-dark text-sm text-black">Total Bill</h6>
                              <span class="text-xs">27 March 2020, at 12:30 PM</span>
                            </div>
                          </div>
                          <div class="d-flex align-items-center text-white text-sm font-weight-bold">
                            2,500
                          </div>
                        </li>
                    
                      </ul>
                      <ul class="list-group">
                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg"  style="color:black; background-image: linear-gradient(120deg,  #d1ba80, #bc9945); ">
                          <div class="d-flex align-items-center">
                             <div class="d-flex flex-column">
                              <h6 class="mb-1 text-dark text-sm text-black">Department</h6>
                              <span class="text-xs">Eye Department</span>
                            </div>
                          </div>
                          <div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                     
                          </div>
                        </li>
                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg"  style="color:black; background-image: linear-gradient(120deg,  #d1ba80, #bc9945); ">
                            <div class="d-flex align-items-center">
                               <div class="d-flex flex-column">
                                <h6 class="mb-1 text-dark text-sm text-black">Doctor</h6>
                                <span class="text-xs">Dr. Anthony James</span>
                              </div>
                            </div>
                            <div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                       
                            </div>
                          </li>
                          <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg"  style="color:black; background-image: linear-gradient(120deg,  #d1ba80, #bc9945); ">
                            <div class="d-flex align-items-center">
                               <div class="d-flex flex-column">
                                <h6 class="mb-1 text-dark text-sm text-black">Treatment</h6>
                                <span class="text-xs">Eye Surgery</span>
                              </div>
                            </div>
                            <div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                       
                            </div>
                          </li>
                          <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg"  style="color:black; background-image: linear-gradient(120deg,  #d1ba80, #bc9945); ">
                            <div class="d-flex align-items-center">
                               <div class="d-flex flex-column">
                                <h6 class="mb-1 text-dark text-sm text-black">File</h6>
                                <span class="text-xs">Uploaded X-Ray scan</span>
                              </div>
                            </div>
                            <div class="d-flex align-items-center text-info text-gradient text-sm font-weight-bold">
                                <button class="btn btn-icon-only btn-rounded btn-outline-info mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i class="material-icons text-lg">expand_more</i></button>

                                </div>
                          </li>
                            
                          <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg"  style="color:black; background-image: linear-gradient(120deg,  #d1ba80, #bc9945); ">
                            <div class="d-flex align-items-center">
                               <div class="d-flex flex-column">
                                <h6 class="mb-1 text-dark text-sm text-black">Status</h6>
                                <span class="text-white"> Pending </span>   
                              </div>
                            </div>
                            <div class="d-flex align-items-center text-white  text-lg font-weight-bold">
                                <div class="progress br-30">
                                    <div class="progress-bar bg-success" role="progressbar" data-progressState="20" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                          </li>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <footer class="footer py-4  ">
          <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
              <div class="col-lg-6 mb-lg-0 mb-4">

              </div>
    
            </div>
          </div>
        </footer>
      </div>


</main>