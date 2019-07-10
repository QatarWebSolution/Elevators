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
            @if(!empty($project))
            <div class="row">
                <div class="post-pagination text-right">
                    <ul>
                        <li class="active"><a href="{{route('projects')}}">Back</a></li>
                        <li><a href="{{route('project_details',$project->id+1)}}">Next Project</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <!-- .blog-wrap -->
                <div class="col-lg-12 col-md-12 col-sm-12 blog-wrap hvr-float-shadow">
                    <div class="content-wrap detaildpage">
                        <div class="status red">Project Status : {{$project->project_status_en}}</div>
                        @if(!$project->images->isEmpty())
                            <img src="{{asset('uploads/'.$project->images[0]->file)}}" alt="" class="left-image"/>
                        @endif
                        <h2 class="fontbig">{{$project->title_en}}</h2>
                        <p>{{$project->description_en}}</p>
                        <span class="fleft">
                        <div class="row">
                           <div class="col-md-5">Elevator Type :</div>
                           <div class="col-md-7">{{$project->elevator_type_en}}</div>
                        </div>
                        <div class="row">
                           <div class="col-md-5">Building Type :</div>
                           <div class="col-md-7">{{$project->building_type_en}}</div>
                        </div>
                        <div class="row">
                           <div class="col-md-5">Location :</div>
                           <div class="col-md-7">{{$project->project_location_en}}</div>
                        </div>
                        <div class="row">
                           <div class="col-md-5">Start Date :</div>
                           <div class="col-md-7">{{$project->start_date_en}}</div>
                        </div>
                        <div class="row">
                           <div class="col-md-5">Handover Date :</div>
                           <div class="col-md-7">{{$project->handover_date_en}}</div>
                        </div>
                     </span>
                    </div>
                </div>
                <!-- /.blog-wrap -->
                <!-- .blog-wrap -->
                <!-- .blog-wrap -->
            </div>
            @else
            <div class="row">
                <div class="post-pagination text-right">
                    <ul>
                        <li class="active"><a href="{{route('projects')}}">Back</a></li>
                    </ul>
                </div>
            </div>
            <div  class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 blog-wrap hvr-float-shadow">
                    <p>No Projects Found!..</p>
                </div>
            </div>
            @endif
        </div>
    </section>
    <!-- /#blog -->
    <section id="great-construct-team">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow slideInLeft" data-wow-offset="20" style="visibility: visible; animation-name: slideInLeft;">
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