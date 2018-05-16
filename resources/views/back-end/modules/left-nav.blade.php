<!-- left menu - menu ben  trai	 -->
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar" style="color:#FFF; background-color: rgba(255,255,255,0.2)">
		<form role="search">
			<div class="form-group" >
				<input type="text" class="form-control" placeholder="Search ...">
			</div>
		</form>
		<ul class="nav menu" style="color:#FFF">
			<li class="active" ><a href="{!!url('admin/home/')!!}" style="background-color:transparent"><svg class="glyph stroked dashboard-dial" ><use xlink:href="#stroked-dashboard-dial"></use></svg>Home</a></li>
			<li id="danhmuc"><a href="{!!url('admin/danhmuc')!!}" style="color:#FFF;background-color:transparent"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg>Category</a></li>

			<li id="sanpham"><a href="{!!url('admin/sanpham/all')!!}" style="color:#FFF;background-color:transparent"><svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>Product</a></li>
			<li><a href="{!!url('admin/news')!!}" style="color:#FFF;background-color:transparent"><span class="glyphicon glyphicon-file"></span>Articles</a></li>

			{{-- <li><a href="{!!url('admin/nhaphang')!!}"style="color:#FFF;background-color:transparent"><svg class="glyph stroked download"><use xlink:href="#stroked-download"/></svg> Nhập hàng</a></li> --}}

			<li><a href="{!!url('admin/donhang')!!}"style="color:#FFF;background-color:transparent"><svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>Order</a></li>		
			<li role="presentation" class="divider"></li>
			
			<li><a href="{!!url('admin/khachhang')!!}"style="color:#FFF;background-color:transparent"><svg class="glyph stroked app-window"><use xlink:href="#stroked-line-graph"></use></svg>Customer</a></li>

			<li><a href="{!!url('admin/nhanvien')!!}"style="color:#FFF;background-color:transparent"><svg class="glyph stroked female user"><use xlink:href="#stroked-female-user"/></svg>Employee</a></li>	{{--<li><a href="#"style="color:#FFF;background-color:transparent"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg>Stock</a></li>--}}

				{{--<li><a href="#"style="color:#FFF;background-color:transparent"><svg class="glyph stroked table"><use xlink:href="#stroked-table"/></svg>History</a></li>--}}
		</ul>

	</div><!--/.sidebar-->
<!-- /left menu - menu ben  trai	 -->