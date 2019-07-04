@extends('backend.master')
@push('style')
@endpush
@section('body')
<div class="box-typical box-typical-padding">
    <form>
        <div class="row">

            {{--English--}}
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12">
                        <h5 class="m-t-lg with-border">English</h5>
                    </div>
                    <div class="col-lg-12">
                        <fieldset class="form-group">
                            <label class="form-label" for="title_en">Product Name</label>
                            <input type="text" class="form-control" id="title_en" name="title_en" placeholder="Product Name" value="{{$product->title_en}}">
                        </fieldset>
                    </div>

                    <div class="col-xs-12">
                        <fieldset class="form-group">
                            <label class="form-label" for="description_en">Project Description</label>
                            <textarea rows="4" class="form-control" id="description_en" name="description_en" placeholder="Product Description Here..." data-autosize>{{$product->description_en}}</textarea>
                        </fieldset>
                    </div>

                    <div class="col-lg-12">
                        <fieldset class="form-group">
                            <label class="form-label" for="capacity_en">Capacity</label>
                            <input type="text" class="form-control" id="capacity_en" name="capacity_en" placeholder="Capacity" value="{{$product->capacity_en}}">
                        </fieldset>
                    </div>

                    <div class="col-lg-12">
                        <fieldset class="form-group">
                            <label class="form-label" for="rated_speed_en">Rated Speed</label>
                            <input type="text" class="form-control" id="rated_speed_en" name="rated_speed_en" placeholder="Rated Speed" value="{{$product->rated_speed_en}}">
                        </fieldset>
                    </div>

                    <div class="col-lg-12">
                        <fieldset class="form-group">
                            <label class="form-label" for="travel_height_en">Travel Height</label>
                            <input type="text" class="form-control" id="travel_height_en" name="travel_height_en" placeholder="Travel Height" value="{{$product->travel_height_en}}">
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
                            <label class="form-label" for="title_ar">Product Name</label>
                            <input type="text" class="form-control" id="title_ar" name="title_ar" placeholder="Product Name" value="{{$product->title_ar}}">
                        </fieldset>
                    </div>

                    <div class="col-xs-12">
                        <fieldset class="form-group">
                            <label class="form-label" for="description_ar">Project Description</label>
                            <textarea rows="4" class="form-control" id="description_ar" name="description_ar" placeholder="Product Description Here..." data-autosize>{{$product->description_ar}}</textarea>
                        </fieldset>
                    </div>

                    <div class="col-lg-12">
                        <fieldset class="form-group">
                            <label class="form-label" for="capacity_ar">Capacity</label>
                            <input type="text" class="form-control" id="capacity_ar" name="capacity_ar" placeholder="Capacity" value="{{$product->capacity_ar}}">
                        </fieldset>
                    </div>

                    <div class="col-lg-12">
                        <fieldset class="form-group">
                            <label class="form-label" for="rated_speed_ar">Rated Speed</label>
                            <input type="text" class="form-control" id="rated_speed_ar" name="rated_speed_ar" placeholder="Rated Speed" value="{{$product->rated_speed_ar}}">
                        </fieldset>
                    </div>

                    <div class="col-lg-12">
                        <fieldset class="form-group">
                            <label class="form-label" for="travel_height_ar">Travel Height</label>
                            <input type="text" class="form-control" id="travel_height_ar" name="travel_height_ar" placeholder="Travel Height" value="{{$product->travel_height_ar}}">
                        </fieldset>
                    </div>

                </div>
            </div>

            @if(!empty($product->images))
                <div class="row">
                    <div class="col-xs-12">
                @foreach($product->images as $img)

                <div class="col-xs-4">
                    <img src="{{asset('uploads/'.$img->thumb_250)}}" width="100" height="auto"/>
                    <a href=""><i class="font-icon font-icon-close-2 color-red" style="position: absolute;left: 106px;top: -10px;"></i></a>
                </div>

                @endforeach
                    </div>
                </div>
            @endif


            <div class="col-xs-6">
                <fieldset class="form-group">
                    <label class="form-label" for="files">Product Images</label>
                    <input type="file" class="form-control" id="files" name="files[]">
                </fieldset>
            </div>


            <div class="col-xs-12">
                <button type="submit" class="btn btn-inline pull-right">Save</button>
            </div>


        </div>
    </form>  
</div>
@endsection
@push('scripts')
@endpush


