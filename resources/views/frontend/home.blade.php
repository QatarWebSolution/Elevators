@extends('frontend.master')
@push('styles')
@endpush
@section('content')
    <section class="rev_slider_wrapper construct-banner-wrapper">
        <div id="slider1" class="rev_slider"  data-version="5.0">
            <ul>
                <li data-transition="fade">
                    <img src="images/slider-1.jpg"  alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <div class="tp-caption sfb tp-resizeme construct-banner-caption fadebackg"
                         data-x="left" data-hoffset="180"
                         data-y="top" data-voffset="170"
                         data-whitespace="nowrap"
                         data-transform_idle="o:1;"
                         data-transform_in="o:0"
                         data-transform_out="o:0"
                         data-start="900">
                        <h2>Welcome to Europe <span class="red"> Elevators</span></h2>
                    </div>
                    <div class="tp-caption sfb tp-resizeme construct-banner-caption contnback"
                         data-x="left" data-hoffset="180"
                         data-y="top" data-voffset="240"
                         data-whitespace="nowrap"
                         data-transform_idle="o:1;"
                         data-transform_in="o:0"
                         data-transform_out="o:0"
                         data-start="1500">
                        <p>Europe Elevators is a leading company in Doha, Qatar.<br/>Our website is aesthetically and functionally designed to serve our valuable clients</p>
                    </div>
                    <div class="tp-caption sfb tp-resizeme construct-banner-caption"
                         data-x="left" data-hoffset="180"
                         data-y="top" data-voffset="320"
                         data-whitespace="nowrap"
                         data-transform_idle="o:1;"
                         data-transform_in="o:0"
                         data-transform_out="o:0"
                         data-start="2500">
                        <a href="#" class="hvr-bounce-to-right">Learn More</a>
                    </div>
                </li>
                <li data-transition="fade">
                    <img src="images/slider-2.jpg"  alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <div class="tp-caption sfb tp-resizeme construct-banner-caption fadebackg norfont"
                         data-x="right" data-hoffset="150"
                         data-y="top" data-voffset="160"
                         data-whitespace="nowrap"
                         data-transform_idle="o:1;"
                         data-transform_in="o:0"
                         data-transform_out="o:0"
                         data-start="800">
                        <h2>We supply and install all types of elevators</h2>
                    </div>
                    <div class="tp-caption sfb tp-resizeme construct-banner-caption widthall"
                         data-x="right" data-hoffset="150"
                         data-y="top" data-voffset="230"
                         data-whitespace="nowrap"
                         data-transform_idle="o:1;"
                         data-transform_in="o:0"
                         data-transform_out="o:0"
                         data-start="1100">
                        <ul class="widhtl">
                            <li><span>Passenger Elevators</span></li>
                            <li><span>Construction Elevators</span></li>
                            <li><span>Cargo Elevators</span></li>
                            <li><span>Dumb Waiters</span></li>
                            <br />
                            <li><span>Car Elevators</span></li>
                            <li><span>Disabled Elevators</span></li>
                            <li><span>Hospital Elevators</span></li>
                            <li><span>Escalators</span></li>
                        </ul>
                    </div>
                    <div class="tp-caption sfb tp-resizeme construct-banner-caption"
                         data-x="right" data-hoffset="150"
                         data-y="top" data-voffset="320"
                         data-whitespace="nowrap"
                         data-transform_idle="o:1;"
                         data-transform_in="o:0"
                         data-transform_out="o:0"
                         data-start="1700">
                        <a href="#" class="hvr-bounce-to-right">View all Services</a>
                    </div>
                </li>
                <li data-transition="fade">
                    <img src="images/slider-3.jpg"  alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <div class="tp-caption sfb tp-resizeme construct-banner-caption fadebackg"
                         data-x="center" data-hoffset="0"
                         data-y="top" data-voffset="130"
                         data-whitespace="nowrap"
                         data-transform_idle="o:1;"
                         data-transform_in="o:0"
                         data-transform_out="o:0"
                         data-start="900">
                        <h2>We Are The Leading</h2>
                    </div>
                    <div class="tp-caption sfb tp-resizeme construct-banner-caption fadebackg"
                         data-x="center" data-hoffset="0"
                         data-y="top" data-voffset="200"
                         data-whitespace="nowrap"
                         data-transform_idle="o:1;"
                         data-transform_in="o:0"
                         data-transform_out="o:0"
                         data-start="1200">
                        <h2><span class="red">Elevators</span> Company in Doha</h2>
                    </div>
                    <div class="tp-caption sfb tp-resizeme construct-banner-caption contnback"
                         data-x="center" data-hoffset="0"
                         data-y="top" data-voffset="270"
                         data-whitespace="nowrap"
                         data-transform_idle="o:1;"
                         data-transform_in="o:0"
                         data-transform_out="o:0"
                         data-start="1600">
                        <p class="text-center">Our website is aesthetically and functionally designed to serve our valuable clients,<br />
                            ever-supporting vendors, consultants, contractors and the general public.
                        </p>
                    </div>
                    <div class="tp-caption sfb tp-resizeme construct-banner-caption"
                         data-x="center" data-hoffset="0"
                         data-y="top" data-voffset="360"
                         data-whitespace="nowrap"
                         data-transform_idle="o:1;"
                         data-transform_in="o:0"
                         data-transform_out="o:0"
                         data-start="1900">
                        <a href="#" class="hvr-bounce-to-right">Learn More</a>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section id="welcome-to-construct">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <img src="images/left-about.jpg" alt="" class="img-responsive padin wow slideInLeft" data-wow-offset="20">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 wow slideInRight" data-wow-offset="20">
                    <h2>Europe Elevators</h2>
                    <p>The company was established in 2007 (Al aziziya Stars ComER-LF-113plex- Al aziziya Commercial Street - Al aziziya - Qatar ). The company specializes in supply , installation ,repair the (elevators & escalators ). we haven’t any other activities. We supply and install all types of elevators : Towers (at high speeds of up to 6 m .s), Commercial Buildings, Villas and Elevators for special needs. </p>
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
                <div class="single-project-item mix  tank outside">
                    <div class="img-wrap">
                        <img src="images/1.jpg" alt="">
                        <div class="content-wrapper hvr-sweep-to-right">
                            <div class="content">
                                <div class="button-box">
                                    <a class="fancybox" data-fancybox-group="home-gallery" title="Algerian Embassy" href="images/1.jpg"><i class="fa fa-search-plus"></i></a>
                                </div>
                                <div class="text-box">
                                    <h4>Algerian Embassy</h4>
                                    <span>Commercial Elevator<br />Location : Al Dafna</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-project-item mix plumbing outside">
                    <div class="img-wrap">
                        <img src="images/2.jpg" alt="">
                        <div class="content-wrapper hvr-sweep-to-right">
                            <div class="content">
                                <div class="button-box">
                                    <a class="fancybox" data-fancybox-group="home-gallery" title="Al Khurais Hotel" href="images/2.jpg"><i class="fa fa-search-plus"></i></a>
                                </div>
                                <div class="text-box">
                                    <h4>Al Khurais Hotel</h4>
                                    <span>Commercial Elevator<br />Location : Al Dafna</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-project-item mix drain plumbing bathroom">
                    <div class="img-wrap">
                        <img src="images/3.jpg" alt="">
                        <div class="content-wrapper hvr-sweep-to-right">
                            <div class="content">
                                <div class="button-box">
                                    <a class="fancybox" data-fancybox-group="home-gallery" title="Interior Design package" href="images/3.jpg"><i class="fa fa-search-plus"></i></a>
                                </div>
                                <div class="text-box">
                                    <h4>Al Khurais Hotel</h4>
                                    <span>Commercial Elevator<br />Location : Al Dafna</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-project-item mix kitchen outside drain bathroom">
                    <div class="img-wrap">
                        <img src="images/4.jpg" alt="">
                        <div class="content-wrapper hvr-sweep-to-right">
                            <div class="content">
                                <div class="button-box">
                                    <a class="fancybox" data-fancybox-group="home-gallery" title="Isolation" href="images/4.jpg"><i class="fa fa-search-plus"></i></a>
                                </div>
                                <div class="text-box">
                                    <h4>Al Khurais Hotel</h4>
                                    <span>Commercial Elevator<br />Location : Al Dafna</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-project-item mix kitchen  bathroom">
                    <div class="img-wrap">
                        <img src="images/5.jpg" alt="">
                        <div class="content-wrapper hvr-sweep-to-right">
                            <div class="content">
                                <div class="button-box">
                                    <a class="fancybox" data-fancybox-group="home-gallery" title="Roof Repairing" href="images/5.jpg"><i class="fa fa-search-plus"></i></a>
                                </div>
                                <div class="text-box">
                                    <h4>Al Khurais Hotel</h4>
                                    <span>Commercial Elevator<br />Location : Al Dafna</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-project-item mix kitchen drain ">
                    <div class="img-wrap">
                        <img src="images/6.jpg" alt="">
                        <div class="content-wrapper hvr-sweep-to-right">
                            <div class="content">
                                <div class="button-box">
                                    <a class="fancybox" data-fancybox-group="home-gallery" title="Architecture Conslulting" href="images/6.jpg"><i class="fa fa-search-plus"></i></a>
                                </div>
                                <div class="text-box">
                                    <h4>Al Khurais Hotel</h4>
                                    <span>Commercial Elevator<br />Location : Al Dafna</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-project-item mix kitchen drain bathroom">
                    <div class="img-wrap">
                        <img src="images/7.jpg" alt="">
                        <div class="content-wrapper hvr-sweep-to-right">
                            <div class="content">
                                <div class="button-box">
                                    <a class="fancybox" data-fancybox-group="home-gallery" title="Building Maintanance" href="images/7.jpg"><i class="fa fa-search-plus"></i></a>
                                </div>
                                <div class="text-box">
                                    <h4>Al Khurais Hotel</h4>
                                    <span>Commercial Elevator<br />Location : Al Dafna</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-project-item mix kitchen drain bathroom">
                    <div class="img-wrap">
                        <img src="images/8.jpg" alt="">
                        <div class="content-wrapper hvr-sweep-to-right">
                            <div class="content">
                                <div class="button-box">
                                    <a class="fancybox" data-fancybox-group="home-gallery" title="Algerian Embassy" href="images/8.jpg"><i class="fa fa-search-plus"></i></a>
                                </div>
                                <div class="text-box">
                                    <h4>Al Khurais Hotel</h4>
                                    <span>Commercial Elevator<br />Location : Al Dafna</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-project-item mix kitchen drain bathroom">
                    <div class="img-wrap">
                        <img src="images/9.jpg" alt="">
                        <div class="content-wrapper hvr-sweep-to-right">
                            <div class="content">
                                <div class="button-box">
                                    <a class="fancybox" data-fancybox-group="home-gallery" title="Al Khurais Hotel" href="images/9.jpg"><i class="fa fa-search-plus"></i></a>
                                </div>
                                <div class="text-box">
                                    <h4>Al Khurais Hotel</h4>
                                    <span>Commercial Elevator<br />Location : Al Dafna</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-project-item mix kitchen drain bathroom">
                    <div class="img-wrap">
                        <img src="images/10.jpg" alt="">
                        <div class="content-wrapper hvr-sweep-to-right">
                            <div class="content">
                                <div class="button-box">
                                    <a class="fancybox" data-fancybox-group="home-gallery" title="Interior Design package" href="images/10.jpg"><i class="fa fa-search-plus"></i></a>
                                </div>
                                <div class="text-box">
                                    <h4>Al Khurais Hotel</h4>
                                    <span>Commercial Elevator<br />Location : Al Dafna</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="view-all-btn text-center"><a href="#" class="view-all hvr-bounce-to-right">view all</a></div>
        </div>
    </section>
    <section id="featured">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 pull-right wow slideInRight" data-wow-offset="20">
                    <div class="col-lg-6 col-md-6">
                        <div class="content clearfix">
                            <div class="img-wrap pull-left wow fadeIn" data-wow-offset="3">
                                <img src="images/1.png" alt="">
                            </div>
                            <div class="content-wrap pull-right">
                                <h2>24/7 availality</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur elit. Vestibulum nec odio ipsum. Suspe ndisse cursus malesuada facilisis.</p>
                            </div>
                        </div>
                        <div class="content clearfix">
                            <div class="img-wrap pull-left wow fadeIn" data-wow-delay=".3s" data-wow-offset="3">
                                <img src="images/2.png" alt="">
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
                                <img src="images/3.png" alt="">
                            </div>
                            <div class="content-wrap pull-right">
                                <h2>Timly delivery of service</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur elit. Vestibulum nec odio ipsum. Suspe ndisse cursus malesuada facilisis.</p>
                            </div>
                        </div>
                        <div class="content clearfix">
                            <div class="img-wrap pull-left wow fadeIn" data-wow-delay=".9s" data-wow-offset="3">
                                <img src="images/4.png" alt="">
                            </div>
                            <div class="content-wrap pull-right">
                                <h2>Resonable price</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur elit. Vestibulum nec odio ipsum. Suspe ndisse cursus malesuada facilisis.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 about-image pull-left wow slideInLeft" data-wow-offset="20">
                    <img src="images/lefule.jpg" alt="">
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
                            <img src="images/left-about.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="video-text" style="padding-left: 0px;">
                        <h2>Quick Enquiry</h2>
                    </div>
                    <div class="backgroundnine wow slideInRight" data-wow-offset="10">
                        <form class="gettouch">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="name" placeholder="Your Name *">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="name" placeholder="Email *">
                                </div>
                                <div class="col-md-12">
                                    <input type="number" name="name" placeholder="Phone Number *">
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
                    <div class="item">
                        <div class="single-testimonial-construct clearfix">
                            <div class="img-holder hvr-rectangle-out">
                                <img src="images/testimonials-construct/1.jpg" alt="">
                            </div>
                            <div class="content">
                                <h3>Jhon Michale<br/><span>Algerian Embassy</span></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-testimonial-construct clearfix">
                            <div class="img-holder hvr-rectangle-out">
                                <img src="images/testimonials-construct/2.jpg" alt="">
                            </div>
                            <div class="content">
                                <h3>Jhon Michale<br/><span>Algerian Embassy</span></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-testimonial-construct clearfix">
                            <div class="img-holder hvr-rectangle-out">
                                <img src="images/testimonials-construct/1.jpg" alt="">
                            </div>
                            <div class="content">
                                <h3>Jhon Michale<br/><span>Algerian Embassy</span></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-testimonial-construct clearfix">
                            <div class="img-holder hvr-rectangle-out">
                                <img src="images/testimonials-construct/2.jpg" alt="">
                            </div>
                            <div class="content">
                                <h3>Jhon Michale<br/><span>Algerian Embassy</span></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim.</p>
                            </div>
                        </div>
                    </div>
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
                            <img src="images/clients/1.png" alt="">
                        </div>
                        <div class="item">
                            <img src="images/clients/2.png" alt="">
                        </div>
                        <div class="item">
                            <img src="images/clients/3.png" alt="">
                        </div>
                        <div class="item">
                            <img src="images/clients/4.png" alt="">
                        </div>
                        <div class="item">
                            <img src="images/clients/5.png" alt="">
                        </div>
                        <div class="item">
                            <img src="images/clients/3.png" alt="">
                        </div>
                        <div class="item">
                            <img src="images/clients/4.png" alt="">
                        </div>
                        <div class="item">
                            <img src="images/clients/5.png" alt="">
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
@push('scripts')
@endpush