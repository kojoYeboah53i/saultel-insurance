<div class=" sidebar-slim transition ease-in duration-150 h-screen  bg-black flex-col items-center py-2 px-4 ">

    <nav class="slim ">
        <ul class="list-reset">
            <li class="py-4" onclick="menu_full()">
                <a href="#" class="text-white">
                    <i class="fas fa-bars fa-2x"></i>
                </a>
            </li>
           @if( $user->role_id == 1  )

            <li class="py-4">
                <a href="#" class="text-white">
                    <i class="fas fa-user-circle fa-2x"></i>
                </a>
            </li>
            @endif
            <li class="py-4">
                <a href="superadmin.html" class="text-white">
                    <i class="fas fa-users fa-2x"></i>
                </a>
            </li>
            <li class="py-4">
                <a href="superadmin.html" class="text-white">
                    <i class="fas fa-chart-line fa-2x"></i>
                </a>
            </li>
            <li class="py-4">
                <a href="superadmin.html" class="text-white">
                    <i class="fas fa-cog fa-2x"></i>
                </a>
            </li>
            <li class="py-4">
                <a href="#" class="text-white" onclick="signout()">
                    <i class="fas fa-sign-out-alt fa-2x"></i>
                </a>
                <form method="POST" action="{{ route('logout') }}" id="logout-form" class="d-none">
                    @csrf
                    <button type="submit" id="logout-form" class="submit">submit</button>
                </form>

            </li>
        </ul>
     </nav>
</div>

<div class=" sidebar-full  hidden transition ease-in duration-150 h-screen flex-col items-center py-2 px-4 " style="background-color: #161616">

     <nav class="nav justify-content-center  ">
        <ul class="list-reset">
            {{-- burger responsive button --}}
            <li class="py-4" onclick="menu_slim()">
                <a href="#" class="text-white flex justify-end items-end w-40">
                    <i class="fas fa-times fa-2x"></i>
                </a>
            </li>
            {{-- Analytics --}}
            <li class="py-4 flex items-center">
                <a href="#" class="text-white flex justify-between items-center w-40">
                    <span class="text-2xl mx-auto"> Analytics</span>
                    <i class="fas fa-chart-line fa-2x"></i>
                </a>
            </li>
           @if( $user->role_id == 1  )

            <li class="py-4 flex items-center">
                <a href="/partners" class="{{ $page_name === 'partners' ? 'active' : 'inactive' }} text-white flex justify-between items-center w-40">
                    <span class=" text-2xl mx-auto flex justify-start">Partners</span>
                    <i class="fas fa-user-circle fa-2x"></i>
                </a>
            </li>
            <li class="py-4 flex items-center">
                <a href="/service-providers" class="text-white flex justify-between items-center w-40">
                    <span class=" text-2xl mx-auto flex justify-start">Service Providers</span>
                    <i class="fas fa-user-circle fa-2x"></i>
                </a>
            </li>
            @endif
            <li class="py-4 w-full  flex items-center">
                <a href="superadmin.html" class="text-white  flex justify-between items-center w-40">
                        <span class=" text-2xl mx-auto">Users</span>
                        
                        <span class="flex items-end">
                         <i class="fas fa-users fa-2x"></i>

                        </span>
                </a>
            </li>

            <li class="py-4 flex items-center">
                <a href="superadmin.html" class="text-white flex justify-between items-center w-40">
                    <span class="text-2xl mx-auto"> Settings</span>
                    <i class="fas fa-cog fa-2x"></i>
                </a>
            </li>
            <li class="py-4">
                <a href="superadmin.html" class="text-white flex justify-between items-center w-40">
                    <span class="text-2xl mx-auto"> Logout</span>
                    <i class="fas fa-sign-out-alt fa-2x"></i>
                </a>
            </li>
        </ul>
     
     </nav>

    

</div>

<script>
    function menu_full() {
        full = document.querySelector(".sidebar-full");
        slim = document.querySelector(".sidebar-slim");
        slim.classList.add("hidden");
        full.classList.remove("hidden");
        full.style.transform = "translateX(-1%)";
      
    }
    function menu_slim() {
        full = document.querySelector(".sidebar-full");
        slim = document.querySelector(".sidebar-slim");
        slim.classList.remove("hidden");
        full.style.transform = "translateX(-100%)";
    }

    function signout() {
        document.getElementById('logout-form').submit();
    }
    
</script>