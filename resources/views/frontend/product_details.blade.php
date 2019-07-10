@extends('frontend.master')
@push('styles')
@endpush
@section('content')
    <!-- #page-title -->
    <section id="page-title">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- .title -->
                    <div class="title pull-left">
                        <h1>OUR PRODUCTS</h1>
                    </div>
                    <!-- /.title -->
                    <!-- .page-breadcumb -->
                    <div class="page-breadcumb pull-right">
                        <i class="fa fa-home"></i>
                        <a href="{{route('home')}}">Home</a>
                        <i class="fa fa-angle-right"></i>
                        <span>Products</span>
                    </div>
                    <!-- /.page-breadcumb -->
                </div>
            </div>
        </div>
    </section>
    <!-- /#page-title -->
    <!-- #blog-post -->
    <section id="blog-post" class="single-post">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col-lg-push-0 col-md-push-0 col-sm-push-3 col-xs-push-0 sidebar blog-left pull-right">
                    <!-- .sidebar-widget -->
                    <div class="sidebar-widget">
                        <h4>Our Products</h4>
                        <ul class="category-list">
                        @foreach($products as $row)
                            <li><a href="{{route('product_details',['id'=> $row->id])}}" @if(!empty($product) && $product->id == $row->id) class="active" @endif>{{$row->title_en}}</a></li>
                        @endforeach    
                        </ul>
                    </div>
                    <!-- /.sidebar-widget -->
                </div>
                <!-- /.sidebar -->
                <!-- .blog-content -->
                @if(!empty($product))
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 blog-content pull-left">
                    <!-- article -->
                    <article>

                        <h2>{{$product->title_en}}</h2>
                        <p>{{$product->description_en}}</p>
                        <br>
                        @if(!$product->images->isEmpty())
                        <section id="project-version-one">
                            <div class="fulwidth">
                                <div class="row normal-gallery" id="image-gallery-mix">
                                @foreach($product->images as $row)
                                    <div class="col-lg-4 col-sm-6 col-xs-12 tank outside single-project-item mix">
                                        <div class="img-wrap">
                                            <img src="{{asset('uploads/'.$row->thumb_250)}}" alt="">
                                            <div class="content-wrapper hvr-sweep-to-right">
                                                <div class="content">
                                                    <div class="button-box">
                                                        <a data-fancybox-group="project-v1" title="{{$product->title_en}}" class="fancybox" href="{{asset('uploads/'.$row->thumb_500)}}"><i class="fa fa-search-plus"></i></a>
                                                    </div>
                                                    <div class="text-box">
                                                        <h4>{{$product->title_en}}</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach    
                                </div>
                            </div>
                        </section>
                        @endif
                        <h3>Other detail for product</h3>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <ul class="highlight">
                                    <li><i class="fa fa-circle"></i>  Capacity : {{$product->capacity_en}}</li>
                                    <li><i class="fa fa-circle"></i>  Rated speed : {{$product->rated_speed_en}}</li>
                                    <li><i class="fa fa-circle"></i>  Travel height : {{$product->travel_height_en}}</li>
                                </ul>
                            </div>
                        </div>
                        <br>
                    </article>
                    <!-- /article -->
                </div>
                @endif
                <!-- /.blog-content -->
                <!-- .sidebar -->
            </div>
        </div>
    </section>
    <!-- /#blog-post -->
@endsection
@push('scripts')
@endpush