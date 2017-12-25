<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Login Page 2 | Creative - Bootstrap 3 Responsive Admin Template</title>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('public/vendors/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="{{ asset('public/vendors/css/bootstrap-theme.css')}}" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="{{ asset('public/vendors/css/elegant-icons-style.css')}}" rel="stylesheet" />
    <link href="{{ asset('public/vendors/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="{{ asset('public/vendors/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('public/vendors/css/style-responsive.css')}}" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="{{ asset('public/vendors/js/html5shiv.js')}}"></script>
    <script src="{{ asset('public/vendors/js/respond.min.js')}}"></script>
    <![endif]-->
</head>

<body class="login-img3-body">

<div class="container">

    <form class="login-form" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <span class="input-group-addon"><i class="icon_profile"></i></span>
                <input id="name" type="text" class="form-control" placeholder="Name" name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                @endif
            </div>
            <div class="input-group{{ $errors->has('full_name') ? ' has-error' : '' }}">
                <span class="input-group-addon"><i class="icon_profile"></i></span>
                <input id="full_name" type="text" class="form-control" name="full_name" placeholder="Full - Name" value="{{ old('full_name') }}" required autofocus>

                @if ($errors->has('full_name'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('full_name') }}</strong>
                                    </span>
                @endif
            </div>
            <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <span class="input-group-addon"><i class="icon_mail"></i></span>
            <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required>

            @if ($errors->has('email'))
                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
            @endif
            </div>

            <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input id="password-confirm" type="password" class="form-control" placeholder="Password - Confirm" name="password_confirmation" required>
            </div>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
        </div>

    </form>
    <div class="text-right">
        <div class="credits">

            <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Business Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</div>


</body>
<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "register.html";
    };
</script>
</html>
