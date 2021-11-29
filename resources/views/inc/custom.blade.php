
    @switch($page_name)
    @case('dashboard')
    <link href="{{asset('assets/apex/apexcharts.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
    @break

    @default
    <script>console.log('no custom styles available')</script>
            
    @endswitch