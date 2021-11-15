@if ($page_name != 'coming_soon' && $page_name != 'contact_us' && $page_name != 'error404' && $page_name != 'error500' && $page_name != 'error503' && $page_name != 'faq' && $page_name != 'helpdesk' && $page_name != 'maintenence' && $page_name != 'privacy' && $page_name != 'auth_boxed' && $page_name != 'auth_default')

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="{{asset('assets/js/libs/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/scrollspyNav.js')}}"></script>
<script src="{{asset('plugins/highlight/highlight.pack.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
@endif


@switch($page_name)
    @case('analytics')
      {{-- Dashboard --}}
      <script src="{{asset('plugins/apex/apexcharts.min.js')}}"></script>
      <script src="{{asset('assets/js/dashboard/dash_2.js')}}"></script>
      @break

    @case('sales')
      {{-- Dashboard 2 --}}
      <script src="{{asset('plugins/apex/apexcharts.min.js')}}"></script>
      <script src="{{asset('assets/js/dashboard/dash_1.js')}}"></script>
      @break

    
      @case('maps')
      {{-- Maps Jvector --}}
      <script src="{{asset('assets/js/scrollspyNav.js')}}"></script>
      <script src="{{asset('plugins/jvector/jquery-jvectormap-2.0.3.min.js')}}"></script>
      <script src="{{asset('plugins/jvector/africa/jquery-jvectormap-africa-en.js')}}"></script>
      <script src="{{asset('plugins/jvector/asia/jquery-jvectormap-asia-en.js')}}"></script>
      <script src="{{asset('plugins/jvector/continents/jquery-jvectormap-continents-en.js')}}"></script>
      <script src="{{asset('plugins/jvector/europe/jquery-jvectormap-europe-en.js')}}"></script>
      <script src="{{asset('plugins/jvector/north_america/jquery-jvectormap-north-america-en.js')}}"></script>
      <script src="{{asset('plugins/jvector/oceania/jquery-jvectormap-oceanina-en.js')}}"></script>
      <script src="{{asset('plugins/jvector/south-america/jquery-jvectormap-south-america-en.js')}}"></script>
      <script src="{{asset('plugins/jvector/worldmap_script/jquery-jvectormap-world-mill-en.js')}}"></script>
      <script src="{{asset('plugins/jvector/jvector_script.js')}}"></script>
      @break

      @default
      <script>console.log('No custom script available.')</script>
  @endswitch