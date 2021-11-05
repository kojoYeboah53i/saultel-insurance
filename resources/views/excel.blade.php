@extends('layouts.app')

@section('content')

    <div class="layout-px-spacing">

        <div class="row layout-top-spacing" style="display:flex: justify-content:space-between">

            <div class="form-group col-sm" style="padding: 40px; text-align: center; margin:auto">
                <label for=""></label>
                <input type="file" class="form-control-file" name="" id="" placeholder="" aria-describedby="fileHelpId">
                <small id="fileHelpId" class="form-text text-muted">Help text</small>
            </div>
            <div class="col-sm" style="padding: 40px; text-align: center; margin:auto">
                <a href="{{route('users.export')}}" class="btn btn-block btn-success">Export</a>
            </div>

        </div>
    </div>
    
    @endsection

