<!DOCTYPE html>
<html>
    <head>
    	<title>@yield('title')| پایگاه اطلاعات فیلم ایرانی</title>
    	<link rel="stylesheet" type="text/css" href="<?=Url('css/home.css')?>">
        <link rel="stylesheet" type="text/css" href="<?=Url('css/bootstrap.min.css')?>">
        <link rel="stylesheet" type="text/css" href="<?=Url('css/bootstrap-theme.min.css')?>">    
        @yield('css')
    </head>
    <body dir="rtl">
        <div style="padding-top: 30px;">
            <nav id="myNavbar" class="navbar navbar-fixed-top menu navbar-custom" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="sr-only"> Toggle navigation </span> 
                            <span class="icon-bar"> </span>
                            <span class="icon-bar"> </span> 
                            <span class="icon-bar"> </span>
                        </button> 
                        <img alt="پافی پایگاه اطلاعات فیلم ایرانی" title="logo pafi" height="50px" width="128px" src="<?=Url('logo.png') ?>"/>
                        <a class="navbar-brand" id="righter" href="<?= Url('/')?>" target="_blank"><strong>پافی</strong>&nbsp;<sub> (نسخه آلفا)  </sub></a>
                    </div>
                    
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="nav navbar-nav navbar-right nav-pills nav-stacked"> 
                            <li>
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                    <strong>
                                      فیلم ها 
                                       <span class="caret"></span>
                                    </strong>
                                </a>
                                <ul class="dropdown-menu" id="righter">
                                    <a href="<?=Url('Films/top100')?>"><li>صد فیلم برتر</li></a>
                                    <a href="<?=Url('Films/genre')?>"><li>براساس ژانر</li></a>                        
                                    <a href="<?=Url('Films/alpha')?>"><li>براساس الفبا</li></a>
                                </ul>            
                            </li>
                            <li>
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                    <strong>
                                       سریال ها
                                       <span class="caret"></span>
                                    </strong>
                                </a>
                                <ul class="dropdown-menu" id="righter">
                                    <a href="<?=Url('Seris/top100')?>"><li>صد سریال برتر</li></a>
                                    <a href="<?=Url('Seris/genre')?>"><li>براساس ژانر</li></a>                      
                                    <a href="<?=Url('Seris/alpha')?>"><li>براساس الفبا</li></a>
                                </ul>
                            </li>
                            <li>
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                    <strong>
                                       انیمیشن ها
                                       <span class="caret"></span>
                                    </strong>
                                </a>
                                <ul class="dropdown-menu" id="righter">
                                    <a href="<?=Url('Anims/top100')?>"><li>صد انیمیشن برتر</li></a>
                                    <a href="<?=Url('Anims/genre')?>"><li>براساس ژانر</li></a>                        
                                    <a href="<?=Url('Anims/alpha')?>"><li>براساس الفبا</li></a>
                                </ul>
                            </li>
                            <li>
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                    <strong>
                                        مستند ها
                                        <span class="caret"></span>
                                    </strong>
                                </a>
                                <ul class="dropdown-menu" id="righter">
                                    <a href="<?=Url('Docs/top100')?>"><li>صد مستند برتر</li></a>
                                    <a href="<?=Url('Docs/genre')?>"><li>براساس ژانر</li></a>                        
                                    <a href="<?=Url('Docs/alpha')?>"><li>براساس الفبا</li></a>
                                </ul>
                            </li>
                            <li>
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                    <strong>
                                        سینما ها
                                        <span class="caret"></span>
                                    </strong>
                                </a>
                                <ul class="dropdown-menu" id="righter">
                                    <a href="<?=Url('Cinemas/top100')?>"><li>صد سینمای برتر</li></a>
                                    <a href="<?=Url('Cinemas/city')?>"><li>براساس استان</li></a>                        
                                    <a href="<?=Url('Cinemas/alpha')?>"><li>براساس الفبا</li></a>
                                </ul>
                            </li>
                            <li>
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                    <strong>
                                        بازیگران
                                        <span class="caret"></span>
                                    </strong>
                                </a>
                                <ul class="dropdown-menu" id="righter">
                                    <a href="<?=Url('Arts/top100')?>"><li>صد بازیگر برتر</li></a>                    
                                    <a href="<?=Url('Arts/alpha')?>"><li>براساس الفبا</li></a>
                                </ul>
                            </li>
                            <li>
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                    <strong>
                                        کارگردانان
                                        <span class="caret"></span>
                                    </strong>
                                </a>
                                 <ul class="dropdown-menu" id="righter">
                                    <a href="<?=Url('Dirs/top100')?>"><li>صد کارگردان برتر</li></a>                    
                                    <a href="<?=Url('Dirs/alpha')?>"><li>براساس الفبا</li></a>
                                </ul>
                            </li>
                            <li>
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                    <strong>
                                        نویسندگان
                                        <span class="caret"></span>
                                    </strong>
                                </a>
                                <ul class="dropdown-menu" id="righter">
                                    <a href="<?=Url('Wris/top100')?>"><li>صد نویسنده برتر</li></a>                    
                                    <a href="<?=Url('Wris/alpha')?>"><li>براساس الفبا</li></a>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    
                </div> 
            </nav>
    	</div>
        
        <header>
            <div>
                 <div class="float-right xmenu">
                    <ul class="list-group">
                        <li class="list-group-item img-rounded menu" style="margin-bottom: 10px;">
                            <a href="<?= Url('/')?>" target="_blank">
                                صفحه اصلی
                            </a>
                        </li>
                        <li class="list-group-item img-rounded menu" style="margin-bottom: 10px;">
                            <a href="<?= Url('/')?>" target="_blank">
                                اخبار سینما
                            </a>
                        </li>
                        <li class="list-group-item img-rounded menu" style="margin-bottom: 10px;">
                            <a href="<?= Url('/')?>" target="_blank">
                                عضویت </a>|<a href="<?= Url('/')?>" target="_blank"> ورود
                            </a>
                        </li>                    
                        <li class="list-group-item img-rounded menu" style="margin-bottom: 10px;">
                            <a href="<?= Url('/about')?>" target="_blank">
                                درباره 
                            </a>
                        </li>
                        <li class="list-group-item img-rounded menu" style="margin-bottom: 10px;">
                            <a href="<?= Url('/')?>" target="_blank">
                                تماس
                            </a>
                        </li>                    
                    </ul>
                </div>
                <div class="hidden-xs float-left" id="title" >
                    <br>
                    <span class="hidden-xs col-xs-12">
                        پایگاه اطلاعات فیلم ایرانی
                    </span>
                </div>
               
            </div>

        </header>
        
            @yield('advCin')
            <div class="content container">
                @yield('content')
            </div>
      <br/><br/> 
            <footer class="menu">	
                <ul class="list-group col-xs-offset-10 ">
                    <li class="list-group-item img-rounded menu" style="margin-bottom: 10px;">
                        <a href="<?= Url('/')?>" target="_blank">
                            صفحه اصلی
                        </a>
                    </li>
                    <li class="list-group-item img-rounded menu" style="margin-bottom: 10px;">
                        <a href="<?= Url('/')?>" target="_blank">
                            اخبار سینما
                        </a>
                    </li>
                    <li class="list-group-item img-rounded menu" style="margin-bottom: 10px;">
                        <a href="<?= Url('/')?>" target="_blank">
                            عضویت </a>|<a href="<?= Url('/')?>" target="_blank"> ورود
                        </a>
                    </li>                    
                    <li class="list-group-item img-rounded menu" style="margin-bottom: 10px;">
                        <a href="<?= Url('/about')?>" target="_blank">
                            درباره 
                        </a>
                    </li>
                    <li class="list-group-item img-rounded menu" style="margin-bottom: 10px;">
                        <a href="<?= Url('/')?>" target="_blank">
                            تماس
                        </a>
                    </li>                    
                </ul>
            	<h4>
                    <p class="bg-primary menu">
                			 حق هرگونه استفاده از مطالب وبسایت پافی برای همگان آزاد است!
                    </p>
                </h4>
        </footer>
            
        <script type="text/javascript" src="<?=Url('js/jquery-1.4.2.min.js')?>"></script> 
        <script type="text/javascript" src="<?=Url('js/jquery-3.1.0.js')?>"></script> 
        <script type="text/javascript" src="<?=Url('js/bootstrap.min.js')?>"></script>
        <script type="text/javascript" src="<?=Url('js/home.js')?>"></script>

        @yield('js')
    </body>
</html>