<div class=" sidebar-slim transition ease-in duration-150 h-screen fixed top-40 bg-black flex-col items-center py-2 px-4 ">

    <nav class="slim hidden">
        <ul class="list-reset">
            <li class="py-4" onclick="menu_full()">
                <a href="#" class="text-white">
                    <i class="fas fa-bars fa-2x"></i>
                </a>
            </li>
           @if( $user->role_id == 1 || $user->role_id == 2 )

            <li class="py-4">
                <a href="superadmin.html" class="text-white">
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
                <a href="superadmin.html" class="text-white">
                    <i class="fas fa-sign-out-alt fa-2x"></i>
                </a>
            </li>
        </ul>
     </nav>
</div>

<div class=" sidebar-full transition ease-in duration-150 h-screen fixed top-40 bg-black flex-col items-center py-2 px-4 ">

     <nav class="nav justify-content-center  ">
        <ul class="list-reset">
            <li class="py-4" onclick="menu_slim()">
                <a href="#" class="text-white">
                    <i class="fas fa-times fa-2x"></i>
                </a>
            </li>
           @if( $user->role_id == 1 || $user->role_id == 2 )

            <li class="py-4">
                <a href="superadmin.html" class="text-white">
                     <i class="fas fa-user-circle fa-2x"></i>
                </a>
            </li>
            @endif
            <li class="py-4">
                <a href="superadmin.html" class="text-white">
                   <div></div>
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
                <a href="superadmin.html" class="text-white">
                    <i class="fas fa-sign-out-alt fa-2x"></i>
                </a>
            </li>
        </ul>
     
     </nav>

    

</div>
<style>
    .sidebar-slim {
    }
    .sidebar-full {
        width: 17rem;
        background: black;
    }
</style>
<script>
    function menu_full() {
        var x = document.getElementById("sidebar");
        alert("menu full")
      
    }
</script>