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
                        <h1>Our Projects</h1>
                    </div>
                    <!-- /.title -->
                    <!-- .page-breadcumb -->
                    <div class="page-breadcumb pull-right">
                        <i class="fa fa-home"></i> <a href="{{route('home')}}">Home</a> <i class="fa fa-angle-right"></i> <span>Projects</span>
                    </div>
                    <!-- /.page-breadcumb -->
                </div>
            </div>
        </div>
    </section>
    <!-- /#page-title -->
    <section id="blog" class="version-two">
        <div class="container">
            <div class="row">
                @foreach($projects as $row)
                <!-- .blog-wrap -->
                <div class="col-lg-6 col-md-6 col-sm-6 blog-wrap hvr-float-shadow">
                    <div class="img-wrap">
                        @if(!$row->images->isEmpty())
                            <img src="{{'uploads/'.$row->images[0]->thumb_250}}" alt="">
                        @else
                            <img src="{{'site/en/images/placeholder.png'}}" alt="">
                        @endif
                        <div class="date-holder">
                            <h2>{{$row->project_status_en}}</h2>
                        </div>
                    </div>
                    <div class="content-wrap spancontent">
                        <h2>{{$row->title_en}}</h2>
                        <span>
                        <div class="row">
                           <div class="col-md-5">Elevator Type :</div>
                           <div class="col-md-7">{{$row->elevator_type_en}}</div>
                        </div>
                        <div class="row">
                           <div class="col-md-5">Building Type :</div>
                           <div class="col-md-7">{{$row->building_type_en}}</div>
                        </div>
                        <div class="row">
                           <div class="col-md-5">Location :</div>
                           <div class="col-md-7">{{$row->project_location_en}}</div>
                        </div>
                        <div class="row">
                           <div class="col-md-5">Start Date :</div>
                           <div class="col-md-7">{{$row->start_date_en}}</div>
                        </div>
                     </span>
                        <ul>
                            <li><span><b>Handover :</b> {{$row->handover_date_en}}</span></li>
                            <li><a href="{{route('project_details',['id'=>$row->id])}}">Read More</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.blog-wrap -->
                @endforeach
            </div>
            <div class="row">
                <div class="post-pagination">
                    <ul>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- /#blog -->
@endsection
@push('scripts')
@endpush