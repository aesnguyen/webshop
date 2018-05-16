@extends('layouts.new-master')
@section('content')
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">     
          <div id="laptop"></div>
        @foreach($data as $row)
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding" >
            <div class="thumbnail" style="background-color:rgba(255,255,255,0.1); border:none; color:#BFBFBF; height:1000px">          
              <div class="hienthi">
                <img class="img-responsive" src="{!!url('uploads/products/'.$row->images)!!}" alt="{!!$row->name!!}" style="margin-top:-3px; margin-right:-20px; width:100%">
                <div class="caption" style="color:#BFBFBF;">
                  <h1><small><strong class="title-pro" style="color:#BFBFBF">{!!$row->name!!}</strong></small></h1>
                  <p>    
                      <li style="font-size:20px; padding-bottom:10px">{!!$row->intro!!}</li>     
                  </p>
                </div>
              </div>
              <div class="tomtat">
                <div class="thongtin" style="font-size:20px; padding-left:10px; padding-right:10px">
					  <div style="float: left; width:40%">
					  <span class="label label-info " style="background-color:transparent; border-width:0.1px; border:solid;color:#BFBFBF">Size</span>
                        <li style="margin-top:10px"><span class="glyphicon glyphicon-ok-sign" style="margin-right: 5px"></span>{!!$row->promo1!!}</li>
                        <li><span class="glyphicon glyphicon-ok-sign"style="margin-right: 5px"></span>{!!$row->promo2!!}</li>
                        <li><span class="glyphicon glyphicon-ok-sign" style="margin-right: 5px"></span>{!!$row->promo3!!}</li>
                       </div>						
                  <a href="{!!url('clothes/'.$row->id.'-'.$row->slug)!!}" title="" style="color:#BFBFBF; text-decoration: none;">
                  <span class="label label-info "  style="background-color:transparent; border-width:0.1px; border:solid; color:#BFBFBF">Quality</span>   
                    <li style="margin-top:10px"><span class="glyphicon glyphicon-ok-sign" style="margin-right:5px"></span>Original</li>
					<span class="label label-warning" style=" border-width:1px; border:solid;background-color:transparent;color:#BFBFBF">More Information</span> 
                  </a>
                </div>                
                  <div class="price" style="position: absolute; bottom: 40px;width:90%; ">  
                    <span class="btn btn-info btn-block " style="background-color:#7D7D7D; border:solid;border-color:#404040; color:#000" ><strong>{!!number_format($row->price)!!}</strong> VND</span>   
                    <a href="{!!url('gio-hang/addcart/'.$row->id)!!}" class="btn btn-success btn-block" style="background-color:#7D7D7D; border:solid;border-color:#404040; color:#000;font-weight:bold;">Add to Cart</a>                  
                     
				  </div>                  
              </div> 
            </div>
          </div>
        @endforeach
        <div class="clearfix">
          
        </div>
          <!--==================================================/products ============================== -->
        {!!$data->render()!!}
@endsection