@extends('layouts.app')
@section('title')
    {{'Dashboard'}}
@endsection
@section('content')

@include('inc.header')

<div class="bg-gray-400 h-screen">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="jumbotron">
                    <h1 class="display-3">Jumbo heading</h1>
                    <p class="lead">Jumbo helper text</p>
                    <hr class="my-2">
                    <p>More info</p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1 class="display-3">Fluid jumbo heading</h1>
                        <p class="lead">Jumbo helper text</p>
                        <hr class="my-2">
                        <p>More info</p>
                        <p class="lead">
                            <a class="btn btn-warning btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1 class="display-3">Fluid jumbo heading</h1>
                        <p class="lead">Jumbo helper text</p>
                        <hr class="my-2">
                        <p>More info</p>
                        <p class="lead">
                            <a class="btn btn-success btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>













@endsection