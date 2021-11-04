@extends('layouts.app')

@section('content')

<div id="full" style="height: 100vh; padding: 100px;">

<div class="container">
    hello {{ Auth::user()->name }}

    <button onclick="async('{{route('getCurrentUser')}}')" class="btn btn-block btn-warning btn-outline-danger" type="button"> async</button>
</div>
</div>


<script>
    async function async(url) {
        try {
            alert("aysuser is getting this user data");
      let res =  await fetch(url)
        let data = await res.json();
        console.log(data)
    } catch (error) {
    console.log(error)
     }
    }
</script>
 
@endsection