@extends('back-end.layouts.master')

@section('content')
	<div class="table-responsive">
		<table class="table table-bordered table-hover text-center">
			<thead>
				<tr>
					<th colspan="2">Information</th>										
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Name</td>
					<td>{!!Auth::guard('admin')->user()->name !!}</td>
				</tr>
				<tr>
					<td>Email</td>
					<td>{!!Auth::guard('admin')->user()->email !!}</td>
				</tr>
				<tr>
					<td>Authority</td>
					<td>{!!Auth::guard('admin')->user()->level !!}</td>
				</tr>
				<tr>
					<td>Date</td>
					<td>{!!Auth::guard('admin')->user()->created_at !!}</td>
				</tr>
			</tbody>
		</table>
	</div>
@endsection