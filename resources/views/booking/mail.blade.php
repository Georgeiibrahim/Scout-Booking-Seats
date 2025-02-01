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

      
      
        <div class="col-sm-4">
            <div class="border p-1 card thumb">
                <a href="/book/details/{{$ref_no}}" class="image-popup" title="Screenshot-2"> <img src="{{URL::asset('img/scout.png')}}" class="thumb-img" alt="work-thumbnail"> </a>
                <h4 class="text-center tx-14 mt-3 mb-0">Reference Number: <strong>{{$ref_no}}</strong></h4>
                <div class="ga-border"></div>
                <a target="_blank"  href="/book/details/{{$ref_no}}" class="btn text-center" >Tickets<i class="tx-18 fas fa-arrow-circle-right"></i></a>
                <a target="_blank"  href="/seat/details/{{$ref_no}}" class="btn text-center" ><small>Seats </small><i class="tx-18 fas fa-arrow-circle-right"></i></a>
                
            </div>
        </div>
        


       

        


        


       


        
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
   
    </body>

</html>