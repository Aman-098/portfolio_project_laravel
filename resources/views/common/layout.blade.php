
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{asset ('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset ('assets/css/jquery-ui.css')}}" rel="stylesheet">
    <!-- Bootstrap Icon CSS -->
    <link href="{{asset ('assets/css/bootstrap-icons.css')}}" rel="stylesheet">
    <!-- CSS -->
    <link href="{{asset ('assets/css/animate.min.css')}}" rel="stylesheet">
    <!-- FancyBox CSS -->
    <link href="{{asset ('assets/css/jquery.fancybox.min.css')}}" rel="stylesheet">
    <!-- Swiper slider CSS -->
    <link rel="stylesheet" href="{{asset ('assets/css/swiper-bundle.min.css')}}">
    <!-- Slick slider CSS -->
    <link rel="stylesheet" href="{{asset ('assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset ('assets/css/slick-theme.css')}}">
    <!-- BoxIcon  CSS -->
    <link href="{{asset ('assets/css/boxicons.min.css')}}" rel="stylesheet">
    <!--  Style CSS  -->
    <link rel="stylesheet" href="{{asset ('assets/css/style.css')}}">
    <!-- Title -->
    <title>@yield('title', 'My Portfolio')</title>
    <link rel="icon" href="{{asset ('assets/img/fav-icon.svg')}}" type="image/gif" sizes="20x20">
</head>

{{-- header --}}
@include('partials.header')


{{-- main content --}}

@yield('content')




{{-- footer --}}
@include('partials.footer')

