@extends('main')
@section('title')
 درباره پافی
@endsection
@section('content')  
    <div class="row">
        <h1 id="righter">درباره پافی</h1>
        <p> 
                در پافی به دنبال دانلود فیلم نباشید.
                قراره اینجا با هم یه رتبه بندی خوب از هر چیزی که مربوط به سینما میشه ارائه بدیم.
                 از اون گذشته قراره هر اطلاعاتی که در مورد صنعت سینمای ایران میشه تو همین سایت پیدا کنید. 
                 میخوایم با هم به رشد سینمای ایران کمک کنیم و از هنرمندامون حمایت کنیم. 
                 پس به علایق خودتون رای بدید و از امکانات پافی لذت ببرید و سینماهای خوب شهرتون رو پیدا کنید و بهش رای بدید.
        </p>
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
                <a href="" target="_blank">       
                    <img alt="پافی در فیس بوک" title="پافی در فیس بوک" height="105px" width="105px" src="<?=Url('/img/facebook.png') ?>" class="img-circle"/>
                </a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
                <a href="https://t.me/pafi_ir" target="_blank">       
                    <img alt="پافی در تلگرام" title="پافی در تلگرام" height="105px" width="105px" src="<?=Url('/img/Telegram.svg.png') ?>" class="img-circle"/>
                </a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
                <a href="https://twitter.com/pafi_ir" target="_blank">       
                    <img alt="پافی در توییتر" title="پافی در توییتر" height="105px" width="105px" src="<?=Url('/img/twitter.png') ?>" class="img-circle"/>
                </a>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                <a href="https://www.instagram.com/pafi.ir/" target="_blank">       
                    <img alt="پافی در اینستاگرام" title="پافی در اینستاگرام" height="105px" width="105px" src="<?=Url('/img/instagram.png') ?>" class="img-circle"/>
                </a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                <a href="https://www.linkedin.com/company/pafi-ir/" target="_blank">       
                    <img alt="پافی در لینکدین" title="پافی در لینکدین" height="105px" width="105px" src="<?=Url('/img/linkedIn.png') ?>" class="img-circle"/>
                </a>
            </div>
        </div>
    </div>

@endsection
