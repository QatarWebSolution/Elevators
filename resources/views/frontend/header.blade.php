<!-- #topbar -->
<section id="topbar" class="construct">
    <div class="container">
        <div class="row">
            <div class="social pull-right">
                <button type="button" class="dummypopu" data-toggle="modal" data-target="#myModal"><i class="fa fa-user"></i>&nbsp; Login User</button>
                <div class="langu">
                    Language :
                    <a href="{{route('locale','en')}}" class="{{\Illuminate\Support\Facades\App::isLocale('en')?'active':''}}">English</a>&nbsp; / &nbsp;
                    <a href="{{route('locale','ar')}}" class="{{\Illuminate\Support\Facades\App::isLocale('ar')?'active':''}}">Arabic</a>
                </div>
            </div>
            <!-- /.social -->
            <div class="contact-info pull-left">
                <ul>
                    <li><a href="tel:+1234567890"><i class="fa fa-map-marker"></i>  P.O.Box: 91759, Doha - Qatar </a></li>
                    <li><a href="mailto:info@plumberx.com"><i class="fa fa-envelope"></i> info@europe-ele.com</a></li>
                    <li><a href="tel:1800654896"><i class="fa fa-phone"></i> +974 4416 5111</a></li>
                </ul>
            </div>
            <!-- /.contact-info -->
        </div>
    </div>
</section>
<!-- /#topbar -->
<!-- header -->
<header class="construct header-curvy">
    <div class="container">
        <div class="clearfix">
            <div class="pull-left logo">
                <a href="#">
                    <img src="{{asset('site/en/images/logo.png')}}" alt="Plumberx">
                </a>
            </div>
            <nav class="pull-right mainmenu-container clearfix">
                <button class="mainmenu-toggler">
                    <i class="fa fa-bars"></i>
                </button>
                <ul class="mainmenu pull-right">
                    <li class="current">
                        <a href="{{route('home')}}">Home</a>
                    </li>
                    <li>
                        <a href="{{route('about')}}">About US</a>
                    </li>
                    <li>
                        <a href="{{route('services')}}">Services</a>
                    </li>
                    <li class="dropdown">
                        <a href="#">Products</a>
                        <ul class="submenu">
                            @foreach($navProducts as $proItem)
                                <li><a href="{{route('products',$proItem->id)}}">{{$proItem->title_en}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    {{--<li>--}}
                        {{--<a href="{{route('products')}}">Products</a>--}}
                    {{--</li>--}}
                    <li>
                        <a href="{{route('projects')}}">Projects</a>
                    </li>
                    <li class="dropdown">
                        <a href="#">Gallery</a>
                        <ul class="submenu">
                            <li><a href="{{route('image_gallery')}}">Image Gallery</a></li>
                            <li><a href="{{route('video_gallery')}}">Video Gallery</a></li>
                        </ul>
                    </li>
                    {{--<li>--}}
                        {{--<a href="{{route('downloads')}}">Downloads</a>--}}
                    {{--</li>--}}
                    <li class="dropdown">
                        <a href="#">Contact Us</a>
                        <ul class="submenu">
                            <li><a href="{{route('contact')}}">Contact Us Now</a></li>
                            <li><a href="{{route('enquiry')}}">Send Enquiry</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- /header -->