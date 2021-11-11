<div class=" w-full bg-black p-10 flex justify-between items-center mx-auto " style="z-index: -8; height: 7.8rem;" >
    <!-- left -->
    <div class="flex items-center">
       <div class="flex items-center">
           <img src="assets/img/app-logo.png" alt="" class="w-60">
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
           <form method="POST" action="#" role="none">
             <button type="submit" class="text-gray-700 block w-full text-left px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-3">
               Sign out
             </button>
           </form>
         </div>
       </div>
     </div>
</div>
<div class="h-10 w-full navshade"></div>