@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
        @if(!empty($facilities[0]))        
        <div class="widget widget-table-two">

            <div class="widget-heading">
                <h5 class="">Health Facilities</h5>
            </div>

            <div class="widget-content">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th><div class="th-content">Name</div></th>
                                <th><div class="th-content">Type</div></th>
                                <th><div class="th-content">Town</div></th>
                                <th><div class="th-content th-heading">Map</div></th>
                                <th><div class="th-content">Action</div></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $facilities as $key=>$facility) 
                            <tr>
                                <td><div class="td-content customer-name"><img src="{{asset('assets/img/90x90.jpg')}}" alt="avatar">{{$facility->facility_name}}</div></td>
                                <td><div class="td-content product-brand">{{$facility->facility_type}}</div></td>
                                <td><div class="td-content">{{$facility->facility_town}}</div></td>
                                <td><div class="td-content pricing"><span class=""><button class="btn btn-sm btn-outline-warning"> View</button></span></div></td>
                                <td><div class="td-content"><span class="badge "> 
                                    <div class="col-sm " style="display:flex; justify-content: space-around; align-items: center">
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
    </div>


</div>
{{ $facilities->links() }}

@endsection