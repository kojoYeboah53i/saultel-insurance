@extends('layouts.app')

@section('content')
<div class=""  style=" display:flex; flex-direction:column; align-items:center; width:80%; text-align: center; margin:auto; padding:50px;">
    @if(!empty($facilities[0]))  
    <div class="layout-px-spacing">

        <div class="row layout-top-spacing">
    <div class="col col-lg-12  layout-spacing">
        <div class="widget widget-table-two">

            <div class="widget-heading">
                <h5 class="p-4" style="margin:50px; font-weight: 400">Health Facilities</h5>
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
                                    <div class="col-sm " style="display:flex; justify-content: space-between; align-items: center">
                                        <a href="{{route('facility.edit', $facility->id)}}" class="btn btn-sm btn-outline-warning">Edit</a>
                                        <form action="{{route('facility.destroy', $facility->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                        </form>
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