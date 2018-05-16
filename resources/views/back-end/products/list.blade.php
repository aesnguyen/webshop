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
				<div class="panel panel-default" style="color:#FFF;background-color:transparent">
					<div class="panel-heading" style="color:#FFF;background-color:transparent">
						<div class="row" >
							<div class="col-md-10"><div class="form-group" >
								<label for="inputLoai" class="col-sm-3 control-label" ><strong> Products </strong></label>
								<div class="col-md-6">
									<select name="sltCate" id="inputLoai" class="form-control">
						      			<option value="0">- Brands --</option>
						      			<?php MenuMulti($cat,0,$str='---| ',$loai); ?>   		
						      		</select>
									<script>
									    document.getElementById("inputLoai").onchange = function() {
									        if (this.selectedIndex!==0) {
									            window.location.href = this.value;
									        }        
									    };
									</script>
								</div>
								<div class="col-md-3">
									<input type="search" name="txttk" id="inputTxttk" class="form-control" value="" placeholder="Search..." required="required" title="">
								</div>
							</div>
							</div>
							<div class="col-md-2">
									<a href="{!!url('admin/sanpham/'.$loai.'/add')!!}" title=""><button type="button" class="btn btn-primary pull-right" style="background-color:#FFF;color:#000">Add new Products</button></a>
							</div>
						</div> 
						
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
					<div class="panel-body" style="font-size: 12px;">
						<div class="table-responsive" >
							<table class="table table-hover" style="color:#FFF;background-color:transparent">
								<thead>
									<tr>										
										<th>ID</th>										
										<th>Image</th>
										<th>Name</th>
										<th>Code</th>
										<th>Brand</th>
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
											<td style="color:#FFF;background-color:transparent">{!!$row->category->name!!}</td>
											<td style="color:#FFF;background-color:transparent">{!!$row->price!!} VND</td>
											<td style="color:#FFF;background-color:transparent">
												@if($row->status ==1)
													<span style="color:#FFF;">Available</span>
												@else
													Not Available
												@endif
											</td>
											<td style="color:#FFF;background-color:transparent">
											    <a href="{!!url('admin/sanpham/item/edit/'.$row->id)!!}" title="Edit" style="color:#FFF;background-color:transparent"><span class="glyphicon glyphicon-edit">edit</span> </a>
											    <a href="{!!url('admin/sanpham/del/'.$row->id)!!}"  title="Remove" onclick="return xacnhan('Remove this item ?')" style="color:#FFF;background-color:transparent"><span class="glyphicon glyphicon-remove">remove</span> </a>
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