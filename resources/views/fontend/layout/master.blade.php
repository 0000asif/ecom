<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fastkart">
    <meta name="keywords" content="Fastkart">
    <meta name="author" content="Fastkart">
    <link rel="icon" href="{{asset('fontend/assets/images/favicon/1.png')}}" type="image/x-icon">
    <title>@yield('title','Ecom')-shoping</title>

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="{{asset('fontend/assets/css/vendors/bootstrap.css')}}">

    <!-- wow css -->
    <link rel="stylesheet" href="{{asset('fontend/assets/css/animate.min.css')}}">

    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{asset('fontend/assets/css/vendors/font-awesome.css')}}">

    <!-- feather icon css -->
    <link rel="stylesheet" type="text/css" href="{{asset('fontend/assets/css/vendors/feather-icon.css')}}">

    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="{{asset('fontend/assets/css/vendors/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('fontend/assets/css/vendors/slick/slick-theme.css')}}">

    <!-- Iconly css -->
    <link rel="stylesheet" type="text/css" href="{{asset('fontend/assets/css/bulk-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('fontend/assets/css/vendors/animate.css')}}">
    @stack('css_link')

    <!-- Template css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="{{asset('fontend/assets/css/style.css')}}">
    @stack('css')
</head>

<body class="bg-effect">

    <!-- Loader Start -->
    <!-- <div class="fullpage-loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div> -->
    <!-- Loader End -->

    <!-- Header Start -->
    <header class="pb-md-4 pb-0">

        {{-- header top --}}
        @include('fontend/include/header/top')
        {{-- header top --}}

        {{-- header middle --}}
       @include('fontend/include/header/middle')
        {{-- header middle --}}

        {{-- header menu --}}

        @include('fontend.include.header.menu')
    {{-- header menu --}}
    </header>


     {{-- Header End  --}}

     {{-- mobile fix menu start  --}}
    @include('fontend.include.header.mobile_menu')

     {{-- mobile fix menu end  --}}

    {{--  Home Section Start  --}}
    @yield('content')
    {{--  Home Section End --}}


    {{-- Footer Section Start  --}}
   @include('fontend.include.footer.footer')
    {{--  Footer Section End  --}}

    {{--  Quick View Modal Box Start  --}}
    @include('fontend.include.modal.quick_view')
     {{-- Quick View Modal Box End  --}}

    {{--  Location Modal Start  --}}
    @include('fontend.include.modal.location')
    {{--  Location Modal End  --}}

    {{--  Cookie Bar Box Start  --}}
   @include('fontend.include.modal.cookie')
     {{-- Cookie Bar Box End  --}}

    <!-- Tap to top start -->
    <div class="theme-option">
        <div class="back-to-top">
            <a id="back-to-top" href="#">
                <i class="fas fa-chevron-up"></i>
            </a>
        </div>
    </div>
    <!-- Tap to top end -->

    <!-- Bg overlay Start -->
    <div class="bg-overlay"></div>
    <!-- Bg overlay End -->

    <!-- latest jquery-->
    <script src="{{asset('fontend/assets/js/jquery-3.6.0.min.js')}}"></script>

    <!-- jquery ui-->
    <script src="{{asset('fontend/assets/js/jquery-ui.min.js')}}"></script>

    <!-- Bootstrap js-->
    <script src="{{asset('fontend/assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('fontend/assets/js/bootstrap/bootstrap-notify.min.js')}}"></script>
    <script src="{{asset('fontend/assets/js/bootstrap/popper.min.js')}}"></script>

    <!-- feather icon js-->
    <script src="{{asset('fontend/assets/js/feather/feather.min.js')}}"></script>
    <script src="{{asset('fontend/assets/js/feather/feather-icon.js')}}"></script>

    <!-- Lazyload Js -->
    <script src="{{asset('fontend/assets/js/lazysizes.min.js')}}"></script>

    <!-- Slick js-->
    <script src="{{asset('fontend/assets/js/slick/slick.js')}}"></script>
    <script src="{{asset('fontend/assets/js/slick/slick-animation.min.js')}}"></script>
    <script src="{{asset('fontend/assets/js/slick/custom_slick.js')}}"></script>

    <!-- Auto Height Js -->
    <script src="{{asset('fontend/assets/js/auto-height.js')}}"></script>

    <!-- Timer Js -->
    <script src="{{asset('fontend/assets/js/timer1.js')}}"></script>

    <!-- Fly Cart Js -->
    <script src="{{asset('fontend/assets/js/fly-cart.js')}}"></script>

    <!-- Quantity js -->
    <script src="{{asset('fontend/assets/js/quantity-2.js')}}"></script>
    @stack('js_link')

    <!-- WOW js -->
    <script src="{{asset('fontend/assets/js/wow.min.js')}}"></script>
    <script src="{{asset('fontend/assets/js/custom-wow.js')}}"></script>

    <!-- script js -->
    <script src="{{asset('fontend/assets/js/script.js')}}"></script>
    @stack('js')
</body>

</html>
