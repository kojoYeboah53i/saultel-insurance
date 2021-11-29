<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Holy Grail</title>
    <link rel="stylesheet" href="tailwindcss/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp">

    <style>
        .main{
          display: flex;
          justify-content: space-between;

        }
        .sidebar{
            background-color: #140505;
            padding: 1rem;
            border-radius: 1rem;
            /* position: fixed; */
            width: 15vw;
        }
        .main-sidebar{
            background-color: #f5f5f5;
            padding: 1rem;
            border-radius: 1rem;
            width: 13vw;
        }
        .main-content{
            background-color: #f5f5f5;
            padding: 1rem;
            border-radius: 1rem;
            grid-column: 2/3;
            width: 68vw;
            margin-left: -1.3rem;

        }
    
        @media only screen and (max-width: 600px) {
            .sidebar{
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="h-screen  bg-gray-200">
        <!-- header -->
        <!-- <div class="flex justify-center items-center h-16 bg-pink-100 header  p-4 w-full mb-5"> -->
            <div class="sticky top-0 w-full mx-auto  sm:px-6 lg:px-8 mb-5 p-2 bg-indigo-400" style="z-index:10;">
                <div class="flex items-center justify-between h-16" style=" height: 4rem;">
                  <div class="flex items-center">
                    <div class="flex-shrink-0">
                   
                      <a href="/" class="text-white text-2xl font-bold">
                      <img src="https://avatars.githubusercontent.com/u/26016361?v=4" alt="" class="rounded-3xl " style="height: 60px; width: 60px;">
                      </a>
                 
                    </div>
                  </div>
                
                  
                
                       <!-- right -->
                  
                   <div class=" inline-block text-left">
                       <div class="admin flex items-center">
                           <div class=" bg-white rounded-full p-2 mr-2">
                               <img src="https://images.unsplash.com/photo-1518806118471-f28b20a1d79d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" alt="" class="rounded-full w-8 h-8">
                           </div>
                           <div class=" text-white">
                               <h1>   Yeboah </h1>
                           </div>
                
                       </div>
                     
                     
  
                     </div>
                    </div>
                  </div>
                
        <!-- end header -->
        <!-- main -->
        <div class="main">
          <div class="sidebar fixed"> 
            
<div class=" sidebar-full   
transition ease-in duration-150 h-screen flex-col items-center py-2 px-4 " style="background-color: #161616">

    <nav class="nav flex items-center w-full ">
       <ul class="list-reset w-full">
    
           <li class="py-4 flex items-center justify-between px-4">
       
               <a href="{{ route('partner.claims') }}" class="{{ $page_name === 'partners' ? 'active' : 'inactive' }} text-white flex justify-between items-center w-40">
                <span class="material-icons">insert_chart</span>

            </a>
            <a href="{{ route('partner.claims') }}" class="text-white">
                <span class=" this-font mx-auto ">Analytics</span>
            </a>
           </li>
          <li class="py-4 flex items-center justify-between px-4">
           <a href="{{ route('partner.claims') }}" class="{{ $page_name === 'partners' ? 'active' : 'inactive' }} text-white flex justify-between items-center w-40">
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
                   <span class=" this-font">Service Providers</span>
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
                <span class="material-icons-outlined">
                    people
                    </span> 
            </a>
               <a href="{{ route('partner.subscribers') }}" class="text-white">
                   <span class="  mx-auto">Subscribers</span>
               </a>
           </li>
           <li class="py-4   flex items-center justify-between px-4">
               <a href="#" class="text-white  flex justify-between items-center w-40">
                   <i class="fas fa-cog "></i>
               </a>
               <a href="#" class="text-white">
                   <span class=" text-2xl mx-auto">Settings</span>
               </a>
           </li>

    
           <li class="py-4   flex items-center justify-between px-4">
               <a href="#" class="text-white flex justify-between items-center w-40">
                   <i class="fas fa-sign-out-alt "></i>
               </a>
               <a href="#" class="text-white">
                   <span class="text-2xl mx-auto"> Logout</span>
               </a>
           </li>
       </ul>
    
    </nav>

   

</div>

          </div>
          <div class="main-content flex-col">
              <div class="h-screen bg-green-300 rounded-2xl">
                  main content 1
              </div>
              <div class="h-screen bg-indigo-300 rounded-3xl"> main content 2</div>
          </div>
          <div class="main-sidebar"> main sidebar</div>
        </div>

    </div>








    <style>
            .this-font {
        font-size: 1.1rem;
        font-weight: bold;
        }
    </style>
</body>
</html>

