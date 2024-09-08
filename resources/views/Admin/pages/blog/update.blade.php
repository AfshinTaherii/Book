@extends('Admin.father.total')
@section('content')
    <div class="content-body">
        <section id="basic-input">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><h4 class="card-title">ویرایش مقالات</h4></div>
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
                                      action="{{route('storeUpdateBlog')}}"
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
                                            <fieldset class="form-group"><label for="image">انتخاب عکس</label>
                                                <input type="file" class="form-control" id="image"
                                                       name="image"></fieldset>
                                        </div>

                                        <div class="col-xl-6 col-md-12 col-12 mb-1">
                                            <fieldset class="form-group"><label for="shortDescriptionFa">توضیحات کوتاه فارسی</label>
                                                <textarea placeholder="توضیحات کوتاه فارسی" name="shortDescriptionFa"
                                                          class="form-control" id="shortDescriptionFa">{{$data->shortDescriptionFa}}</textarea>
                                            </fieldset>
                                        </div>

                                        <div class="col-xl-6 col-md-12 col-12 mb-1">
                                            <fieldset class="form-group"><label for="shortDescriptionEn">توضیحات کوتاه انگلیسی</label>
                                                <textarea placeholder="توضیحات کوتاه انگلیسی" name="shortDescriptionEn"
                                                          class="form-control" id="shortDescriptionEn">{{$data->shortDescriptionEn}}</textarea>
                                            </fieldset>
                                        </div>
                                        <div class="col-xl-6 col-md-12 col-12 mb-1">
                                            <fieldset class="form-group"><label for="longDescriptionFa">توضیحات بلند فارسی</label>
                                                <textarea placeholder="توضیحات بلند فارسی" name="longDescriptionFa"
                                                          class="form-control" id="longDescriptionFa">{{$data->longDescriptionFa}}</textarea>
                                            </fieldset>
                                        </div>

                                        <div class="col-xl-6 col-md-12 col-12 mb-1">
                                            <fieldset class="form-group"><label for="longDescriptionEn">توضیحات بلند انگلیسی</label>
                                                <textarea placeholder="توضیحات بلند انگلیسی" name="longDescriptionEN"
                                                          class="form-control" id="longDescriptionEn">{{$data->longDescriptionEn}}</textarea>
                                            </fieldset>
                                        </div>
                                        <div class="col-xl-6 col-md-12 col-12 mb-1">
                                            <fieldset class="form-group"><label for="seoKeyboard">لغات کلیدی</label>
                                                <textarea placeholder="لغات کلیدی" name="seoKeyboard"
                                                          class="form-control" id="seoKeyboard">{{$data->seoKeyboard}}</textarea>
                                            </fieldset>
                                        </div>
                                        <div class="col-xl-6 col-md-12 col-12 mb-1">
                                            <fieldset class="form-group"><label for="seoDescription">توضیحات سئو</label>
                                                <textarea placeholder="توضیحات سئو" name="seoDescription"
                                                          class="form-control" id="seoDescription">{{$data->seoDescription}}</textarea>
                                            </fieldset>
                                        </div>
                                        <input name="id" value="{{$data->id}}" style="display: none">

                                        <div class="col-xl-12 col-md-12 col-12 mb-1 text-center">
                                            <button type="submit" class="btn btn-success">تایید</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
