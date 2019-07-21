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
                        <h1>Video Gallery</h1>
                    </div>
                    <!-- /.title -->
                    <!-- .page-breadcumb -->
                    <div class="page-breadcumb pull-right">
                        <i class="fa fa-home"></i>
                        <a href="index.php">Home</a>
                        <i class="fa fa-angle-right"></i>
                        <a href="#">Gallery</a>
                        <i class="fa fa-angle-right"></i>
                        <span>Videos</span>
                    </div>
                    <!-- /.page-breadcumb -->
                </div>
            </div>
        </div>
    </section>
    <!-- /#page-title -->

    <section id="video-section-construction">
        <div class="container">
            <div class="clearfix">
            @foreach($items as $row)
                <div class="col-md-4 mb30">
                    <div class="video-preview wow" data-wow-offset="15">
                        <a href="{{asset('uploads/'.$row->file)}}" class="video-fancybox">
                            <img src="/site/en/images/left-about.jpg" alt="">
                        </a>
                    </div>
                    <!-- <video width="300" controls>
                        <source src="{{asset('uploads/'.$row->file)}}" type="video/mp4">
                        Your browser does not support this video.
                    </video> -->
                </div>
            @endforeach    
            </div>
        </div>
    </section>
@endsection
