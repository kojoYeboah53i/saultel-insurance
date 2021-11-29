<aside class="this-sidebar sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 md:bg-black" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand text-center mx-auto " href="/" target="_blank">
        <div class="flex justify-between">
            <img src="{{ asset('assets/img/favicon-light.png') }}" width="40" class="navbar-brand-img  rounded-3xl" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">  {{ Auth::user()->name }} </span>
      </div> 
    </a>
    </div>
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ $page_name === 'dashboard' ? 'active' : ''  }}" href="{{ route('dashboard') }}">
              <div class=" text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">dashboard</i>
              </div>
              <span class="nav-link-text ms-1">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white {{ $page_name === 'claim' ? 'active' : ''  }} " href="{{ route('claim.index') }}">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <span class="material-icons">account_balance</span>
              </div>
              <span class="nav-link-text ms-1">Claims</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white {{ $page_name === 'subscriber' ? 'active' : ''  }} "  href="{{ route('subscriber.index') }}">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">people</i>
              </div>
              <span class="nav-link-text ms-1">Subscriber</span>
            </a>
          </li>
        </ul>
    </div>
 

    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
        <form method="POST" action="{{ route('logout') }}
        " role="none" class="" id="logout-form">
           @csrf
      <div class="mx-3">
        <a class="btn mt-4 w-100 text-lg flex justify-between" href="#" type="button " onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
         style="color:black; background-image: linear-gradient(120deg,  #d1ba80, #bc9945); ">
        <span> <i class="material-icons opacity-10">logout</i></span>
         Logout
        </a>
      </div>
        </form>
    </div>
  </aside>

  



