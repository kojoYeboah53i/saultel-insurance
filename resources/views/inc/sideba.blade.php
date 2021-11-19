
<div class=" sidebar-full   transition ease-in duration-150 h-screen flex-col items-center py-2 px-4 " style="background-color: #161616">

     <nav class="nav flex items-center w-full ">
        <ul class="list-reset w-full">
            {{-- burger responsive button --}}
            {{-- <li class="py-4" onclick="menu_slim()">
                <a href="#" class="text-white flex justify-end items-end w-40">
                    <i class="fas fa-times fa-2x"></i>
                </a>
            </li> --}}
            {{-- Analytics --}}
            <li class="py-4 flex items-center justify-between px-4">
                <a href="/" class="text-white ">
                    <i class="fas fa-chart-line fa-2x"></i>
                   

                </a>
                <a href="/" class="text-white">
                    <span class="text-2xl mx-auto"> Analytics</span>
                </a>
            </li>
           @if( $user->role_id == 2  )
           <li class="py-4 flex items-center justify-between px-4">
            <a href="{{ route('partner.claims') }}" class="{{ $page_name === 'partners' ? 'active' : 'inactive' }} text-white flex justify-between items-center w-40">
                {{-- <i class="fas fa-account-balance fa-2x"></i> --}}
                <span class="material-icons">account_balance</span>
            </a>
            <a href="{{ route('partner.claims') }}" class="text-white">
                <span class=" text-2xl mx-auto ">Claims</span>
            </a>
        </li>
      
            <li class="py-4 flex items-center justify-between px-4">
                <a href="{{ route('partner.policy') }}" class="text-white flex justify-between items-center w-40">
                    <span class="material-icons-outlined">
                        dns
                        </span>

                </a>
                <a href="{{ route('partner.policy') }}" class="text-white">
                    <span class=" text-2xl">Policy</span>
                </a>

            </li>
    
            <li class="py-4 flex items-center justify-between px-4">
                <a href="/partner/service" class="text-white flex justify-between items-center w-40">
                    <span class="material-icons-outlined">
                        local_hospital
                        </span>

                </a>
                <a href="{{ route('partner.service') }}" class="text-white">
                    <span class=" text-2xl">Service Providers</span>
                </a>

            </li>
            <li class="py-4   flex items-center justify-between px-4">
                <a href="{{ route('partner.agents') }}" class="text-white  flex justify-between items-center w-40">
                         <span class="material-icons-outlined">
                            support_agent
                            </span>
                </a>
                <a href="{{ route('partner.agents') }}" class="text-white">
                    <span class=" text-2xl mx-auto">Agents</span>
                </a>
            </li>
            <li class="py-4   flex items-center justify-between px-4">
                <a href="{{ route('partner.subscribers') }}" class="text-white  flex justify-between items-center w-40">
                         <i class="fas fa-users fa-2x"></i>
                </a>
                <a href="{{ route('partner.subscribers') }}" class="text-white">
                    <span class=" text-2xl mx-auto">Subscribers</span>
                </a>
            </li>
            @endif
            <li class="py-4   flex items-center justify-between px-4">
                <a href="#" class="text-white  flex justify-between items-center w-40">
                    <i class="fas fa-cog fa-2x"></i>
                </a>
                <a href="#" class="text-white">
                    <span class=" text-2xl mx-auto">Settings</span>
                </a>
            </li>

     
            <li class="py-4   flex items-center justify-between px-4">
                <a href="#" class="text-white flex justify-between items-center w-40">
                    <i class="fas fa-sign-out-alt fa-2x"></i>
                </a>
                <a href="#" class="text-white">
                    <span class="text-2xl mx-auto"> Logout</span>
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