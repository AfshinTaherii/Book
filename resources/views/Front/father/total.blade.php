<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap Min CSS -->
    <link rel="stylesheet" href="/Front/assets/css/bootstrap.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="/Front/assets/css/animate.css">
    <!-- IcoFont Min CSS -->
    <link rel="stylesheet" href="/Front/assets/css/icofont.min.css">
    <!-- Meanmenu Min CSS -->
    <link rel="stylesheet" href="/Front/assets/css/meanmenu.css">
    <!-- Magnific Popup Min CSS -->
    <link rel="stylesheet" href="/Front/assets/css/magnific-popup.min.css">
    <!-- Owl Carousel Min CSS -->
    <link rel="stylesheet" href="/Front/assets/css/owl.carousel.min.css">
    <!-- NiceSelect Min CSS -->
    <link rel="stylesheet" href="/Front/assets/css/nice-select.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="/Front/assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="/Front/assets/css/responsive.css">

    <title>نمایشگاه کتاب</title>

    <link rel="icon" type="/image/png" href="/Front/assets/img/favicon.png">
</head>
<body>

<!-- Start Navbar Area -->
<header id="header">
    <div class="crake-mobile-nav">
        <div class="logo">
            <img src="/Front/assets/img/logo.png" alt="">
        </div>
    </div>

    <div class="crake-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index-7.html"><img src="/Front/assets/img/logo.png" alt="logo"></a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav nav ml-auto">
                        <li class="nav-item"><a href="#" class="nav-link">خانه</a>
                            <ul class="dropdown_menu">
                                <li><a href="index.html">صفحه لندینگ SaaS </a></li>
                            </ul>
                        </li>

                        <li class="nav-item"><a href="#" class="nav-link active">صفحات</a>
                            <ul class="dropdown_menu">
                                <li class="nav-item"><a href="#" class="nav-link active">درباره</a>
                                    <ul class="dropdown_menu">
                                        <li><a href="about-1.html" class="active">درباره ما 1</a></li>
                                    </ul>
                                </li>

                                <li><a href="features.html">ویژگی ها</a></li>

                                <li class="nav-item"><a href="#" class="nav-link">تیم</a>
                                    <ul class="dropdown_menu">
                                        <li><a href="team-1.html">تیم 1</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item"><a href="#" class="nav-link">قیمت</a>
                                    <ul class="dropdown_menu">
                                        <li><a href="pricing-1.html">قیمت 1</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item"><a href="#" class="nav-link">نمونه کار</a>
                                    <ul class="dropdown_menu">
                                        <li><a href="project-1.html">نمونه کارها 2 ستون</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item"><a href="#" class="nav-link">فروشگاه</a>
                                    <ul class="dropdown_menu">
                                        <li><a href="shop-1.html">فروشگاه 1</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item"><a href="#" class="nav-link">بلاگ</a>
                                    <ul class="dropdown_menu">
                                        <li><a href="blog-1.html">بلاگ 1</a></li>
                                    </ul>
                                </li>
                                <li><a href="">پروفایل</a></li>
                                <li><a href="{{route('login')}}">ورود</a></li>
                                <li><a href="{{route('register')}}">ثبت نام</a></li>
                            </ul>
                        </li>

                        <li class="nav-item"><a href="#" class="nav-link">نمونه کار</a>
                            <ul class="dropdown_menu">
                                <li><a href="project-1.html">نمونه کارها 2 ستون</a></li>
                            </ul>
                        </li>

                        <li class="nav-item"><a href="#" class="nav-link">بلاگ</a>
                            <ul class="dropdown_menu">
                                <li><a href="blog-1.html">بلاگ 1</a></li>
                            </ul>
                        </li>

                        <li class="nav-item"><a href="#" class="nav-link">فروشگاه</a>
                            <ul class="dropdown_menu">
                                <li><a href="shop-1.html">فروشگاه 1</a></li>
                                <li><a href="cart.html">سبد خرید</a></li>
                                <li><a href="checkout.html">بررسی</a></li>
                            </ul>
                        </li>

                        <li class="nav-item"><a href="contact-us.html" class="nav-link">تماس</a></li>
                    </ul>
                </div>
                <div class="mr-auto others-option">
                    <ul class="navbar-nav">
                        <li class="nav-item cart-wrapper">
                            <a href="#">
                                <i class="icofont-shopping-cart cart-icon"></i>

                                <span>0</span>
                            </a>
                        </li>
                        <li class="header-search-box">
                            <a href="#header-search" title="Search">
                                <i class="icofont-search-2"></i>
                            </a>
                        </li>
                        <li data-toggle="modal" data-target="#myModal2">
                            <div class="side-menu">
                                <span class="bar-1"></span>
                                <span class="bar-2"></span>
                                <span class="bar-3"></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- End Navbar Area -->
@yield('content')

<footer class="footer-area ptb-100 pb-0 bg-image">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget">
                    <a href="#" class="logo"><img src="/Front/assets/img/logo2.png" alt="logo2"></a>
                    <p>برنامه روزانه، هفته یا ماه را پیش ببرید و وضعیت پروژه را در یک نگاه ببینید. جستجو و فیلتر برای تمرکز بر روی هر چیزی یک پروژه واحد فردی.</p>

                    <ul class="social-list">
                        <li><a href="#"><i class="icofont-facebook"></i></a></li>
                        <li><a href="#"><i class="icofont-twitter"></i></a></li>
                        <li><a href="#"><i class="icofont-instagram"></i></a></li>
                        <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget pl-5">
                    <h3>شرکت</h3>

                    <ul class="list">
                        <li><a href="#">درباره</a></li>
                        <li><a href="#">تماس با ها</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget">

                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget">
                    <h3>پشتیبانی</h3>

                    <ul class="list">
                        <li><a href="#">درباره</a></li>
                        <li><a href="#">تماس</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright-area">
        <div class="container">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-lg-6 col-md-6">
                    <p>کپی رایت 1403. تمام حقوق محفوظ است.</p>
                </div>

                <div class="col-lg-6 col-md-6">
                    <ul>
                        <li><a href="#">شرایط و ضوابط</a></li>
                        <li><a href="#">سیاست حفظ حریم خصوصی</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

</body>
<!-- plugin------------------------------------------------------------->

<!-- Back Top top -->
<div class="back-to-top">بالا</div>
<!-- End Back Top top -->

<!-- Jquery Min JS -->
<script src="/Front/assets/js/jquery.min.js"></script>
<!-- Popper Min JS -->
<script src="/Front/assets/js/popper.min.js"></script>
<!-- Bootstrap Min JS -->
<script src="/Front/assets/js/bootstrap.min.js"></script>
<!-- Canvas Min JS -->
<script src="/Front/assets/js/canvas.min.js"></script>
<!-- Meanmenu Min JS -->
<script src="/Front/assets/js/jquery.meanmenu.min.js"></script>
<!-- WOW Min JS -->
<script src="/Front/assets/js/wow.min.js"></script>
<!-- Tilt Min JS -->
<script src="/Front/assets/js/tilt.jquery.min.js"></script>
<!-- Magnific Popup Min JS -->
<script src="/Front/assets/js/jquery.magnific-popup.min.js"></script>
<!-- Owl Carousel Min JS -->
<script src="/Front/assets/js/owl.carousel.min.js"></script>
<!-- Waypoints Min Js -->
<script src="/Front/assets/js/waypoints.min.js"></script>
<!-- Jquery CounterUp Min JS -->
<script src="/Front/assets/js/jquery.counterup.min.js"></script>
<!-- NiceSelect Min Js -->
<script src="/Front/assets/js/jquery.nice-select.min.js"></script>
<!-- ajaxChimp Min JS -->
<script src="/Front/assets/js/jquery.ajaxchimp.min.js"></script>
<!-- Form Validator Min JS -->
<script src="/Front/assets/js/form-validator.min.js"></script>
<!-- Contact Form Min JS -->
<script src="/Front/assets/js/contact-form-script.js"></script>
<!-- Main JS -->
<script src="/Front/assets/js/main.js"></script>
@yield('script')
</html>
