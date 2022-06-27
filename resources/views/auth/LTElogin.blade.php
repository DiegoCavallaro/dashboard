<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="vendor/bootstrap/css/icheck-bootstrap.min.css">
        <link rel="stylesheet" href="vendor/adminlte/dist/css/adminlte.min.css">
    </head>

    <body class="hold-transition login-page">

        <div class="login-box">
            <div class="login-logo">
                <a href="/"><b>FSC </b>S.A.</a>
            </div>

        <div class="card">
            <div class="card-body login-card-body" align="center">
                <a href="/">
                    <img src="images/fsc.png" />
                </a>

                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" id="nickName" name="nickName" class="form-control" placeholder="{{__('nickName')}}" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                    </div>
            
                    <div class="input-group mb-3">
                        <input type="password" id="password" name="password" class="form-control" placeholder="{{__('Password')}}" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                    </div>
            
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary" align="left">
                                <input type="checkbox" id="remember_me">
                                <label for="remember_me">{{__("Remember me")}}</label>
                            </div>
                        </div>
            
                         <div class="col-4">
                            <button type="submit" class="btn btn-outline-primary btn-block">{{__('Log in')}}</button>
                        </div>

                    </div>
                </form>

                </p>
                <p class="mb-3">
                    <a href="{{ route('register') }}" class="btn btn-outline-success btn-block">{{__('Register')}}</a>
                </p>
                
                <p><a href="#showForm" data-toggle="collapse" aria-expanded="false" aria-controls="collapse"> {{__('Forgot your password')}} </a></p>
                <div class="collapse" id="showForm">
                    <div class='well'>
                        <form action="login" method="post" autocomplete="off">
                            @csrf
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="{{__('enter the email associated with the account.')}}" required>
                            </div>
                            <button type="submit" class="btn btn-outline-danger btn-block">{{__('Email Password Reset Link')}}</button>
                        </form>    
                    </div>
                </div>
            </div>
            <!-- /.login-card-body -->
        </div>

        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="vendor/adminlte/dist/js/adminlte.min.js"></script>
    </body>
</html>
