<html>
  <head>
    @include('partial.head') 
  </head>
  <body>
    @include('partial.navbar')

    <div class="container">
    
      @yield('content')

    </div>
    
    @include('partial.script')
  </body>
</html>