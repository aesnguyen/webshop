@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<table class="table table-bordered table-hover text-center">
						<thead>
							<tr>
								<th colspan="2"> History : {!!Auth::user()->name !!}</th>										
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Name</td>
								<td>{!!Auth::user()->name!!}</td>
							</tr>
							<tr>
								<td>Email</td>
								<td>{!!Auth::user()->email!!}</td>
							</tr>
							<tr>
								<td>Phonenumber</td>
								<td>{!!Auth::user()->phone !!}</td>
							</tr>
							<tr>
								<td>Address</td>
								<td>{!!Auth::user()->address!!}</td>
							</tr>
							<tr>
								<td>Registration</td>
								<td>{!!Auth::user()->created_at !!}</td>
							</tr>
						</tbody>
					</table>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<div class="table-responsive">
					<table class="table table-bordered table-hover text-center">
						<thead>
							<tr>
								<th colspan="2"> Update user information : {!!Auth::user()->name !!}</th>										
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Name</td>
								<td>{!!Auth::user()->name!!}</td>
							</tr>
							<tr>
								<td>Email</td>
								<td>{!!Auth::user()->email!!}</td>
							</tr>
							<tr>
								<td>Phonenumber</td>
								<td>{!!Auth::user()->phone !!}</td>
							</tr>
							<tr>
								<td>Address</td>
								<td>{!!Auth::user()->address!!}</td>
							</tr>
							<tr>
								<td>Registration</td>
								<td>{!!Auth::user()->created_at !!}</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection
