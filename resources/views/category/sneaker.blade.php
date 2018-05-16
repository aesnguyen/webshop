@extends('layouts.new-master')
@section('content')
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background-color:#000; background-size:100%;">
 <!-- ====================================== /loc ket qua theo lua chon================================= -->
        <!-- ===================================danh muc dien thoai ==================================-->
        @foreach($data as $row)
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding" >
            <div class="thumbnail mobile" style="background-color:rgba(255,255,255,0.1); border:none; color:#BFBFBF; height:870px;">              
              <div class="bt">
                <div class="image-m pull-left" >
                  <img class="img-responsive" src="{{ asset('uploads/products/'.$row->images) }}" alt="{!!$row->name!!}" style="witdh:100%">
                </div>
                <div class="intro pull-right" style="width:100%; padding-left:10px;padding-right:10px;font-size:20px;">
                  <h1><small class="title-mobile" style="color:#BFBFBF;">{!!$row->name!!}</small></h1>
                  <li>{!!$row->intro!!}</li>
                </div><!-- /div introl -->
              </div> <!-- /div bt -->
              <div class="ct" style="padding-left:10px;padding-right:10px; font-size:20px">
				<div style="float:left;width:40%;margin-top:20px; font-size:20px">
					<span class="label label-info" style="background-color:transparent; border-width:0.1px; border:solid; color:#BFBFBF">Size</span>   
					<div>
                    <li style="font-size:18px"><span class="glyphicon glyphicon-ok-sign" style="padding-top:10px;margin-right: 5px;"></span>{!!$row->promo1!!}</li>
                    <li style="font-size:18px"><span class="glyphicon glyphicon-ok-sign" style="padding-top:10px;margin-right:5px"></span>{!!$row->promo2!!}</li>
                    <li style="font-size:18px"><span class="glyphicon glyphicon-ok-sign" style="padding-top:10px;margin-right:5px"></span>{!!$row->promo3!!}</li>
					</div>
				  </div>
                <a href="{!!url('sneaker/'.$row->id.'-'.$row->slug)!!}" title="More Information" style="color:#BFBFBF; text-decoration: none; float: left;margin-top:20px">
                  <span class="label label-info" style="margin-top:10px; background-color:transparent; border-width:0.1px; border:solid;color:#BFBFBF">Quality</span>   
                    <li style="font-size:18px;padding-bottom:5px"><span class="glyphicon glyphicon-ok-sign" style="padding-top:10px;margin-right:5px;color:#BFBFBF; font-weight:bold"></span>Original</li> 
                  <span class="label label-warning" style=" border-width:1px; border:solid;background-color:transparent;color:#BFBFBF">More Information</span> 
                </a>
              </div>
                <span class="btn label-warning" style="position: absolute; bottom: 30px; left:30px; border-width:0.1px; border:solid;background-color:#7D7D7D; color:#000;border-color:#404040 "><strong>{!!number_format($row->price)!!}</strong>VND</span>
                <a href="{!!url('gio-hang/addcart/'.$row->id)!!}" class="btn btn-success pull-right add" style="position: absolute;background-color:#7D7D7D;color:#000; bottom: 30px; right:30px; border-width:0.1px; border:solid; border-color:#404040; font-weight:bold">Add to Cart </a>
            </div> <!-- / div thumbnail -->
          </div>  <!-- /div col-4 -->
        @endforeach
      <div class="clearfix">
        
      </div>
      <!-- ===================================================================================/products ============================== -->
      {!!$data->render();!!}
@endsection