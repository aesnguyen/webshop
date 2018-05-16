@extends('back-end.layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" style="color:#FFF;background-color:#000">			
		<div class="row">
			<ol class="breadcrumb" style="color:#FFF;background-color:#000">
				<li><a href="#" style="color:#FFF;background-color:#000"><svg class="glyph stroked home" style="color:#FFF;background-color:#000"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active" style="color:#FFF;background-color:#000">Customer</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel-heading">
					Customers						
				</div>
				<div class="panel panel-default" style="color:#FFF;background-color:#000">					
					@if (count($errors) > 0)
					    <div class="alert alert-danger">
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
					<div class="panel-body" style="font-size: 13px;">
						<div class="table-responsive">
							<table class="table table-hover" style="color:#FFF;background-color:#000">
								<thead>
									<tr>										
										<th>ID</th>										
										<th>Customer</th>
										<th>Address</th>
										<th>Phonenumber</th>
										<th>Email</th>										
										<th>Registration</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($data as $row)
										<tr>
											<td style="color:#FFF;background-color:#000">{!!$row->id!!}</td>
											<td style="color:#FFF;background-color:#000">{!!$row->name!!}</td>
											<td style="color:#FFF;background-color:#000">{!!$row->address!!}</td>
											<td style="color:#FFF;background-color:#000">{!!$row->phone!!}</td>
											<td style="color:#FFF;background-color:#000">{!!$row->email!!}</td>											
											<td style="color:#FFF;background-color:#000">{!!$row->created_at!!}</td>
											<td style="color:#FFF;background-color:#000">
												@if($row->status ==0)
													<span style="color:#FFF;">Not confirmed yet</span>
												@else
													<span style="color:#FFF;">Confirmed</span>
												@endif
											</td>
											<td style="color:#FFF;background-color:#000">
											{{--<a href="{!!url('admin/khachhang/edit/'.$row->id)!!}" title="Detail" style="color:#FFF;background-color:#000">Update</a> &nbsp;--}}
											    <a href="{!!url('admin/khachhang/del/'.$row->id)!!}"  title="Remove" onclick="return xacnhan('Remove this item ?')" style="color:#FFF;background-color:#000">Remove</a>
											</td>
										</tr>
									@endforeach								
								</tbody>
							</table>
						</div>
						{!! $data->render() !!}
					</div>
				</div>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection