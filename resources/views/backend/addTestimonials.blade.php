@extends('backend.master')
@push('style')
@endpush
@section('body')
<div class="box-typical box-typical-padding">
    <form action="{{route('saveTestimonials')}}" method="post" enctype="multipart/form-data">
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
                            <label class="form-label" for="name_en">Name</label>
                            <input type="text" class="form-control" id="name_en" name="name_en" placeholder="Name">
                        </fieldset>
                    </div>

                    <div class="col-xs-12">
                        <fieldset class="form-group">
                            <label class="form-label" for="company_en">Company</label>
                            <input type="text" class="form-control" id="company_en" name="company_en" placeholder="Company"/>
                        </fieldset>
                    </div>

                    <div class="col-xs-12">
                        <fieldset class="form-group">
                            <label class="form-label" for="comments_en">Comments</label>
                            <textarea rows="4" class="form-control" id="comments_en" name="comments_en" placeholder="Comments Here..." data-autosize></textarea>
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
                            <label class="form-label" for="name_ar">Name</label>
                            <input type="text" class="form-control" id="name_ar" name="name_ar" placeholder="Name">
                        </fieldset>
                    </div>

                    <div class="col-xs-12">
                        <fieldset class="form-group">
                            <label class="form-label" for="company_ar">Company</label>
                            <input type="text" class="form-control" id="company_ar" name="company_ar" placeholder="Company"/>
                        </fieldset>
                    </div>

                    <div class="col-xs-12">
                        <fieldset class="form-group">
                            <label class="form-label" for="comments_ar">Commarts</label>
                            <textarea rows="4" class="form-control" id="comments_ar" name="comments_ar" placeholder="Comments Here..." data-autosize></textarea>
                        </fieldset>
                    </div>

                </div>
            </div>

            <div class="col-xs-6">
                <fieldset class="form-group">
                    <label class="form-label" for="files">Avatar</label>
                    <input type="file" class="form-control" id="files" name="files"/>
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


