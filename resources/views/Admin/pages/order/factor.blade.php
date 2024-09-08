@extends('dashboard.father.total')
@section('content')
    <!-- invoice page -->
    <section class="card invoice-page">
        <div id="invoice-template" class="card-body">
            <!-- Invoice Company Details -->
            <h6 class="text-center">بسمه تعالی</h6>

            <div class="row">
                <div class="col-sm-6 col-12 text-left mt-2">
                    <img src="/dashboard/app-assets/images/logo/logo.png" alt="company logo"/>
                </div>
                <div class="col-sm-6 col-12 text-right pt-1">
                    <h6 class="mt-2"> تاریخ: {{$resultTime}}</h6>
                    <h6 class="mt-2">شماره فاکتور: {{$carts->trackingCode}}</h6>
                </div>
            </div>
            <h2 class="text-center mt-2">نام فروشگاه</h2>
            <!--/ Invoice Company Details -->
            <hr>
            <!-- Invoice Recipient Details -->
            <div id="invoice-items-details" class="pt-1 invoice-items-table">
                <div class="row">
                    <div class="table-responsive col-12">
                        <table class="table table-borderless">
                            <thead>
                            <tr>
                                <th>نام تحویل گیرنده</th>
                                <th>موبایل تحویل گیرنده</th>
                                <th>آدرس</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                        <span>
                                            {{$address->name}}
                                        </span>
                                </td>
                                <td>
                                        <span>
                                            {{$address->mobile}}
                                        </span>
                                </td>
                                <td>
                                        <span>
                                            {{$totalAddress}}
                                        </span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!--/ Invoice Recipient Details -->
            <hr>
            <!-- Invoice Items Details -->
            <div id="invoice-items-details" class="pt-1 invoice-items-table">
                <div class="row">
                    <div class="table-responsive col-12">
                        <table class="table table-borderless">
                            <thead>
                            <tr>
                                <th>نام محصول</th>
                                <th>تعداد</th>
                                <th>قیمت محصول</th>
                                <th>قیمت تخفیف خورده</th>
                                <th>قیمت کل</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($shop as $item)
                                <tr>
                                    <td>
                                        <span>
                                            {{$item->productId}}
                                        </span>
                                    </td>
                                    <td>
                                        <span>
                                            {{$item->number}}
                                        </span>
                                    </td>
                                    <td>
                                        <span>
                                            {{$item->price}}
                                            <span>تومان</span>
                                        </span>
                                    </td>
                                    <td>
                                        <span>
                                            {{$item->offPrice}}
                                            <span>تومان</span>
                                        </span>
                                    </td>
                                    <td>
                                        <span>
                                            {{$item->totalPrice}}
                                            <span>تومان</span>
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div id="invoice-total-details" class="invoice-total-table">
                <div class="row">
                    <div class="col-7 offset-5">
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                <tr>
                                    <th>ریز فاکتور</th>
                                    <td>{{$total}} تومان</td>
                                </tr>
                                <tr>
                                    <th>قیمت تخفیف</th>
                                    <td>{{$totalOffPrice}}</td>
                                </tr>
                                <tr>
                                    <th>مجموع فاکتور</th>
                                    <td>{{$carts->TotalPrice}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
          
        </div>
    </section>
    <!-- invoice page end -->
@endsection
