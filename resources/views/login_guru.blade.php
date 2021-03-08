<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from html.phoenixcoded.net/mega-able/dark/auth-normal-sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jan 2021 09:35:21 GMT -->
<head>
    <title>SIAKAD SMA ADHYAKSA 1 KOTA JAMBI</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Gradient Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
      <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="Phoenixcoded" />
      <!-- Favicon icon -->
      <!-- Google font-->
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="{{ asset('mega-able') }}/files/bower_components/bootstrap/css/bootstrap.min.css">
      <!-- waves.css -->
      <link rel="stylesheet" href="{{ asset('mega-able') }}/files/assets/pages/waves/css/waves.min.css" type="text/css" media="all">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="{{ asset('mega-able') }}/files/assets/icon/themify-icons/themify-icons.css">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="{{ asset('mega-able') }}/files/assets/icon/icofont/css/icofont.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="{{ asset('mega-able') }}/files/assets/icon/font-awesome/css/font-awesome.min.css">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('mega-able') }}/files/assets/css/style.css">
  </head>

  <body themebg-pattern="theme1">
  <!-- Pre-loader start -->
  <div class="theme-loader">
      <div class="loader-track">
          <div class="preloader-wrapper">
              <div class="spinner-layer spinner-blue">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
              <div class="spinner-layer spinner-red">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>

              <div class="spinner-layer spinner-yellow">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>

              <div class="spinner-layer spinner-green">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Pre-loader end -->

    <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    {{ Form::model($obj, array('action' => $action, 'files' => true, 'method' => $method)) }}
                        <form class="md-float-material form-material">
                            <div class="text-center">
                                <img src="{{ asset('mega-able') }}/files/assets/images/logo6.png" alt="logo.png" height="7%" width="7%">
                            </div>
                            <div class="auth-box card">
                                <div class="card-block">
                                    <div class="row m-b-20">
                                        <div class="col-md-12">
                                            <h3 class="text-center">Login</h3>
                                        </div>
                                    </div>

                                    @if (session('error'))
                                    <div class="alert alert-danger">
                                        {{ session('error') }}
                                    </div>
                                @endif

                                    <div class="form-group">
                                        {{ Form::text('NIP',null,['class' => 'form-control','placeholder' => 'Masukkan NIP']) }}
                                        <span class="text-danger">{{ $errors->first('NIP') }}</span>
                                    </div>
                                    <div class="form-group">
                                        {{ Form::password('password',['class' => 'form-control','placeholder' => 'Password']) }}
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    <div class="row m-t-30">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Sign in</button>
                                        </div>
                                    </div>
                                    <hr/>

                                    <div class="row">
                                        <div class="col-md-10">
                                            <p class="text-inverse text-left"><a href="{{ url('/',[]) }}"><b>Back to website</b></a></p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        {!! Form::close() !!}
                        <!-- end of form -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>

<script type="text/javascript" src="{{ asset('mega-able') }}/files/bower_components/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('mega-able') }}/files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="{{ asset('mega-able') }}/files/bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="{{ asset('mega-able') }}/files/bower_components/bootstrap/js/bootstrap.min.js"></script>
<!-- waves js -->
<script src="{{ asset('mega-able') }}/files/assets/pages/waves/js/waves.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{ asset('mega-able') }}/files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{ asset('mega-able') }}/files/bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="{{ asset('mega-able') }}/files/bower_components/modernizr/js/css-scrollbars.js"></script>
<!-- i18next.min.js -->
<script type="text/javascript" src="{{ asset('mega-able') }}/files/bower_components/i18next/js/i18next.min.js"></script>
<script type="text/javascript" src="{{ asset('mega-able') }}/files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="{{ asset('mega-able') }}/files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="{{ asset('mega-able') }}/files/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
<script type="text/javascript" src="{{ asset('mega-able') }}/files/assets/js/common-pages.js"></script>
</body>


<!-- Mirrored from html.phoenixcoded.net/mega-able/dark/auth-normal-sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jan 2021 09:35:21 GMT -->
</html>
