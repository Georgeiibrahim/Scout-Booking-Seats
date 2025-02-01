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
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wdth,wght@0,75..100,300..800;1,75..100,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
        <link href="{{URL::asset('assets/plugins/notify/css/notifIt.css')}}" rel="stylesheet"/>

        <!-- Libraries Stylesheet -->

        <link href="{{ asset('lib/animate/animate.min.css')}}" rel="stylesheet">
        <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">



        <!-- Customized Bootstrap Stylesheet -->

        <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">


        <!-- Template Stylesheet -->
        <link href="{{ asset('css/style.css')}}" rel="stylesheet">

        <link href="{{ asset('css/booking/booking_style.css') }}" rel="stylesheet">
		<link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
        @if (session()->has('Add'))
        <script>
            window.onload = function() {
                notif({
                    msg: "Booking Successfully",
                    type: "success"
                })
            }
        </script>
        @endif
         <!-- Navbar & Hero Start -->
         <div class="container-fluid position-relative p-0">
            <nav class="bg-grey navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="/" class="navbar-brand p-0">
                    <h1 class="text-primary"><i class="fas fa-church me-3"></i>حكاية كشاف</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="/" class="nav-item nav-link ">الصفحة الرئيسية</a>
                        <a href="#" class="nav-item nav-link">عن المجموعة</a>
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
                        <a href="contact.html" class="nav-item nav-link">للتواصل</a>
                    </div>
                    <div class="d-none d-xl-flex me-3">
                        <div class="d-flex flex-column pe-3 border-end border-primary">
                            <span class="text-body">احصل على الدعم على الواتساب</span>
                            <a href="tel:+4733378901"><span class="text-primary">+ 201044660593</span></a>
                        </div>
                    </div>
                    {{-- <button class="btn btn-primary btn-md-square d-flex flex-shrink-0 mb-3 mb-lg-0 rounded-circle me-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button> --}}
                    @auth('user')
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-user"></i> {{Auth::guard('user')->user()->name}}</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{route('dashboard')}}" class="dropdown-item">لوحة القيادة</a>
                        <form action="{{ route('user_logout') }}" method="POST">
                            @csrf
                        <button  class="dropdown-item">تسجيل خروج</button>
                        </form>

                    </div>
                    </div>
                    {{-- <a href="{{route('dashboard')}}" class="btn btn-primary btn-md-square d-flex flex-shrink-0 mb-3 mb-lg-0 rounded-circle me-3" ><i class="fas fa-user"></i></a> --}}
                    @endauth
                    <a href="{{route('book')}}" class="btn btn-primary rounded-pill d-inline-flex flex-shrink-0 py-2 px-4">Book Now</a>

                </div>
            </nav>


        </div>
        <!-- Navbar & Hero End -->
<br>
<br>
        <!-- Booking summary Start -->
        <div class="container-fluid bg-white about py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="about-item d-flex justify-content-center align-items-center flex-column">
                            <h1 class="display-3 mb-3 text-center">ملخص الطلب</h1>
                            <p class="mb-4 text-center">
                                تم حجز هذه التذاكر بواسطة {{DB::table('users')->where('id',DB::table('bookings')->where('ref_no',request()->ref_no)->value('user_id'))->value('name')}}.
                            </p>
                            <div class="bg-light rounded p-4 mb-4 w-100">
                                <div class="row justify-content-center">
                                    <div class="col-6">
                                        <div class="d-flex">
                                            <div class="pe-4">
                                                <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                                                    <i class="fas fa-ticket-alt text-white fa-2x"></i>
                                                </div>
                                            </div>
                                            <div class="">
                                                <p class="h4 d-inline-block mb-3">عدد التذاكر</p>
                                                <h2 class="mb-0">{{count($bookings)}}🎫</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex">
                                            <div class="pe-4">
                                                <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                                                    <i class="fas fa-ticket-alt text-white fa-2x"></i>
                                                </div>
                                            </div>
                                            <div class="">
                                                <p class="h4 d-inline-block mb-3">حاله الدفع</p>
                                                @if($bookings[0]->status==0)
                                                <h2 class="mb-0">قيد الانتظاء</h2>
                                                @else
                                                <h2 class="mb-0">تم الدفع</h2>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-light rounded p-4 mb-4 w-100">
                                <div class="row justify-content-center">
                                    <div class="col-6">
                                        <div class="d-flex">
                                            <div class="pe-4">
                                                <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                                                    <i class="fas fa-ticket-alt text-white fa-2x"></i>
                                                </div>
                                            </div>
                                            <div class="">
                                                <p class="h4 d-inline-block mb-3">سعر التذكرة</p>
                                                @if($bookings[0]->level==1)
                                                <h2 class="mb-0">75 EGP</h2>
                                                @else
                                                <h2 class="mb-0">100 EGP</h2>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex">
                                            <div class="pe-4">
                                                <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                                                    <i class="fas fa-dollar-sign text-white fa-2x"></i>
                                                </div>
                                            </div>
                                            <div class="">
                                                <p href="#" class="h4 d-inline-block mb-3">تم الحجز في </p>
                                                <h2 class="mb-0">{{$bookings[0]->created_at}}</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-light rounded p-4 mb-4 w-100">
                                <div class="row justify-content-center">
                                    <div class="col-6">
                                        <div class="d-flex">
                                            <div class="pe-4">
                                                <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                                                    <i class="fas fa-ticket-alt text-white fa-2x"></i>
                                                </div>
                                            </div>
                                            <div class="">
                                                <p class="h4 d-inline-block mb-3">سعر اجمالي التذاكر</p>
                                                @if($bookings[0]->level == 1)
                                                    @if(count($bookings) == 5)
                                                        <h2 class="mb-0">{{ 4 * 75 }} EGP</h2> <!-- 4 tickets for the price of 75 EGP each -->
                                                    @else
                                                        <h2 class="mb-0">{{ count($bookings) * 75 }} EGP</h2> <!-- Normal pricing -->
                                                    @endif
                                                @else
                                                    @if(count($bookings) == 5)
                                                        <h2 class="mb-0">{{ 4 * 100 }} EGP</h2> <!-- 4 tickets for the price of 100 EGP each -->
                                                    @else
                                                        <h2 class="mb-0">{{ count($bookings) * 100 }} EGP</h2> <!-- Normal pricing -->
                                                    @endif
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex">
                                            <div class="pe-4">
                                                <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                                                    <i class="fas fa-dollar-sign text-white fa-2x"></i>
                                                </div>
                                            </div>
                                            <div class="">
                                                <p href="#" class="h4 d-inline-block mb-3">تم الدفع في</p>
                                                <h2 class="mb-0">{{$bookings[0]->activated_at}}</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s" dir="rtl">
                        <div class="about-item">
                            {{-- <h4 class="text-primary text-uppercase">About Us</h4> --}}
                            <h1 class="display-3 mb-3">طرق الدفع</h1>
                            <p class="mb-4">يمكنك الدفع من خلال تطبيق انتسا باي أو فودافون كاش، ولن يتم تفعيل تذكرتك حتى تقوم بالدفع والاتصال بنا <strong>201044660593+</strong> ورقم مرجعك <strong>{{$bookings[0]->ref_no}}</strong>
                            </p>
                            <div class="bg-light rounded p-4 mb-4">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex">
                                            <div class="d-flex align-items-center">
                                                <div class="pe-4">
                                                    <div class="rounded-circle bg-white d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                                                        <img src="{{asset('img/instapay.png')}}" class="img-fluid w-100" alt="Image">
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <h3 class="h4 d-inline-block mb-0">
                                                        <a href="https://ipn.eg/S/kirolosw/instapay/2h6qkh" class="mb-0">kirolosw@instapay</a>
                                                    </h3>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-light rounded p-4 mb-4">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex">
                                            <div class="pe-4">
                                                <div class="rounded-circle bg-white d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                                                    {{-- <i class="fas fa-faucet text-white fa-2x"></i> --}}
                                                    <img src="{{asset('img/vodafone-cash.png')}}" class="img-fluid w-100" alt="Image">
                                                </div>
                                            </div>
                                            <div class="">
                                                <h3 class="h4 d-inline-block mb-3">فودافون كاش</h3>
                                                <p class="mb-0">201044660593+</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3 class="text-center tx-warning bg-danger">سيتم الغاء الحجز خلال 24 ساعة في حالة عدم الدفع
                            </h3>
                            {{-- <a href="#" class="btn btn-secondary rounded-pill py-3 px-5">Read More</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Booking summary End -->
        @if($bookings[0]->status==1)
       <!-- Ticket Start -->
       @foreach ($bookings as $booking)
    <div class="ticket_container wow fadeInUp" data-wow-delay="0.2s">
       <div class="ticket created-by-anniedotexe">
           <div class="left">
                <div class="image">
                    <p class="admit-one">
                        <span>ADMIT ONE</span>
                        <span>ADMIT ONE</span>
                        <span>ADMIT ONE</span>
                    </p>
                    <div class="ticket-number">
                        <p>
                            #{{$booking->id}}
                        </p>
                    </div>
                </div>
                <div class="ticket-info">
                    <p class="date">
                        <span>الخميس</span>
                        <span class="june-29">27 فبراير</span>
                        <span>2025</span>
                    </p>
                    <div class="show-name">
                        <h1>حكاية كشاف</h1>
                        <h2>مجموعة العذراء الكشفية</h2>
                    </div>
                    <div class="time">
                        <p>8:00 PM <span>TO</span> 11:00 PM</p>
                        <p>DOORS <span>@</span> 7:00 PM</p>
                    </div>
                    <p class="location"><span>مسرح الأنبا رويس</span>
                        <span class="separator"><i class="far fa-smile"></i></span><span>الكاتدرائية</span>
                    </p>
                </div>
            </div>
            <div class="right">
                <p class="admit-one">
                    <span>ADMIT ONE</span>
                    <span>ADMIT ONE</span>
                    <span>ADMIT ONE</span>
                </p>
                <div class="right-info-container">
                    <div class="show-name">
                        @if($booking->level=='1')
                        <h1>Balcony</h1>
                        @else
                        <h1>Main Hall</h1>
                        @endif
                    </div>
                    <div class="time">
                        <p>5:30 PM <span>TO</span> 10:00 PM</p>
                        <p>DOORS <span>@</span> 5:00 PM</p>
                    </div>
                    <div class="barcode">

                        {!! QrCode::size(100)->generate(url('booking/ticket/'.$booking->id)) !!}
                        {{-- {!! QrCode::size(100)->generate('https://techvblogs.com/blog/generate-qr-code-laravel-8') !!} --}}
                        {{-- <img src="https://external-preview.redd.it/cg8k976AV52mDvDb5jDVJABPrSZ3tpi1aXhPjgcDTbw.png?auto=webp&s=1c205ba303c1fa0370b813ea83b9e1bddb7215eb" alt="QR code"> --}}
                    </div>
                    <p class="ticket-number">
                        #{{$booking->id}}
                    </p>
                </div>
            </div>
        </div>
    </div>
        @endforeach
        <!-- Ticket End -->
        @else
        <h2 style="font-family: 'Readex Pro', serif; line-height: 4rem;" class="bg-danger text-center ">التذاكر ستظهر بعد التأكيد والدفع</h2>
        @endif
        {{-- <div class="container text-center">
            <div class="row">
                <div class="col-md-2">
                    <p class="mb-0">Simple</p>
                    <a href="" id="container" >{!! $simple !!}</a><br/>
                    <button id="download" class="mt-2 btn btn-info text-light" onclick="downloadSVG()">Download SVG</button>
                </div>

            </div>
        </div> --}}




















        {{-- <!-- Footer Start -->
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5">
                <div class="row g-5 mb-5 align-items-center">
                    <div class="col-lg-7">
                        <div class="position-relative mx-auto">
                            <input class="form-control rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Email address to Subscribe">
                            <button type="button" class="btn btn-secondary rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">Subscribe</button>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="d-flex align-items-center justify-content-center justify-content-lg-end">
                            <a class="btn btn-secondary btn-md-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-secondary btn-md-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-secondary btn-md-square rounded-circle me-3" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-secondary btn-md-square rounded-circle me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <div class="footer-item">
                                <h3 class="text-white mb-4"><i class="fas fa-church text-primary me-3"></i>ScoutParty</h3>
                                <p class="mb-3">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit.</p>
                            </div>
                            <div class="position-relative">
                                <input class="form-control rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
                                <button type="button" class="btn btn-secondary rounded-pill position-absolute top-0 end-0 py-2 mt-2 me-2">SignUp</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">About Us</h4>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Why Choose Us</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Free Water Bottles</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Water Dispensers</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Bottled Water Coolers</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Contact us</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Terms & Conditions</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Business Hours</h4>
                            <div class="mb-3">
                                <h6 class="text-muted mb-0">Mon - Friday:</h6>
                                <p class="text-white mb-0">09.00 am to 07.00 pm</p>
                            </div>
                            <div class="mb-3">
                                <h6 class="text-muted mb-0">Saturday:</h6>
                                <p class="text-white mb-0">10.00 am to 05.00 pm</p>
                            </div>
                            <div class="mb-3">
                                <h6 class="text-muted mb-0">Vacation:</h6>
                                <p class="text-white mb-0">All Sunday is our vacation</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Contact Info</h4>
                            <a href="#"><i class="fa fa-map-marker-alt me-2"></i> 123 Street, New York, USA</a>
                            <a href="mailto:info@example.com"><i class="fas fa-envelope me-2"></i> info@example.com</a>
                            <a href="mailto:info@example.com"><i class="fas fa-envelope me-2"></i> info@example.com</a>
                            <a href="tel:+012 345 67890"><i class="fas fa-phone me-2"></i> +012 345 67890</a>
                            <a href="tel:+012 345 67890" class="mb-3"><i class="fas fa-print me-2"></i> +012 345 67890</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End --> --}}

       <!-- Copyright Start -->
       <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6 text-center text-md-start mb-md-0">
                    <span class="text-body"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>Scout Party</a>, All right reserved.</span>
                </div>
                <div class="col-md-6 text-center text-md-end text-body">
                    <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                    <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                    <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                    Designed By <a class="border-bottom text-white" href="https://kiro-developer.com">K.Helal Developer</a> Distributed By <a class="border-bottom text-white" href="https://kiro-developer.com">Kiro-Developer</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-secondary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('lib/wow/wow.min.js') }}" defer ></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}" defer></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"defer ></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}" defer></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}" defer></script>
        <!--Internal  Notify js -->
<script src="{{URL::asset('assets/plugins/notify/js/notifIt.js')}}"></script>
<script src="{{URL::asset('assets/plugins/notify/js/notifit-custom.js')}}"></script>

    <!-- Template Javascript -->
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
