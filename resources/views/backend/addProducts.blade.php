@extends('backend.master')
@push('style')
@endpush
@section('body')
<div class="box-typical box-typical-padding">
    <form action="{{route('addProductsSave')}}" method="post" enctype="multipart/form-data">
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
                            <label class="form-label" for="title_en">Product Name</label>
                            <input type="text" class="form-control" id="title_en" name="title_en" placeholder="Product Name">
                        </fieldset>
                    </div>

                    <div class="col-xs-12">
                        <fieldset class="form-group">
                            <label class="form-label" for="description_en">Project Description</label>
                            <textarea rows="4" class="form-control" id="description_en" name="description_en" placeholder="Product Description Here..." data-autosize></textarea>
                        </fieldset>
                    </div>

                    <div class="col-lg-12">
                        <fieldset class="form-group">
                            <label class="form-label" for="capacity_en">Capacity</label>
                            <input type="text" class="form-control" id="capacity_en" name="capacity_en" placeholder="Capacity">
                        </fieldset>
                    </div>

                    <div class="col-lg-12">
                        <fieldset class="form-group">
                            <label class="form-label" for="rated_speed_en">Rated Speed</label>
                            <input type="text" class="form-control" id="rated_speed_en" name="rated_speed_en" placeholder="Rated Speed">
                        </fieldset>
                    </div>

                    <div class="col-lg-12">
                        <fieldset class="form-group">
                            <label class="form-label" for="travel_height_en">Travel Height</label>
                            <input type="text" class="form-control" id="travel_height_en" name="travel_height_en" placeholder="Travel Height">
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
                            <input type="text" class="form-control" id="title_ar" name="title_ar" placeholder="Product Name">
                        </fieldset>
                    </div>

                    <div class="col-xs-12">
                        <fieldset class="form-group">
                            <label class="form-label" for="description_ar">Project Description</label>
                            <textarea rows="4" class="form-control" id="description_ar" name="description_ar" placeholder="Product Description Here..." data-autosize></textarea>
                        </fieldset>
                    </div>

                    <div class="col-lg-12">
                        <fieldset class="form-group">
                            <label class="form-label" for="capacity_ar">Capacity</label>
                            <input type="text" class="form-control" id="capacity_ar" name="capacity_ar" placeholder="Capacity">
                        </fieldset>
                    </div>

                    <div class="col-lg-12">
                        <fieldset class="form-group">
                            <label class="form-label" for="rated_speed_ar">Rated Speed</label>
                            <input type="text" class="form-control" id="rated_speed_ar" name="rated_speed_ar" placeholder="Rated Speed">
                        </fieldset>
                    </div>

                    <div class="col-lg-12">
                        <fieldset class="form-group">
                            <label class="form-label" for="travel_height_ar">Travel Height</label>
                            <input type="text" class="form-control" id="travel_height_ar" name="travel_height_ar" placeholder="Travel Height">
                        </fieldset>
                    </div>

                </div>
            </div>

            <div class="col-xs-6">
                <fieldset class="form-group">
                    <label class="form-label" for="files">Product Images</label>
                    <input type="file" class="form-control" id="files" name="files[]" multiple>
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
</script>
@endpush


