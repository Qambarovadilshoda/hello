<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title', 'Online Job Portal') </title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="{{asset('https://fonts.googleapis.com')}}">

    <link rel="preconnect" href="{{asset('https://fonts.gstatic.com')}}" crossorigin>

    <link href="{{asset('https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;300;400;600;700&display=swap')}}" rel="stylesheet">

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{asset('css/bootstrap-icons.css')}}" rel="stylesheet">

    <link href="{{asset('css/owl.carousel.min.css')}}" rel="stylesheet">

    <link href="{{asset('css/owl.theme.default.min.css')}}" rel="stylesheet">

    <link href="{{asset('css/tooplate-gotto-job.css')}}" rel="stylesheet">

    <!--

Tooplate 2134 Gotto Job

https://www.tooplate.com/view/2134-gotto-job

Bootstrap 5 HTML CSS Template

-->
</head>

<body id="top">

    @include('partials.header')

   <main>
    @yield('content')
   </main>

   @include('partials.footer')

    <!-- JAVASCRIPT FILES -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/counter.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>

</body>

</html>