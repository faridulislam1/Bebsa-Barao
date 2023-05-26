<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <!-- font family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- icon -->
    <link rel="stylesheet" href="{{asset('front-end-asset')}}/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- jquery plugin -->
    <link rel="stylesheet" type="text/css" href="{{asset('front-end-asset')}}/vendor/wow/animate.css">
    <!-- CSS links -->
    <link rel="stylesheet" type="text/css" href="{{asset('front-end-asset')}}/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{asset('front-end-asset')}}/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{asset('front-end-asset')}}/css/media.css">

    <title>Bebsa-Barao</title>
</head>
<body>
@include('front-end.include.header')

@yield('content')

@include('front-end.include.footer')


<!-- JS links -->
<script src="{{asset('front-end-asset')}}/https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{asset('front-end-asset')}}/vendor/wow/wow.js"></script>
<script src="{{asset('front-end-asset')}}/js/popper.min.js"></script>
<script src="{{asset('front-end-asset')}}/js/bootstrap.min.js"></script>
<script src="{{asset('front-end-asset')}}/js/script.js"></script>
<script>
    $( document ).ready(function() {
        new WOW().init();
    });
</script>
</body>
</html>