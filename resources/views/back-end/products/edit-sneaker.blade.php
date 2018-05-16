@extends('back-end.layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" style="color:#FFF;background-color:rgba(255,255,255,0.1)">			
		<div class="row">
			<ol class="breadcrumb" style="color:#FFF;background-color:transparent">
				<li><a href="#" style="color:#FFF;background-color:transparent"><svg class="glyph stroked home" style="color:#FFF;background-color:transparent"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active" style="color:#FFF;background-color:transparent">Products</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><small>Edit Products </small></h1>
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
						<form action="" method="POST" role="form" enctype="multipart/form-data">
				      		{{ csrf_field() }}
				      		<div class="form-group">
					      		<label for="input-id">Category</label>
					      		<select name="sltCate" id="inputSltCate" required class="form-control">
					      			<option value="">--Brand--</option>
					      			@foreach($cat as $dt)
					      				<option value="{!!$dt->id!!}" >{!!'--|--|'.$dt->name!!}</option> 	
					      			@endforeach	
					      		</select>
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">Name</label>
				      			<input type="text" name="txtname" id="inputTxtname" class="form-control" value="{!! old('txtname',isset($pro["name"]) ? $pro["name"] : null) !!}"  required="required">
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">CODE</label>
				      			<input type="text" name="txtintro" id="inputTxtintro" class="form-control" value="{!! old('txtintro',isset($pro["intro"]) ? $pro["intro"] : null) !!}" required="required">
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">In : </label>
				      			<input type="text" name="txtpacket" id="inputtxtpacket" value="{!! old('txtpacket',isset($pro["packet"]) ? $pro["packet"] : null) !!}" class="form-control" >
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">Size</label>
				      			<div class="row">
					      			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					      				Size1: <input type="text" name="txtpromo1" id="inputtxtpromo1" value="{!! old('txtpromo1',isset($pro["promo1"]) ? $pro["promo1"] : null) !!}" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					      				Size2 : <input type="text" name="txtpromo2" id="inputtxtpromo2" value="{!! old('txtpromo2',isset($pro["promo2"]) ? $pro["promo2"] : null) !!}" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					      				Size3: <input type="text" name="txtpromo3" id="inputtxtpromo3" value="{!! old('txtpromo3',isset($pro["promo3"]) ? $pro["promo3"] : null) !!}" class="form-control" >
					      			</div>
					      		</div>				      			
				      		</div>
				      		<div class="form-group">				      			
				      			<div class="row">
					      			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					      				Image : <input type="file" name="txtimg" accept="image/png" id="inputtxtimg"  class="form-control" >
					      				Old: <img src="{!!url('uploads/products/'.$pro->images)!!}" alt="{!!$pro->images!!}" width="80" height="60">
					      			</div>
					      			<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
					      				Price : <input type="number" name="txtprice" id="inputtxtprice" class="form-control" value="{!! old('txtproname',isset($pro["price"]) ? $pro["price"] : null) !!}" required="required">
					      			</div>
					      			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					      				Tag : <input type="text" name="txttag" id="inputtag" value="{!! old('txtproname',isset($pro["tag"]) ? $pro["tag"] : null) !!}" class="form-control">
					      			</div>
					      		</div>				      			
				      		</div>
				      	@if($loai!=19)
				      		<div class="form-group">
				      			<label for="input-id">Others</label>
				      			<div class="row">
					      			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					      				Color : <input type="text" name="txtCpu" id="inputtxtCpu" value="{!! old('txtCpu',isset($pro->pro_details->cpu) ? $pro->pro_details->cpu : null) !!}" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
					      				Material : <input type="text" name="txtRam" id="inputtxtRam" value="{!! old('txtRam',isset($pro->pro_details->ram) ? $pro->pro_details->ram : null) !!}" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
					      				Designer : <input type="text" name="txtStorage" id="inputtxtStorage" value="{!! old('txtStorage',isset($pro->pro_details->storage) ? $pro->pro_details->storage : null) !!}" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2" style="padding-left: 0;">
					      				Made in : <input type="text" name="txtExtend" id="inputtxtExtend" value="{!! old('txtExtend',isset($pro->pro_details->exten_memmory) ? $pro->pro_details->exten_memmory : null) !!}" class="form-control">
					      			</div>
					      		</div>
					      		<div class="row">
					      			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					      				Sale off : <input type="text" name="txtScreen" id="inputtxtscreen" value="{!! old('txtScreen',isset($pro->pro_details->screen) ? $pro->pro_details->screen : null) !!}" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					      				Introduction : <input type="text" name="txtVga" id="inputtxtVga" value="{!! old('txtVga',isset($pro->pro_details->vga) ? $pro->pro_details->vga : null) !!}" class="form-control">
					      			</div>
					      			<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
					      				Review : <input type="text" name="txtCam1" id="inputtxtCam1" value="{!! old('txtCam1',isset($pro->pro_details->cam1) ? $pro->pro_details->cam1 : null) !!}" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
					      				Amount Available : <input type="text" name="txtCam2" id="inputtxtCam2" value="{!! old('txtCam2',isset($pro->pro_details->cam2) ? $pro->pro_details->cam2 : null) !!}" class="form-control" >
					      			</div>
					      		</div>
					      		<div class="row">
					      			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					      				Time importing : <input type="text" name="txtSIM" id="inputtxtSIM" value="{!! old('txtSIM',isset($pro->pro_details->sim) ? $pro->pro_details->sim : null) !!}" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					      				Events : <input type="text" name="txtConnect" id="inputtxtConnect" value="{!! old('txtConnect',isset($pro->pro_details->connect) ? $pro->pro_details->connect : null) !!}" class="form-control">
					      			</div>
					      			<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
					      				Priority : <input type="text" name="txtPin" id="inputtxtPin" value="{!! old('txtPin',isset($pro->pro_details->pin) ? $pro->pro_details->pin : null) !!}" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
					      				Other Option : <input type="text" name="txtOs" id="inputtxtOs" value="{!! old('txtOs',isset($pro->pro_details->os) ? $pro->pro_details->os : null) !!}" class="form-control" >
					      			</div>
					      		</div>				      			
				      		</div>
				      	@else
				      	<div class="form-group">
				      			<label for="input-id"> Others</label>
				      			<div class="row">
				      				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					      				Color : <input type="text" name="txtScreen" id="inputtxtscreen" value="{!! old('txtScreen',isset($pro->pro_details->screen) ? $pro->pro_details->screen : null) !!}"  class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					      				Material :  <input type="text" name="txtCpu" id="inputtxtCpu" value="{!! old('txtCpu',isset($pro->pro_details->cpu) ? $pro->pro_details->cpu : null) !!}" class="form-control" >
					      			</div>					      			
					      								      			
					      		</div>
					      		<div class="row">
					      			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					      				Designer : <input type="text" name="txtRam" id="inputtxtRam" value="{!! old('txtRam',isset($pro->pro_details->ram) ? $pro->pro_details->ram : null) !!}" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					      				Made in : <input type="text" name="txtVga" id="inputtxtVga" value="{!! old('txtVga',isset($pro->pro_details->vga) ? $pro->pro_details->vga : null) !!}" class="form-control">
					      			</div>
					      		</div>
					      		<div class="row">					      			
					      			<div class="col-xs-12 col-sm-3 col-md-4 col-lg-4">
					      				Sale off : <input type="text" name="txtStorage" id="inputtxtStorage" value="{!! old('txtStorage',isset($pro->pro_details->storage) ? $pro->pro_details->storage : null) !!}" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					      				Introduction : <input type="text" name="txtCam1" id="inputtxtCam1" value="{!! old('txtCam1',isset($pro->pro_details->cam1) ? $pro->pro_details->cam1 : null) !!}" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					      				Review : <input type="text" name="txtCam2" id="inputtxtCam2" value="{!! old('txtCam2',isset($pro->pro_details->cam2) ? $pro->pro_details->cam2 : null) !!}"" class="form-control" >
					      			</div>
					      		</div>
					      		<div class="row">
					      			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					      				Amount Available : <input type="text" name="txtConnect" id="inputtxtConnect" value="{!! old('txtConnect',isset($pro->pro_details->connect) ? $pro->pro_details->connect : null) !!}" class="form-control">
					      			</div>
					      			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" style="padding-left: 0;">
					      				Events : <input type="text" name="txtExtend" id="inputtxtExtend" value="{!! old('txtExtend',isset($pro->pro_details->exten_memmory) ? $pro->pro_details->exten_memmory : null) !!}" class="form-control">
					      			</div>
					      			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					      				Other Options : <input type="text" name="txtOs" id="inputtxtOs" value="{!! old('txtOs',isset($pro->pro_details->os) ? $pro->pro_details->os : null) !!}" class="form-control" >
					      			</div>
					      		</div>				      			
				      		</div>
				      	@endif
				      		<div class="form-group">
				      			<label for="input-id">Detail Images</label>
				      			<?php $stt=0; ?>
				      			<div class="row">
					      			@foreach($pro->detail_img as $row)
					      				<?php $stt++; ?>
					      				<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">						 
						      				Old: {!!$stt!!}<img src="{!!url('uploads/products/details/'.$row->images_url)!!}" alt="{!!$row->images_url!!}" width="80" height="60">
						      			</div>
					      			@endforeach
					      		</div>
					      		<div class="row">
					      			@for( $i=1; $i<=12; $i++)
					      			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					      				 New:  {!!$i!!} : <input type="file" name="txtdetail_img[]" value="{{ old('txtdetail_img[]') }}" accept="image" id="inputtxtdetail_img" class="form-control">
					      			</div>
					      			@endfor
					      		</div>				      			
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">Intro</label>
				      			<div class="row">					      			
					      			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					      				<label for="input-id">Summary</label>
					      				<textarea name="txtre_Intro" id="inputTxtre_Intro" class="form-control"  rows="2">{!! old('txtReview',isset($pro->r_intro) ? $pro->r_intro : null) !!}</textarea>
					      				<script type="text/javascript">
											var editor = CKEDITOR.replace('txtre_Intro',{
												language:'vi',
												filebrowserImageBrowseUrl : '../../../../plugin/ckfinder/ckfinder.html?Type=Images',
												filebrowserFlashBrowseUrl : '../../../../plugin/ckfinder/ckfinder.html?Type=Flash',
												filebrowserImageUploadUrl : '../../../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
												filebrowserFlashUploadUrl : '../../../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
											});
										</script>
					      			</div>
					      			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					      				<label for="input-id">Detail</label>
					      				<textarea name="txtReview" id="inputtxtReview" class="form-control" rows="4" ">{!! old('txtReview',isset($pro->review) ? $pro->review : null) !!}</textarea>
					      				<script type="text/javascript">
											var editor = CKEDITOR.replace('txtReview',{
												language:'vi',
												filebrowserImageBrowseUrl : '../../../../plugin/ckfinder/ckfinder.html?Type=Images',
												filebrowserFlashBrowseUrl : '../../../../plugin/ckfinder/ckfinder.html?Type=Flash',
												filebrowserImageUploadUrl : '../../../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
												filebrowserFlashUploadUrl : '../../../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
											});
										</script>
					      			</div>
					      		</div>				      			
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