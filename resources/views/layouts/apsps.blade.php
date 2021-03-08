<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from jobie.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Jan 2021 09:56:07 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>SMA ADIYAKSA 1 KOTA JAMBI</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('meiplay')}}/images/logo5.png">
    <link href="{{ asset('jobie') }}/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('jobie') }}/vendor/chartist/css/chartist.min.css">
	<!-- Vectormap -->
    <link href="{{ asset('jobie') }}/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="{{ asset('jobie') }}/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="{{ asset('jobie') }}/css/style.css" rel="stylesheet">
	<link href="{{ asset('jobie') }}/cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
    <link href="{{ asset('jobie') }}/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b39eb591ae.js" crossorigin="anonymous"></script>

</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            @if (\Auth::guard('guru')->check())
            <a href="{{ url('guru/beranda', []) }}" class="brand-logo">
                <img class="logo-abbr" src="{{asset('meiplay')}}/images/logo5.png" alt="">
                <img class="logo-compact" src="{{ asset('jobie') }}/images/text.png" alt="">
                <img class="brand-title" src="{{ asset('jobie') }}/images/text.png" alt="">
            </a>
            @elseif (\Auth::guard('siswa')->check())
            <a href="{{ url('siswa/beranda', []) }}" class="brand-logo">
                <img class="logo-abbr" src="{{asset('meiplay')}}/images/logo5.png" alt="">
                <img class="logo-compact" src="{{ asset('jobie') }}/images/text.png" alt="">
                <img class="brand-title" src="{{ asset('jobie') }}/images/text.png" alt="">
            </a>
             @elseif (\Auth::guard('ortu')->check())
             <a href="{{ url('ortu/beranda', []) }}" class="brand-logo">
                <img class="logo-abbr" src="{{asset('meiplay')}}/images/logo5.png" alt="">
                <img class="logo-compact" src="{{ asset('jobie') }}/images/text.png" alt="">
                <img class="brand-title" src="{{ asset('jobie') }}/images/text.png" alt="">
            </a>
            @endif


            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

		<!--**********************************
            Chat box start
        ***********************************-->

		<!--**********************************
            Chat box End
        ***********************************-->

		<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Dashboard
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    @if (\Auth::guard('guru')->check())
                                    <img src="{{ \Storage::url(Auth::guard('guru')->user()->foto)}}" width="20" alt=""/>
                                    @elseif (\Auth::guard('siswa')->check())
                                    <img src="{{ \Storage::url(Auth::guard('siswa')->user()->foto)}}" width="20" alt=""/>
                                     @elseif (\Auth::guard('ortu')->check())
                                    <img src="{{ \Storage::url(Auth::guard('ortu')->user()->foto)}}" width="20" alt=""/>
                                    @endif

									<div class="header-info">

                                        @if (\Auth::guard('guru')->check())
                                        <span class="text-black">{{ \Auth::guard('guru')->user()->nama }}</span>
                                        <p class="fs-12 mb-0">Guru {{ \Auth::guard('guru')->user()->mapel->nama }}</p>
                                        @elseif (\Auth::guard('siswa')->check())
                                        <span class="text-black">{{ \Auth::guard('siswa')->user()->nama }}</span>
                                        <p class="fs-12 mb-0">Siswa</p>
                                        @elseif (\Auth::guard('ortu')->check())
                                        <span class="text-black">{{ \Auth::guard('ortu')->user()->nama }}</span>
                                        <p class="fs-12 mb-0">Orang Tua</p>
                                        @endif

									</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">

                                    @if (\auth::guard('guru')->check())
                                    <a href="{{ url('profile-guru',[])}}" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ml-2">Profile </span>
                                    </a>
										<a href="{{url('logout-guru',[])}}" class="dropdown-item ai-icon">
											<svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
											<span class="ml-2">Logout </span>
										</a>
                                        @elseif(\auth::guard('siswa')->check())
                                        <a href="{{ url('profile-siswa',[])}}" class="dropdown-item ai-icon">
                                            <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                            <span class="ml-2">Profile </span>
                                        </a>
										<a href="{{url('logout-siswa',[])}}" class="dropdown-item ai-icon">
											<svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
											<span class="ml-2">Logout </span>
                                        </a>
                                        @elseif(\auth::guard('ortu')->check())
                                        <a href="{{ url('profile-guru',[])}}" class="dropdown-item ai-icon">
                                            <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                            <span class="ml-2">Profile </span>
                                        </a>
										<a href="{{url('logout-ortu',[])}}" class="dropdown-item ai-icon">
											<svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
											<span class="ml-2">Logout </span>
										</a>
										@endif
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @if (\Auth::guard('guru')->check())
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a class="has-arrow ai-icon {{request()->is('guru/beranda') ? 'active' : ''}}" href="{{ url('guru/beranda', []) }}" aria-expanded="false">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                    </li>
                    <li><a class="has-arrow ai-icon {{ request()->is('jadwal-guru') ? 'active' : '' }}" href="{{ url('jadwal-guru',[]) }}" aria-expanded="false">
							<i class="flaticon-381-calendar"></i>
							<span class="nav-text">Jadwal</span>
						</a>
                    </li>
                <li><a class="has-arrow ai-icon {{ request()->is('guru/nilai/index') ? 'active' : '' }}" href="{{ url('guru/nilai/index',[]) }}" aria-expanded="false">
                    <i class="fas fa-book-open"></i>
                    <span class="nav-text">Nilai</span>
                </a>
            </li>
            @if (\Auth::guard('guru')->user()->kelas->count() == 1)
            <li><a class="has-arrow ai-icon {{ request()->is('guru/validasi/index') ? 'active' : '' }}" href="{{ url('guru/validasi/index',[]) }}" aria-expanded="false">
                <i class="far fa-check-circle"></i>
                <span class="nav-text">Validasi Nilai</span>
            </a>
        </li>
            @endif
                </ul>
			</div>
        </div>
        @elseif(\Auth::guard('siswa')->check())
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a class="has-arrow ai-icon {{request()->is('siswa/beranda') ? 'active' : ''}}" href="{{ url('siswa/beranda', []) }}" aria-expanded="false">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                    </li>
                    <li><a class="has-arrow ai-icon {{ request()->is('siswa/jadwal') ? 'active' : '' }}" href="{{ url('siswa/jadwal',[]) }}" aria-expanded="false">
							<i class="flaticon-381-calendar"></i>
							<span class="nav-text">Jadwal Pelajaran</span>
						</a>
                    </li>
                    <li><a class="has-arrow ai-icon {{ request()->is('siswa/materi') ? 'active' : '' }}" href="{{ url('siswa/materi',[]) }}" aria-expanded="false">
                        <i class="flaticon-381-internet"></i>
                        <span class="nav-text">Materi Pelajaran</span>
                    </a>
                </li>
                <li><a class="has-arrow ai-icon {{ request()->is('siswa/nilai/index') ? 'active' : '' }}le" href="{{ url('siswa/nilai/index',[]) }}" aria-expanded="false">
                    <i class="fas fa-book-open"></i>
                    <span class="nav-text">Lihat Nilai</span>
                </a>
            </li>
                </ul>
			</div>
        </div>

        @elseif(\Auth::guard('ortu')->check())
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a class="has-arrow ai-icon {{request()->is('ortu/beranda') ? 'active' : ''}}" href="{{ url('ortu/beranda', []) }}" aria-expanded="false">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                    </li>
                    <li><a class="has-arrow ai-icon {{ request()->is('ortu/jadwal') ? 'active' : '' }}" href="{{ url('ortu/jadwal',[]) }}" aria-expanded="false">
							<i class="flaticon-381-calendar"></i>
							<span class="nav-text">Jadwal Pelajaran</span>
						</a>
                    </li>
                <li><a class="has-arrow ai-icon {{ request()->is('ortu/nilai/index') ? 'active' : '' }}" href="{{ url('ortu/nilai/index',[]) }}" aria-expanded="false">
                    <i class="fas fa-book-open"></i>
                    <span class="nav-text">Lihat Nilai</span>
                </a>
            </li>
            <li><a class="has-arrow ai-icon {{ request()->is('ortu/contact-person/index') ? 'active' : '' }}" href="{{ url('ortu/contact-person/index',[]) }}" aria-expanded="false">
                <i class="fas fa-id-card-alt"></i>
                <span class="nav-text">Contact Person</span>
                </a>
             </li>
                </ul>
			</div>
        </div>
        @endif

        <!--**********************************
            Sidebar end
        ***********************************-->

		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
                  @if(Session::has('toast_success'))
                    @include('sweetalert::alert')
                @elseif(session::has('toast_info'))
                    @include('sweetalert::alert')
                @endif
                @yield('content')
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p><strong>Siakad SMA Adhyaksa 1 Kota Jambi</strong> </p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('jobie') }}/vendor/global/global.min.js"></script>
	<script src="{{ asset('jobie') }}/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="{{ asset('jobie') }}/vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="{{ asset('jobie') }}/js/custom.min.js"></script>
	<script src="{{ asset('jobie') }}/js/deznav-init.js"></script>
	<script src="{{ asset('jobie') }}/vendor/owl-carousel/owl.carousel.js"></script>

	<!-- Chart piety plugin files -->
    <script src="{{ asset('jobie') }}/vendor/peity/jquery.peity.min.js"></script>

	<!-- Dashboard 1 -->
	<script src="{{ asset('jobie') }}/js/dashboard/dashboard-1.js"></script>

	<script>
		function carouselReview(){
			/*  testimonial one function by = owl.carousel.js */
			jQuery('.testimonial-one').owlCarousel({
				loop:true,
				autoplay:true,
				margin:15,
				nav:false,
				dots: false,
				left:true,
				navText: ['', ''],
				responsive:{
					0:{
						items:1
					},
					800:{
						items:2
					},
					991:{
						items:2
					},

					1200:{
						items:2
					},
					1600:{
						items:2
					}
				}
			})
			jQuery('.testimonial-two').owlCarousel({
				loop:true,
				autoplay:true,
				margin:15,
				nav:false,
				dots: true,
				left:true,
				navText: ['', ''],
				responsive:{
					0:{
						items:1
					},
					600:{
						items:2
					},
					991:{
						items:3
					},

					1200:{
						items:3
					},
					1600:{
						items:4
					}
				}
			})
		}
		jQuery(window).on('load',function(){
			setTimeout(function(){
				carouselReview();
			}, 1000);
		});
    </script>
</body>

<!-- Mirrored from jobie.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Jan 2021 09:56:35 GMT -->
</html>
