<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.css') }}" rel="stylesheet">
</head>
<body>
    @include('layouts.inc.frontnavbar')
        <div class="content">
            @yield('content')
        </div>

      <!-- Scripts -->
      <script src="{{ asset('js/bootstrap.bundle.js') }}" defer></script>
      <script src="{{ asset('js/owl.carousel.min.js') }}" defer></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      @if (session('status'))
           <script>
        swal("Success!", "{{ session('status') }}", "success");
      </script>
      @endif
      @yield('script')
</body>
</html>
