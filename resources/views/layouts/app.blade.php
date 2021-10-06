<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>


    <!-- Bootstrap 5.1.0 CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/bootstrap-5.1.0/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"
        integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Data Table -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.2/css/jquery.dataTables.min.css">
    <!-- Custom Style -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/responsive.css')}}">


</head>

<body>


    <!-- Login Form -->
    @yield('content')



    <!-- jquery CDNJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Bootstrap 5.1.0 JS -->
    <script src="{{ asset('public/assets/bootstrap-5.1.0/bootstrap.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"
        integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Data Table -->
    <script src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>


    
    <!-- Custom JS -->
    <script src="{{ asset('public/assets/js/style.js')}}"></script>
    <script>
        $('.dropify').dropify();

        var datatable;
        $(document).ready(function () {
            datatable = $('#allQuotationTable').DataTable();
        });


        $(document).on('keyup', '#search-input', function () {
            var value = $(this).val();
            datatable.search(value).draw();
        });
    </script>

</body>

</html>