@extends('layouts.app')

@section('content')
<div class="container relative top-20">
    <div class="row justify-content-center">
        <div class="col-md-8 flex justify-center items-center mx-auto">
            <div class="flex justify-center items-center h-full">
                <div class="w-full max-w-sm">
                    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                Email
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="email" type="email" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                                Password
                            </label>
                            <input  id="password" type="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">  
                            {{-- <p class="text-gray-600 text-xs italic">
                                Please enter your password.
                            </p> --}}
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="flex items-center justify-between">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="sumbit">
                                Sign In
                            </button>
                            <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
                                Forgot Password?
                            </a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
         
        </div>
    </div>
</div>
<style>
    body{
        background-color:rgb(53, 52, 52) !important;
    }
</style>
@endsection
