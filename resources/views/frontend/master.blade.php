<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EUROPE ELEVATORS | HOME</title>
    <!-- Responsive Meta Tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- main stylesheet -->
    <link rel="stylesheet" href="{{asset('site/en/css/style.css')}}">
    <!-- responsive stylesheet -->
    <link rel="stylesheet" href="{{asset('site/en/css/responsive.css')}}">
    <link href="{{asset('site/en/images/favicon.ico')}}" rel="shortcut icon" type="{{asset('site/en/image/favicon.icon')}}" />
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="{{asset('site/en/js/respond.js')}}"></script>
    <![endif]-->
    @stack('styles')
</head>
<body>
@include('frontend.header')
@yield('content')
@include('frontend.footer')
<!-- popup for login Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog widthallo">
        <!-- Modal content-->
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="modal-body">
                <div class="login-form">
                    <div class="main-div">
                        <div class="panel">
                            <h2>Client Login Area</h2>
                            <p>Please enter your name and password</p>
                        </div>
                        <form id="Login">
                            <div class="form-group">
                                <input type="email" class="form-control" id="inputEmail" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                            </div>
                            <div class="forgot">
                                <a href="#">Forgot password?</a>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('site/en/js/jquery-1.11.3.min.js')}}"></script> <!-- jQuery JS -->
<script src="{{asset('site/en/js/bootstrap.min.js')}}"></script> <!-- BootStrap JS -->
<script src="{{asset('site/en/js/wow.js')}}"></script> <!-- WOW JS -->
<script src="{{asset('site/en/js/isotope.pkgd.min.js')}}"></script> <!-- iSotope JS -->
<script src="{{asset('site/en/js/owl.carousel.min.js')}}"></script> <!-- OWL Carousle JS -->
<script src="{{asset('site/en/js/revolution-slider/jquery.themepunch.tools.min.js')}}"></script> <!-- Revolution Slider Tools -->
<script src="{{asset('site/en/js/revolution-slider/jquery.themepunch.revolution.min.js')}}"></script> <!-- Revolution Slider -->
<script type="text/javascript" src="{{asset('site/en/js/revolution-slider/extensions/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript" src="{{asset('site/en/js/revolution-slider/extensions/revolution.extension.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('site/en/js/revolution-slider/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript" src="{{asset('site/en/js/revolution-slider/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('site/en/js/revolution-slider/extensions/revolution.extension.migration.min.js')}}"></script>
<script type="text/javascript" src="{{asset('site/en/js/revolution-slider/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('site/en/js/revolution-slider/extensions/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript" src="{{asset('site/en/js/revolution-slider/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{asset('site/en/js/revolution-slider/extensions/revolution.extension.video.min.js')}}"></script>
<script src="{{asset('site/en/js/jquery.fancybox.pack.js')}}"></script> <!-- FancyBox -->
<script src="{{asset('site/en/js/validate.js')}}"></script> <!-- Form Validator JS -->
<script src="{{asset('site/en/js/jquery.easing.min.js')}}"></script> <!-- jquery easing JS -->
<script src="{{asset('site/en/js/jquery.mixitup.min.js')}}"></script> <!-- MixIt UP JS -->
<script src="{{asset('site/en/js/custom.js')}}"></script> <!-- Custom JS -->
@stack('scripts')
</body>
</html>