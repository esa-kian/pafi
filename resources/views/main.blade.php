<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="title" content="پافی:پایگاه اطلاعات فیلم ایرانی">
        <meta name="description" content="پایگاه اطلاعات فیلم ایرانی 📽🎞🎭🎦🎥🎬رتبه بندی فیلم ها،سریال ها،مستندها،انمیشن ها،بازیگران،کارگردانان و نویسندگان ایرانیاطلاعات جامع سینمای ایران">
        <meta name="keywords" content="پافی پایگاه اطلاعات فیلم ایرانی">
        <meta name="robots" content="index, follow">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="language" content="English">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>@yield('title')| پافی:پایگاه اطلاعات فیلم ایرانی</title>
        
        <link rel="icon" type="image/png" href="<?=Url('icon.png')?>">
        @yield('css')
            <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="<?=Url('css/home.css')?>">
        <link rel="stylesheet" type="text/css" href="<?=Url('css/bootstrap.css')?>">
        <link rel="stylesheet" type="text/css" href="<?=Url('css/bootstrap-theme.min.css')?>">

        
        
        <!-- Scripts -->
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>
    </head>
    <body dir="rtl">
        
         <!--  Navigation Bar    -->
        <div style="padding-top: 50px;">
            <nav id="myNavbar" class="navbar navbar-fixed-top menu navbar-custom" role="navigation">
                
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="sr-only"> Toggle navigation </span> 
                        <span class="icon-bar"> </span>
                        <span class="icon-bar"> </span> 
                        <span class="icon-bar"> </span>
                    </button> 
                    <img alt="پافی پایگاه اطلاعات فیلم ایرانی" title="logo pafi" height="53px" width="85px" src="<?=Url('logo.png') ?>"/>
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
                                    <li><a href="<?=Url('Films/top100')?>">صد فیلم برتر</a></li>
                                    <li><a href="<?=Url('Films/genre')?>">براساس ژانر</a></li>                        
                                    <li><a href="<?=Url('Films/alpha')?>">براساس الفبا</a></li>
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
                                    <li><a href="<?=Url('Seris/top100')?>">صد سریال برتر</a></li>
                                    <li><a href="<?=Url('Seris/genre')?>">براساس ژانر</a></li>                      
                                    <li><a href="<?=Url('Seris/alpha')?>">براساس الفبا</a></li>
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
                                    <li><a href="<?=Url('Anims/top100')?>">صد انیمیشن برتر</a></li>
                                    <li><a href="<?=Url('Anims/genre')?>">براساس ژانر</a></li>                        
                                    <li><a href="<?=Url('Anims/alpha')?>">براساس الفبا</a></li>
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
                                    <li><a href="<?=Url('Docs/top100')?>">صد مستند برتر</a></li>
                                    <li><a href="<?=Url('Docs/genre')?>">براساس ژانر</a></li>                        
                                    <li><a href="<?=Url('Docs/alpha')?>">براساس الفبا</a></li>
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
                                    <li><a href="<?=Url('Cinemas/top100')?>">صد سینمای برتر</a></li>
                                    <li><a href="<?=Url('Cinemas/city')?>">براساس استان</a></li>                        
                                    <li><a href="<?=Url('Cinemas/alpha')?>">براساس الفبا</a></li>
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
                                    <li><a href="<?=Url('Arts/top100')?>">صد بازیگر برتر</a></li>                    
                                    <li><a href="<?=Url('Arts/alpha')?>">براساس الفبا</a></li>
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
                                    <li><a href="<?=Url('Dirs/top100')?>">صد کارگردان برتر</a></li>                    
                                    <li><a href="<?=Url('Dirs/alpha')?>">براساس الفبا</a></li>
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
                                    <li><a href="<?=Url('Wris/top100')?>">صد نویسنده برتر</a></li>                    
                                    <li><a href="<?=Url('Wris/alpha')?>">براساس الفبا</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>     
            </nav>
    	</div>
        <!-- End Navigation Bar -->
        
         <!--Header and Title--> 
        <header class="hidden-sm hidden-xs slid">
            <div class="" id="title" >
                <div class="float-right xmenu menu col-md-4 col-md-offset-11">
                        <ul class="nav nav-stacked ">
                            <li id="title-menu">
                                <a href="<?= Url('/')?>" target="_blank">
                                    صفحه اصلی
                                </a>
                            </li>
                            <li id="title-menu">
                                <a href="<?= Url('/news/all')?>" target="_blank">
                                    اخبار سینما
                                </a>
                            </li>
                            <li id="title-menu" class="dropup">
                                        <!-- Authentication Links -->
                                        @if (Auth::guest())
                                            <a href="#" data-toggle="modal" data-target="#myModal">عضویت | ورود</a>
                                        @else
                                            <li class="dropdown" id="title-menu">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                                    {{ Auth::user()->name }} <span class="caret"></span>
                                                </a>

                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                                            خروج
                                                        </a>

                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            {{ csrf_field() }}
                                                        </form>
                                                    </li>
                                                </ul>
                                            </li>
                                        @endif

                            </li>                    
                            <li id="title-menu">
                                <a href="<?= Url('/about')?>" target="_blank">
                                    درباره 
                                </a>
                            </li>
                            <li id="title-menu">
                                <a href="<?= Url('/')?>" target="_blank">
                                    تماس
                                </a>
                            </li>                    
                        </ul>
                </div>
            </div>
        </header>
        <!-- End Header and Title-->
        
        <!-- Content and main Part -->
    @yield('advCin')
    <div class="content">
            @yield('content')
    </div> 
    
        <!-- End Content and main Part -->
    
        <br/> 
          
        <!-- Footer Part -->
    <footer class="menu container-fluid">	
        <div class="list-group col-md-offset-10 ">
            <a class="list-group-item img-rounded menu" id="bottom-title" href="<?= Url('/')?>" target="_blank">
                صفحه اصلی
            </a>
            <a class="list-group-item img-rounded menu" id="bottom-title" href="<?= Url('/news/all')?>" target="_blank">
                اخبار سینما
            </a>

                <!-- Authentication Links -->
                @if (Auth::guest())
                    <a class="dropup list-group-item img-rounded menu" id="bottom-title" href="#" data-toggle="modal" data-target="#myModal">عضویت | ورود</a>
                @else
                <div class="dropup">
                    <a  href="#" id="bottom-title" class=" list-group-item img-rounded menu dropdown-toggle"  data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                خروج
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </div>
                @endif

                            
            <a class="list-group-item img-rounded menu" id="bottom-title" href="<?= Url('/about')?>" target="_blank">
                درباره 
            </a>
            <a class="list-group-item img-rounded menu" id="bottom-title" href="<?= Url('/')?>" target="_blank">
                تماس
            </a>                   
        </div>

        <h4><p class="menu">حق هرگونه استفاده از مطالب وبسایت پافی برای همگان آزاد است!</p></h4>
    </footer>
        <!-- End Footer Part -->


              <!-- Modal -->
              <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content  login-menu">
                            <div class="modal-header">
                                <!-- Login Section -->
                                <button style="float: left;font-size: 30px;font-weight: bold" type="button" class="btn btn-danger btn-xs" data-dismiss="modal">&nbsp;&nbsp;&times;&nbsp;&nbsp;</button>
                                <div class="panel-group" id="accordion">
                                    <div style="background-color: #e0c2fb" class="panel panel-default">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                            <div style="background-color: #552c6d;color: white;" class="panel-heading">
                                                ورود
                                            </div>
                                        </a>
                                        <div id="collapse1" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                <div class="modal-body">
                                                    <form role="form" method="POST" action="{{ route('login') }}">
                                                        {{ csrf_field() }}

                                                        <div class="form-group">
                                                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                            <label for="email">ایمیل:</label>
                                                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                                                @if ($errors->has('email'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('email') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                            
                                                        <div class="form-group">
                                                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                                <label for="pwd">رمز عبور:</label>
                                                                <input id="password" type="password" class="form-control" name="password" required>
                                                                @if ($errors->has('password'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('password') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <div class="col-md-6 col-md-offset-4">
                                                                <div class="checkbox">
                                                                    <label>
                                                                         من را بخاطر بسپار<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}/>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                                <button type="submit" class="btn btn-success">
                                                                    ورود
                                                                </button>

                                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                                    رمز خود را فراموش کرده ام
                                                                </a>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                        <button class="btn btn-danger" type="button" data-dismiss="modal">بستن</button>
                                                </div>                
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Register Section -->
                                    <div style="background-color: #e0c2fb" class="panel panel-default">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                            <div style="background-color: #552c6d;color: white;" class="panel-heading">
                                                ثبت نام
                                            </div>
                                        </a>
                                        <div id="collapse2" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="modal-body">
                                                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                                                        {{ csrf_field() }}
                                                        
                                                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                                            <div class="col-md-6 col-sm-9">
                                                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                                                @if ($errors->has('name'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('name') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                            <label for="name" class="col-md-4 control-label">نام:</label>
                                                        </div>

                                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                            <div class="col-md-6 col-sm-9">
                                                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                                                
                                                                @if ($errors->has('email'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('email') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                            <label for="email" class="col-md-4 control-label">آدرس ایمیل:</label>
                                                        </div>

                                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                            <div class="col-md-6 col-sm-9">
                                                                <input id="password" type="password" class="form-control" name="password" required>

                                                                @if ($errors->has('password'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('password') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                            <label for="password" class="col-md-4 control-label">رمز عبور:</label>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-md-6 col-sm-9">
                                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                                            </div>
                                                            <label for="password-confirm" class="col-md-4 control-label">تکرار رمز عبور:</label>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-md-6 col-md-offset-4">
                                                                <button type="submit" class="btn btn-primary">
                                                                    ثبت نام
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
<!-- Script Section --> 
        <script type="text/javascript" src="<?=Url('js/jquery-3.1.0.js')?>"></script> 
        <script type="text/javascript" src="<?=Url('js/bootstrap.min.js')?>"></script>
        @yield('js')
    </body>
</html>