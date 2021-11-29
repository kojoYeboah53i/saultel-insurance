{{-- mandatory scrips --}}

<script src="{{ asset('material-ui/js/jquery-3.1.1.min.js') }}" ></script>
<script src="{{ asset('material-ui/js/core/popper.min.js') }}" ></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}" ></script>
<script src="{{ asset('material-ui/js/plugins/perfect-scrollbar.min.js') }}" ></script>
<script src="{{ asset('material-ui/js/plugins/smooth-scrollbar.min.js') }}" ></script>
<script src="{{ asset('material-ui/js/plugins/chartjs.min.js') }}" ></script>

<!-- Github buttons -->
<script async  src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('material-ui/js/material-dashboard.min.js?v=3.0.0') }}" ></script>

{{-- end mandary scrips --}}
@switch($page_name)
    @case('dashboard')
    <script src="{{ asset('js/custom.js')  }}"></script></script> 
    @break

@default
<script>console.log('No custom script available.')</script>
        
@endswitch

