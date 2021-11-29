@extends('layouts.index')
@section('title')
    Claims | OTP
@endsection
@section('content')
{{-- <div class="fixed top-0 p-2 mb-10 rounded-3xl shadow-lg w-full ">
    @include('inc.header')

</div> --}}
    @include('inc.sidebar')
    <main class="main-content position-relative  h-screen border-radius-lg  rounded-3xl mt-2">
        <div class="main-content position-relative ">
            <!-- Navbar -->
            <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
              <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
          
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                  <div class="ms-md-auto pe-md-3 d-flex align-items-center" style="visibility: hidden">
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
                <div class="flex justify-between">
                    <div class="input-group input-group-outline w-20">
                        <label class="form-label">search..</label>
                        <input type="text" class=" text-white form-control">
                      </div>
                      <div style="visibility: hidden">
                          here
                      </div>
                </div>
                    <div class="flex-col text-center mx-auto">
                        <div class="text-white text-3xl">
                            Enter OTP
                        </div>
                    <div class="flex p-2 default-color-dark">
                     
                        <form action="" method="post" class="flex justify-around">
                            <input type="text" name="" id="">
                        </form>
                    </div>
                </div>
                    <div class="flex justify-between p-2  items-center mx-auto mt-10" style="width: 60%;">
                            <a href="{{ route('subscriber.claim') }}" type="button" class="text-xl btn btn-block font-bond text-white  py-4 px-6 rounded-xl" style="background:#3d2d07 "> verify</a>
                            <a href="#" type="button" class="text-xl btn font-bond text-white  py-4 px-6 rounded-xl" style="visibility:hidden "> verify</a>
                            <a href="#" type="button" class="text-xl btn btn-block font-bond text-white   py-4 px-4 rounded-xl" style="background: #bf9c48"> resend</a>
                     </div>

                </div>
              </div>
        </div>
    </div>
    </div>
</main>