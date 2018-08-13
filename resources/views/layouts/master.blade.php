<!-- Header  --> 
@include('layouts.header')
  <body>

    <div class="container">
      <!-- Nav  --> 
      @include('layouts.nav')

      <!-- Message -->
      @if($flash = session('message'))
        <div id="flash-message" class="alert alert-success" role="alert">
           {{ $flash }}
        </div>
      @endif

      <!-- Content  --> 
      @yield('content')
    
      <!-- Footer  --> 
      @include('layouts.footer')
    </div>
    
  </body>
</html>
