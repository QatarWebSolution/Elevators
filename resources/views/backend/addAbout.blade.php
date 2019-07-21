@extends('backend.master')
@push('style')
    <link rel="stylesheet" href="{{asset('build/css/lib/datatables-net/datatables.min.css')}}">
    <link rel="stylesheet" href="{{asset('build/css/separate/vendor/datatables-net.min.css')}}">
    <link rel="stylesheet" href="/build/css/lib/summernote/summernote.css"/>
    <link rel="stylesheet" href="/build/css/separate/pages/editor.min.css">
@endpush
@section('body')
    <div class="box-typical box-typical-padding">
        <form action="{{route('saveAbout')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{isset($about)?$about->id:''}}">
            <div class="row">

                {{--English--}}
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="m-t-lg with-border">English</h5>
                        </div>
                        <div class="col-lg-12">
                            <fieldset class="form-group">
                                <label class="form-label" for="whoweare_en">WHO WE ARE</label>
                                <textarea rows="4" class="form-control" id="whoweare_en" name="whoweare_en" placeholder="WHO WE ARE" data-autosize>{{isset($about)?$about->whoweare_en:''}}</textarea>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset class="form-group">
                                <label class="form-label" for="description_en">Description</label>
                                <textarea rows="4" class="form-control" id="description_en" name="description_en" placeholder="Description" data-autosize>{{isset($about)?$about->description_en:''}}</textarea>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset class="form-group">
                                <label class="form-label" for="sidesection_en">Side Section</label>
                                <div class="summernote-theme-1">
                                    <textarea class="summernote" name="sidesection_en">{{isset($about)?$about->sidesection_en:''}}</textarea>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>

                {{--Arabic--}}
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="m-t-lg with-border">Arabic</h5>
                        </div>
                        <div class="col-lg-12">
                            <fieldset class="form-group">
                                <label class="form-label" for="whoweare_ar">WHO WE ARE</label>
                                <textarea rows="4" class="form-control" id="whoweare_ar" name="whoweare_ar" placeholder="WHO WE ARE" data-autosize>{{isset($about)?$about->whoweare_ar:''}}</textarea>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset class="form-group">
                                <label class="form-label" for="description_ar">Description</label>
                                <textarea rows="4" class="form-control" id="description_ar" name="description_ar" placeholder="Description" data-autosize>{{isset($about)?$about->description_ar:''}}</textarea>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset class="form-group">
                                <label class="form-label" for="sidesection_ar">Side Section</label>
                                <div class="summernote-theme-1">
                                    <textarea class="summernote" name="sidesection_ar">{{isset($about)?$about->sidesection_ar:''}}</textarea>
                                </div>
                            </fieldset>
                        </div>

                    </div>
                </div>
                <div class="col-xs-6">
                    <fieldset class="form-group">
                        <label class="form-label" for="image">Image</label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*">
                    </fieldset>
                </div>
                <div class="col-xs-6">
                    <img src="/uploads/{{$about->image}}" width="400" height="200">
                </div>

                <div class="col-xs-12">
                    <button type="submit" class="btn btn-inline pull-right">Save</button>
                </div>


            </div>
        </form>
    </div>
@endsection
@push('scripts')
    <script src="{{asset('build/js/lib/datatables-net/datatables.min.js')}}"></script>
    <script src="/build/js/lib/summernote/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.summernote').summernote();
        });
        $(function() {
            $('#example').DataTable({
                responsive: true
            });
        });
    </script>
@endpush


