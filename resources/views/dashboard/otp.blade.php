@extends('layouts.index')
@section('title')
    Rovo | Inventory
@endsection
@section('content')
{{-- <div class="fixed top-0 p-2 mb-10 rounded-3xl shadow-lg w-full ">
    @include('inc.header')

</div> --}}
    @include('inc.sidebar')
    <main class="main-content position-relative  h-screen border-radius-lg  rounded-3xl mt-2">
        <div class="main-content position-relative ">
            <!-- Navbar -->
     
            <!-- End Navbar -->
            <div class="container-fluid px-2 px-md-4 mt-lg-4 default-color-dark">
          
              <div class="h-16 w-full mt-4">
    
              </div>
              <div class="card card-body mx-3 mx-md-4 mt-n6 default-color-dark">
            <div class="row default-color-dark">
          <div class="col-12 default-color-dark">
              <div class="card mb-4 default-color-dark text-white">
                <div class="card-header pb-0 default-color-dark">
                  <h6 class="text-white font-bold">Inventory List</h6>
                </div>
                <div class="flex justify-end">
                  <a class="card-header pb-0 default-color-dark" href="{{ route('inventory.addItem') }}">
                    <span class="btn btn-outline-warning">add new item</span>
                  </a>
                </div>
      </div>
        <div class="card-body px-0 pt-0 pb-2 default-color-dark text-white">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-lg text-white font-bold">Service </th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-lg text-white font-bold">Description</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-lg text-white font-bold">Price</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7text-lg  text-white font-bold">Action</th>
                  <th class="text-secondary opacity-7"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                 
                      <div class="d-flex flex-column justify-content-center">
                        <p class=" text-secondary mb-0 text-white">Oil Change</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">Manager</p>
                    <p class="text-xs text-secondary mb-0">Organization</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-success">Online</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                  </td>
                  <td class="align-middle">
                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                      Edit
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div>
                        <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">Alexa Liras</h6>
                        <p class="text-xs text-secondary mb-0">alexa@creative-tim.com</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">Programator</p>
                    <p class="text-xs text-secondary mb-0">Developer</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
                  </td>
                  <td class="align-middle">
                    <a href="#!" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                      Edit
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div>
                        <img src="../assets/img/team-4.jpg" class="avatar avatar-sm me-3">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">Laurent Perrier</h6>
                        <p class="text-xs text-secondary mb-0">laurent@creative-tim.com</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">Executive</p>
                    <p class="text-xs text-secondary mb-0">Projects</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-success">Online</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">19/09/17</span>
                  </td>
                  <td class="align-middle">
                    <a href="#!" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                      Edit
                    </a>
                  </td>
                </tr>
             
             
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>


                </div>
              </div>
        </div>
    </div>
    </div>
</main>