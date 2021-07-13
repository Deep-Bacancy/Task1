{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ url('/login/google') }}" class="btn btn-google-plus"> Google</a>
</div>
@endsection --}}

<!doctype html>
<html lang="en">
  <head>
      <style>
           .login_form_wrapper {
    float: left;
    width: 100%;
    padding-top: 40px;
    padding-bottom: 100px;
    background-color: grey
}

.login_wrapper {
    padding-bottom: 20px;
    margin-bottom: 20px;
    border-bottom: 1px solid #e4e4e4;
    float: left;
    width: 100%;
    background: #fff;
    padding: 50px
}

.login_wrapper a.btn {
    color: #fff;
    width: 100%;
    height: 50px;
    padding: 6px 25px;
    line-height: 36px;
    margin-bottom: 20px;
    text-align: left;
    border-radius: 5px;
    background: #4385f5;
    font-size: 16px;
    border: 1px solid #4385f5
}

.login_wrapper a i {
    float: right;
    margin: 0;
    line-height: 35px
}

.login_wrapper a.google-plus {
    background: #db4c3e;
    border: 1px solid #db4c3e
}

.login_wrapper h2 {
    font-size: 18px;
    font-weight: 500;
    margin-bottom: 20px;
    color: #111;
    line-height: 20px;
    text-transform: uppercase;
    text-align: center;
    position: relative
}

.login_wrapper .formsix-pos,
.formsix-e {
    position: relative
}

.form-group {
    margin-bottom: 15px
}

.login_wrapper .form-control {
    height: 53px;
    padding: 15px 20px;
    font-size: 14px;
    line-height: 24px;
    border: 1px solid #fafafa;
    border-radius: 3px;
    box-shadow: none;
    font-family: 'Roboto';
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    background-color: #fafafa
}

.login_wrapper .form-control:focus {
    color: #999;
    background-color: fafafa;
    border: 1px solid #4285f4 !important
}

.login_remember_box {
    margin-top: 30px;
    margin-bottom: 30px;
    color: #999
}

.login_remember_box .control {
    position: relative;
    padding-left: 20px;
    cursor: pointer;
    font-size: 12px;
    font-weight: 500;
    margin: 0
}

.login_remember_box .control input {
    position: absolute;
    z-index: -1;
    opacity: 0
}

.login_remember_box .control__indicator {
    position: absolute;
    top: 0;
    left: 0;
    width: 15px;
    height: 15px;
    background: #fff;
    border: 1px solid #999
}

.login_remember_box .forget_password {
    float: right;
    color: #db4c3e;
    line-height: 12px;
    text-decoration: underline
}

.login_btn_wrapper {
    padding-bottom: 20px;
    margin-bottom: 30px;
    border-bottom: 1px solid #e4e4e4
}

.login_btn_wrapper a.login_btn {
    text-align: center;
    text-transform: uppercase
}

.login_message p {
    text-align: center;
    font-size: 16px;
    margin: 0
}

p {
    color: #999999;
    font-size: 14px;
    line-height: 24px
}

.login_wrapper a.login_btn:hover {
    background-color: #2c6ad4;
    border-color: #2c6ad4
}

.login_wrapper a.btn:hover {
    background-color: #2c6ad4;
    border-color: #2c6ad4
}

.login_wrapper a.google-plus:hover {
    background: #bd4033;
    border-color: #bd4033
}



      </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Login page</title>
  </head>
  <body>
    <div class="login_form_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <!-- login_wrapper -->
                    <div class="login_wrapper">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6"> <a href="{{ url('/login/google') }}" class="btn btn-primary facebook"> <span>Login with Google</span> <i class="fa fa-facebook"></i> </a> </div>
                            {{-- <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6"> <a href="#" class="btn btn-primary google-plus"> Login with Google <i class="fa fa-google-plus"></i> </a> </div> --}}
                        </div>
                        <h2>or</h2>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                        <div class="formsix-pos">
                            <div class="form-group i-email"> <input type="email"  name="email" class="form-control @error('email')  is-invalid  @enderror" required="" id="email2" placeholder="Email Address *">
                                @error('email')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                            @enderror
                            
                            </div>
                        </div>
                        <div class="formsix-e">
                            <div class="form-group i-password"> <input type="password"  name="password" class="form-control @error('password')  is-invalid  @enderror" required="" id="password2" placeholder="Password *"> 
                                @error('password')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                            @enderror
                            
                            </div>
                        </div>
                        <div class="login_remember_box"> <label class="control control--checkbox">Remember me <input type="checkbox"> <span class="control__indicator"></span> </label> <a href="#" class="forget_password"> Forgot Password </a> </div>
                        {{-- <div class="login_btn_wrapper"> <a href="#" class="btn btn-primary login_btn"> Login </a> </div> --}}
                        <button type="submit" class="btn btn-primary">Login</button>
                        <div class="login_message">
                            <p>Don’t have an account ? <a href="#"> Sign up </a> </p>
                        </div>
                    </form>
                    </div> <!-- /.login_wrapper-->
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>