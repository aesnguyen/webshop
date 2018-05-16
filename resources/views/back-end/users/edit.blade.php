@extends('back-end.layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" style="color:#FFF;background-color:#000">			
		<div class="row">
			<ol class="breadcrumb" style="color:#FFF;background-color:transparent">
				<li><a href="#" style="color:#FFF;background-color:transparent"><svg class="glyph stroked home" style="color:#FFF;background-color:transparent"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active" style="color:#FFF;background-color:transparent">Customer</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><small>Edit Customer Information</small></h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default" style="color:#FFF;background-color:transparent">					
					<div class="panel-body" style="color:#FFF;background-color:transparent">
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
						<form action="" method="POST" role="form">
				      		{{ csrf_field() }}
				      		<div class="form-group">
					      		<label for="input-id"> Authority </label>
					      		<select name="sltCate" id="inputSltCate" class="form-control">
					      			<option value="1">- Supervisor --</option> 	
					      			<option value="2">- Employee --</option> 		
					      		</select>
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">Customer</label>
				      			<input type="text" name="txtName" id="inputTxtName" class="form-control" value="{!! old('txtCateName', isset($data['name']) ? $data['name'] : null)!!}" required="required">
				      		</div>
				      		<input type="submit" name="btnCateAdd" class="btn btn-primary" value="Edit" class="button" style="color:#000;background-color:#FFF"/>
				      	</form>					      	
					</div>
				</div>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection