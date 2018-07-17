<!-- Header  --> 
@include('layouts.header')
  <body>

    <div class="container">
      <!-- Nav  --> 
      @include('layouts.nav')

      <!-- Content  --> 
      @yield('content')
    
      <!-- Footer  --> 
      @include('layouts.footer')
    </div>
    
  </body>
</html>
