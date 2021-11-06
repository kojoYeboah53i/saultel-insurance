@extends('layouts.app')

@section('content')
<div class="container" style="width: 80%; height:auto; text-align: center; margin:auto;">
    @if(1 > 0)
        if statment is valid
    @endif

    @if($data->count() > 0)
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
                @foreach($data as $facility)
                    <tr>
                        {{-- <td>{{$facility->id}}</td> --}}
                        <td>{{$facility->facility_name}}</td>
                        <td>{{$facility->town}}</td>
                        <td>{{$facility->lat}}</td>
                        <td>{{$facility->long}}</td>
                        <td>{{$facility->created_at}}</td>
                        <td>
                            {{-- <a href="{{route('users.edit', $facility->id)}}" class="btn btn-primary">Edit</a> --}}
                            {{-- <a href="{{route('users.delete', $facility->id)}}" class="btn btn-danger">Delete</a> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @endif

</div>

@endsection