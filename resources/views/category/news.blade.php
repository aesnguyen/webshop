@extends('layouts.new-master')
@section('content')
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <h3 class="panel-title">
      <span class="glyphicon glyphicon-home" style="color:#FFF;font-size: 18px;"> <a href="{!!url('')!!}" title="" style="color:#FFF;"> Home</a></span> 
      <span class="glyphicon glyphicon-chevron-right" style="font-size: 18px; color:#FFF; margin-left:5px"><a href="{!!url('tin-tuc')!!}" title="" style="color:#FFF;"> Articles</a></span>
      <!--   <span class="glyphicon glyphicon-chevron-right" style="font-size: 11px;"></span> <a href="#" title=""> noi dung con</a> -->
    </h3>              
    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 no-padding"> 
        <div class="fluid_container" style="height: 400px; margin-top:20px">            
          <div class="camera_violet_skin" id="camera_wrap_1">
            <div class="img-responsive" >
             
            </div>
				<div class="fotorama" data-nav="thumbs">
				  <a href="public/images/slides/thumbs/qc1.png"><img src="public/images/slides/thumbs/qc1.png" width="728" height="230"></a>
				  <a href="public/images/slides/thumbs/qc2.png"><img src="public/images/slides/thumbs/qc2.png" width="240" height="150"></a>
				  <a href="public/images/slides/thumbs/qc3.png"><img src="public/images/slides/thumbs/qc3.png" width="240" height="150"></a>
				  <a href="public/images/slides/thumbs/qc4.png"><img src="public/images/slides/thumbs/qc4.png" width="240" height="150"></a>
				</div>
            
          </div><!-- #camera_wrap_1 -->       
        </div><!-- .fluid_container -->             
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="panel panel-success" style="background-color:rgba(255,255,255,0.1); color:#BFBFBF;  border-color:rgba(255,255,255,0.1);">
            <div class="panel-body">
              <div class="row">
              <!-- hot new content -->              
                <div class="col-lg-6">
                  <img src="{!!url('uploads/news/'.$hot1->images)!!}" alt="" height="200" width="100%">
                  <h3 class="title-h3"><a href="{!!url('tin-tuc/'.$hot1->id.'-'.$hot1->slug)!!}" title="" style="color:#FFF; text-decoration: none">{!!$hot1->title!!} </a></h3>
                  <p class="summary-content">
                    {!!$hot1->intro!!}
                  </p>
                </div>
                <div class="col-lg-6 no-padding">
                  <div class="row">
                    @foreach($data as $row)
                      <div class="col-lg-12 ">
                        <h4><a href="{!!url('/tin-tuc/'.$row->id.'-'.$row->slug)!!}" title="{!!$row->title!!}" style="color:#FFF;text-decoration: none">{!!$row->title!!}</a></h4>
                        <div class="col-lg-7">
                          <p class="sum">{!!$row->intro!!}</p>
                        </div>
                        <div class="col-lg-5 no-padding">
                          <a href="{!!url('/tin-tuc/'.$row->id.'-'.$row->slug)!!}" title=""><img src="{!!url('uploads/news/'.$row->images)!!}" alt="" width="120" height="80" style="padding-right:10px; padding-left: 0;"></a>
                        </div>
                      </div>
                    @endforeach                   
                  </div>                                     
                </div>
              </div>

              <div class="row">
                @foreach($all as $row)
                  <div class="col-lg-12 no-padding">
                    <hr>
                    <div class="col-lg-3">
                      <a href="{!!url('/tin-tuc/'.$row->id.'-'.$row->slug)!!}" title="{!!$row->slug!!}"><img src="{!!url('/uploads/news/'.$row->images)!!}" alt="" width="90%" height="99%"> </a>
                    </div>
                    <div class="col-lg-9">
                      <h4><a href="{!!url('/tin-tuc/'.$row->id.'-'.$row->slug)!!}" title="" style="color:#FFF; text-decoration: none">{!!$row->title!!}</a></h4>
                      <p> 
                        {!!$row->intro!!}
                      </p>
                      <p><strong></strong> {!!$row->created_at!!}  <strong>By : </strong> <a href="#" title="admin" style="color:#FFF;text-decoration: none"> {!!$row->author!!}</a></p>
                    </div>
                  </div> 
                @endforeach 
              </div><!-- /row -->
              {!!$all->render()!!}
            </div>
          </div>   
        </div>
      </div>     
    </div> 
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding">            
      <!-- panel inffo 1 -->
      <div class="panel panel-info" style="background-color:rgba(255,255,255,0.1); border-color:rgba(255,255,255,0.1)">
        <ul class="nav nav-tabs"  >
          <li class="active" style="background-color:rgba(255,255,255,0.1); border-color:rgba(255,255,255,0.1)"><a href="#1" data-toggle="tab" style="background-color:rgba(255,255,255,0.1); border-color:rgba(255,255,255,0.1); color:#FFF">New Articles </a></li>
        </ul>    
        <div class="panel-body"> 
          <div class="tab-content ">
            <div class="tab-pane active" id="1" >
              <ul class="li-menu-tab">
                <div class="row">
                @foreach($all as $row)
                  <div class="col-lg-12 no-padding" > 
                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 no-padding">
                      <a href="{!!url('/tin-tuc/'.$row->id.'-'.$row->slug)!!}" title="{!!$row->title!!}" style="background-color:#FFF"><img src="{!!url('uploads/news/'.$row->images)!!}" alt="{!!$row->images!!}" width="110" height="80" style="margin-left:-20px"> </a>
                    </div>
                    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 no-padding" style="margin-left:-10px">
                     <a href="{!!url('/tin-tuc/'.$row->id.'-'.$row->slug)!!}" title="" style="color:#FFF; text-decoration: none; font-size:13px;">{!!$row->title!!}</a>
                    </div>
                  </div>
                @endforeach                  
                        
                </div>
              </ul>
            </div>
          </div> <!-- /tab content -->
        </div>  <!-- /panel boody -->
    </div>
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
    </div>  <!-- /panel info 2  quản cáo 1          -->        
  
     <!-- fan pages myweb -->
    <div class="panel panel-info"  style="background-color:transparent; color:#BFBFBF; border-color:rgba(255,255,255,0.2)">
      <div class="panel-heading" style="background-color:transparent; color:#BFBFBF; border-color:#transparent">
        <h3 class="panel-title">Fans Pages</h3>
      </div>
      <div class="panel-body">
        Like <a href="https://www.facebook.com/pnl.archenemy" title=""> PrimeGallery </a> to update information
      </div>
    </div>    
  </div> 
</div>
<!-- ===================================================================================/news ============================== -->
@endsection