@extends('Admin.father.total')

@section('content')
    <div class="content-body">
        <section id="basic-input">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><h4 class="card-title">ویرایش رویداد</h4></div>
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
                                      action="{{route('storeUpdateEvent')}}"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-6 col-md-12 col-12 mb-1">
                                            <fieldset class="form-group"><label for="titleFa">عنوان فارسی</label>
                                                <input type="text" class="form-control" id="titleFa"
                                                       placeholder="عنوان فارسی" name="titleFa" value="{{$data->titleFa}}"></fieldset>
                                        </div>
                                        <div class="col-xl-6 col-md-12 col-12 mb-1">
                                            <fieldset class="form-group"><label for="titleEn">عنوان انگلیسی</label>
                                                <input type="text" class="form-control" id="titleEn"
                                                       placeholder="عنوان انگلیسی" name="titleEn" value="{{$data->titleEn}}"></fieldset>
                                        </div>
                                        <div class="col-xl-6 col-md-12 col-12 mb-1">
                                            <fieldset class="form-group"><label for="start_time">تاریخ شروع</label>
                                                <input type="text" class="form-control" id="start_time"
                                                       placeholder="تاریخ شروع رویداد" name="start_time" value="{{$data->start_time}}"></fieldset>
                                        </div>
                                        <div class="col-xl-6 col-md-12 col-12 mb-1">
                                            <fieldset class="form-group"><label for="end_time">تاریخ پایان</label>
                                                <input type="text" class="form-control" id="end_time"
                                                       placeholder="تاریخ پایان رویداد" name="end_time" value="{{$data->end_time}}"></fieldset>
                                        </div>

                                        <div class="col-xl-12 col-md-12 col-12 mb-1">
                                            <fieldset class="form-group"><label for="locationFa">لوکشین به فارسی</label>
                                                <textarea placeholder="انتخاب لوکیشن به فارسی" name="locationFa"
                                                          class="form-control" id="locationFa">{{$data->locationFa}}</textarea>
                                            </fieldset>
                                        </div>

                                        <div class="col-xl-12 col-md-12 col-12 mb-1">
                                            <fieldset class="form-group"><label for="locationEn">لوکشین به انگلیسی</label>
                                                <textarea placeholder="انتخاب لوکشین به انگلیسی" name="locationEn"
                                                          class="form-control" id="locationEn">{{$data->locationEn}}</textarea>
                                            </fieldset>
                                        </div>
                                        <div class="col-xl-12 col-md-12 col-12 mb-1">
                                            <fieldset class="form-group"><label for="descriptionFa">توضیحات به فارسی</label>
                                                <textarea placeholder="توضیحات به فارسی" name="descriptionFa"
                                                          class="form-control" id="descriptionFa">{{$data->descriptionFa}}</textarea>
                                            </fieldset>
                                        </div>
                                        <div class="col-xl-12 col-md-12 col-12 mb-1">
                                            <fieldset class="form-group"><label for="descriptionEn">توضیحات به انگلیسی</label>
                                                <textarea placeholder="توضیحات به انگلیسی" name="descriptionEn"
                                                          class="form-control" id="descriptionEn">{{$data->descriptionEn}}</textarea>
                                            </fieldset>
                                        </div>
                                        <div class="col-xl-6 col-md-12 col-12 mb-1">
                                            <fieldset class="form-group"><label for="seoKeyword">لغات کلیدی</label>
                                                <textarea placeholder="لغات کلیدی" name="seoKeyword"
                                                          class="form-control" id="seoKeyword">{{$data->seoKeyword}}</textarea>
                                            </fieldset>
                                        </div>
                                        <div class="col-xl-6 col-md-12 col-12 mb-1">
                                            <fieldset class="form-group"><label for="seoDescription">توضیحات سئو</label>
                                                <textarea placeholder="توضیحات سئو" name="seoDescription"
                                                          class="form-control" id="seoDescription">{{$data->seoDescription}}</textarea>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <input name="id" value="{{$data->id}}" style="display: none">
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
@endsection
