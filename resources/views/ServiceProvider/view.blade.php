@extends('layouts.app')

@section('content')
<div class=""  style=" display:flex; flex-direction:column; align-items:center; width:80%; text-align: center; margin:auto; padding:50px;">
    @if(!empty($facilities[0]))  
    <div class="layout-px-spacing">
  
        <div class="row layout-top-spacing">
    <div class="col col-lg-12  layout-spacing">
        @if (session('success'))
        <div class="alert alert-success p-2 mb-5">
            {{ session('success') }}
        </div>
        @endif
        <div class="widget widget-table-two" style="margin-top: -70px;">

            <div class="widget-heading">
                <h5 class="p-4" style="font-size:2.3rem; margin-bottom: 40px; margin:10px; font-weight: 400">Health Facilities</h5>
            </div>

            <div class="widget-content">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th><div class="th-content">Logo</div></th>
                                <th><div class="th-content">Name</div></th>
                                <th><div class="th-content">Type</div></th>
                                <th><div class="th-content">Town</div></th>
                                <th><div class="th-content">Ownership</div></th>
                                <th><div class="th-content th-heading">Map</div></th>
                                <th><div class="th-content">Action</div></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $facilities as $key=>$facility) 
                            <tr>
                                <td><div class="td-content product-brand">
                                    <img src="{{asset('assets/img/90x90.jpg')}}" alt="avatar" style="border-radius: 50%;">
                                </div></td>
                                <td><div class="td-content customer-name">
                                    {{$facility->facility_name}}

                                </div></td>
                                <td><div class="td-content product-brand">{{$facility->facility_type}}</div></td>
                                <td><div class="td-content">{{$facility->town}}</div></td>
                                <td><div class="td-content">{{$facility->ownership}}</div></td>
                                <td><div class="td-content pricing"><span class=""><button class="btn btn-sm btn-outline-success"> View</button></span></div></td>
                                <td><div class="td-content"><span class="badge "> 
                                    <div class="d-flex justify-content-between">
                                        <div  class="mx-10" >
                                            <form  action="{{ route('facility.edit', $facility->id) }}" method="POST">
                                                @csrf
                                                @method('put')
                                                <input class="btn btn-sm btn-outline-warning" type="submit" value="Edit" />
                                            </form>
                                        </div>
                                        
                                        {{-- delete form --}}
                                            <div>
                                          
                                                <form action="{{ route('facility.delete', $facility->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input class="btn btn-sm btn-outline-danger" type="submit" value="Delete" />
                                                </form>
                                            </div>
                                    </div>
                                </span></div></td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            @endif
        </div>
            <div class="p-4" style="display: flex; justify-content:center; align-items:center; margin:auto;">
                {{ $facilities->links() }}
            </div>
    </div>
    </div>      
</div>      

</div>


@endsection