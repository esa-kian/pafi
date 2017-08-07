@extends('main')
@section('title')
 درباره پافی
@endsection
@section('content')

<div class="content container img-thumbnail" style="background-color: #f6f0fa;">   
    <h1 id="righter">درباره پافی</h1>
        <p> 
                در پافی به دنبال دانلود فیلم نباشید.
                قراره اینجا با هم یه رتبه بندی خوب از هر چیزی که مربوط به سینما میشه ارائه بدیم.
                 از اون گذشته قراره هر اطلاعاتی که در مورد صنعت سینمای ایران میشه تو همین سایت پیدا کنید. 
                 میخوایم با هم به رشد سینمای ایران کمک کنیم و از هنرمندامون حمایت کنیم. 
                 پس به علایق خودتون رای بدید و از امکانات پافی لذت ببرید و سینماهای خوب شهرتون رو پیدا کنید و بهش رای بدید.
        </p>
        <div class="row">
            <div class="col-12 col-md-offset-3  col-xs-offset-2"  style="margin-left: 60px;">
                <a href="" target="_blank">       
                    <div style="background-image: url('../img/facebook.png'); width:280px; height:280px;"  class="img-circle col-md-10 col-xs-8 col-xs-offset-1 about">
                        <span class="Box">فیس بوک پافی</span>
                    </div>
                </a>

                <a href="https://t.me/pafi_ir" target="_blank">
                    <div style="background-image: url('../img/Telegram.svg.png'); width:280px; height:280px;"  class="img-circle col-md-10 col-xs-8  col-xs-offset-1 about">
                        <span class="Box">تلگرام پافی</span>
                    </div>         
                </a>
                <div class="col-sm-offset-3">
                <a href="https://www.instagram.com/pafi.ir/" target="_blank">
                    <div style="background-image: url('../img/instagram.png'); width:280px; height:280px;"  class="img-circle col-md-10 col-xs-8 col-xs-offset-1 about">
                        <span class="Box">اینستاگرام پافی</span>
                    </div>
                </a>
                </div>
            </div>
            <br/>
            <div class="col-md-10 col-xs-8 col-md-offset-3 col-sm-12 col-sm-offset-2 col-xs-offset-2">
                <a href="" target="_blank">
                    <div style="background-image: url('../img/twitter.png'); width:280px; height:280px;"  class="img-circle col-md-4 col-xs-8  about2">
                        <span class="Box">توییتر پافی</span>
                    </div> 
                </a>

                <a href="" target="_blank">
                    <div style="background-image: url('../img/linkedIn.png'); width:280px; height:280px; "  class="img-circle col-md-4  col-sm-offset-1 col-xs-8 about2">
                        <span class="Box">لینکدین پافی</span>
                    </div>         
                </a>
            </div>
        </div>
</div>
@endsection
