@extends('layouts.index')

@section('content')
{{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> --}}
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp">


        
            <header class=" shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                  <h1 class="text-3xl font-bold text-gray-900">
                    Dashboard
                  </h1>
                </div>
              </header>
              <main>
                  
              <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8 flex-col">
                    <h1> Partners</h1>
                    <div>
                        @if(!empty($partners))  
                        <div class="table-responsive">
                           <table class="table">
                               <thead>
                                   <tr>
                                       <th><div class="th-content">#</div></th>
                                       <th><div class="th-content">Name</div></th>
                                       <th><div class="th-content">email</div></th>
                                       <th><div class="th-content">phone</div></th>
                                
                                   </tr>
                               </thead>
                               <tbody>
                                   @foreach( $partners as $key=>$partner)
                                   <tr>
                                       <td>{{$partner->id}}</td>
                                       <td>{{$partner->name}}</td>
                                       <td>{{$partner->email}}</td>
                                       <td>{{$partner->phone}}</td>
                                       <td>{{$partner->address}}</td>
                                       <td>
                                           <a href="#" class="btn btn-primary">Edit</a>
                                           <form action="#" method="POST">
                                               @csrf
                                               @method('DELETE')
                                               <button type="submit" class="btn btn-danger">Delete</button>
                                           </form>
                                       </td> 
                                   </tr>
                                   @endforeach
                               </tbody>
                           </table>
                       </div>
                       
                           @endif
                         </div>
                    </div>
             @if(!empty($subscribers))  
             <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th><div class="th-content">#</div></th>
                            <th><div class="th-content">Name</div></th>
                            <th><div class="th-content">email</div></th>
                            <th><div class="th-content">phone</div></th>
                     
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $subscribers as $key=>$subscriber)
                        <tr>
                            <td>{{$subscriber->id}}</td>
                            <td>{{$subscriber->name}}</td>
                            <td>{{$subscriber->email}}</td>
                            <td>{{$subscriber->phone}}</td>
                            <td>
                                <a href="#" class="btn btn-primary">Edit</a>
                                <form action="#" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td> 
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
                @endif
              </div>

              </main>
@endsection