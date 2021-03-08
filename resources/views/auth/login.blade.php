<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from byrushan.com/projects/maed/app/2.0/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Aug 2020 08:38:56 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>SIAKAD SMA ADHYAKSA 1 KOTA JAMBI</title>
        <link rel="shortcut icon" href="favicon.png" type="image/png">

        <!-- Vendor styles -->
        <link rel="stylesheet" href="{{asset('baru')}}/resources/vendors/zwicon/zwicon.min.css">
        <link rel="stylesheet" href="{{asset('baru')}}/resources/vendors/animate.css/animate.min.css">

        <!-- App styles -->
        <link rel="stylesheet" href="{{asset('baru')}}/resources/css/app.min.css">
    </head>

    <body>
        <div class="login">

            <!-- Login -->
            <div class="login__block active" id="login-main">
                <div class="login__header">
                    <i class="zwicon-user-circle"></i>
                    Selamat Datang, Silahkan Lakukan Login
                </div>
            <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-8">
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

                            <div class="col-md-8">
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
                            <div class="col-md-9 offset-md-3">
                                <button type="submit" class="btn btn-theme btn--icon-text" role="button">
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

        <!-- Vendors -->
        <script src="{{asset('baru')}}/resources/vendors/jquery/jquery.min.js"></script>
        <script src="{{asset('baru')}}/resources/vendors/popper.js/popper.min.js"></script>
        <script src="{{asset('baru')}}/resources/vendors/bootstrap/js/bootstrap.min.js"></script>

        <!-- App functions -->
        <script src="{{asset('baru')}}/resources/js/app.min.js"></script>
    </body>

<!-- Mirrored from byrushan.com/projects/maed/app/2.0/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Aug 2020 08:38:56 GMT -->
</html>
