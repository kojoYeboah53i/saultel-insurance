@extends('layouts.app')

@section('content')


<div class=""  style="display:flex; flex-direction:column; align-items:center; width:80%; text-align: center; margin:auto; padding:50px;">
    @if(!empty($facility))  
    <div class="layout-px-spacing">
  
        <div class="layout-top-spacing">
         <div class="col-lg  layout-spacing" style="width: 53rem; padding:40px;">
            <div class="form">
                <form method="post" action="{{ route('facility.edit',  $facility->id) }}">
                    @csrf
                    @method('put')
                    <div class="form-group">
                      
                        <label for="t-text" class="sr-only">Facility Name</label>
                        <input id="t-text" type="text" name="facility_name" placeholder="{{ $facility->facility_name }}" class="form-control" value="{{ $facility->facility_name }}" required>
                    </div>
                    {{-- <div class="form-group">
                      
                        <label for="t-text" class="sr-only">Facility Name</label>
                        <input id="t-text" type="text" name="facility_type" placeholder="{{ $facility->facility_name }}" class="form-control" value="{{ $facility->facility_name }}" required>
                    </div>
                    <div class="form-group">
                      
                        <label for="t-text" class="sr-only">Facility Name</label>
                        <input id="t-text" type="text" name="town" placeholder="{{ $facility->facility_name }}" class="form-control" value="{{ $facility->facility_name }}" required>
                    </div> --}}
                    <div id="submit-btn">
                    <button type="submit" class="btn btn-block btn-dark" style="height: 8vh;"> Submit</button>

                    </div>
                </form>

            </div>




      </div>
     </div>
  </div>
  @endif

  <style>
      .form{
          width: 80%;
          padding: 50px;
          text-align: center;
          margin: auto;
      }
      #submit-btn{
          width: 60%;
          /* height: 10vh; */
          text-align: center;
          margin: auto;
      }
  </style>
</div>













@endsection()