<html>
<head>
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="favicon.ico"> <link href="{{asset('hadmin/css/bootstrap.min.css?v=3.3.6')}}" rel="stylesheet">
    <link href="{{asset('hadmin/css/font-awesome.css?v=4.4.0')}}" rel="stylesheet">

    <link href="{{asset('hadmin/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('hadmin/css/style.css?v=4.1.0')}}" rel="stylesheet">

    <!-- 全局js -->
    <script src="{{asset('hadmin/js/bootstrap.min.js?v=3.3.6')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>

</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>