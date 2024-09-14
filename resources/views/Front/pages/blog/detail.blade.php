@extends('Front.father.total')
@section('content')
    <!-- Start Page Title Area -->
    <section class="page-title-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>{{$data->titleFa}}</h2>
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

    <!-- Start Blog Details Area -->
    <section class="blog-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-details">
                        <div class="article-img">
                            <img src="{{$data->image}}" alt="blog-details">
{{--                            <div class="date">20 <br> اسفند</div>--}}
                        </div>
                    </div>
                    <h3>{{$data->titleFa}}</h3>
                    <p>{!!$data->longDescriptionFa!!}</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Details Area -->
@endsection
