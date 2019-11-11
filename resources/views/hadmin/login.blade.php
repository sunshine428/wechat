@extends('layouts.hadmin')

@section('title', '登录页面')

@section('content')
    <body class="gray-bg">

    <div class="middle-box text-center loginscreen  animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">h</h1>

            </div>
            <h3>欢迎使用 hAdmin</h3>
            <form class="m-t" role="form" action="{{url('hadmin/loginDo')}}" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="用户名" name="username" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="密码" name="pwd" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b" id="btn">登 录</button>

                <p class="text-muted text-center"> <a href="login.html#"><small>忘记密码了？</small></a> | <a href="register.html">注册一个新账号</a>
                </p>

            </form>
        </div>
    </div>
    </body>
 </html>
@endsection




