@extends('layouts.app')

@section('content')
<div class="container" style="width: 80%; height:auto; text-align: center; margin:auto;">


    @if(!empty($facilities[0]))
        <table class="table table-striped">
            <thead>
                <tr>
                    {{-- <th>#</th> --}}
                    <th>Name</th>
                    <th>town</th>
                    <th>lat</th>
                    <th>long</th>
                    {{-- <th>Role</th> --}}
                    <th>date</th>
                </tr>
            </thead>
            <tbody>
             @foreach( $facilities as $key=>$facility) 
                    <tr>
                        {{-- <td>{{$facility->id}}</td> --}}
                        <td>{{$facility->facility_name}}</td>
                        <td>{{$facility->town}}</td>
                        <td>{{$facility->lat}}</td>
                        <td>{{$facility->long}}</td>
                        <td>{{$facility->created_at}}</td>
                        <td>
                            <a href="" class="btn btn-primary">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $facilities->links() }}
        @endif

</div>

@endsection