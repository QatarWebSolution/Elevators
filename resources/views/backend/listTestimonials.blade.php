@extends('backend.master')
@push('style')
<link rel="stylesheet" href="{{asset('build/css/lib/datatables-net/datatables.min.css')}}">
<link rel="stylesheet" href="{{asset('build/css/separate/vendor/datatables-net.min.css')}}">
@endpush
@section('body')
<div class="box-typical box-typical-padding">
	<table id="example" class="display table table-bordered" cellspacing="0" width="100%">
		<thead>
		<tr>
			<th>Name</th>
			<th>Name</th>
			<th>Company</th>
			<th>Comments</th>
			<th>Actions</th>
		</tr>
		</thead>
		<tfoot>
		<tr>
			<th>Name</th>
			<th>Name</th>
			<th>Company</th>
			<th>Comments</th>
			<th>Actions</th>
		</tr>
		</tfoot>
		<tbody>
		@foreach($testimonials as $row)
		<tr>
			@if($row->thumb_250 != '')
				<td><img src="{{asset('uploads/'.$row->thumb_250)}}" width="100" height="auto"/></td>
			@else
				<td></td>
			@endif
			<td>{!! $row->name_en."<br><br>".$row->name_ar !!}</td>
			<td>{!!$row->company_en."<br><br>".$row->company_ar!!}</td>
			<td>{!!$row->description_en."<br><br>".$row->description_ar!!}</td>
			<td>
				<a href="{{route('editTestimonials',$row->id)}}" style="border-bottom:none;">
					<button type="button" class="btn btn-sm btn-secondary">
						<i class="fa fa-pencil" aria-hidden="true"></i>
					</button>
				</a>
				<a href="{{route('deleteTestimonials',$row->id)}}" style="border-bottom:none;">
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