@extends('Front.father.total')
@section('content')
    <!-- Start Sidebar Modal -->
    <div class="sidebar-modal">
        <div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true"><i class="icofont-close"></i></span></button>

                        <h2 class="modal-title" id="myModalLabel2"><a href="index.html"><img
                                    src="/Front/assets/img/logo.png" alt="logo"></a></h2>
                    </div>

                    <div class="modal-body">
                        <div class="sidebar-modal-widget">
                            <h3 class="title">لینک های اضافی</h3>
                            <ul>
                                <li><a href="{{route('Login')}}">ورود</a></li>
                                <li><a href="{{route('register')}}">ثبت نام</a></li>
                                <li><a href="{{route('logout')}}">خروج</a></li>
                            </ul>
                        </div>

                        <div class="sidebar-modal-widget">
                            <h3 class="title">اطلاعات تماس</h3>

                            <ul class="contact-info">
                                <li>
                                    <i class="icofont-google-map"></i>
                                    آدرس
                                    <span>کالیفرنیا/ ساختمان علارور</span>
                                </li>
                                <li>
                                    <i class="icofont-email"></i>
                                    ایمیل
                                    <span>admin@crake.com</span>
                                </li>
                                <li>
                                    <i class="icofont-phone"></i>
                                    تلفن
                                    <span>+123 456 7890</span>
                                </li>
                            </ul>
                        </div>

                        <div class="sidebar-modal-widget">
                            <h3 class="title">ارتباط با ما</h3>

                            <ul class="social-list">
                                <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                <li><a href="#"><i class="icofont-instagram"></i></a></li>
                                <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- modal-content -->
            </div><!-- modal-dialog -->
        </div><!-- modal -->
    </div>
    <!-- End Sidebar Modal -->

    <!-- Start Search Box -->
    <div id="header-search" class="header-search">
        <button type="button" class="close">×</button>
        <form class="header-search-form">
            <input type="search" value="" placeholder="همینجا تایپ کنید........"/>
            <button type="submit" class="btn btn-primary">جستجو</button>
        </form>
    </div>
    <!-- End Search Box -->

    <!-- Start Startup Main Banner -->
    <div class="home-slides startup-home">
        <div class="main-banner startup-bg1">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="row">
                            @foreach($slider as $item)
                                <div class="col-lg-6 col-md-12">
                                    <div class="startup-image">
                                        <img src="{{$item->image}}" class="wow fadeInDown" data-wow-delay="0.6s"
                                             alt="board">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-gray shape-1"></div>
            <div class="shape1"><img src="/Front/assets/img/shape1.png" alt="img"></div>
            <div class="shape2"><img src="/Front/assets/img/shape2.png" alt="img"></div>
            <div class="shape3"><img src="/Front/assets/img/shape3.png" alt="img"></div>
            <div class="shape6"><img src="/Front/assets/img/shape6.png" alt="img"></div>
            <div class="shape8 rotateme"><img src="/Front/assets/img/shape8.svg" alt="shape"></div>
            <div class="shape9"><img src="/Front/assets/img/shape9.svg" alt="shape"></div>
        </div>

        <div class="main-banner startup-bg2">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="hero-content">
                                    <h1>این زمان برای ایجاد طرح کسب و کار خود است</h1>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                        گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                        استفاده از طراحان گرافیک است.</p>

                                    <a href="#" class="btn btn-primary">هم اکنون شروع کنید</a>
                                    <a href="https://www.youtube.com/watch?v=bk7McNUjWgw"
                                       class="video-btn popup-youtube"> تماشای ویدیو <i class="icofont-play-alt-3"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="startup-image">
                                    <img src="/Front/assets/img/startup-shape/board.png" class="wow fadeInDown"
                                         data-wow-delay="0.6s" alt="board">
                                    <img src="/Front/assets/img/startup-shape/chart1.png" class="wow fadeInUp"
                                         data-wow-delay="0.6s" alt="chart1">
                                    <img src="/Front/assets/img/startup-shape/chart2.png" class="wow fadeInLeft"
                                         data-wow-delay="0.6s" alt="chart2">
                                    <img src="/Front/assets/img/startup-shape/check-mark.png" class="wow zoomIn"
                                         data-wow-delay="0.6s" alt="check-mark">
                                    <img src="/Front/assets/img/startup-shape/girl1.png" class="wow bounceIn"
                                         data-wow-delay="0.6s" alt="girl1">
                                    <img src="/Front/assets/img/startup-shape/girl2.png" class="wow fadeInDown"
                                         data-wow-delay="0.6s" alt="girl2">
                                    <img src="/Front/assets/img/startup-shape/line.png" class="wow zoomIn"
                                         data-wow-delay="0.6s" alt="line">
                                    <img src="/Front/assets/img/startup-shape/man.png" class="wow fadeInUp"
                                         data-wow-delay="0.6s" alt="man">
                                    <img src="/Front/assets/img/startup-shape/progress.png" class="wow rotateIn"
                                         data-wow-delay="0.6s" alt="progress">
                                    <img src="/Front/assets/img/startup-shape/table.png" class="wow fadeInUp"
                                         data-wow-delay="0.6s" alt="table">

                                    <img src="/Front/assets/img/startup-shape/main-image.png" class="wow fadeInUp"
                                         data-wow-delay="0.6s" alt="main-image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-gray shape-1"></div>
            <div class="shape1"><img src="/Front/assets/img/shape1.png" alt="img"></div>
            <div class="shape2"><img src="/Front/assets/img/shape2.png" alt="img"></div>
            <div class="shape3"><img src="/Front/assets/img/shape3.png" alt="img"></div>
            <div class="shape6"><img src="/Front/assets/img/shape6.png" alt="img"></div>
            <div class="shape8 rotateme"><img src="/Front/assets/img/shape8.svg" alt="shape"></div>
            <div class="shape9"><img src="/Front/assets/img/shape9.svg" alt="shape"></div>
        </div>

        <div class="main-banner startup-bg3">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="hero-content">
                                    <h1>این زمان برای ایجاد طرح کسب و کار خود است</h1>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                        گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                        استفاده از طراحان گرافیک است.</p>

                                    <a href="#" class="btn btn-primary">هم اکنون شروع کنید</a>
                                    <a href="https://www.youtube.com/watch?v=bk7McNUjWgw"
                                       class="video-btn popup-youtube"> تماشای ویدیو <i class="icofont-play-alt-3"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="startup-image">
                                    <div class="startup-image">
                                        <img src="/Front/assets/img/startup-shape/board.png" class="wow fadeInDown"
                                             data-wow-delay="0.6s" alt="board">
                                        <img src="/Front/assets/img/startup-shape/chart1.png" class="wow fadeInUp"
                                             data-wow-delay="0.6s" alt="chart1">
                                        <img src="/Front/assets/img/startup-shape/chart2.png" class="wow fadeInLeft"
                                             data-wow-delay="0.6s" alt="chart2">
                                        <img src="/Front/assets/img/startup-shape/check-mark.png" class="wow zoomIn"
                                             data-wow-delay="0.6s" alt="check-mark">
                                        <img src="/Front/assets/img/startup-shape/girl1.png" class="wow bounceIn"
                                             data-wow-delay="0.6s" alt="girl1">
                                        <img src="/Front/assets/img/startup-shape/girl2.png" class="wow fadeInDown"
                                             data-wow-delay="0.6s" alt="girl2">
                                        <img src="/Front/assets/img/startup-shape/line.png" class="wow zoomIn"
                                             data-wow-delay="0.6s" alt="line">
                                        <img src="/Front/assets/img/startup-shape/man.png" class="wow fadeInUp"
                                             data-wow-delay="0.6s" alt="man">
                                        <img src="/Front/assets/img/startup-shape/progress.png" class="wow rotateIn"
                                             data-wow-delay="0.6s" alt="progress">
                                        <img src="/Front/assets/img/startup-shape/table.png" class="wow fadeInUp"
                                             data-wow-delay="0.6s" alt="table">

                                        <img src="/Front/assets/img/startup-shape/main-image.png" class="wow fadeInUp"
                                             data-wow-delay="0.6s" alt="main-image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-gray shape-1"></div>
            <div class="shape1"><img src="/Front/assets/img/shape1.png" alt="img"></div>
            <div class="shape2"><img src="/Front/assets/img/shape2.png" alt="img"></div>
            <div class="shape3"><img src="/Front/assets/img/shape3.png" alt="img"></div>
            <div class="shape6"><img src="/Front/assets/img/shape6.png" alt="img"></div>
            <div class="shape8 rotateme"><img src="/Front/assets/img/shape8.svg" alt="shape"></div>
            <div class="shape9"><img src="/Front/assets/img/shape9.svg" alt="shape"></div>
        </div>
    </div>
    <!-- End Startup Main Banner -->

    <!-- Start Product Area -->
    <section class="product-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>آخرین محصول ما</h2>
                <div class="bar"></div>
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
            </div>

            <div class="row">
                <div class="product-slides">
                    {{--                    @foreach($slider as $item)--}}
                    {{--                    {{$item->image}}--}}

                    <div class="col-lg-12">
                        <div class="single-product">
                            <div class="product-img">
                                <img src="/Front/assets/img/shop-item1.jpg" alt="item">

                                <a href="#" class="add-to-cart-btn">افزودن به سبد خرید<i
                                        class="icofont-shopping-cart"></i></a>
                            </div>

                            <div class="product-content">
                                <h3>
                                    <a href="#">ساعت کشویی</a>
                                </h3>

                                <div class="row h-100 justify-content-center align-items-center">
                                    <div class="col-lg-5 col-6">
                                        <h5>تومان 8.50 <span>تومان 12.00</span></h5>
                                    </div>

                                    <div class="col-lg-7 col-6">
                                        <ul>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--                    @endforeach--}}


                    <div class="col-lg-12">
                        <div class="single-product">
                            <div class="product-img">
                                <img src="/Front/assets/img/shop-item2.jpg" alt="item">

                                <a href="#" class="add-to-cart-btn">افزودن به سبد خرید <i
                                        class="icofont-shopping-cart"></i></a>
                            </div>

                            <div class="product-content">
                                <h3>
                                    <a href="#">ساعت کشویی</a>
                                </h3>

                                <div class="row h-100 justify-content-center align-items-center">
                                    <div class="col-lg-5 col-6">
                                        <h5>تومان 8.50 <span>تومان 12.00</span></h5>
                                    </div>

                                    <div class="col-lg-7 col-6">
                                        <ul>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="single-product">
                            <div class="product-img">
                                <img src="/Front/assets/img/shop-item3.jpg" alt="item">

                                <a href="#" class="add-to-cart-btn">افزودن به سبد خرید <i
                                        class="icofont-shopping-cart"></i></a>
                            </div>

                            <div class="product-content">
                                <h3>
                                    <a href="#">ساعت کشویی</a>
                                </h3>

                                <div class="row h-100 justify-content-center align-items-center">
                                    <div class="col-lg-5 col-6">
                                        <h5>تومان 8.50 <span>تومان 12.00</span></h5>
                                    </div>

                                    <div class="col-lg-7 col-6">
                                        <ul>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="single-product">
                            <div class="product-img">
                                <img src="/Front/assets/img/shop-item4.jpg" alt="item">

                                <a href="#" class="add-to-cart-btn">افزودن به سبد خرید <i
                                        class="icofont-shopping-cart"></i></a>
                            </div>

                            <div class="product-content">
                                <h3>
                                    <a href="#">ساعت کشویی</a>
                                </h3>

                                <div class="row h-100 justify-content-center align-items-center">
                                    <div class="col-lg-5 col-6">
                                        <h5>تومان 8.50 <span>تومان 12.00</span></h5>
                                    </div>

                                    <div class="col-lg-7 col-6">
                                        <ul>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="single-product">
                            <div class="product-img">
                                <img src="/Front/assets/img/shop-item5.jpg" alt="item">

                                <a href="#" class="add-to-cart-btn">افزودن به سبد خرید <i
                                        class="icofont-shopping-cart"></i></a>
                            </div>

                            <div class="product-content">
                                <h3>
                                    <a href="#">ساعت کشویی</a>
                                </h3>

                                <div class="row h-100 justify-content-center align-items-center">
                                    <div class="col-lg-5 col-6">
                                        <h5>تومان 8.50 <span>تومان 12.00</span></h5>
                                    </div>

                                    <div class="col-lg-7 col-6">
                                        <ul>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="single-product">
                            <div class="product-img">
                                <img src="/Front/assets/img/shop-item6.jpg" alt="item">

                                <a href="#" class="add-to-cart-btn">افزودن به سبد خرید <i
                                        class="icofont-shopping-cart"></i></a>
                            </div>

                            <div class="product-content">
                                <h3>
                                    <a href="#">ساعت کشویی</a>
                                </h3>

                                <div class="row h-100 justify-content-center align-items-center">
                                    <div class="col-lg-5 col-6">
                                        <h5>تومان 8.50 <span>تومان 12.00</span></h5>
                                    </div>

                                    <div class="col-lg-7 col-6">
                                        <ul>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Product Area -->

    <!-- Start Blog Area -->
    <section class="blog-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>آخرین اخبار ما</h2>
                <div class="bar"></div>
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
            </div>

            <div class="row">
                <div class="blog-slides">
                    <div class="col-lg-12 col-md-12">
                        <div class="single-blog-post">
                            <a href="#" class="post-image"><img src="/Front/assets/img/blog-img1.jpg" alt="blog-image"></a>

                            <div class="blog-post-content">
                                <ul>
                                    <li><i class="icofont-user-male"></i> <a href="#">ادمبن</a></li>
                                    <li><i class="icofont-wall-clock"></i> اسفند 1397</li>
                                </ul>
                                <h3><a href="#">محبوب ترین برنامه های کسب و کار جدید</a></h3>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                    از طراحان گرافیک است. </p>
                                <a href="#" class="read-more-btn">ادامه مطلب <i
                                        class="icofont-rounded-double-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="single-blog-post">
                            <a href="#" class="post-image"><img src="/Front/assets/img/blog-img2.jpg" alt="blog-image"></a>

                            <div class="blog-post-content">
                                <ul>
                                    <li><i class="icofont-user-male"></i> <a href="#">ادمبن</a></li>
                                    <li><i class="icofont-wall-clock"></i> اسفند 1397</li>
                                </ul>
                                <h3><a href="#">بهترین ابزار مدیریت بازاریابی</a></h3>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                    از طراحان گرافیک است. </p>
                                <a href="#" class="read-more-btn">ادامه مطلب <i
                                        class="icofont-rounded-double-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="single-blog-post">
                            <a href="#" class="post-image"><img src="/Front/assets/img/blog-img3.jpg" alt="blog-image"></a>

                            <div class="blog-post-content">
                                <ul>
                                    <li><i class="icofont-user-male"></i> <a href="#">ادمبن</a></li>
                                    <li><i class="icofont-wall-clock"></i> اسفند 1397</li>
                                </ul>
                                <h3><a href="#">3 پلاگین ووکامرس برای افزایش فروش</a></h3>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                    از طراحان گرافیک است. </p>
                                <a href="#" class="read-more-btn">ادامه مطلب <i
                                        class="icofont-rounded-double-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">

                        <div class="single-blog-post">
                            <a href="#" class="post-image"><img src="/Front/assets/img/blog-img4.jpg" alt="blog-image"></a>

                            <div class="blog-post-content">
                                <ul>
                                    <li><i class="icofont-user-male"></i> <a href="#">ادمبن</a></li>
                                    <li><i class="icofont-wall-clock"></i> اسفند 1397</li>
                                </ul>
                                <h3><a href="#">طراحی ایمیل های سفارشی</a></h3>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                    از طراحان گرافیک است. </p>
                                <a href="#" class="read-more-btn">ادامه مطلب <i
                                        class="icofont-rounded-double-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="single-blog-post">
                            <a href="#" class="post-image"><img src="/Front/assets/img/blog-img5.jpg" alt="blog-image"></a>

                            <div class="blog-post-content">
                                <ul>
                                    <li><i class="icofont-user-male"></i> <a href="#">ادمبن</a></li>
                                    <li><i class="icofont-wall-clock"></i> اسفند 1397</li>
                                </ul>
                                <h3><a href="#">محبوب ترین برنامه های جدید در سال 2024</a></h3>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                    از طراحان گرافیک است. </p>
                                <a href="#" class="read-more-btn">ادامه مطلب <i
                                        class="icofont-rounded-double-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="single-blog-post">
                            <a href="#" class="post-image"><img src="/Front/assets/img/blog-img3.jpg" alt="blog-image"></a>

                            <div class="blog-post-content">
                                <ul>
                                    <li><i class="icofont-user-male"></i> <a href="#">ادمبن</a></li>
                                    <li><i class="icofont-wall-clock"></i> اسفند 1397</li>
                                </ul>
                                <h3><a href="#">سریع ترین برنامه های در حال رشد در سال 2024</a></h3>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                    از طراحان گرافیک است. </p>
                                <a href="#" class="read-more-btn">ادامه مطلب <i
                                        class="icofont-rounded-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Area -->
@endsection
