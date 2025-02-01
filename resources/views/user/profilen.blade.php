<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ScoutParty - Book Your Comfort Seat</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wdth,wght@0,75..100,300..800;1,75..100,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->

    <!-- Favicon -->
    <link rel="icon" href="{{ URL::asset('assets/img/brand/favicon.png') }}" type="image/x-icon" />
    <!-- Icons css -->
    <link href="{{ URL::asset('assets/css/icons.css') }}" rel="stylesheet">
    <!--  Custom Scroll bar-->
    <link href="{{ URL::asset('assets/plugins/mscrollbar/jquery.mCustomScrollbar.css') }}" rel="stylesheet" />
    <!--  Sidebar css -->
    <link href="{{ URL::asset('assets/plugins/sidebar/sidebar.css') }}" rel="stylesheet">
    <!-- Sidemenu css -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css-rtl/sidemenu.css') }}">

    <!--- Style css -->
    <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet">
    <!--- Dark-mode css -->
    <link href="{{ URL::asset('assets/css/style-dark.css') }}" rel="stylesheet">
    <!---Skinmodes css-->
    <link href="{{ URL::asset('assets/css/skin-modes.css') }}" rel="stylesheet">


    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">



    <!-- Customized Bootstrap Stylesheet -->

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <link href="{{ asset('css/booking/booking_style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class=" navbar navbar-expand-lg sticky-top shadow-sm navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="/" class="navbar-brand p-0">
                <h1 class="text-primary"><i class="fas fa-church me-3"></i>ScoutParty</h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="/" class="nav-item nav-link ">Home</a>
                    <a href="#" class="nav-item nav-link">About</a>
                    {{-- <a href="service.html" class="nav-item nav-link">Service</a>
                        <a href="blog.html" class="nav-item nav-link">Blog</a> --}}
                    {{-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="feature.html" class="dropdown-item">Our Feature</a>
                                <a href="product.html" class="dropdown-item">Our Product</a>
                                <a href="team.html" class="dropdown-item">Our Team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="404.html" class="dropdown-item">404 Page</a>
                            </div>
                        </div> --}}
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <div class="d-none d-xl-flex me-3">
                    <div class="d-flex flex-column pe-3 border-end border-primary">
                        <span class="text-body">Get Support Call</span>
                        <a href="tel:+4733378901"><span class="text-primary">Free: + 0123 456 7890</span></a>
                    </div>
                </div>
                {{-- <button class="btn btn-primary btn-md-square d-flex flex-shrink-0 mb-3 mb-lg-0 rounded-circle me-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button> --}}

                <a href="{{ route('book') }}"
                    class="btn btn-primary rounded-pill d-inline-flex flex-shrink-0 py-2 px-4">Book Now</a>

            </div>
        </nav>


        <!-- Carousel End -->
    </div>
    <!-- Navbar & Hero End -->


    @if (session()->has('Add'))
        <script>
            window.onload = function() {
                notif({
                    msg: "Added Successfully",
                    type: "success"
                })
            }
        </script>
    @endif

    @if (isset($error))
    <div class="d-flex justify-content-center">
        <div class="alert alert-danger" style="max-width: 280px;">
            {{ $error }}
        </div>
    </div>
@endif

    <div class="main-content app-content wow fadeInDown" data-wow-delay="0.2s"
        style="margin-top: 100px; overflow:visible">
        <div class="container-fluid">
            <!-- row -->
            <div class="row row-sm">
                <div class="col-lg-4">
                    <div class="card mg-b-20">
                        <div class="card-body">
                            <div class="pl-0">
                                <div class="main-profile-overview">
                                    <div class="main-img-user profile-user">
                                        @if (Auth::guard('user')->user()->image == null)
                                            <img alt="" src="{{ URL::asset('img/team-1.jpg') }}">
                                            {{-- <a class="fas fa-camera profile-edit" href="JavaScript:void(0);"></a> --}}
                                        @endif
                                        @if (Auth::guard('user')->user()->image != null)
                                            <img alt=""
                                                src="../user_img/{{ Auth::guard('user')->user()->id }}/{{ Auth::guard('user')->user()->image }}">
                                            {{-- <a class="fas fa-camera profile-edit" href="JavaScript:void(0);"></a> --}}
                                        @endif


                                    </div>
                                    <div class="d-flex justify-content-between mg-b-20">
                                        <div>
                                            <h5 class="main-profile-name">{{ Auth::guard('user')->user()->name }}</h5>
                                            <p class="main-profile-name-text">{{ Auth::guard('user')->user()->email }}
                                            </p>
                                            <p class="main-profile-name-text">
                                                {{ Auth::guard('user')->user()->mobile }}</p>
                                        </div>
                                    </div>
                                    <div class="pr-1 mb-3 mb-xl-0">
                                        <form method="POST" action="{{ route('user_logout') }}">
                                            @csrf

                                            <button type="submit" class="btn btn-danger  btn-icon ml-2"><i
                                                    class="fas fa-power-off"></i></button>

                                        </form>
                                    </div>


                                    {{-- <h6>Bio</h6>
                                                <div class="main-profile-bio">
                                                    pleasure rationally encounter but because pursue consequences that are extremely painful.occur in which toil and pain can procure him some great pleasure.. <a href="">More</a>
                                                </div><!-- main-profile-bio -->
                                                <div class="row">
                                                    <div class="col-md-4 col mb20">
                                                        <h5>947</h5>
                                                        <h6 class="text-small text-muted mb-0">Followers</h6>
                                                    </div>
                                                    <div class="col-md-4 col mb20">
                                                        <h5>583</h5>
                                                        <h6 class="text-small text-muted mb-0">Tweets</h6>
                                                    </div>
                                                    <div class="col-md-4 col mb20">
                                                        <h5>48</h5>
                                                        <h6 class="text-small text-muted mb-0">Posts</h6>
                                                    </div>
                                                </div>
                                                <hr class="mg-y-30">
                                                <label class="main-content-label tx-13 mg-b-20">Social</label>
                                                <div class="main-profile-social-list">
                                                    <div class="media">
                                                        <div class="media-icon bg-primary-transparent text-primary">
                                                            <i class="icon ion-logo-github"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <span>Github</span> <a href="">github.com/spruko</a>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <div class="media-icon bg-success-transparent text-success">
                                                            <i class="icon ion-logo-twitter"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <span>Twitter</span> <a href="">twitter.com/spruko.me</a>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <div class="media-icon bg-info-transparent text-info">
                                                            <i class="icon ion-logo-linkedin"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <span>Linkedin</span> <a href="">linkedin.com/in/spruko</a>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <div class="media-icon bg-danger-transparent text-danger">
                                                            <i class="icon ion-md-link"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <span>My Portfolio</span> <a href="">spruko.com/</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="mg-y-30">
                                                <h6>Skills</h6>
                                                <div class="skill-bar mb-4 clearfix mt-3">
                                                    <span>HTML5 / CSS3</span>
                                                    <div class="progress mt-2">
                                                        <div class="progress-bar bg-primary-gradient" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%"></div>
                                                    </div>
                                                </div>
                                                <!--skill bar-->
                                                <div class="skill-bar mb-4 clearfix">
                                                    <span>Javascript</span>
                                                    <div class="progress mt-2">
                                                        <div class="progress-bar bg-danger-gradient" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 89%"></div>
                                                    </div>
                                                </div>
                                                <!--skill bar-->
                                                <div class="skill-bar mb-4 clearfix">
                                                    <span>Bootstrap</span>
                                                    <div class="progress mt-2">
                                                        <div class="progress-bar bg-success-gradient" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
                                                    </div>
                                                </div>
                                                <!--skill bar-->
                                                <div class="skill-bar clearfix">
                                                    <span>Coffee</span>
                                                    <div class="progress mt-2">
                                                        <div class="progress-bar bg-info-gradient" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 95%"></div>
                                                    </div>
                                                </div> --}}
                                    <!--skill bar-->
                                </div><!-- main-profile-overview -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row row-sm">
                        <div class="col-sm-12 col-xl-4 col-lg-12 col-md-12">
                            <div class="card ">
                                <div class="card-body">
                                    <div class="counter-status d-flex md-mb-0">
                                        <div class="counter-icon bg-primary-transparent">
                                            <i class="icon-layers text-primary"></i>
                                        </div>
                                        <div class="mr-auto">
                                            <h5 class="tx-13">Tickets</h5>
                                            <h2 class="mb-0 tx-22 mb-1 mt-1">
                                                {{ DB::table('bookings')->where('user_id', Auth::guard('user')->user()->id)->count() }}
                                            </h2>
                                            {{-- <p class="text-muted mb-0 tx-11"><i class="si si-arrow-up-circle text-success mr-1"></i>increase</p> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-sm-12 col-xl-4 col-lg-12 col-md-12">
                                        <div class="card ">
                                            <div class="card-body">
                                                <div class="counter-status d-flex md-mb-0">
                                                    <div class="counter-icon bg-danger-transparent">
                                                        <i class="icon-paypal text-danger"></i>
                                                    </div>
                                                    <div class="mr-auto">
                                                        <h5 class="tx-13">Revenue</h5>
                                                        <h2 class="mb-0 tx-22 mb-1 mt-1">46,782</h2>
                                                        <p class="text-muted mb-0 tx-11"><i class="si si-arrow-up-circle text-success mr-1"></i>increase</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-xl-4 col-lg-12 col-md-12">
                                        <div class="card ">
                                            <div class="card-body">
                                                <div class="counter-status d-flex md-mb-0">
                                                    <div class="counter-icon bg-success-transparent">
                                                        <i class="icon-rocket text-success"></i>
                                                    </div>
                                                    <div class="mr-auto">
                                                        <h5 class="tx-13">Product sold</h5>
                                                        <h2 class="mb-0 tx-22 mb-1 mt-1">1,890</h2>
                                                        <p class="text-muted mb-0 tx-11"><i class="si si-arrow-up-circle text-success mr-1"></i>increase</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                        <div class="card">
                            <div class="card-body">
                                <div class="tabs-menu ">
                                    <!-- Tabs -->
                                    <ul class="nav nav-tabs profile navtab-custom panel-tabs">
                                        {{-- <li class="active">
                                                    <a href="#home" data-toggle="tab" aria-expanded="true"> <span class="visible-xs"><i class="las la-user-circle tx-16 mr-1"></i></span> <span class="hidden-xs">ABOUT ME</span> </a>
                                                </li> --}}
                                        <li class="active">
                                            <a href="#profile" data-toggle="tab" aria-expanded="false"> <span
                                                    class="visible-xs"><i class="las la-images tx-15 mr-1"></i></span>
                                                <span class="hidden-xs">All Bookings</span> </a>
                                        </li>
                                        {{-- <li class="">
                                                    <a href="#settings" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="las la-cog tx-16 mr-1"></i></span> <span class="hidden-xs">SETTINGS</span> </a>
                                                </li> --}}
                                    </ul>
                                </div>
                                <div class="tab-content border-left border-bottom border-right border-top-0 p-4">
                                    {{-- <div class="tab-pane active" id="home">
                                                <h4 class="tx-15 text-uppercase mb-3">BIOdata</h4>
                                                <p class="m-b-5">Hi I'm Petey Cruiser,has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                                <div class="m-t-30">
                                                    <h4 class="tx-15 text-uppercase mt-3">Experience</h4>
                                                    <div class=" p-t-10">
                                                        <h5 class="text-primary m-b-5 tx-14">Lead designer / Developer</h5>
                                                        <p class="">websitename.com</p>
                                                        <p><b>2010-2015</b></p>
                                                        <p class="text-muted tx-13 m-b-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                    </div>
                                                    <hr>
                                                    <div class="">
                                                        <h5 class="text-primary m-b-5 tx-14">Senior Graphic Designer</h5>
                                                        <p class="">coderthemes.com</p>
                                                        <p><b>2007-2009</b></p>
                                                        <p class="text-muted tx-13 mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                    </div>
                                                </div>
                                            </div> --}}
                                    <div class="tab-pane active" id="profile">
                                        <div class="row">
                                            @php
                                                $bookings = DB::table('bookings')
                                                    ->where('user_id', Auth::guard('user')->user()->id)
                                                    ->distinct()
                                                    ->orderBy('created_at', 'desc')
                                                    ->get('ref_no');
                                            @endphp
                                            @foreach ($bookings as $booking)
                                                <div class="col-sm-4">
                                                    <div class="border p-1 card thumb">
                                                        <a href="/book/details/{{ $booking->ref_no }}"
                                                            class="image-popup" title="Screenshot-2"> <img
                                                                src="{{ URL::asset('img/scout.png') }}"
                                                                class="thumb-img" alt="work-thumbnail"> </a>
                                                        <h4 class="text-center tx-14 mt-3 mb-0">Reference Number:
                                                            <strong>{{ $booking->ref_no }}</strong>
                                                        </h4>
                                                        <div class="ga-border"></div>
                                                        <a target="_blank"
                                                            href="/book/details/{{ $booking->ref_no }}"
                                                            class="text-center"><small>No. of Tickets:
                                                            </small>{{ DB::table('bookings')->where('ref_no', $booking->ref_no)->count() }}<i
                                                                class="tx-18 fas fa-arrow-circle-right"></i></a>
                                                        <a target="_blank"
                                                            href="/seat/details/{{ $booking->ref_no }}"
                                                            class="text-center"><small>Seats </small><i
                                                                class="tx-18 fas fa-arrow-circle-right"></i></a>

                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row closed -->
            </div>
            <!-- Container closed -->
        </div>
        <!-- main-content closed -->

        <!-- Ticket End -->

        {{-- <div class="container text-center">
            <div class="row">
                <div class="col-md-2">
                    <p class="mb-0">Simple</p>
                    <a href="" id="container" >{!! $simple !!}</a><br/>
                    <button id="download" class="mt-2 btn btn-info text-light" onclick="downloadSVG()">Download SVG</button>
                </div>

            </div>
        </div> --}}






        <!-- Back to Top -->
        <a href="#" class="btn btn-secondary btn-lg-square rounded-circle back-to-top"><i
                class="fa fa-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

        <script src="{{ asset('lib/wow/wow.min.js') }}" defer></script>
        <script src="{{ asset('lib/easing/easing.min.js') }}" defer></script>
        <script src="{{ asset('lib/waypoints/waypoints.min.js') }}" defer></script>
        <script src="{{ asset('lib/counterup/counterup.min.js') }}" defer></script>
        <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}" defer></script>


        <!-- Template Javascript -->
        <!-- JQuery min js -->
        <script src="{{ URL::asset('assets/plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap Bundle js -->
        <script src="{{ URL::asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- Ionicons js -->
        <script src="{{ URL::asset('assets/plugins/ionicons/ionicons.js') }}"></script>
        <!-- Moment js -->
        <script src="{{ URL::asset('assets/plugins/moment/moment.js') }}"></script>

        <!-- Rating js-->
        <script src="{{ URL::asset('assets/plugins/rating/jquery.rating-stars.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/rating/jquery.barrating.js') }}"></script>

        <!--Internal  Perfect-scrollbar js -->
        <script src="{{ URL::asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/perfect-scrollbar/p-scroll.js') }}"></script>
        <!--Internal Sparkline js -->
        <script src="{{ URL::asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
        <!-- Custom Scroll bar Js-->
        <script src="{{ URL::asset('assets/plugins/mscrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
        <!-- right-sidebar js -->
        <script src="{{ URL::asset('assets/plugins/sidebar/sidebar-rtl.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/sidebar/sidebar-custom.js') }}"></script>
        <!-- Eva-icons js -->
        <script src="{{ URL::asset('assets/js/eva-icons.min.js') }}"></script>
        @yield('js')
        <!-- Sticky js -->
        <script src="{{ URL::asset('assets/js/sticky.js') }}"></script>
        <!-- custom js -->
        <script src="{{ URL::asset('assets/js/custom.js') }}"></script><!-- Left-menu js-->
        <script src="{{ URL::asset('assets/plugins/side-menu/sidemenu.js') }}"></script>

        <script src="{{ asset('js/main.js') }}" defer></script>
        <script>
            function downloadSVG() {
                const svg = document.getElementById('container').innerHTML;
                const blob = new Blob([svg.toString()]);
                const element = document.createElement("a");
                element.download = "w3c.svg";
                element.href = window.URL.createObjectURL(blob);
                element.click();
                element.remove();
            }
        </script>
</body>

</html>
