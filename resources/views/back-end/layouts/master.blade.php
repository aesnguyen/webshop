@include('back-end.layouts.header')
<body style="width:100%;height:100%;background-color:#000">
@include('back-end.modules.top-nav')
@include('back-end.modules.left-nav')
	@yield('content')
@include('back-end.layouts.footer')