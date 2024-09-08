<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
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
</head>
<body>
<!-- Start Page Title Area -->
<section class="page-title-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>ثبت نام</h2>
            </div>
        </div>
    </div>

    <div class="shape1"><img src="/Front/assets/img/shape1.png" alt="img"></div>
    <div class="shape2"><img src="/Front/assets/img/shape2.png" alt="img"></div>
    <div class="shape3"><img src="/Front/assets/img/shape3.png" alt="img"></div>
    <div class="shape6"><img src="/Front/assets/img/shape6.png" alt="img"></div>
    <div class="shape8 rotateme"><img src="/Front/assets/img/shape8.svg" alt="shape"></div>
    <div class="shape9"><img src="/Front/assets/img/shape9.svg" alt="shape"></div>

    <!-- Bubble Animte -->
    <div class="bubble-animate">
        <div class="circle small square1"></div>
        <div class="circle small square2"></div>
        <div class="circle small square3"></div>
        <div class="circle small square4"></div>
        <div class="circle small square5"></div>
        <div class="circle medium square1"></div>
        <div class="circle medium square2"></div>
        <div class="circle medium square3"></div>
        <div class="circle medium square4"></div>
        <div class="circle medium square5"></div>
        <div class="circle large square1"></div>
        <div class="circle large square2"></div>
        <div class="circle large square3"></div>
        <div class="circle large square4"></div>
    </div>
</section>
<!-- End Page Title Area -->

<!-- Start Signup Area -->
<section class="signup-area ptb-100">
    <div class="container">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="signup-image">
                    <img src="/Front/assets/img/marketing.png" alt="image">
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="signup-form">
                    <h3>حساب کاربری برای خود بسازید</h3>
                    @if(Session::has('success'))
                        <div class="alert alert-success mt-3">
                            <button type="button" class="close" data-dismiss="alert"
                                    aria-hidden="true">
                                &times;
                            </button>
                            <strong></strong> {{ Session::get('message', '') }}
                        </div>
                    @endif
                    @if(count($errors) > 0 )
                        <div class="alert alert-danger alert-dismissible fade show mt-3"
                             role="alert">
                            <button type="button" class="close" data-dismiss="alert"
                                    aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <ul class="p-0 m-0" style="list-style: none;">
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{route('StoreRegister')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="نام" name="name">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="نام خانوادگی" name="family">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="موبایل" name="mobile">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="رمز عبور" name="password">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="تکرار مز عبور" name="repeat">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary">ثبت نام کنید!</button>
                                <br>
                                <span>در حال حاضر یک کاربر ثبت شده است؟ <a href="{{route('login')}}">ورود!</a></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Signup Area -->
</body>
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
</html>
