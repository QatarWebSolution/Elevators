@extends('frontend.master')
@push('styles')
@endpush
@push('scripts')
@endpush
@section('title', 'Home')
@section('content')
    <section class="rev_slider_wrapper construct-banner-wrapper">
        <div id="slider1" class="rev_slider"  data-version="5.0">
            <ul>
                @foreach($sliders as $slider)
                    <li data-transition="fade">
                        <img src="uploads/{{$slider->image}}"  alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <div class="tp-caption sfb tp-resizeme construct-banner-caption fadebackg"
                             data-x="left" data-hoffset="180"
                             data-y="top" data-voffset="170"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="o:0"
                             data-transform_out="o:0"
                             data-start="900">
                            <h2>{{$slider->title_en}}</h2>
                        </div>
                        <div class="tp-caption sfb tp-resizeme construct-banner-caption contnback"
                             data-x="left" data-hoffset="180"
                             data-y="top" data-voffset="240"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="o:0"
                             data-transform_out="o:0"
                             data-start="1500">
                            <p>{{$slider->description_en}}</p>
                        </div>
                        <div class="tp-caption sfb tp-resizeme construct-banner-caption"
                             data-x="left" data-hoffset="180"
                             data-y="top" data-voffset="320"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="o:0"
                             data-transform_out="o:0"
                             data-start="2500">
                            <a href="{{$slider->link_en}}" class="hvr-bounce-to-right">Learn More</a>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    <section id="welcome-to-construct">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <img src="/site/{{$about->image}}" alt="" class="img-responsive padin wow slideInLeft" data-wow-offset="20">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 wow slideInRight" data-wow-offset="20">
                    <h2>Europe Elevators</h2>
                    <p>{{$about->whoweare_en}}</p>
                    <h3>We are available for 24/7 for you requirements</h3>
                    <div class="list-box clearfix">
                        <ul>
                            <li><i class="fa fa-hand-o-right"></i> Timly delivery of service</li>
                            <li><i class="fa fa-hand-o-right"></i> wide array of products</li>
                        </ul>
                        <ul>
                            <li><i class="fa fa-hand-o-right"></i> COMPLETE SAFETY ANALYSIS</li>
                            <li><i class="fa fa-hand-o-right"></i> DRIVABILITY PROBLEMS</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="project-version-one" class="construct home pt50">
        <div class="container">
            <div class="section-title nopn wow fadeIn" data-wow-offset="25">
                <h1 class="newn">Our latest projects</h1>
                <p class="wine">The products & projects of the company are listed in a simple and systematic manner thus enabling easy navigation and giving the required information to the user.</p>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row normal-gallery gallery-v4" id="image-gallery-mix">
                @foreach($projects as $project)
                    @if(!$project->images->isEmpty())
                        <div class="single-project-item mix  tank outside">
                            <div class="img-wrap">
                                <img src="/uploads/{{$project->images[0]->file}}" alt="">
                                <div class="content-wrapper hvr-sweep-to-right">
                                    <div class="content">
                                        <div class="button-box">
                                            <a class="fancybox" data-fancybox-group="home-gallery" title="Algerian Embassy" href="/uploads/{{$project->images[0]->file}}"><i class="fa fa-search-plus"></i></a>
                                        </div>
                                        <div class="text-box">
                                            <h4>{{$project->title_en}}</h4>
                                            <span>{{$project->elevator_type_en}}<br />Location : {{$project->project_location_en}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="view-all-btn text-center"><a href="{{route('projects')}}" class="view-all hvr-bounce-to-right">view all</a></div>
        </div>
    </section>
    <section id="featured">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 pull-right wow slideInRight" data-wow-offset="20">
                    <div class="col-lg-6 col-md-6">
                        <div class="content clearfix">
                            <div class="img-wrap pull-left wow fadeIn" data-wow-offset="3">
                                <img src="/site/en/images/1.png" alt="">
                            </div>
                            <div class="content-wrap pull-right">
                                <h2>24/7 availality</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur elit. Vestibulum nec odio ipsum. Suspe ndisse cursus malesuada facilisis.</p>
                            </div>
                        </div>
                        <div class="content clearfix">
                            <div class="img-wrap pull-left wow fadeIn" data-wow-delay=".3s" data-wow-offset="3">
                                <img src="/site/en/images/2.png" alt="">
                            </div>
                            <div class="content-wrap pull-right">
                                <h2>Wide array of products</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur elit. Vestibulum nec odio ipsum. Suspe ndisse cursus malesuada facilisis.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 ">
                        <div class="content clearfix">
                            <div class="img-wrap pull-left wow fadeIn" data-wow-delay=".6s" data-wow-offset="3">
                                <img src="/site/en/images/3.png" alt="">
                            </div>
                            <div class="content-wrap pull-right">
                                <h2>Timly delivery of service</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur elit. Vestibulum nec odio ipsum. Suspe ndisse cursus malesuada facilisis.</p>
                            </div>
                        </div>
                        <div class="content clearfix">
                            <div class="img-wrap pull-left wow fadeIn" data-wow-delay=".9s" data-wow-offset="3">
                                <img src="/site/en/images/4.png" alt="">
                            </div>
                            <div class="content-wrap pull-right">
                                <h2>Resonable price</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur elit. Vestibulum nec odio ipsum. Suspe ndisse cursus malesuada facilisis.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 about-image pull-left wow slideInLeft" data-wow-offset="20">
                    <img src="/site/en/images/lefule.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="video-section-construction">
        <div class="container">
            <div class="clearfix">
                <div class="col-md-5">
                    <div class="video-text" style="padding-left: 0px;">
                        <h2>Checkout Our Featured Video</h2>
                    </div>
                    <div class="video-preview wow slideInLeft" data-wow-offset="15">
                        <a href="http://www.youtube.com/watch?v=InDouu6mNh0" class="video-fancybox">
                            <img src="/site/en/images/left-about.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="video-text" style="padding-left: 0px;">
                        <h2>Quick Enquiry</h2>
                    </div>
                    <div class="backgroundnine wow slideInRight" data-wow-offset="10">
                        <form class="gettouch" action="{{route('enquirySave')}}" method="post">
                            @csrf
                            <input type="hidden" name="type" value="quick">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="name" placeholder="Your Name *">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="email" placeholder="Email *">
                                </div>
                                <div class="col-md-12">
                                    <input type="number" name="phone" placeholder="Phone Number *">
                                </div>
                                <div class="col-md-12">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button class="buttonsub">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="testimonials-construct-home">
        <div class="container">
            <div class="section-title">
                <h1>testimonials</h1>
            </div>
            <div class="clearfix">
                <div class="owl-carousel owl-theme">
                    @foreach($testimonials as $testimonial)
                    <div class="item">
                        <div class="single-testimonial-construct clearfix">
                            <div class="img-holder hvr-rectangle-out">
                                <img src="/uploads/{{$testimonial->thumb_250}}}}" alt="">
                            </div>
                            <div class="content">
                                <h3>{{$testimonial->name_en}}<br/><span>{{$testimonial->company_en}}</span></h3>
                                <p>{{$testimonial->description_en}}</p>
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
                        @foreach($projects as $project)
                            @if(!$project->images->isEmpty())
                                <div class="item">
                                    <img src="/uploads/{{$project->images[0]->file}}" alt="">
                                </div>
                            @endif
                        @endforeach
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
    <section id="great-construct-team">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow slideInLeft" data-wow-offset="20">
                    <h2>Europe Elevators Company</h2>
                    <p>If you have any services and renovation work  need, simply <br>call our 24 hour emergecny number.</p>
                    <p class="has-btn"><b>+974 - 70600290</b> or <a href="#" class="hvr-bounce-to-right">Contact Us</a></p>
                </div>
            </div>
        </div>
    </section>
@endsection
