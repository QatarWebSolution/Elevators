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
                        <h1>Image Gallery</h1>
                    </div>
                    <!-- /.title -->
                    <!-- .page-breadcumb -->
                    <div class="page-breadcumb pull-right">
                        <i class="fa fa-home"></i> <a href="index.php">Home</a> <i class="fa fa-angle-right"></i>
                        <a href="#">Gallery</a> <i class="fa fa-angle-right"></i>
                        <span>Images</span>
                    </div>
                    <!-- /.page-breadcumb -->
                </div>
            </div>
        </div>
    </section>
    <!-- /#page-title -->
    <section id="project-version-one" >
        <div class="container mt30">
            <div class="row normal-gallery" id="image-gallery-mix">
            @foreach($items as $row)
                <div class="col-lg-4 col-sm-6 col-xs-12 tank outside single-project-item mix">
                    <div class="img-wrap">
                        <img src="{{asset('uploads/'.$row->thumb_250)}}" alt="">
                        <div class="content-wrapper hvr-sweep-to-right">
                            <div class="content">
                                <div class="button-box">
                                    <a data-fancybox-group="project-v1" title="" class="fancybox" href="{{asset('uploads/'.$row->file)}}"><i class="fa fa-search-plus"></i></a>
                                </div>
                                <div class="text-box">
                                    <h4>{{$row->title_en}}</h4>
                                    <span>{{$row->description_en}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach    
            </div>
        </div>
    </section>
    <!-- /#blog -->
@endsection
