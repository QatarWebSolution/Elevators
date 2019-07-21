@extends('backend.master')
@push('style')
@endpush
@section('body')
<div class="box-typical box-typical-padding">
    <form action="{{route('addImage')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">

            {{--English--}}
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12">
                        <h5 class="m-t-lg with-border">English</h5>
                    </div>
                    
                    <div class="col-lg-12">
                        <fieldset class="form-group">
                            <label class="form-label" for="title_en">Title</label>
                            <input type="text" class="form-control" id="title_en" name="title_en" placeholder="Title">
                        </fieldset>
                    </div>

                    <div class="col-lg-12">
                        <fieldset class="form-group">
                            <label class="form-label" for="description_en">Description</label>
                            <input type="text" class="form-control" id="description_en" name="description_en" placeholder="Description">
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
                            <label class="form-label" for="title_ar">Title</label>
                            <input type="text" class="form-control" id="title_ar" name="title_ar" placeholder="Title">
                        </fieldset>
                    </div>

                    <div class="col-lg-12">
                        <fieldset class="form-group">
                            <label class="form-label" for="description_ar">Description</label>
                            <input type="text" class="form-control" id="description_ar" name="description_ar" placeholder="Description">
                        </fieldset>
                    </div>

                </div>
            </div>

            <div class="col-xs-6">
                <fieldset class="form-group">
                    <label class="form-label" for="files">Upload Image</label>
                    <input type="file" class="form-control" id="files" name="files">
                </fieldset>
            </div>


            <div class="col-xs-12">
                <button type="submit" class="btn btn-inline pull-right">Save</button>
            </div>


        </div>
    </form>  
</div>

<div class="box-typical box-typical-padding">
    <div class="row">
        @foreach($items as $row)
            <div class="col-md-3 col-xs-3">
                <img src="{{asset('uploads/'.$row->thumb_250)}}" width="200" height="auto"/>
                <a href="{{route('deleteImage',['id' => $row->id])}}" style="position: absolute;left: 190px;color:#f00;font-size:24px;">
                    <i class="fa fa-minus-circle" aria-hidden="true"></i>
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
@push('scripts')
@endpush


