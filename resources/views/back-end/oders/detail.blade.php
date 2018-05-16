@extends('back-end.layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" style="color:#FFF;background-color:rgba(255,255,255,0.1)">			
		<div class="row">
			<ol class="breadcrumb" style="color:#FFF;background-color:transparent">
				<li><a href="#" style="color:#FFF;background-color:transparent"><svg class="glyph stroked home" style="color:#FFF;background-color:transparent"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active" style="color:#FFF;background-color:transparent">Detail </li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<form action="" method="POST" role="form" >	
					<input type="hidden" name="_token" value="{{ csrf_token() }}">				
					<div class="panel panel-default" style="color:#FFF;background-color:transparent">
						@if (count($errors) > 0)
						    <div class="alert alert-danger" >
						        <ul>
						            @foreach ($errors->all() as $error)
						                <li>{{ $error }}</li>
						            @endforeach
						        </ul>
						    </div>
						    @elseif (Session()->has('flash_level'))
						    	<div class="alert alert-success">
							        <ul>
							            {!! Session::get('flash_massage') !!}	
							        </ul>
							    </div>
							@endif
							<div class="table-responsive">
								<table class="table table-hover" style="color:#FFF;background-color:transparent">
									<thead>
										<tr>
											<th>ID</th>
											<th>Customer</th>
											<th>Address</th>
											<th>Phonenumber</th>
											<th>Date</th>
											<th>Total</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>{!!$oder->id!!}</td>
											<td>{!!$oder->user->name!!}</td>
											<td>{!!$oder->user->address!!}</td>
											<td>{!!$oder->user->phone!!}</td>
											<td>{!!$oder->created_at!!}</td>
											<td>{!!number_format($oder->total)!!}</td>
										</tr>
									</tbody>
								</table>
							</div>
						<div class="panel-heading" style="color:#FFF;background-color:transparent">						 
							Products Detail
						</div>
						<div class="panel-body" style="font-size: 12px;">
							<div class="table-responsive">
								<table class="table table-hover" style="color:#FFF;background-color:transparent">
									<thead>
										<tr>										
											<th>ID</th>										
											<th>Image</th>
											<th>Product</th>
											<th>Code</th>
											<th>Amount</th>
											<th>Price</th>
											<th>Status</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										@foreach($data as $row)
											<tr>
												<td style="color:#FFF;background-color:transparent">{!!$row->id!!}</td>
												<td style="color:#FFF;background-color:transparent"> <img src="{!!url('uploads/products/'.$row->images)!!}" alt="iphone" width="50" height="40"></td>
												<td style="color:#FFF;background-color:transparent">{!!$row->name!!}</td>
												<td style="color:#FFF;background-color:transparent">{!!$row->intro!!}</td>
												<td style="color:#FFF;background-color:transparent">{!!$row->qty!!} </td>
												<td style="color:#FFF;background-color:transparent"> {!!number_format($row->price) !!} VND</td>
												<td style="color:#FFF;background-color:transparent">
													@if($row->status ==1)
														<span style="color:#FFF;">Available</span>
													@else
														<span style="color:#FFF;">Not Available</span>
													@endif
												</td>
												<td style="color:#FFF;background-color:transparent">
												    <a href="{!!url('')!!}"  title="Remove" onclick="return xacnhan('Remove this item ?')"><span class="glyphicon glyphicon-remove" style="color:#FFF;background-color:transparent">Remove</span> </a>
												</td>
											</tr>
										@endforeach								
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<button type="submit" onclick="return xacnhan('Confirm this product?')"  class="btn btn-danger" style="color:#000;border-color:#FFF;background-color:#FFF"> Confirm Order </button>
				</form>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection