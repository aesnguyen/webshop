@extends('back-end.layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" style="color:#FFF;background-color:#000">			
		<div class="row">
			<ol class="breadcrumb" style="color:#FFF;background-color:#000">
				<li><a href="#" style="color:#FFF;background-color:#000"><svg class="glyph stroked home" style="color:#FFF;background-color:#000"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active" style="color:#FFF;background-color:#000">Member</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel-heading">
					Members						
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
										<th>Employee</th>
										<th>Email</th>
										<th>Authority</th>
										<th>Registration</th>										
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($data as $row)
										<tr>
											<td style="color:#FFF;background-color:#000">{!!$row->id!!}</td>
											<td style="color:#FFF;background-color:#000">{!!$row->name!!}</td>
											<td style="color:#FFF;background-color:#000">{!!$row->email!!}</td>
											<td style="color:#FFF;background-color:#000">
												@if($row->level ==100)
													<span style="color:#FFF;">System Supervisor</span>
												@else
													<span style="color:#FFF;">Admin</span>
												@endif
											</td>										
											<td style="color:#FFF;background-color:#000">{!!$row->created_at!!}</td>											
											<td style="color:#FFF;background-color:#000">
											    {{--  <a href="{!!url('admin/nhanvien/edit/'.$row->id)!!}" title="Update" style="color:#FFF;background-color:#000">Update</a> &nbsp;--}}
											    @if ($row->level !=100)
											    	<a href="{!!url('admin/nhanvien/del/'.$row->id)!!}"  title="Remove" onclick="return xacnhan('Remove this item?')" style="color:#FFF;background-color:#000">Remove</a>
											    @endif
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