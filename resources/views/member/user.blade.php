@extends('layouts.master')

@section('content')
	<div class="container">
	<hr>
		<div class="row" style="color:#FFF; font-weight:bold">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<table class="table table-bordered table-hover text-center">
					<thead>
						<tr><h1>History</h1></tr>
						<tr>
							<th> ID</th>										
							<th>CODE</th>										
							<th>TIME</th>										
							<th>TOTAL</th>										
						</tr>
					</thead>
					<tbody>
					<?php  $stt=0;?>
						@foreach($data as $row)
							<?php $stt++;?>
							<tr>
								<td>{!!$stt!!}</td>
								<td>{!!$row->id!!}</td>
								<td>{!!$row->created_at!!}</td>
								<td>{!! number_format($row->total) !!} VND</td>
							</tr>
						@endforeach							
					</tbody>
				</table>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<div class="table-responsive">
					<table class="table table-bordered table-hover text-center">
						<thead>
							<tr>
								<th colspan="2"> USER : {!!Auth::user()->name !!}</th>										
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>NAME</td>
								<td>{!!Auth::user()->name!!}</td>
							</tr>
							<tr>
								<td>EMAIL</td>
								<td>{!!Auth::user()->email!!}</td>
							</tr>
							<tr>
								<td>PHONENUMBER</td>
								<td>{!!Auth::user()->phone !!}</td>
							</tr>
							<tr>
								<td>ADDRESSS</td>
								<td>{!!Auth::user()->address!!}</td>
							</tr>
							<tr>
								<td>REGISTRATION</td>
								<td>{!!Auth::user()->created_at !!}</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection
