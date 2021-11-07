@extends('layouts.app')

@section('content')

    <div class="layout-px-spacing">

        <div class="row layout-top-spacing" style="display:flex: justify-content:space-between">

            <div class=" col-sm" style="padding: 40px; text-align: center; margin:auto">
                <form class="form" action="{{route('users.import')}}" method="post" enctype="multipart/form-data">
                    @csrf 
                <label for="">upload excel file</label>
                <input type="file" class="form-control-file" name="healthFacilitiesGPS" id="" placeholder="" aria-describedby="fileHelpId">
                <button id="upload" class="btn btn-warning" type="submit">Upload</button>

            </form>
         </div>
         
         
         {{-- middle button --}}
         <div class="col-sm" style="display: flex; flex-direction:column; padding: 40px; justify-content:center; align-items:center; margin:auto">
             <label for="">view Health facilitices</label>
                <a href="{{route('serviceProvider')}}"  class="btn btn-danger" rel="noopener noreferrer">View</a>
         </div>
                
            <div class="col-sm  " style="display:flex; flex-direction:column; padding: 40px; text-align: center; margin:auto">
                <label for="">Export users as excel</label>
                <a href="{{route('users.export')}}" class="btn  btn-success">Export</a>
            </div>

        </div>

     
    </div>

  
   
    
    @endsection

