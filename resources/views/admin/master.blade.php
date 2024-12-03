<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Coinreward - Admin @yield('title')</title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('public/assets/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('public/assets/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('public/assets/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('public/assets/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('public/assets/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('public/assets/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('public/assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('public/assets/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('public/assets/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('public/assets/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('public/assets/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('public/assets/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('public/assets/css/theme.css')}}" rel="stylesheet" media="all">
    <style type="text/css">
        .is-invalid{
            border-color: #dc3545;
        }

        .is-invalid:focus{
            border-color: #dc3545;
            box-shadow: 0 0 0 0.2rem rgba(220,53,69,.25);
        }

    </style>
</head>

<body class="animsition">
        <div class="page-wrapper">
            @yield('content')
        </div>
</body>


<!-- Jquery JS-->
<script src="{{asset('public/assets/vendor/jquery-3.2.1.min.js')}}"></script>
<!-- Bootstrap JS-->
<script src="{{asset('public/assets/vendor/bootstrap-4.1/popper.min.js')}}"></script>
<script src="{{asset('public/assets/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
<!-- Vendor JS       -->
<script src="{{asset('public/assets/vendor/slick/slick.min.js')}}">
</script>
<script src="{{asset('public/assets/vendor/wow/wow.min.js')}}"></script>
<script src="{{asset('public/assets/vendor/animsition/animsition.min.js')}}"></script>
<script src="{{asset('public/assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
</script>
<script src="{{asset('public/assets/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('public/assets/vendor/counter-up/jquery.counterup.min.js')}}">
</script>
<script src="{{asset('public/assets/vendor/circle-progress/circle-progress.min.js')}}"></script>
<script src="{{asset('public/assets/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
<script src="{{asset('public/assets/vendor/chartjs/Chart.bundle.min.js')}}"></script>
<script src="{{asset('public/assets/vendor/select2/select2.min.js')}}">
</script>

<!-- Main JS-->
<script src="{{asset('public/assets/js/main.js')}}"></script>
</html>
<!-- end document-->
