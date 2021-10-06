<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Bootstrap 5.1.0 CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/bootstrap-5.1.0/bootstrap.min.css')}}">
    <!-- Custom Style -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/responsive.css')}}">


</head>

<body>
   
@guest
   
@else
     
    
    <!-- Navbar -->
        @include('backend.inc.header')


    <!-- SideNavbar -->
        @include('backend.inc.sidebar')

@endguest
    <!-- Main Content -->
        @yield('content')






    <!-- jquery CDNJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Bootstrap 5.1.0 JS -->
    <script src="{{ asset('public/assets/bootstrap-5.1.0/bootstrap.min.js')}}"></script>
    <!-- Custom JS -->
    <script src="{{ asset('public/assets/js/style.js')}}"></script>


</body>

</html>