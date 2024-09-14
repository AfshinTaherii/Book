@extends('Front.father.total')
@section('content')
    <!-- Start Page Title Area -->
    <section class="page-title-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>بررسی</h2>
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

    <!-- Start Checkout Area -->
    <section class="checkout-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="user-actions">
                        <i class="icofont-ui-file"></i>
                        <span>بازگشت مشتری؟ <a href="#">برای ورود اینجا کلیک کنید</a></span>
                    </div>
                </div>
            </div>
            <form method="post" action="#">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="billing-details">
                            <h3 class="title">جزئیات صورتحساب</h3>
                            <div class="bar"></div>
                            <div class="row">
{{--                                <div class="col-lg-12 col-md-12">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label>استان <span class="required">*</span></label>--}}

{{--                                        <div class="select-box">--}}
{{--                                            <select class="form-control" name="provincesId">--}}
{{--                                                <option>استان را انتخاب کنید</option>--}}
{{--                                                @foreach($City as $item)--}}
{{--                                                    <option value="{{$item->id}}">{{$item->name}}</option>--}}
{{--                                                @endforeach--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-12 col-md-12">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label>شهر <span class="required">*</span></label>--}}

{{--                                        <div class="select-box">--}}
{{--                                            <select class="form-control" name="cityId">--}}
{{--                                                <option>شهر را انتخاب کنید</option>--}}
{{--                                                @foreach($City as $item)--}}
{{--                                                    <option value="{{$item->id}}">{{$item->name}}</option>--}}
{{--                                                @endforeach--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="col-lg-12 col-md-12">
                                <fieldset class="form-group floating-label-form-group">
                                <textarea class="form-control" name="details" id="details"
                                      placeholder="آدرس خود را وارد نمایید"></textarea>
                                </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="order-details">
                            <h3 class="title">سفارش شما</h3>
                            <div class="bar"></div>

                            <div class="order-table table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th scope="col">نام محصول</th>
                                        <th scope="col">تعداد محصول</th>
                                        <th scope="col">مجموع</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($data as $item)
                                    <tr>
                                        <td class="product-name">
                                            <a href="#">{{$item->titleFa}}</a>
                                        </td>

                                        <td class="product-name">
                                            <a href="#">{{$item->amount}}</a>
                                        </td>

                                        <td class="product-total">
                                            <span class="subtotal-amount">تومان {{number_format($item->priceBook)}}</span>
                                        </td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td class="total-price">
                                            <span>مبلغ کل</span>
                                        </td>
                                        <td class="total-price">
                                            <span></span>
                                        </td>

                                        <td class="product-subtotal">
                                            <span class="subtotal-amount">تومان {{number_format($totalPrice)}}</span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

{{--                            <div class="payment-method">--}}
{{--                                <p>--}}
{{--                                    <input type="radio" id="direct-bank-transfer" name="radio-group" checked>--}}
{{--                                    <label for="direct-bank-transfer">انتقال مستقیم بانک</label>--}}

{{--                                    پرداخت خود را مستقیما در حساب بانکی ما انجام دهید. لطفا از شناسه سفارش خود به عنوان مرجع پرداخت استفاده کنید. سفارش شما تا زمانی که وجوه در حساب ما پاک نشده است ارسال نخواهد شد.--}}
{{--                                </p>--}}
{{--                                <p>--}}
{{--                                    <input type="radio" id="paypal" name="radio-group">--}}
{{--                                    <label for="paypal">آنلاین</label>--}}
{{--                                </p>--}}
{{--                                <p>--}}
{{--                                    <input type="radio" id="cash-on-delivery" name="radio-group">--}}
{{--                                    <label for="cash-on-delivery">درب محل</label>--}}
{{--                                </p>--}}
{{--                            </div>--}}
                            <a href="#" class="btn btn-primary order-btn">تایید نهایی</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- End Checkout Area -->
@endsection
