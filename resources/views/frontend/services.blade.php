@extends('frontend.master')
@push('styles')
@endpush
@push('scripts')
@endpush
@section('title', 'Page Title')
@section('content')
    <!-- #page-title -->
    <section id="page-title">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- .title -->
                    <div class="title pull-left">
                        <h1>Our Services</h1>
                    </div>
                    <!-- /.title -->
                    <!-- .page-breadcumb -->
                    <div class="page-breadcumb pull-right">
                        <i class="fa fa-home"></i>
                        <a href="index.php">Home</a>
                        <i class="fa fa-angle-right"></i>
                        <span>Services</span>
                    </div>
                    <!-- /.page-breadcumb -->
                </div>
            </div>
        </div>
    </section>
    <!-- /#page-title -->
    <!-- #our-mission -->
    <section id="our-mission">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="img-holder">
                        <img src="/site/en/images/10.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 image-caption">

                    <div class="">
                        <h2>Our Services</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        </p>
                        <ul>
                            <li><i class="fa fa-arrow-circle-o-right"></i>  Our Maintenance not according to working time typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500</li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- /#our-mission -->
    <section id="testimonials-construct-home">
        <div class="container">
            <div class="section-title">
                <h1>testimonials</h1>
            </div>
            <div class="clearfix">
                <div class="owl-carousel owl-theme">
                @foreach($testimonials as $row)
                    <div class="item">
                        <div class="single-testimonial-construct clearfix">
                            <div class="img-holder hvr-rectangle-out">
                                <img src="{{asset('uploads/'.$row->thumb_250)}}" alt="">
                            </div>
                            <div class="content">
                                <h3>{{$row->name_en}}<br/><span>{{$row->company_en}}</span></h3>
                                <p>{{$row->description_en}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach 
                </div>
            </div>
        </div>
    </section>
    <!-- #clients -->
    <section id="clients" class="construct">
        <div class="container">
            <div class="section-title black">
                <h1>we worked with awesome clients</h1>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <img src="/site/en/images/clients/1.png" alt="">
                        </div>
                        <div class="item">
                            <img src="/site/en/images/clients/2.png" alt="">
                        </div>
                        <div class="item">
                            <img src="/site/en/images/clients/3.png" alt="">
                        </div>
                        <div class="item">
                            <img src="/site/en/images/clients/4.png" alt="">
                        </div>
                        <div class="item">
                            <img src="/site/en/images/clients/5.png" alt="">
                        </div>
                        <div class="item">
                            <img src="/site/en/images/clients/3.png" alt="">
                        </div>
                        <div class="item">
                            <img src="/site/en/images/clients/4.png" alt="">
                        </div>
                        <div class="item">
                            <img src="/site/en/images/clients/5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /#clients -->
@endsection
