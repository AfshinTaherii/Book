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

            <form>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="billing-details">
                            <h3 class="title">جزئیات صورتحساب</h3>
                            <div class="bar"></div>

                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>کشور <span class="required">*</span></label>

                                        <div class="select-box">
                                            <select class="form-control">
                                                <option value="5">آمریکا</option>
                                                <option value="1">پین</option>
                                                <option value="2">انگلیس</option>
                                                <option value="0">آلمان</option>
                                                <option value="3">فرانسه</option>
                                                <option value="4">ژاپن</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>نام کوچک <span class="required">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>نام خانوادگی <span class="required">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>نام شرکت</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label>آدرس <span class="required">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label>خانه / شهر <span class="required">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>دولت / کشور <span class="required">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>کد پستی / زیپ <span class="required">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>آدرس ایمیل <span class="required">*</span></label>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>تلفن <span class="required">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="create-an-account">
                                        <label class="form-check-label" for="create-an-account">ایجاد یک حساب کاربری؟</label>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="ship-different-address">
                                        <label class="form-check-label" for="ship-different-address">به آدرس دیگری بفرستید؟</label>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="notes" id="notes" cols="30" rows="4" placeholder="سفارش یادداشت" class="form-control"></textarea>
                                    </div>
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
                                        <th scope="col">مجموع</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <tr>
                                        <td class="product-name">
                                            <a href="#">ساعت هوشمند</a>
                                        </td>

                                        <td class="product-total">
                                            <span class="subtotal-amount">تومان 30.00</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product-name">
                                            <a href="#">تلویزیون</a>
                                        </td>

                                        <td class="product-total">
                                            <span class="subtotal-amount">تومان 30.00</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product-name">
                                            <a href="#">کتاب</a>
                                        </td>

                                        <td class="product-total">
                                            <span class="subtotal-amount">تومان 30.00</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product-name">
                                            <a href="#">ساعت هوشمند</a>
                                        </td>

                                        <td class="product-total">
                                            <span class="subtotal-amount">تومان 30.00</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product-name">
                                            <a href="#">تلویزیون</a>
                                        </td>

                                        <td class="product-total">
                                            <span class="subtotal-amount">تومان 30.00</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product-name">
                                            <a href="#">کتاب</a>
                                        </td>

                                        <td class="product-total">
                                            <span class="subtotal-amount">تومان 30.00</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="order-subtotal">
                                            <span>زیرمجموعه سبد خرید</span>
                                        </td>

                                        <td class="order-subtotal-price">
                                            <span class="order-subtotal-amount">تومان 210.00</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="order-shipping">
                                            <span>حمل دریایی</span>
                                        </td>

                                        <td class="shipping-price">
                                            <span>تومان 5.00</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="total-price">
                                            <span>سفارش کل</span>
                                        </td>

                                        <td class="product-subtotal">
                                            <span class="subtotal-amount">تومان 215.00</span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="payment-method">
                                <p>
                                    <input type="radio" id="direct-bank-transfer" name="radio-group" checked>
                                    <label for="direct-bank-transfer">انتقال مستقیم بانک</label>

                                    پرداخت خود را مستقیما در حساب بانکی ما انجام دهید. لطفا از شناسه سفارش خود به عنوان مرجع پرداخت استفاده کنید. سفارش شما تا زمانی که وجوه در حساب ما پاک نشده است ارسال نخواهد شد.
                                </p>
                                <p>
                                    <input type="radio" id="paypal" name="radio-group">
                                    <label for="paypal">پای پال</label>
                                </p>
                                <p>
                                    <input type="radio" id="cash-on-delivery" name="radio-group">
                                    <label for="cash-on-delivery">پرداخت نقد هنگام تحویل</label>
                                </p>
                            </div>

                            <a href="#" class="btn btn-primary order-btn">محل سفارش</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- End Checkout Area -->
@endsection
