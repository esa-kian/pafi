<html>
<head>
	<title>پایگاه اطلاعات فیلم ایرانی</title>
    @yield('css')
</head>
<body>
    <div>
        @yield('menu')
	</div>
	<div class="main">
        <div class="content container">
            @yield('title')
            <div class="clearfix visible-md-block">
           
            </div>
            <div class="footer col-md">
                @yield('footer')
            </div>
        </div>
    </div>
</body>
        @yield('js')
</html>