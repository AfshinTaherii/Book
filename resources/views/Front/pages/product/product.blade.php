@extends('Front.father.total')
@section('content')
    <!-- Start Page Title Area -->
    <section class="page-title-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>{{$title}}</h2>
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

{{--    <!-- Start Product Area -->--}}
{{--    <section class="product-area ptb-100">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12 col-md-12">--}}
{{--                    <div class="woocommerce-topbar">--}}
{{--                        <div class="row h-100 justify-content-center align-items-center">--}}
{{--                            <div class="col-lg-9 col-md-7">--}}
{{--                                <div class="woocommerce-result-count">--}}
{{--                                    <p>نمایش 1-9 از 11 نتیجه</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col-lg-3 col-md-5">--}}
{{--                                <div class="woocommerce-topbar-ordering">--}}
{{--                                    <form>--}}
{{--                                        <div class="select-box">--}}
{{--                                            <select class="form-control">--}}
{{--                                                <option value="1">مرتب سازی بر اساس محبوبیت</option>--}}
{{--                                                <option value="2">بر اساس  میانگین امتیاز</option>--}}
{{--                                                <option value="0">بر اساس قدیمی ترین</option>--}}
{{--                                                <option value="3">بر اساس قیمت از کم به زیاد</option>--}}
{{--                                                <option value="4">بر اساس قیمت از زیاد به کم</option>--}}
{{--                                                <option value="5">بر اساس جدیدترین</option>--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="single-product">--}}
{{--                        <div class="product-img">--}}
{{--                            <img src="/Front/assets/img/shop-item1.jpg" alt="item">--}}

{{--                            <a href="#" class="add-to-cart-btn">افزودن به سبد خرید <i class="icofont-shopping-cart"></i></a>--}}
{{--                        </div>--}}

{{--                        <div class="product-content">--}}
{{--                            <h3>--}}
{{--                                <a href="#">ساعت کشویی</a>--}}
{{--                            </h3>--}}

{{--                            <div class="row h-100 justify-content-center align-items-center">--}}
{{--                                <div class="col-lg-5">--}}
{{--                                    <h5>تومان 8.50 <span>تومان 12.00</span></h5>--}}
{{--                                </div>--}}

{{--                                <div class="col-lg-7">--}}
{{--                                    <ul>--}}
{{--                                        <li><i class="icofont-star"></i></li>--}}
{{--                                        <li><i class="icofont-star"></i></li>--}}
{{--                                        <li><i class="icofont-star"></i></li>--}}
{{--                                        <li><i class="icofont-star"></i></li>--}}
{{--                                        <li><i class="icofont-star"></i></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="single-product">--}}
{{--                        <div class="product-img">--}}
{{--                            <img src="/Front/assets/img/shop-item2.jpg" alt="item">--}}

{{--                            <a href="#" class="add-to-cart-btn">افزودن به سبد خرید <i class="icofont-shopping-cart"></i></a>--}}
{{--                        </div>--}}

{{--                        <div class="product-content">--}}
{{--                            <h3>--}}
{{--                                <a href="#">ساعت کشویی</a>--}}
{{--                            </h3>--}}

{{--                            <div class="row h-100 justify-content-center align-items-center">--}}
{{--                                <div class="col-lg-5">--}}
{{--                                    <h5>تومان 8.50 <span>تومان 12.00</span></h5>--}}
{{--                                </div>--}}

{{--                                <div class="col-lg-7">--}}
{{--                                    <ul>--}}
{{--                                        <li><i class="icofont-star"></i></li>--}}
{{--                                        <li><i class="icofont-star"></i></li>--}}
{{--                                        <li><i class="icofont-star"></i></li>--}}
{{--                                        <li><i class="icofont-star"></i></li>--}}
{{--                                        <li><i class="icofont-star"></i></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="single-product">--}}
{{--                        <div class="product-img">--}}
{{--                            <img src="/Front/assets/img/shop-item3.jpg" alt="item">--}}

{{--                            <a href="#" class="add-to-cart-btn">افزودن به سبد خرید <i class="icofont-shopping-cart"></i></a>--}}
{{--                        </div>--}}

{{--                        <div class="product-content">--}}
{{--                            <h3>--}}
{{--                                <a href="#">ساعت کشویی</a>--}}
{{--                            </h3>--}}

{{--                            <div class="row h-100 justify-content-center align-items-center">--}}
{{--                                <div class="col-lg-5">--}}
{{--                                    <h5>تومان 8.50 <span>تومان 12.00</span></h5>--}}
{{--                                </div>--}}

{{--                                <div class="col-lg-7">--}}
{{--                                    <ul>--}}
{{--                                        <li><i class="icofont-star"></i></li>--}}
{{--                                        <li><i class="icofont-star"></i></li>--}}
{{--                                        <li><i class="icofont-star"></i></li>--}}
{{--                                        <li><i class="icofont-star"></i></li>--}}
{{--                                        <li><i class="icofont-star"></i></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="single-product">--}}
{{--                        <div class="product-img">--}}
{{--                            <img src="/Front/assets/img/shop-item4.jpg" alt="item">--}}

{{--                            <a href="#" class="add-to-cart-btn">افزودن به سبد خرید <i class="icofont-shopping-cart"></i></a>--}}
{{--                        </div>--}}

{{--                        <div class="product-content">--}}
{{--                            <h3>--}}
{{--                                <a href="#">ساعت کشویی</a>--}}
{{--                            </h3>--}}

{{--                            <div class="row h-100 justify-content-center align-items-center">--}}
{{--                                <div class="col-lg-5">--}}
{{--                                    <h5>تومان 8.50 <span>تومان 12.00</span></h5>--}}
{{--                                </div>--}}

{{--                                <div class="col-lg-7">--}}
{{--                                    <ul>--}}
{{--                                        <li><i class="icofont-star"></i></li>--}}
{{--                                        <li><i class="icofont-star"></i></li>--}}
{{--                                        <li><i class="icofont-star"></i></li>--}}
{{--                                        <li><i class="icofont-star"></i></li>--}}
{{--                                        <li><i class="icofont-star"></i></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="single-product">--}}
{{--                        <div class="product-img">--}}
{{--                            <img src="/Front/assets/img/shop-item5.jpg" alt="item">--}}

{{--                            <a href="#" class="add-to-cart-btn">افزودن به سبد خرید <i class="icofont-shopping-cart"></i></a>--}}
{{--                        </div>--}}

{{--                        <div class="product-content">--}}
{{--                            <h3>--}}
{{--                                <a href="#">ساعت کشویی</a>--}}
{{--                            </h3>--}}

{{--                            <div class="row h-100 justify-content-center align-items-center">--}}
{{--                                <div class="col-lg-5">--}}
{{--                                    <h5>تومان 8.50 <span>تومان 12.00</span></h5>--}}
{{--                                </div>--}}

{{--                                <div class="col-lg-7">--}}
{{--                                    <ul>--}}
{{--                                        <li><i class="icofont-star"></i></li>--}}
{{--                                        <li><i class="icofont-star"></i></li>--}}
{{--                                        <li><i class="icofont-star"></i></li>--}}
{{--                                        <li><i class="icofont-star"></i></li>--}}
{{--                                        <li><i class="icofont-star"></i></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="single-product">--}}
{{--                        <div class="product-img">--}}
{{--                            <img src="/Front/assets/img/shop-item6.jpg" alt="item">--}}

{{--                            <a href="#" class="add-to-cart-btn">افزودن به سبد خرید <i class="icofont-shopping-cart"></i></a>--}}
{{--                        </div>--}}

{{--                        <div class="product-content">--}}
{{--                            <h3>--}}
{{--                                <a href="#">ساعت کشویی</a>--}}
{{--                            </h3>--}}

{{--                            <div class="row h-100 justify-content-center align-items-center">--}}
{{--                                <div class="col-lg-5">--}}
{{--                                    <h5>تومان 8.50 <span>تومان 12.00</span></h5>--}}
{{--                                </div>--}}

{{--                                <div class="col-lg-7">--}}
{{--                                    <ul>--}}
{{--                                        <li><i class="icofont-star"></i></li>--}}
{{--                                        <li><i class="icofont-star"></i></li>--}}
{{--                                        <li><i class="icofont-star"></i></li>--}}
{{--                                        <li><i class="icofont-star"></i></li>--}}
{{--                                        <li><i class="icofont-star"></i></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-12 col-md-12">--}}
{{--                    <div class="pagination-area">--}}
{{--                        <nav aria-label="Page navigation example">--}}
{{--                            <ul class="pagination justify-content-center">--}}

{{--                                <li class="page-item"><a class="page-link" href="#"><i class="icofont-double-left"></i></a></li>--}}

{{--                                <li class="page-item active"><a class="page-link" href="#">1</a></li>--}}

{{--                                <li class="page-item"><a class="page-link" href="#">2</a></li>--}}

{{--                                <li class="page-item"><a class="page-link" href="#">3</a></li>--}}

{{--                                <li class="page-item"><a class="page-link" href="#"><i class="icofont-double-right"></i></a></li>--}}
{{--                            </ul>--}}
{{--                        </nav>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- End Product Area -->--}}


    <!-- Start Product Area -->
    <section class="product-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                </div>
                @foreach($data as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="{{route('showProduct',$item->slug)}}"><img src="{{$item->cover_image}}"
                                                                                      alt="item"></a>

                            </div>

                            <div class="product-content">
                                <h3>
                                    <a href="{{route('showProduct',$item->slug)}}">{{$item->titleFa}}</a>
                                </h3>

                                <div class="row h-100 justify-content-center align-items-center">
                                    @if($item->available == true)
                                        <div class="col-lg-11">
                                            <h5>تومان {{$item->offPrice}} <span>تومان {{$item->priceBook}}</span>
                                            </h5>
                                        </div>
                                    @else
                                        <div class="col-lg-11">
                                            <h5>عدم موجودی
                                            </h5>
                                        </div>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Product Area -->
@endsection
