@extends('back-end.layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" style="background-color:#000">			
		<div class="row" >
			<ol class="breadcrumb" style="background-color:transparent">
				<li><a href="#"><svg class="glyph stroked home" style="color:#FFF"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active" style="color:#FFF">Category</li>
			</ol>
		</div><!--/.row-->
	
		<div class="row" style="background-color:transparent">
			<div class="col-lg-12" style="background-color:transparent">
				<div class="panel panel-default" style="background-color:transparent">
					<div class="panel-heading" style="color:#FFF;background-color:transparent">
						Categories
						<a href="{!!url('admin/danhmuc/add')!!}" title=""><button type="button" class="btn btn-primary pull-right" style="background-color:#FFF;color:#000;border-color:#FFF">Add new Category</button></a>
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
							<table class="table table-hover"  style="color:#FFF;background-color:transparent">
								<thead>
									<tr style="color:#FFF;background-color:transparent">										
										<th>ID</th>										
										<th>Name</th>										
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr >
										<?php listcate ($data,$id_cha =0,$str=""); ?>  
									</tr>									
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection