@extends('backend.master')
@push('style')
    <link rel="stylesheet" href="{{asset('build/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}">
@endpush
@section('body')
<div class="box-typical box-typical-padding">
    <form action="{{route('addProjectsSave')}}" method="post" enctype="multipart/form-data">
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
                            <label class="form-label" for="title_en">Project Title</label>
                            <input type="text" class="form-control" id="title_en" name="title_en" placeholder="Project Title">
                        </fieldset>
                    </div>

                    <div class="col-lg-12">
                        <fieldset class="form-group">
                            <label class="form-label" for="elevator_type_en">Elevator Type</label>
                            <input type="text" class="form-control" id="elevator_type_en" name="elevator_type_en" placeholder="Elevator Type">
                        </fieldset>
                    </div>

                    <div class="col-lg-12">
                        <fieldset class="form-group">
                            <label class="form-label" for="building_type_en">Building Type</label>
                            <input type="text" class="form-control" id="building_type_en" name="building_type_en" placeholder="Building Type">
                        </fieldset>
                    </div>

                    <div class="col-lg-12">
                        <fieldset class="form-group">
                            <label class="form-label" for="project_location_en">Project Location</label>
                            <input type="text" class="form-control" id="project_location_en" name="project_location_en" placeholder="Project Location">
                        </fieldset>
                    </div>

                    <div class="col-lg-12">
                        <fieldset class="form-group">
                            <label class="form-label" for="start_date_en">Start Date</label>
                            <input type="text" class="form-control datepicker" id="start_date_en" name="start_date_en" placeholder="dd/mm/yyyy">
                        </fieldset>
                    </div>

                    <div class="col-lg-12">
                        <fieldset class="form-group">
                            <label class="form-label" for="handover_date_en">Handover Date</label>
                            <input type="text" class="form-control datepicker" id="handover_date_en" name="handover_date_en" placeholder="dd/mm/yyyy">
                        </fieldset>
                    </div>

                    <div class="col-lg-12">
                        <fieldset class="form-group">
                            <label class="form-label" for="project_status_en">Project Status</label>
                            <input type="text" class="form-control" id="project_status_en" name="project_status_en" placeholder="Project Status">
                        </fieldset>
                    </div>

                    <div class="col-xs-12">
                        <fieldset class="form-group">
                            <label class="form-label" for="description_en">Project Details</label>
                            <textarea rows="4" class="form-control" id="description_en" name="description_en" placeholder="Project Description Here..." data-autosize></textarea>
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
                            <label class="form-label" for="title_ar">Project Title</label>
                            <input type="text" class="form-control" id="title_ar" name="title_ar" placeholder="Project Title">
                        </fieldset>
                    </div>

                    <div class="col-lg-12">
                        <fieldset class="form-group">
                            <label class="form-label" for="elevator_type_ar">Elevator Type</label>
                            <input type="text" class="form-control" id="elevator_type_ar" name="elevator_type_ar" placeholder="Elevator Type">
                        </fieldset>
                    </div>

                    <div class="col-lg-12">
                        <fieldset class="form-group">
                            <label class="form-label" for="building_type_ar">Building Type</label>
                            <input type="text" class="form-control" id="building_type_ar" name="building_type_ar" placeholder="Building Type">
                        </fieldset>
                    </div>

                    <div class="col-lg-12">
                        <fieldset class="form-group">
                            <label class="form-label" for="project_location_ar">Project Location</label>
                            <input type="text" class="form-control" id="project_location_ar" name="project_location_ar" placeholder="Project Location">
                        </fieldset>
                    </div>

                    <div class="col-lg-12">
                        <fieldset class="form-group">
                            <label class="form-label" for="start_date_ar">Start Date</label>
                            <input type="text" class="form-control datepicker" id="start_date_ar" name="start_date_ar" placeholder="dd/mm/yyyy">
                        </fieldset>
                    </div>

                    <div class="col-lg-12">
                        <fieldset class="form-group">
                            <label class="form-label" for="handover_date_ar">Handover Date</label>
                            <input type="text" class="form-control datepicker" id="handover_date_ar" name="handover_date_ar" placeholder="dd/mm/yyyy">
                        </fieldset>
                    </div>

                    <div class="col-lg-12">
                        <fieldset class="form-group">
                            <label class="form-label" for="project_status_ar">Project Status</label>
                            <input type="text" class="form-control" id="project_status_ar" name="project_status_ar" placeholder="Project Status">
                        </fieldset>
                    </div>

                    <div class="col-xs-12">
                        <fieldset class="form-group">
                            <label class="form-label" for="description_ar">Project Details</label>
                            <textarea rows="4" class="form-control" id="description_en" name="description_ar" placeholder="Project Description Here..." data-autosize></textarea>
                        </fieldset>
                    </div>

                </div>
            </div>

            <div class="col-xs-6">
                <fieldset class="form-group">
                    <label class="form-label" for="files">Project Image</label>
                    <input type="file" class="form-control" id="files" name="files">
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
    <script src="{{asset('build/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
    <script>
    $(document).ready(function () {

        $('.datepicker').datepicker({
            format: 'dd/mm/yyyy',
            // startDate: '-0d',
            changeMonth: true,
            changeYear: true
        });
    });
</script>
@endpush


