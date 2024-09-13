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
        @foreach($slider as $item)
              <img src="{{$item->image}}" alt="image" style="width: 100%">
            <div   class="main-banner ">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="hero-content">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>

    <!-- Start Partner Area -->

    <div class="container">
        <div class="section-title" style="margin-top: 70px">
            <h2>دسته بندی محصولات</h2>
            <div class="bar"></div>
        </div>
    </div>

    <div class="partner-area marketing-partner">
        <div class="container">
            <div class="row">
                <div class="partner-slides">
                    @foreach($group as $item)
                        <div class="col-lg-12">
                            <div class="item">
                                <a href="{{route('productList',$item->slug)}}">
                                    <img src="{{$item->image}}" alt="partner">
                                    <h4 class="font-weight-bold mt-3">{{$item->titleFa}}</h4></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- End Partner Area -->

    <!-- Start Product Area -->
    <section class="product-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>آخرین محصول ما</h2>
                <div class="bar"></div>
            </div>

            <div class="row">
                <div class="product-slides">
                    @foreach($product as $item)
                        <div class="col-lg-12">
                            <div class="single-product">
                                <div class="product-img">
                                    <img src="{{$item->cover_image}}" alt="item">

                                    <a href="{{ route('addToBasket',$item->id) }}" class="add-to-cart-btn" id="addToCartButton">افزودن به سبد خرید<i
                                            class="icofont-shopping-cart"></i></a>
                                </div>

                                <div class="product-content">
                                    <h3>
                                        <a href="{{route('showProduct',$item->slug)}}">{{$item->titleFa}}</a>
                                    </h3>

                                    <div class="row h-100 justify-content-center align-items-center">
                                        <div class="col-lg-5 col-6">
                                            <h5>{{$item->offPrice}} <span>{{$item->priceBook}}</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
            </div>

            <div class="row">
                <div class="blog-slides">
                    @foreach($blog as $item)
                    <div class="col-lg-12 col-md-12">
                        <div class="single-blog-post">
                            <a href="#" class="post-image"><img src="{{$item->image}}" alt="blog-image"></a>

                            <div class="blog-post-content">
                                <ul>
                                    <li><i class="icofont-user-male"></i> <a href="#">ادمین</a></li>
                                    <li><i class="icofont-wall-clock"></i>شهریور 1403</li>
                                </ul>
                                <h3><a href="#">{{$item->titleFa}}</a></h3>
                                <p>{{$item->shortDescriptionFa}}</p>
                                <a href="#" class="read-more-btn">ادامه مطلب <i
                                        class="icofont-rounded-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Area -->
@endsection
