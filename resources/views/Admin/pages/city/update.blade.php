@extends('Admin.father.total')
@section('content')
    <div class="content-body">
        <section id="basic-input">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><h4 class="card-title">ویرایش شهر ها</h4></div>
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
                                          action="{{route('storeUpdateCity')}}"
                                          enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-xl-6 col-md-12 col-12 mb-1">
                                                <fieldset class="form-group"><label for="province">استان</label>
                                                    <select name="province"
                                                            class="form-control" id="province">
                                                        @foreach($province as $provinces)
                                                            <option>استان را انتخاب کنید</option>
                                                            <option value="{{$provinces->id}}">{{$provinces->titleFa}}</option>
                                                        @endforeach
                                                    </select>
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-6 col-md-12 col-12 mb-1">
                                                <fieldset class="form-group"><label for="titleFa">نام شهر فارسی</label>
                                                    <input type="text" class="form-control" id="titleFa"
                                                           placeholder="نام شهر فارسی" name="titleFa" value="{{$City->titleFa}}"></fieldset>
                                            </div>
                                            <div class="col-xl-6 col-md-12 col-12 mb-1">
                                                <fieldset class="form-group"><label for="titleEn">نام شهر انگلیسی</label>
                                                    <input type="text" class="form-control" id="titleEn"
                                                           placeholder="نام شهر انگلیسی" name="titleEn" value="{{$City->titleEn}}"></fieldset>
                                            </div>
                                            <input name="id" value="{{$City->id}}" style="display: none">
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
