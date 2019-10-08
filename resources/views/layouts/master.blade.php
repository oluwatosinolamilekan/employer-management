
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Goole fonts -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700%7CFira+Sans:300,400,400i,600" rel="stylesheet">
    <!-- Material icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/theme.min.css')}}">
    @yield('css')
    <title>Employer Management</title>
</head>

<body>
    
   @include('layouts.header')
    
    @yield('content')

    @include('layouts.footer')
    <!-- Footer -->

<script src="{{asset('frontend/js/theme.min.js')}}"></script>
@yield('script')
</body>
</html>
