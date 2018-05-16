@extends('back-end.layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" style="color:#FFF;background-color:rgba(255,255,255,0.1)">			
		<div class="row">
			<ol class="breadcrumb" style="color:#FFF;background-color:rgba(255,255,255,0.1)">
				<li><a href="{!!(url('/admin/home'))!!}"><svg class="glyph stroked home" style="color:#FFF;background-color:transparent"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active" style="color:#FFF;background-color:transparent">Articles</li>
			</ol>
		</div><!--/.row-->
	
		<div class="row" >
			<div class="col-lg-12" >
				<div class="panel panel-default" style="background-color:transparent">
					<div class="panel-heading"style="color:#FFF;background-color:transparent">
						Articles
						<a href="{!!url('admin/news/add')!!}" title=""><button type="button" class="btn btn-primary pull-right" style="color:#000;background-color:#FFF">Add new Articles</button></a>
					</div>
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
					<div class="panel-body" style="color:#FFF;background-color:transparent">
						<div class="table-responsive" >
							<table class="table table-hover" style="color:#FFF;background-color:transparent">
								<thead>
									<tr style="color:#FFF;background-color:transparent;height:100%;width:100%">										
										<th>ID</th>										
										<th>Image</th>										
										<th>Title</th>										
										<th>Summary</th>										
										<th>Status</th>										
										<th>Action</th>
									</tr>
								</thead>
								<tbody >
								@foreach($data as $row)
									<tr style="color:#FFF;background-color:transparent">
										<td style="color:#FFF;background-color:transparent">{!!$row->id!!}</td>
										<td style="color:#FFF;background-color:transparent"> <img src="{!!url('uploads/news/'.$row->images)!!}" alt="" width="40" height="40"> </td>
										<td style="color:#FFF;background-color:transparent">{!!$row->title!!}</td>
										<td style="color:#FFF;background-color:transparent"><small style="color:#FFF;">{!!$row->intro!!}</small></td>
										<td style="color:#FFF;background-color:transparent;width:90px">
											@if($row->status==1)
											Display
											@else
											None
											@endif
										</td>
										<td style="color:#FFF;background-color:transparent;width:120px">
										    <a href="{!!url('admin/news/edit/'.$row->id)!!}" title="Edit" style="color:#FFF;background-color:transparent"><span class="glyphicon glyphicon-edit">edit</span> </a>
										    <a href="{!!url('admin/news/del/'.$row->id)!!}"  title="Remove" onclick="return xacnhan('Remove this item ?')" style="color:#FFF;background-color:transparent"><span class="glyphicon glyphicon-remove">remove</span> </a>
										</td>
									</tr>	
								@endforeach								
								</tbody>
							</table>
						</div>
						{!!$data->render()!!}
					</div>
				</div>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection