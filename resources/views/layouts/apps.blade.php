<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from byrushan.com/projects/maed/app/2.0/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Aug 2020 08:37:03 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Siakad SMA ADHYAKSA 1 KOTA JAMBI</title>
        <link rel="shortcut icon" href="favicon.png" type="image/png">

        <!-- Vendors -->
        <link href="{{asset('baru')}}/resources/vendors/animate.css/animate.min.css" rel="stylesheet">
        <link href="{{asset('baru')}}/resources/vendors/zwicon/zwicon.min.css" rel="stylesheet">
        <link href="{{asset('baru')}}/resources/vendors/overlay-scrollbars/OverlayScrollbars.min.css" rel="stylesheet">
        <link href="{{asset('baru')}}/resources/vendors/fullcalendar/core/main.min.css" rel="stylesheet">
        <link href="{{asset('baru')}}/resources/vendors/fullcalendar/daygrid/main.min.css" rel="stylesheet">

        <link href="{{asset('baru')}}/resources/css/app.min.css" rel="stylesheet">
    </head>

    <body>
        <header class="header">
            <div class="header__main">
                <i class="navigation-toggle zwicon-hamburger-menu d-xl-none"></i>

                <div class="logo d-none d-md-block">
                    <a href="">
                        SIAKAD
                        <small>SMA ADHYAKSA 1</small>
                    </a>
                </div>



                <ul class="top-nav">
                    <li class="d-xl-none">
                        <a class="top-nav__search" href="#"><i class="zwicon-search"></i></a>
                    </li>

                    <li class="d-xl-none">
                        <a data-notification="#notifications-messages" href="#"><i class="zwicon-mail"></i></a>
                    </li>

                    <li class="d-xl-none">
                        <a data-notification="#notifications-alerts" href="#"><i class="zwicon-bell"></i></a>
                    </li>

                    <li class="d-none d-sm-block d-xl-none">
                        <a data-notification="#notifications-tasks" href="#"><i class="zwicon-task"></i></a>
                    </li>


                <div class="user dropdown">
                    <a data-toggle="dropdown" class="d-block" href="#">
                        <img class="user__img" src="{{asset('baru')}}/demo/img/contacts/5.jpg" alt="">
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-header">Hello {{auth::user()->name}}</div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                    </div>
                </div>
            </div>
        </header>

        <div class="main">
            <aside class="sidebar notifications">

            </aside>

            <aside class="sidebar navigation">
                <div class="scrollbar">
                    <ul class="navigation__menu">
                        <li>
                            <a class="text-active-blue {{request()->is('home') ? 'active' : ''}}" href="{{ url('home', []) }}"><i class="zwicon-home text-blue"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="{{url('admin/siswa/index', [])}}" class="text-active-red  {{request()->is('admin/siswa/index') ? 'active' : ''}} "><i class="zwicon-layout-2 text-amber"></i>Data siswa</a>
                        </li>
                        <li>
                            <a href="{{url('admin/guru/index', [])}}" class="text-active-green {{request()->is('admin/guru/index') ? 'active': ''}}"><i class="zwicon-layout-2 text-green"></i>Data Guru</a>
                        </li>
                        <li>
                            <a href="{{url('admin/kelas/index', [])}}" class="text-active-blue {{request()->is('admin/kelas/index') ? 'active': ''}} "><i class="zwicon-layout-2 text-blue"></i>Data Kelas</a>
                        </li>
                        <li>
                            <a href="{{url('admin/mapel/index', [])}}" class="text-active-yellow {{request()->is('admin/mapel/index') ? 'active': ''}} "><i class="zwicon-layout-2 text-yellow"></i>Data Mapel</a>
                        </li>
                    </ul>
                </div>
            </aside>

            <section class="content">
                <header class="content__title">
                    <h1>SISTEM INFORMASI AKADEMIK SMA ADHYAKSA 1 KOTA JAMBI</h1>
                </header>
                <main class="py-4">
                @if(Session::has('toast_success'))
                    @include('sweetalert::alert')
                @elseif(session::has('toast_info'))
                    @include('sweetalert::alert')
                @endif
                    @yield('content')
                </main>

            </section>
        </div>

        <!-- Vendors -->
        <script src="{{asset('baru')}}/resources/vendors/jquery/jquery.min.js"></script>
        <script src="{{asset('baru')}}/resources/vendors/popper.js/popper.min.js"></script>
        <script src="{{asset('baru')}}/resources/vendors/bootstrap/js/bootstrap.min.js"></script>
        <script src="{{asset('baru')}}/resources/vendors/headroom/headroom.min.js"></script>
        <script src="{{asset('baru')}}/resources/vendors/overlay-scrollbars/jquery.overlayScrollbars.min.js"></script>
        <script src="{{asset('baru')}}/resources/vendors/flot/jquery.flot.js"></script>
        <script src="{{asset('baru')}}/resources/vendors/flot/jquery.flot.resize.js"></script>
        <script src="{{asset('baru')}}/resources/vendors/flot/flot.curvedlines/curvedLines.js"></script>
        <script src="{{asset('baru')}}/resources/vendors/sparkline/jquery.sparkline.min.js"></script>
        <script src="{{asset('baru')}}/resources/vendors/easy-pie-chart/jquery.easypiechart.min.js"></script>
        <script src="{{asset('baru')}}/resources/vendors/jqvmap/jquery.vmap.min.js"></script>
        <script src="{{asset('baru')}}/resources/vendors/jqvmap/maps/jquery.vmap.world.js"></script>
        <script src="{{asset('baru')}}/resources/vendors/fullcalendar/core/main.min.js"></script>
        <script src="{{asset('baru')}}/resources/vendors/fullcalendar/daygrid/main.min.js"></script>

        <!-- Site Functions & Actions -->
        <script src="{{asset('baru')}}/resources/js/app.min.js"></script>
    </body>

<!-- Mirrored from byrushan.com/projects/maed/app/2.0/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Aug 2020 08:37:42 GMT -->
</html>
