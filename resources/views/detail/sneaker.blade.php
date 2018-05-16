@extends('layouts.new-master')
@section('content')
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <h3 class="panel-title">
      <span class="glyphicon glyphicon-home" style="color:#FFF;font-size: 18px;"><a href="{!!url('/')!!}" title="" style="color:#FFF; text-decoration: none; "> Home</a></span> 
      <span class="glyphicon glyphicon-chevron-right" style="font-size: 18px; color:#FFF; margin-left:5px; margin-right:5px"></span><a href="{!!url('/sneaker')!!}" title="" style="color:#FFF;text-decoration: none; ">Sneaker</a>
      <span class="glyphicon glyphicon-chevron-right" style="font-size: 18px; color:#FFF; margin-left:5px; margin-right:5px"></span> <a href="#" title="" style="color:#FFF;text-decor;text-decoration: none; ">{!!$slug!!}</a>
    </h3>              
    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 no-padding">              
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " style="margin-top:20px; ">
          <div class="panel panel-success" style="background-color:rgba(255,255,255,0.1); color:#BFBFBF;  border-color:rgba(255,255,255,0.1)">
            <div class="panel-body">
              <div class="row">
              <!-- hot new content -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding" >
                  <h3 class="pro-detail-title"><a href="{!!url('/sneaker/'.$data->id.'-'.$data->slug)!!}" title="" style="color:#BFBFBF;text-decoration: none;">{!!$data->name!!}</a></h3>
                  <hr>
                  <div class="row">
                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
                      <div class="img-box">
                        <img class="img-responsive img-mobile" src="{!!url('uploads/products/'.$data->images)!!}" alt="img responsive">
                      </div>
                      <div class="img-slide">
                        <div class="panel panel-default text-center">        
                          <div id="links">
                            @foreach($data->detail_img as $row)
                              <a href="{!!url('uploads/products/details/'.$row->images_url)!!}" title="{!!$data->name!!}" data-gallery>
                                  <img src="{!!url('uploads/products/details/'.$row->images_url)!!}" alt="{!!$data->name!!}" width="30" height="40" style="color:#000" >
                              </a>
                            @endforeach                              
                          </div>
                            <!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
                            <div id="blueimp-gallery" class="blueimp-gallery">
                                <!-- The container for the modal slides -->
                                <div class="slides"></div>
                                <!-- Controls for the borderless lightbox -->
                                <h3 class="title"></h3>
                                <a class="prev">‹</a>
                                <a class="next">›</a>
                                <a class="close">×</a>
                                <a class="play-pause"></a>
                                <ol class="indicator"></ol>
                                <!-- The modal dialog, which will be used to wrap the lightbox content -->
                                <div class="modal fade">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title"></h4>
                                            </div>
                                            <div class="modal-body next"></div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default pull-left prev">
                                                    <i class="glyphicon glyphicon-chevron-left"></i>
                                                    Previous
                                                </button>
                                                <button type="button" class="btn btn-primary next">
                                                    Next
                                                    <i class="glyphicon glyphicon-chevron-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                          </div>                       
                        </div>                     
                      <label class="btn btn-large btn-block btn-warning" style="background-color:#7D7D7D;border-color:rgba(255,255,255,0.1);color:#000">{!!number_format($data->price)!!} VND</label>
                    </div>
                    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7" >
                      <div class="panel panel-info" style="background-color:transparent; margin:0px; color:#BFBFBF; border-color:rgba(255,255,255,0.1)">
                        <div class="panel-heading" style="background-color:transparent; padding: 5px; color:#BFBFBF; border-color:rgba(255,255,255,0.1)">
                          <h3 class="panel-title" style="color:#FFF">Size</h3>
                        </div>
                        <div class="panel-body">
                          <div class="khuyenmai" style="font-size: 19px">
                              <li><span class="glyphicon glyphicon-ok-sign" style="margin-top:10px; margin-right:5px"></span>{!!$data->promo1!!}</li>
                              <li><span class="glyphicon glyphicon-ok-sign" style="margin-top:10px; margin-right:5px"></span>{!!$data->promo2!!}</li>
                              <li><span class="glyphicon glyphicon-ok-sign" style="margin-top:10px; margin-right:5px"></span>{!!$data->promo3!!}</li>                                                       
                          </div>                         
                        </div>
                      </div>
                      <div class="panel panel-info" style="background-color:transparent; margin:0px; color:#BFBFBF; border-color:rgba(255,255,255,0.1);font-size:18px">
                        <div class="panel-body" >
                         <div class="chinhsach">
							<li><span class="glyphicon glyphicon-hand-right"></span> Original </li>
                            <li><span class="glyphicon glyphicon-hand-right"></span> In: {!!$data->packet!!} </li>
                         </div>
                        </div>
                      </div>
                      @if($data->status ==1)
                        <a href="{!!url('gio-hang/addcart/'.$data->id)!!}" title="" class="btn btn-large btn-block btn-primary" style="font-size: 20px;background-color:#FFF;color:#000">BUY NOW</a>
                      @else
                        <a href="" title="" class="btn btn-large btn-block btn-primary disabled" style="font-size: 20px;background-color:#FFF;color:#000">NOT AVAILABLE</a>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th colspan="2">DISTRIBUTED</th><tbody>
                        <tr>
                          <td>ADDRESS</td>
                          <td>The PrimeGallery - 21E Vinh Tuy, Hai Ba Trung, Ha Noi</td>
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <div class="table-responsive" > 
                    <div class="panel panel-default" style="background-color:transparent; color:#BFBFBF">        
                      <div class="panel-heading" style="background-color:transparent; color:#BFBFBF"> 
                        <small>Click to see full images</small>
                      </div>
                      <div id="links">
                        @foreach($data->detail_img as $row)
                          <a href="{!!url('uploads/products/details/'.$row->images_url)!!}" title="{!!$data->name!!}" data-gallery>
                              <img src="{!!url('uploads/products/details/'.$row->images_url)!!}" alt="{!!$data->name!!}"   height="120" style="color:#BFBFBF">
                          </a>
                        @endforeach                          
                      </div>
                        <!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
                        <div id="blueimp-gallery" class="blueimp-gallery">
                            <!-- The container for the modal slides -->
                            <div class="slides"></div>
                            <!-- Controls for the borderless lightbox -->
                            <h3 class="title"></h3>
                            <a class="prev">‹</a>
                            <a class="next">›</a>
                            <a class="close">×</a>
                            <a class="play-pause"></a>
                            <ol class="indicator"></ol>
                            <!-- The modal dialog, which will be used to wrap the lightbox content -->
                            <div class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title"></h4>
                                        </div>
                                        <div class="modal-body next"></div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default pull-left prev">
                                                <i class="glyphicon glyphicon-chevron-left"></i>
                                                Previous
                                            </button>
                                            <button type="button" class="btn btn-primary next">
                                                Next
                                                <i class="glyphicon glyphicon-chevron-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                      </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                  <h2> <small style="color:#FFF">INFORMATION</small></h2>
                  <div class="accordion-group">
                    <div class="accordion-heading">
                      <p class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                        {!!$data->r_intro!!}
                      </p>
                    </div>
                    <div id="collapseTwo" class="accordion-body collapse">
                      <div class="accordion-inner">                        
                          {!!$data->review!!}
                      </div>
                    </div>
                    <button class="SeeMore btn-primary" data-toggle="collapse" href="#collapseTwo" style="background-color:#7D7D7D;border-color:transparent;color:#000"><b class="caret"></b>More Information</button>
                  </div>
                </div>
              </div>
              <div class="row">
                <hr>
                <h2 style="padding-left: 20px; "><small style="color:#FFF">Articles</small></h2>
                <hr>
                @include('modules.tin-tuc')  
              </div><!-- /row -->

            </div>
          </div>   
        </div>
      </div>     
    </div> 
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding">            
      <!-- panel inffo 1 -->
      <div class="panel panel-info" style="background-color:rgba(255,255,255,0.1); border-color:rgba(255,255,255,0.1)">
        <div class="panel-heading" style="background-color:rgba(255,255,255,0.1);border-color:rgba(255,255,255,0.1);color:#BFBFBF;">
          <h3 class="panel-title text-center"  >NEWEST ARRIVALS</h3>
        </div>
        <div class="panel-body no-padding" >
        <?php 
          $sneaker = DB::table('products')
                ->join('category', 'products.cat_id', '=', 'category.id')
                ->join('pro_details', 'pro_details.pro_id', '=', 'products.id')
                ->where('category.parent_id','=','1')
                ->select('products.*','pro_details.cpu','pro_details.ram','pro_details.screen','pro_details.vga','pro_details.storage','pro_details.exten_memmory','pro_details.cam1','pro_details.cam2','pro_details.sim','pro_details.connect','pro_details.pin','pro_details.os','pro_details.note')
                ->orderBy('products.created_at', 'desc')
                ->paginate(2); 

        ?>
        @foreach($sneaker as $row)
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding" >
            <div class="thumbnail mobile" style="background-color:transparent; border-color:transparent; color:#BFBFBF; height:750px;">              
              <div class="bt">
                <div class="image-m pull-left">
                  <img class="img-responsive" src="{!!url('uploads/products/'.$row->images)!!}" alt="{!!$row->name!!}">
                </div>
                <div class="intro pull-right"style="width:100%;padding-right:5px;font-size:15px;">
                  <h1><small class="title-mobile">{!!$row->name!!}</small></h1>
                  <li>{!!$row->intro!!}</li>
				  
                </div><!-- /div introl -->
              </div> <!-- /div bt -->
               <div class="ct" style="padding-left:5px;padding-right:5px; font-size:18px">
				<div style="float:left;width:40%;margin-top:20px; font-size:18px">
					<span class="label label-info" style="background-color:transparent; border-width:0.1px; border:solid; color:#BFBFBF">Size</span>   
					<div>
                    <li style="font-size:15px"><span class="glyphicon glyphicon-ok-sign" style="padding-top:10px;margin-right: 5px;"></span>{!!$row->promo1!!}</li>
                    <li style="font-size:15px"><span class="glyphicon glyphicon-ok-sign" style="padding-top:10px;margin-right:5px"></span>{!!$row->promo2!!}</li>
                    <li style="font-size:15px"><span class="glyphicon glyphicon-ok-sign" style="padding-top:10px;margin-right:5px"></span>{!!$row->promo3!!}</li>
					</div>
				  </div>
                <a href="{!!url('sneaker/'.$row->id.'-'.$row->slug)!!}" title="More Information" style="color:#BFBFBF; text-decoration: none; float: left;margin-top:20px">
                  <span class="label label-info" style="margin-top:10px; background-color:transparent; border-width:0.1px; border:solid;color:#BFBFBF">Quality</span>   
                    <li style="font-size:15px;padding-bottom:5px"><span class="glyphicon glyphicon-ok-sign" style="padding-top:10px;margin-right:5px;color:#BFBFBF; font-weight:bold"></span>riginal</li> 
                  <span class="label label-warning" style=" border-width:1px; border:solid;background-color:transparent;color:#BFBFBF">More Information</span> 
                </a>
              </div>
                <span class="btn label-warning" style="position: absolute; bottom: 30px; left:30px; border-width:0.1px; border:solid;background-color:#7D7D7D; color:#000;border-color:#404040 "><strong>{!!number_format($row->price)!!}</strong>VND</span>
                <a href="{!!url('gio-hang/addcart/'.$row->id)!!}" class="btn btn-success pull-right add" style="position: absolute;background-color:#7D7D7D;color:#000; bottom: 30px; right:30px; border-width:0.1px; border:solid; border-color:#404040; font-weight:bold">Add to Cart </a>
            </div> <!-- / div thumbnail -->
          </div>  <!-- /div col-4 -->
        @endforeach        

        </div>
      </div> <!-- /panel info 2  quản cáo 1          -->
      
    <!-- panel info 2  quản cáo 1          -->          
    <div class="panel panel-info" style="background-color:transparent; color:#BFBFBF; border-color:rgba(255,255,255,0.2)">
      <div class="panel-heading" style="background-color:transparent; color:#BFBFBF; border-color:#transparent">
        <h3 class="panel-title text-center">HOT EVENTS</h3>
      </div>
      <div class="panel-body no-padding">
       <a href="#" title=""><img src="{!!url('images/slides/thumbs/qc1.png')!!}" alt="" width="100%" height="100%"> </a> <br>
        <a href="#" title=""><img src="{!!url('images/slides/thumbs/qc2.png')!!}" alt="" width="100%" height="100%"> </a> <br>
        <a href="#" title=""><img src="{!!url('images/slides/thumbs/qc3.png')!!}" alt="" width="100%" height="100%"> </a>
        <a href="#" title=""><img src="{!!url('images/slides/thumbs/qc4.png')!!}" alt="" width="100%" height="100%"> </a>
        <a href="#" title=""><img src="{!!url('images/slides/thumbs/qc5.png')!!}" alt="" width="100%" height="100%"> </a>
      </div>
    </div> <!-- /panel info 2  quản cáo 1          -->        
    <div class="panel panel-info"  style="background-color:transparent; color:#BFBFBF; border-color:rgba(255,255,255,0.2)">
      <div class="panel-heading" style="background-color:transparent; color:#BFBFBF; border-color:#transparent">
        <h3 class="panel-title">INFO</h3>
      </div>
      <div class="panel-body">
        <p>Articles: 172</p>
        <p>Members : 26</p>
        <p>Online Members: 8</p>
        <p>Guest : 435</p>
      </div>
    </div>
     <!-- /panel info 2  quản cáo 1          -->  
     <!-- fan pages myweb -->
    <div class="panel panel-info"  style="background-color:transparent; color:#BFBFBF; border-color:rgba(255,255,255,0.2)">
      <div class="panel-heading" style="background-color:transparent; color:#BFBFBF; border-color:#transparent">
        <h3 class="panel-title">Fans Pages</h3>
      </div>
      <div class="panel-body">
        Like <a href="https://www.facebook.com/pnl.archenemy" title=""> PrimeGallery </a> to update information
      </div>
    </div> <!-- /fan pages myweb -->        
  </div> 
</div>
<!-- ===================================================================================/news ============================== -->
@endsection