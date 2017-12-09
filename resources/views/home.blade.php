@extends('main')
@section('title')
 صفحه اصلی
@endsection
@section('advCin')
    @include('advCin')
@endsection
@section('content')

<div class="row">
    
    <a href="<?=Url('Films/top100')?>" target="_blank">
        <div style="background-image: url('../img/film.png'); width:280px; height:280px;" class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-md-offset-1 col-sm-offset-1 col-xs-offset-2 myBox img-circle">
        بهترین فیلم های ایرانی
        </div>
    </a>
    
    <a href="<?=Url('Seris/top100')?>" target="_blank">
        <div style="background-image: url('../img/seri.png'); width:280px; height:280px;" class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-md-offset-1 col-sm-offset-2 col-xs-offset-2 myBox img-circle">
بهترین سریال های ایرانی       
        </div>
    </a>
    <a href="<?=Url('Anims/top100')?>" target="_blank">    
        <div style="background-image: url('../img/anim.png'); width:280px; height:280px;" class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-md-offset-1 col-sm-offset-1 col-xs-offset-2 myBox img-circle">
بهترین انیمیشن های ایرانی         
        </div>
    </a>
    <a href="<?=Url('Wris/top100')?>" target="_blank">
        <div style="background-image: url('../img/wri.png'); width:280px; height:280px;" class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-md-offset-1 col-sm-offset-2 col-xs-offset-2 myBox img-circle">
        بهترین نویسنده های ایرانی
        </div> 
    </a>

    <a href="<?=Url('Dirs/top100')?>" target="_blank">
        <div style="background-image: url('../img/dir.jpg'); width:280px; height:280px;" class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-md-offset-1 col-sm-offset-1 col-xs-offset-2 myBox img-circle">
        بهترین کارگردان های ایرانی
        </div>                
    </a>

    <a href="<?=Url('Arts/top100')?>" target="_blank">
        <div style="background-image: url('../img/art.png'); width:280px; height:280px;" class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-md-offset-1 col-sm-offset-2 col-xs-offset-2 myBox img-circle">
        بهترین بازیگر های ایرانی
        </div>
    </a>

</div>

<br/><br/><br/><br/>

<div class="row">
    <h2><a href="<?= Url('news/all')?>">
    جدیدترین اخبار سینمای ایران
    </a></h2>

    @foreach($news as $news)
    <div class="col-md-10 col-sm-10 col-xs-10 col-xs-offset-1 img-thumbnail" id="news">
        <h3 id="righter">
            <a href="<?= Url('news/'.$news->id)?>">
                {{$news->title}}
            </a>
        </h3>
        <br/>
        <img src="<?= Url('img/news/'.$news->img) ?>" alt="{{$news->title}}" height="400px" width="500px" style="border-radius: 2px;border: 2px solid #481e5c;" />
        <p style="overflow: hidden;
                  display: -webkit-box;
                  -webkit-line-clamp: 3;
                  -webkit-box-orient: vertical;
                  height:130px;">
        {{$news->body}}
        </p>
        <a class="btn btn-info" href="<?= Url('news/'.$news->id)?>">
            ادامه خبر...
        </a>
    </div>
    @endforeach

</div>
@endsection
