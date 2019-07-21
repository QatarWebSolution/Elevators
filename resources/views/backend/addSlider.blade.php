@extends('backend.master')
@push('style')
    <link rel="stylesheet" href="{{asset('build/css/lib/datatables-net/datatables.min.css')}}">
    <link rel="stylesheet" href="{{asset('build/css/separate/vendor/datatables-net.min.css')}}">
@endpush
@section('body')
    <div class="box-typical box-typical-padding">
        <form action="{{route('saveSlider')}}" method="post" enctype="multipart/form-data">
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
                                <label class="form-label" for="name_en">Title</label>
                                <input type="text" class="form-control" id="title_en" name="title_en" placeholder="Title">
                            </fieldset>
                        </div>

                        <div class="col-xs-12">
                            <fieldset class="form-group">
                                <label class="form-label" for="company_en">Description</label>
                                <input type="text" class="form-control" id="description_en" name="description_en" placeholder="Description"/>
                            </fieldset>
                        </div>

                        <div class="col-xs-12">
                            <fieldset class="form-group">
                                <label class="form-label" for="comments_en">Link</label>
                                <textarea rows="4" class="form-control" id="link_en" name="link_en" placeholder="Link" data-autosize></textarea>
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

                        <div class="col-xs-12">
                            <fieldset class="form-group">
                                <label class="form-label" for="description_ar">Description</label>
                                <input type="text" class="form-control" id="description_ar" name="description_ar" placeholder="Description"/>
                            </fieldset>
                        </div>

                        <div class="col-xs-12">
                            <fieldset class="form-group">
                                <label class="form-label" for="link_ar">Link</label>
                                <textarea rows="4" class="form-control" id="link_ar" name="link_ar" placeholder="Link" data-autosize></textarea>
                            </fieldset>
                        </div>

                    </div>
                </div>
                <div class="col-xs-6">
                    <fieldset class="form-group">
                        <label class="form-label" for="image">Slider Image</label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*">
                    </fieldset>
                </div>


                <div class="col-xs-12">
                    <button type="submit" class="btn btn-inline pull-right">Save</button>
                </div>


            </div>
        </form>
    </div>
    <div class="box-typical box-typical-padding">
        <table id="example" class="display table table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>Title</th>
                <th>Desciption</th>
                <th>Link</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>Title</th>
                <th>Desciption</th>
                <th>Link</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
            </tfoot>
            <tbody>
            @foreach($sliders as $row)
                <tr>
                    <td>{!! $row->title_en."<br><br>".$row->title_ar !!}</td>
                    <td>{!!$row->description_en."<br><br>".$row->description_ar!!}</td>
                    <td>{!!$row->link_en."<br><br>".$row->link_ar!!}</td>
                    @if($row->image != '')
                        <td><img src="{{asset('uploads/'.$row->image)}}" width="100" height="auto"/></td>
                    @else
                        <td></td>
                    @endif
                    <td>
                        {{--<a href="{{route('editTestimonials',$row->id)}}" style="border-bottom:none;">--}}
                            {{--<button type="button" class="btn btn-sm btn-secondary">--}}
                                {{--<i class="fa fa-pencil" aria-hidden="true"></i>--}}
                            {{--</button>--}}
                        {{--</a>--}}
                        <a href="{{route('deleteSlider',$row->id)}}" style="border-bottom:none;">
                            <button type="button" class="btn btn-sm btn-danger">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
@push('scripts')
    <script src="{{asset('build/js/lib/datatables-net/datatables.min.js')}}"></script>
    <script>
        $(function() {
            $('#example').DataTable({
                responsive: true
            });
        });
    </script>
@endpush


