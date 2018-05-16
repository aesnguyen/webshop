@extends('layouts.master')
@section('content')
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">   
        <!-- danh muc dien thoai -->
        @foreach($sneaker as $row)        
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding" >
            <div class="thumbnail mobile" style="background-color:rgba(255,255,255,0.1); border:none; color:#BFBFBF; height:870px;position:relative">              
              <div class="bt">
                <div class="image-m pull-left">
                  <img class="img-responsive" src="{{ asset('public/uploads/products/'.$row->images) }}" alt="img responsive" style="width=100%" >
                </div>
                <div class="intro pull-right" style="width:100%; padding-left:10px;padding-right:10px;font-size:20px;">
                  <h1><small class="title-mobile" style="color:#BFBFBF">{!!$row->name!!}</small></h1>
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
                <a href="{!!url('sneaker/'.$row->id.'-'.$row->slug)!!}" title="More Information" style="color:#BFBFBF; text-decoration: none; float: left; margin-top:20px">
                  <span class="label label-info" style="margin-top:10px; background-color:transparent; border-width:0.1px; border:solid;color:#BFBFBF">Quality</span>   
                    <li style="font-size:18px;padding-bottom:5px"><span class="glyphicon glyphicon-ok-sign" style="padding-top:10px;margin-right:5px;color:#BFBFBF; font-weight:bold;"></span>Original</li> 
                  <span class="label label-warning" style=" border-width:1px; border:solid;background-color:transparent;color:#BFBFBF;">More Information</span> 
                </a>
              </div>
                <span class="btn label-warning" style="position: absolute; bottom: 30px; left:30px; border-width:0.1px; border:solid;background-color:#7D7D7D; color:#000;border-color:#404040 "><strong>{!!number_format($row->price)!!}</strong> VND </span>
                <a href="{!!url('gio-hang/addcart/'.$row->id)!!}" class="btn btn-success pull-right add" style="position: absolute;background-color:#7D7D7D;color:#000; bottom: 30px; right:30px; border-width:0.1px; border:solid; border-color:#404040; font-weight:bold">Add to Cart</a>
            </div> <!-- / div thumbnail -->
          </div>  <!-- /div col-4 -->
          @endforeach
       
          <div class="clearfix">            
          </div>
          <div id="laptop"></div>
          @foreach($clothes as $row)
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding" >
            <div class="thumbnail" style="background-color:rgba(255,255,255,0.1); border:none; color:#BFBFBF; height:950px;">          
              <div class="hienthi">
                <img class="img-responsive" src="{!!url('uploads/products/'.$row->images)!!}" alt="{!!$row->name!!}" style="height:1; margin-top:-3px; margin-right:-20px;width=100%">
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
					<span class="label label-warning" style=" border-width:1px; border:solid;background-color:transparent;color:#BFBFBF;">More Information</span> 
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
          <!-- <a href="http://api.hostinger.vn/redir/1309904" target="_blank"> 
            <img src="{{ asset('images/slides/thumbs/qc1.png') }}" alt="Hosting Miễn Phí" border="0" width="100%" height="250" />
          </a> -->
        <div id="pc"></div>
        @foreach($item as $row)
           <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 no-padding">
            <div class="thumbnail pc" style="background-color:rgba(255,255,255,0.1); border-color:#000; color:#BFBFBF;height:760px">              
              <div class="bt">
                <div class="image-m pull-left">
                  <img class="img-responsive" src="{!!url('uploads/products/'.$row->images)!!}" alt="{!!$row->name!!}" style="width=100%">
                </div>
                <div class="intro pull-right" style="color:#BFBFBF; font-size:20px; width:100%; padding-left:10px; padding-right:10px">
                  <h1><small class="title-pc" style="color:#BFBFBF">{!!$row->name!!}</small></h1>
				  <li>{!!$row->intro!!}</li>
                </div><!-- /div introl -->
              </div> <!-- /div bt -->
              <div class="ct" style="padding-left:10px;padding-right:10px; font-size:20px; ">
					<div style="float:left;width:50%;margin-top:20px; font-size:20px">
					<span class="label label-info" style="background-color:transparent; border-width:0.1px; border:solid; color:#BFBFBF;">Size</span>   
						<li style="font-size:18px"><span class="glyphicon glyphicon-ok-sign" style="padding-top:10px;margin-right: 5px;"></span>{!!$row->promo1!!}</li>
						<li style="font-size:18px"><span class="glyphicon glyphicon-ok-sign" style="padding-top:10px;margin-right: 5px;"></span>{!!$row->promo2!!}</li>
						<li style="font-size:18px"><span class="glyphicon glyphicon-ok-sign" style="padding-top:10px;margin-right: 5px;"></span>{!!$row->promo3!!}</li>
					</div>
                    
                <a href="{!!url('item/'.$row->id.'-'.$row->slug)!!} title="More information" style="color:#BFBFBF; text-decoration: none; float: left;margin-top:20px">                   
                  <span class="label label-info" style="margin-top:10px; background-color:transparent; border-width:0.1px; border:solid;color:#BFBFBF">Quality</span>
					<li style="font-size:18px"><span class="glyphicon glyphicon-ok-sign" style="padding-top:10px;margin-right:5px;color:#BFBFBF; font-weight:bold"></span>Original</li> 				  
					<span class="label label-warning" style=" border-width:1px; border:solid;background-color:transparent;color:#BFBFBF;">More Information</span> 
				</a>
              </div>
                <span class="btn label-warning" style="position: absolute; bottom: 30px; left:30px; border-width:0.1px; border:solid;background-color:#7D7D7D; color:#000;border-color:#404040 "><strong>{!!number_format($row->price) !!}</strong> VND </span>
                <a href="{!!url('gio-hang/addcart/'.$row->id)!!}" class="btn btn-success pull-right add" style="position: absolute;background-color:#7D7D7D;color:#000; bottom: 30px; right:30px; border-width:0.1px; border:solid; border-color:#404040; font-weight:bold">Add to Cart</a>
            </div> <!-- / div thumbnail -->
          </div>  <!-- /div col-4 item products -->
        @endforeach

        </div> <!-- /col 12 -->     
@endsection
