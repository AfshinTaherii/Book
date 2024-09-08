@extends('Front.father.total')
@section('content')
    <!-- Start Page Title Area -->
    <section class="page-title-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>سبد خرید</h2>
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

    <!-- Start Cart Area -->
    <section class="cart-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <form>
                        <div class="cart-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">محصول</th>
                                    <th scope="col">نام</th>
                                    <th scope="col">قیمت واحد</th>
                                    <th scope="col">تعداد</th>
                                    <th scope="col">مجموع</th>
                                    <th scope="col">پاک کردن</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#">
                                            <img src="/Front/assets/img/shop-item1.jpg" alt="item">
                                        </a>
                                    </td>

                                    <td class="product-name">
                                        <a href="#">ساعت هوشمند</a>
                                    </td>

                                    <td class="product-price">
                                        <span class="unit-amount">تومان 30.00</span>
                                    </td>

                                    <td class="product-quantity">
                                        <input type="number" class="form-control" value="1">
                                    </td>

                                    <td class="product-subtotal">
                                        <span class="subtotal-amount">تومان 30.00</span>
                                    </td>

                                    <td class="product-remove">
                                        <a href="#"><i class="icofont-ui-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#">
                                            <img src="/Front/assets/img/shop-item2.jpg" alt="item">
                                        </a>
                                    </td>

                                    <td class="product-name">
                                        <a href="#">ساعت هوشمند</a>
                                    </td>

                                    <td class="product-price">
                                        <span class="unit-amount">تومان 30.00</span>
                                    </td>

                                    <td class="product-quantity">
                                        <input type="number" class="form-control" value="1">
                                    </td>

                                    <td class="product-subtotal">
                                        <span class="subtotal-amount">تومان 30.00</span>
                                    </td>

                                    <td class="product-remove">
                                        <a href="#"><i class="icofont-ui-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#">
                                            <img src="/Front/assets/img/shop-item3.jpg" alt="item">
                                        </a>
                                    </td>

                                    <td class="product-name">
                                        <a href="#">ساعت هوشمند</a>
                                    </td>

                                    <td class="product-price">
                                        <span class="unit-amount">تومان 30.00</span>
                                    </td>

                                    <td class="product-quantity">
                                        <input type="number" class="form-control" value="1">
                                    </td>

                                    <td class="product-subtotal">
                                        <span class="subtotal-amount">تومان 30.00</span>
                                    </td>

                                    <td class="product-remove">
                                        <a href="#"><i class="icofont-ui-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#">
                                            <img src="/Front/assets/img/shop-item4.jpg" alt="item">
                                        </a>
                                    </td>

                                    <td class="product-name">
                                        <a href="#">ساعت هوشمند</a>
                                    </td>

                                    <td class="product-price">
                                        <span class="unit-amount">تومان 30.00</span>
                                    </td>

                                    <td class="product-quantity">
                                        <input type="number" class="form-control" value="1">
                                    </td>

                                    <td class="product-subtotal">
                                        <span class="subtotal-amount">تومان 30.00</span>
                                    </td>

                                    <td class="product-remove">
                                        <a href="#"><i class="icofont-ui-delete"></i></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="cart-buttons">
                            <div class="row h-100 justify-content-center align-items-center">
                                <div class="col-lg-7 col-md-7">
                                    <div class="coupon-box">
                                        <input type="text" class="form-control" placeholder="کد کوپن">
                                        <button type="submit">کد کوپن را اعمال کنید</button>
                                    </div>
                                </div>

                                <div class="col-lg-5 col-md-5 text-right">
                                    <a href="#" class="btn btn-primary">به روز رسانی سبد خرید</a>
                                </div>
                            </div>
                        </div>

                        <div class="cart-totals">
                            <h3>مجموع سبد</h3>

                            <ul>
                                <li>کل حجم: <span>تومان 250.00</span></li>
                                <li>جمع: <span>تومان 250.00</span></li>
                            </ul>
                            <a href="#" class="btn btn-primary">تایید کنید</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Cart Area -->
@endsection
