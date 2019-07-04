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
			<th>Project Title</th>
			<th>Elevator Type</th>
			<th>Building Type</th>
			<th>Project Location</th>
			<th>Start Date</th>
			<th>Handover Date</th>
			<th>Details</th>
			<th>Status</th>
			<th>Actions</th>
		</tr>
		</thead>
		<tfoot>
		<tr>
			<th>Project Title</th>
			<th>Elevator Type</th>
			<th>Building Type</th>
			<th>Project Location</th>
			<th>Start Date</th>
			<th>Handover Date</th>
			<th>Details</th>
			<th>Status</th>
			<th>Actions</th>
		</tr>
		</tfoot>
		<tbody>
		@foreach($projects as $row)
		<tr>
			<td>{!! $row->title_en."<br><br>".$row->title_ar !!}</td>
			<td>{!!$row->elevator_type_en."<br><br>".$row->elevator_type_ar!!}</td>
			<td>{!!$row->building_type_en."<br><br>".$row->building_type_ar!!}</td>
			<td>{!!$row->project_location_en."<br><br>".$row->project_location_ar!!}</td>
			<td>{!!$row->start_date_en."<br><br>".$row->start_date_ar!!}</td>
			<td>{!!$row->handover_date_en."<br><br>".$row->handover_date_ar!!}</td>
			<td>{!!$row->description_en."<br><br>".$row->description_ar!!}</td>
			<td>{!!$row->status_en."<br><br>".$row->status_ar!!}</td>
			<td>
				<a href="{{route('editProjects',$row->id)}}" style="border-bottom:none;">
					<button type="button" class="btn btn-sm btn-secondary">
						<i class="fa fa-pencil" aria-hidden="true"></i>
					</button>
				</a>
				<a href="{{route('deleteProjects',$row->id)}}" style="border-bottom:none;">
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