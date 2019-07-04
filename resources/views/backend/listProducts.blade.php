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
			<th>Product Name</th>
			<th>Product Image</th>
			<th>Description</th>
			<th>Capacity</th>
			<th>Rated Speed</th>
			<th>Travel Height</th>
			<th>Actions</th>
		</tr>
		</thead>
		<tfoot>
		<tr>
			<th>Product Name</th>
			<th>Product Image</th>
			<th>Description</th>
			<th>Capacity</th>
			<th>Rated Speed</th>
			<th>Travel Height</th>
			<th>Actions</th>
		</tr>
		</tfoot>
		<tbody>
		@foreach($products as $row)
		<tr>
			<td>{!! $row->title_en."<br><br>".$row->title_ar !!}</td>
			@if(!empty($row->images))
				<td><img src="{{'uploads/'.$row->images[0]->thumb_250}}" width="100" height="auto"/></td>
			@else
				<td></td>
			@endif
			<td>{!! $row->description_en."<br><br>".$row->description_ar !!}</td>
			<td>{!! $row->capacity_en."<br><br>".$row->capacity_ar !!}</td>
			<td>{!! $row->rated_speed_en."<br><br>".$row->rated_speed_ar !!}</td>
			<td>{!! $row->travel_height_en."<br><br>".$row->travel_height_ar !!}</td>
			<td>
				<a href="{{route('editProducts',$row->id)}}" style="border-bottom:none;">
					<button type="button" class="btn btn-sm btn-secondary">
						<i class="fa fa-pencil" aria-hidden="true"></i>
					</button>
				</a>
				<a href="{{route('deleteProducts',$row->id)}}" style="border-bottom:none;">
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