@extends('Admin.father.total')
@section('style')
    <link rel="stylesheet" href="/datepicker/css/persianDatepicker-default.css"/>
@stop
@section('content')
    <div class="content-body">
        <section id="basic-input">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><h4 class="card-title">افزودن محصول</h4></div>
                        <div class="card-content">
                            <div class="card-body">
                                @if(Session::has('success'))
                                    <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                            &times;
                                        </button>
                                        <strong></strong> {{ Session::get('message', '') }}
                                    </div>
                                @endif
                                @if(count($errors) > 0 )
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <ul class="p-0 m-0" style="list-style: none;">
                                            @foreach($errors->all() as $error)
                                                <li>{{$error}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form method="post"
                                      action="{{route('storeProduct')}}"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-6 col-md-12 col-12 mb-1">
                                            <fieldset class="form-group"><label for="titleFa">عنوان فارسی</label>
                                                <input type="text" class="form-control" id="titleFa"
                                                       placeholder="عنوان فارسی" name="titleFa"></fieldset>
                                        </div>
                                        <div class="col-xl-6 col-md-12 col-12 mb-1">
                                            <fieldset class="form-group"><label for="titleEn">عنوان انگلیسی</label>
                                                <input type="text" class="form-control" id="titleEn"
                                                       placeholder="عنوان انگلیسی" name="titleEn"></fieldset>
                                        </div>
                                        <div class="col-xl-6 col-md-12 col-12 mb-1">
                                            <fieldset class="form-group"><label for="categoryId">دسته بندی</label>
                                                <select onchange="getSecondItem()" name="categoryId"
                                                        class="form-control" id="categoryId">
                                                    @foreach($Category as $item)
                                                        <option value="{{$item->id}}">{{$item->titleFa}}</option>
                                                    @endforeach
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-xl-6 col-md-12 col-12 mb-1">
                                            <fieldset class="form-group"><label for="priceBook">قیمت</label>
                                                <input type="text" class="form-control" id="priceBook"
                                                       placeholder="قیمت" name="priceBook"
                                                       onkeyup="offPriceChange(this)"></fieldset>
                                        </div>
                                        <div class="col-xl-6 col-md-12 col-12 mb-1">
                                            <fieldset class="form-group"><label for="offPrice">قیمت با تخفیف</label>
                                                <input type="text" class="form-control" id="offPrice"
                                                       placeholder="قیمت با تخفیف" name="offPrice"
                                                       onkeyup="offPriceChange(this)"></fieldset>
                                        </div>
                                        <div class="col-xl-6 col-md-12 col-12 mb-1">
                                            <fieldset class="form-group"><label for="offPercent">درصد تخفیف</label>
                                                <input type="text" class="form-control" id="offPercent"
                                                       placeholder="درصد تخفیف" name="offPercent" readonly></fieldset>
                                        </div>

                                        <div class="col-xl-6 col-md-12 col-12 mb-1">
                                            <fieldset class="form-group"><label for="available">تعداد موجودی</label>
                                                <input type="text" class="form-control" id="available"
                                                       placeholder="تعداد موجودی" name="available"></fieldset>
                                        </div>

                                        <div class="col-xl-6 col-md-12 col-12 mb-1">
                                            <fieldset class="form-group"><label for="pages">تعداد صفحات کتاب</label>
                                                <input type="text" class="form-control" id="pages"
                                                       placeholder="تعداد صفحات کتاب" name="pages"></fieldset>
                                        </div>
                                        <div class="col-xl-6 col-md-12 col-12 mb-1">
                                            <fieldset class="form-group"><label for="isbn">شناسه یکتا کتاب</label>
                                                <input type="text" class="form-control" id="isbn"
                                                       placeholder="شناسه یکتا کتاب" name="isbn"></fieldset>
                                        </div>
                                        <div class="col-xl-6 col-md-12 col-12 mb-1">
                                            <fieldset class="form-group"><label for="language">زبان کتاب</label>
                                                <select name="language"
                                                        class="form-control" id="language">
                                                    <option value="fa">فارسی</option>
                                                    <option value="en">انگلیسی</option>
                                                </select>
                                            </fieldset>
                                        </div>

                                        <div class="col-xl-6 col-md-12 col-12 mb-1">
                                            <fieldset class="form-group"><label for="authorFa">نویسنده به فارسی</label>
                                                <input type="text" class="form-control" id="authorFa"
                                                       placeholder="نویسنده به فارسی" name="authorFa"></fieldset>
                                        </div>
                                        <div class="col-xl-6 col-md-12 col-12 mb-1">
                                            <fieldset class="form-group"><label for="authorEn">نویسنده به
                                                    انگلیسی</label>
                                                <input type="text" class="form-control" id="authorEn"
                                                       placeholder="نویسنده به انگلیسی" name="authorEn"></fieldset>
                                        </div>

                                        <div class="col-xl-6 col-md-12 col-12 mb-1">
                                            <fieldset class="form-group"><label for="publisherFa">ناشر به فارسی</label>
                                                <input type="text" class="form-control" id="publisherFa"
                                                       placeholder="ناشر به فارسی" name="publisherFa"></fieldset>
                                        </div>
                                        <div class="col-xl-6 col-md-12 col-12 mb-1">
                                            <fieldset class="form-group"><label for="publisherEn">ناشر به
                                                    انگلیسی</label>
                                                <input type="text" class="form-control" id="publisherEn"
                                                       placeholder="ناشر به انگلیسی" name="publisherEn"></fieldset>
                                        </div>
                                        <div class="col-xl-6 col-md-12 col-12 mb-1">
                                            <fieldset class="form-group"><label for="published_at">تاریخ منتشر
                                                    شده</label>
                                                <input type="text" class="form-control elementClass" id="published_at"
                                                       placeholder="تاریخ منتشر شده" name="published_at"></fieldset>
                                        </div>
                                        <div class="col-xl-6 col-md-12 col-12 mb-1">
                                            <fieldset class="form-group"><label for="descriptionFa">توضیحات به
                                                    فارسی</label>
                                                <textarea placeholder="توضیحات به فارسی" name="descriptionFa"
                                                          class="form-control" id="descriptionFa"></textarea>
                                            </fieldset>
                                        </div>
                                        <div class="col-xl-6 col-md-12 col-12 mb-1">
                                            <fieldset class="form-group"><label for="descriptionEn">توضیحات به
                                                    انگلیسی</label>
                                                <textarea placeholder="توضیحات به انگلیسی" name="descriptionEn"
                                                          class="form-control" id="descriptionEn"></textarea>
                                            </fieldset>
                                        </div>
                                        <div class="col-xl-6 col-md-12 col-12 mb-1">
                                            <fieldset class="form-group"><label for="cover_image">انتخاب عکس
                                                    اصلی</label>
                                                <input type="file" class="form-control" id="cover_image"
                                                       name="cover_image"></fieldset>
                                        </div>
                                        <div class="col-xl-6 col-md-12 col-12 mb-1">
                                            <fieldset class="form-group"><label for="seoKeyword">لغات کلیدی</label>
                                                <textarea placeholder="لغات کلیدی" name="seoKeyword"
                                                          class="form-control" id="seoKeyword"></textarea>
                                            </fieldset>
                                        </div>
                                        <div class="col-xl-6 col-md-12 col-12 mb-1">
                                            <fieldset class="form-group"><label for="seoDescription">توضیحات سئو</label>
                                                <textarea placeholder="توضیحات سئو" name="seoDescription"
                                                          class="form-control" id="seoDescription"></textarea>
                                            </fieldset>
                                        </div>
                                        <div class="col-xl-12 col-md-12 col-12 mb-1">
                                            <fieldset class="form-group"><label for="description">توضیحات محصول فارسی</label>
                                                <textarea placeholder="توضیحات محصول فارسی" name="descriptionFa"
                                                          class="form-control"
                                                          id="description"></textarea>
                                            </fieldset>
                                        </div>
                                        <div class="col-xl-12 col-md-12 col-12 mb-1">
                                            <fieldset class="form-group"><label for="description">توضیحات محصول انگلیسی</label>
                                                <textarea placeholder="توضیحات محصول انگلیسی" name="descriptionEn"
                                                          class="form-control"
                                                          id="description"></textarea>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div id="sliderInputArea">
                                        <div class="row" id="location0">
                                            <div class="col-6">
                                                <fieldset class="form-group"><label for="description">عکس
                                                        اسلایدر</label>
                                                    <input type="file" name="sliderImg[]" class="form-control">
                                                </fieldset>
                                            </div>
                                            <div class="col-6 text-center">
                                                <button class="btn btn-danger mt-1" type="button"
                                                        onclick="removeRow(0)">حذف
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center mt-3 mb-5">
                                        <button class="btn btn-primary w-100" type="button" onclick="addQuestion()">
                                            افزودن ورودی جدید
                                        </button>
                                    </div>
                                    <div class="col-xl-12 col-md-12 col-12 mb-5 text-center">
                                        <button type="submit" class="btn btn-success">تایید</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
@section('script')

    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description', {
            language: 'fa',
            content: 'fa',
            filebrowserUploadUrl: "{{route('ckeditorUpload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    </script>
    <script src="/datepicker/js/jquery.min.js"></script>
    <script src="/datepicker/js/persianDatepicker.min.js"></script>
    <script>
        $(".elementClass").persianDatepicker({formatDate: "YYYY-MM-DD"});
    </script>
    <script>
        var indexa = 1;

        function addQuestion() {
            var newInputtt = `<div class="col-6">
                                                <fieldset class="form-group"><label for="description">عکس اسلایدر</label>
                                                    <input type="file" name="sliderImg[]" class="form-control">
                                                </fieldset>
                                            </div>
                                            <div class="col-6 text-center">
                                                <button class="btn btn-danger mt-1" type="button" onclick="removeRow(` + indexa + `)">حذف</button>
                                            </div>`;

            const div = document.createElement('div');

            div.id = 'location' + indexa;

            div.className = "row";

            div.innerHTML = newInputtt;

            document.getElementById('sliderInputArea').appendChild(div);

            indexa++;
        }

        function removeRow(input) {
            document.getElementById('location' + input).innerHTML = "";
        }

        /*
        * price
        * offPrice
        * */
        function offPriceChange(ele) {
            ele.value = separate(ele.value);
            var offPriceValue = document.getElementById('offPrice').value;
            var priceValue = document.getElementById('priceBook').value;
            var offPercentValue = document.getElementById('offPercent').value;

            if (offPriceValue != null && offPriceValue != '' && priceValue != null && priceValue != '') {
                var offPriceNumber = offPriceValue.replaceAll(',', '');
                var priceNumber = priceValue.replaceAll(',', '');
                var diffr = priceNumber - offPriceNumber;
                if (diffr < 0) {
                    document.getElementById('offPercent').value = 0;
                } else {
                    var diffrPercent = Math.round((diffr / priceNumber) * 100);
                    document.getElementById('offPercent').value = diffrPercent;
                }
            } else {
                document.getElementById('offPercent').value = 0;
            }
        }
    </script>
@endsection
