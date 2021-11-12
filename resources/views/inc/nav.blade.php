<div class=" w-full bg-black p-10 flex justify-between items-center mx-auto " style="z-index: -8; height: 7.8rem;" >
    <!-- left -->
    <div class="flex items-center">
       <div class="flex items-center">
           @if( $user->role_id == 1 || $user->role_id == 2 )
                <a href="/" class="text-white text-2xl font-bold">
                <img src="assets/img/app-logo.png" alt="" class="w-60">
                </a>
         @endif
         @if( $user->role_id == 3 )
           <a href="/" class="text-white text-2xl font-bold">
           <img src="assets/img/nyaho.jpg" alt="" class="w-60">
           </a>
         @endif
        </div>

   </div>

       <!-- right -->
  
   <div class="relative inline-block text-left">
       <div class="admin flex items-center">
           <div class=" bg-white rounded-full p-2 mr-2">
               <img src="https://images.unsplash.com/photo-1518806118471-f28b20a1d79d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" alt="" class="rounded-full w-8 h-8">
           </div>
           <div class=" text-white">
               <h1>    {{ Auth::user()->name }}  </h1>
           </div>

       </div>
     
       <!--
         Dropdown menu, show/hide based on menu state.
     
         Entering: "transition ease-out duration-100"
           From: "transform opacity-0 scale-95"
           To: "transform opacity-100 scale-100"
         Leaving: "transition ease-in duration-75"
           From: "transform opacity-100 scale-100"
           To: "transform opacity-0 scale-95"
       -->
       <div class="hidden origin-top-right absolute right-0 mt-2 w-40 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
         <div class="py-1" role="none">
           <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
           <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Your Profile</a>
           <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Settings</a>
           <form method="POST" action="{{ route('logout') }}
           
           " role="none" class="" id="logout-form">
              @csrf
             <button type="submit" class="text-gray-700 block w-full text-left px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-3
             " onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
             >
              
                <div class="flex justify-between">
                    Sign Out
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> 
                

                </div>
             </button>
           </form>
         </div>
       </div>
     </div>
</div>
<div class="h-10 w-full navshade"></div>

