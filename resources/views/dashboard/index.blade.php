@extends('layouts.index')
@section('title')
    Dashboard
@endsection
@section('content')
{{-- <div class="fixed top-0 p-2 mb-10 rounded-3xl shadow-lg w-full ">
    @include('inc.header')

</div> --}}
    @include('inc.sidebar')

    {{-- <div class="main-data ">

    </div> --}}
<main class="main-content position-relative  max-height-vh-100 h-100 border-radius-lg  rounded-3xl mt-2">

<div class="container mb-4 default-color">
    <div class="container-fluid py-4">
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card " style="background: #161515">
              <div class="card-header p-3 pt-2" style="background: #161515">
                <div class="icon icon-lg icon-shape bg-gradient-info shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">directions_run</i>
                </div>
                <div class="text-end pt-1 text-white">
                  <p class="text-lg mb-0 text-capitalize text-white">Inventory List</p>
                  <h4 class="mb-0 text-white">53k</h4>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <p class="mb-0 text-white"><span class="text-success text-sm font-weight-bolder">+55% </span>than lask week</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 rounded-2xl" style="background: #161515">
            <div class="card" style="background: #161515">
              <div class="card-header p-3 pt-2" style="background: #161515">
                <div class="icon icon-lg icon-shape bg-success shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">credit_card</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize text-white">Paid Services</p>
                  <h4 class="mb-0 text-white">2,300</h4>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <p class="mb-0 text-white"><span class="text-success text-sm font-weight-bolder">+3% </span>than lask month</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card" style="background: #161515">
              <div class="card-header p-3 pt-2" style="background: #161515">
                <div class="icon icon-lg icon-shape bg-warning shadow-success text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">pending</i>
                </div>
                <div class="text-end pt-1">
                  <p class=" mb-0 text-capitalize text-white text-lg">Pending Transactions</p>
                  <h4 class="mb-0 text-white">3,462</h4>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <p class="mb-0 text-white"><span class="text-danger text-sm font-weight-bolder">-2%</span> than yesterday</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6">
            <div class="card" style="background: #161515">
              <div class="card-header p-3 pt-2" style="background: #161515">
                <div class="icon icon-lg icon-shape bg-danger shadow-info text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">weekend</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-lg mb-0 text-capitalize text-white">Declined Payments</p>
                  <h4 class="mb-0 text-white">430</h4>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <p class="mb-0 text-white text-lg"><span class="text-success text-sm font-weight-bolder">+5% </span>than yesterday</p>
              </div>
            </div>
          </div>
        </div>
     
      
        </div>
        <div class="row mt-4 mb-4 rounded-2xl">
          <div class="col-lg-4 col-md-6" >
              <div class="card h-100 default-color-dark">
 
            <div class="card-body">
              <div class="widget widget-chart-two">
                  <div class="widget-heading">
                      <h5 class="text-white">Transactions</h5>
                  </div>
                  <div class="widget-content">
                      <div id="chart-2" class="text-white" ></div>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-md-6 mb-md-0 mb-4 rounded-2xl" style="background: #0a0a0ae8">
          <div class="card" style="background: #0a0a0ae8">
            <div class="card-header pb-0" style="background: #0a0a0ae8">
              <div class="row" style="background: #0a0a0ae8">
                <div class="col-lg-6 col-7">
                  <h6 class="text-white">Recent Transactions</h6>
                  <p class="text-sm mb-0">
                    <i class="fa fa-check text-info text-white" aria-hidden="true"></i>
                    <span class="font-weight-bold ms-1">30 paid services</span> this month
                  </p>
                </div>

              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-white">Subscriber</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-white">Treatment</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-white">Cost</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-white ">Claim Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-white ">View</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="{{  asset('assets/img/team-2.jpg')}}" class="avatar avatar-sm me-3" alt="atlassian">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm text-white">Evans Mireku</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="avatar-group mt-2 text-white">
                            OPD
                      
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold text-white"> 100 </span>
                      </td>
                      <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold">100%</span>
                            </div>
                          </div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-success w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex align-items-center justify-content-center">
                          <a href="{{ route('subscriber.index') }}" class="btn btn-sm btn-outline-warning">
                            <span class="material-icons">visibility</span>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="{{  asset('assets/img/team-1.jpg')}}" class="avatar avatar-sm me-3" alt="atlassian">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm text-white">Sheila Boateng</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="avatar-group mt-2 text-white">
                            Malaria
                      
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold text-white"> 3,000 </span>
                      </td>
                      <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold">10%</span>
                            </div>
                          </div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-info w-10" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex align-items-center justify-content-center">
                          <a href="{{ route('subscriber.index') }}" class="btn btn-sm btn-outline-warning">
                            <span class="material-icons">visibility</span>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="{{  asset('assets/img/team-3.jpg')}}" class="avatar avatar-sm me-3" alt="atlassian">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm text-white">Jeremy Messent</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="avatar-group mt-2 text-white">
                          Aortic Aneurysm
                      
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold text-white"> 3,000 </span>
                      </td>
                      <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold">10%</span>
                            </div>
                          </div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-info w-10" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex align-items-center justify-content-center">
                          <a href="{{ route('subscriber.index') }}" class="btn btn-sm btn-outline-warning">
                            <span class="material-icons">visibility</span>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="{{  asset('assets/img/team-3.jpg')}}" class="avatar avatar-sm me-3" alt="atlassian">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm text-white">Jeremy Messent</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="avatar-group mt-2 text-white">
                          Aortic Aneurysm
                      
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold text-white"> 3,000 </span>
                      </td>
                      <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold">10%</span>
                            </div>
                          </div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-info w-10" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex align-items-center justify-content-center">
                          <a href="{{ route('subscriber.index') }}" class="btn btn-sm btn-outline-warning">
                            <span class="material-icons">visibility</span>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="{{  asset('assets/img/team-3.jpg')}}" class="avatar avatar-sm me-3" alt="atlassian">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm text-white">Jeremy Messent</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="avatar-group mt-2 text-white">
                          Aortic Aneurysm
                      
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold text-white"> 3,000 </span>
                      </td>
                      <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold">10%</span>
                            </div>
                          </div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-info w-10" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex align-items-center justify-content-center">
                          <a href="{{ route('subscriber.index') }}" class="btn btn-sm btn-outline-warning">
                            <span class="material-icons">visibility</span>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="{{  asset('assets/img/team-3.jpg')}}" class="avatar avatar-sm me-3" alt="atlassian">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm text-white">Jeremy Messent</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="avatar-group mt-2 text-white">
                          Aortic Aneurysm
                      
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold text-white"> 3,000 </span>
                      </td>
                      <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold">10%</span>
                            </div>
                          </div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-info w-10" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex align-items-center justify-content-center">
                          <a href="{{ route('subscriber.index') }}" class="btn btn-sm btn-outline-warning">
                            <span class="material-icons">visibility</span>
                          </a>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    
        <div class="h-4 w-full ">

        </div>
    
      </div>

</main>


@endsection