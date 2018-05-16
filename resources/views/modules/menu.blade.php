 <!-- main menu  navbar -->
    <nav class="navbar navbar-default navbar-top" role="navigation" id="main-Nav" style="background-color: #000000;margin-left:-2px;font-size: 20px; color:#FFFFFF">
      <div class="container">  
        <div class="row">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
             <span  class="visible-xs pull-left" style="font-size:30px;cursor:pointer; padding-left: 10px; color: #ecf0f1;" onclick="openNav()">&#9776; </span> 
             <span  class="visible-xs pull-right" style="font-size:20px;cursor:pointer; padding-right: 10px; padding-top: 8px; color: #FFFFFF;" >      
              <!-- Authentication Links -->
                @if (Auth::guest())
                    <a class="top-a" href="{{ url('/') }}" > Home </a>  &nbsp;
                    <a href="#" data-toggle="modal" data-target="#login-modal" style="color:#e67e22;"> Login </a>
                    {{-- <a class="top-a" href="{{ url('/login') }}">Login</a> --}}
                @else  
                    <a class="top-a" href="{{ url('/user') }}" ><strong>{!!Auth::user()->name!!}</strong></a>
                    <a class="top-a" href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i><small>Logout</small></a>
                @endif 
                </span>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="main-mav-top" >
            <ul class="nav navbar-nav" >
              <li> <a href="{!!url('')!!}" title="" style="color: #FFFFFF; margin-left:-120px"><img class="img-responsive" src="{{ asset('uploads/logo/prime.png') }}" alt="img responsive"></a></li>
              <li>
                <a href="{!!url('sneaker')!!}" style="color: #FFFFFF; padding-top: 45px">Sneakers </a>                          
              </li>                                                  
              <li >
                <a href="{!!url('clothes')!!}"style="color: #FFFFFF; padding-top: 45px" > Clothes</a>                
              </li>    
			  <li>
                <a href="{!!url('item')!!}" style="color: #FFFFFF; padding-top: 45px"> Items </a>                
              </li>
              <li>
               <a href="{!!url('tin-tuc')!!}" style="color: #FFFFFF; padding-top: 45px"> Articles </a>                    
              </li>                                            
            </ul>
             <ul class="nav navbar-nav pull-right">
              {{-- <li><a href="{{ url('/admin/home') }}">Go to Admin Page</a></li> --}}
              <li class="dropdown" style="background-color:#000000">
                <a  class="dropdown-toggle" data-toggle="dropdown" style="color: #FFFFFF; background-color:#000000"> <span class="glyphicon glyphicon-shopping-cart" style="color: #FFFFFF; margin-top:30px;"><span class="badge" style="background-color:#FFFFFF; margin-left: 9px; margin-top:-7px; color: #000000">{!!Cart::count();!!}</span></span>  Your Cart <b class="caret"></b></a>
                <ul class="dropdown-menu" style="right:0; background-color:#000000;left: auto; min-width: 350px;">
                @if(Cart::count() !=0)
                  <div class="table-responsive" >
                     <table class="table table-hover"  >
                      <thead>
                      <tr>
                        <th>Image</th>
                        <th>Amount</th>
                        <th>Name <SPAN></SPAN></th>
                        <th>Price</th>
                      </tr>
                    </thead>
                       <tbody>                       
                      @foreach(Cart::content() as $row)
                         <tr style="background-color:#FFF; color:#000">
                           <td> {!!$row->images!!} <img class="card-img img-circle" src="{!!url('uploads/products/'.$row->options->img)!!}" alt="dell" width="300" height="400"></td>
                           <td>{!!$row->qty!!}</td>
                           <td>{!!$row->name!!}</td>                           
                           <td>{!!$row->price!!} VND</td>
                         </tr>                         
                        @endforeach                           
                       </tbody>                       
                     </table> 
                     <a href="{!!url('/gio-hang/')!!}" type="button" class="btn btn-success" style="border-width:0.2px; border:solid;background-color:#7D7D7D; color:#000;border-color:#404040; font-weight:bold"> Detail </a>
                     <a href="{!!url('/gio-hang/xoa')!!}" type="button" class="btn btn-danger pull-right" style=" background-color:#7D7D7D;color:#000; border-width:0.2px; border:solid; border-color:#404040; font-weight:bold"> Delete </a>
                  </div>
                  @else
                    <div class="table-responsive"  style="background-color:#000000; color:#FFFFFF">
                     <table class="table table-hover" >
                      <thead>
                      <tr>
                        <th>Image</th>
                        <th>Amount</th>
                        <th>Name <SPAN></SPAN></th>
                        <th>Price</th>
                      </tr>
                    </thead>
                       <tbody>                       
                        <td colspan="3" style="background-color:#000; color:#FFF">Empty</td>                        
                       </tbody>                       
                     </table> 
                  </div>
                  @endif
                </ul>
              </li> 
              <!-- Authentication Links -->
                @if (Auth::guest())
                    <li ><a href="#" data-toggle="modal" data-target="#login-modal" style="color: #FFFFFF; margin-top:32px; background-color:#000000; ">Login</a></li>
                @else
                    <li class="dropdown" style="background-color:#000; color:#FFF; margin-top:14px">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="background-color:#000000; color:#FFFFFF; margin-top:19px;">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu" style="background-color:#000">
                            <li ><a href="{{ url('/user') }}" style="color:#FFF">User Information</a></li>
                            <li><a href="{{ url('/logout') }}" style="color:#FFF"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
          </div><!-- /.navbar-collapse -->
        </div> <!-- /row -->
      </div><!-- /container -->
    </nav>    <!-- /main nav -->

  <!-- left slider bar nav -->
  <!-- <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times; Đóng</a>
    <a href="{!!url('mobile')!!}">Điện Thoại</a>
    <a href="{!!url('laptop')!!}">Laptop</a>
    <a href="{!!url('pc')!!}">Máy Tính</a>
    <a href="{!!url('tin-tuc')!!}">Tin Tức</a>
    <a href="{!!url('gio-hang')!!}"> <span class="glyphicon glyphicon-shopping-cart"><span class="badge">{!!Cart::count()!!}</span></span> Giỏ Hàng </a>     
  </div> -->
  <!-- /left slider bar nav -->

  {{-- loginform --}}
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none; background-color:#000;left:25%; top:25%; width:50%;height:50%">
      <div class="modal-dialog">
      <div class="loginmodal-container">
        <h1 style="color:#FFF">Login</h1><br>
        <form class="form-horizontal" role="form" method="POST" id="login-form" action="{{ url('/login') }}">
          {{ csrf_field() }}
          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <input id="email" type="email" class="form-control" name="email" placeholder="Enter Email" value="{{ old('email') }}">
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <input id="password" type="password" name="password" class="form-control" placeholder="Enter Password"> 
             @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif        
          </div>
          <div class="form-group">
            <div>
                <div class="checkbox">
                    <label style="color:#FFF">
                        <input type="checkbox" name="remember"> Remember
                    </label>
                </div>
            </div>
        </div>       
          <input type="submit" name="login" class="btn btn-primary"  style="background-color:#FFF;color:#000"value="Login">
        </form>      
        <div class="login-help">
          <a class="btn btn-link" href="{!!url('/register')!!}"> <strong style="color:#FFF;"> Register </strong> </a> - <a class="btn btn-link" href="{{ url('/password/reset') }}" style="color:#FFF; text-decoration: none;">Forget Your Password?</a>
        </div>
      </div>
    </div>
  </div>