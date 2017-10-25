@extends('main')
@section('title')
جدیدترین اخبار سینمای ایران
@endsection
@section('content') 

<div class="container">
    <div style="direction: rtl;">
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
    </div>
</div>
@endsection 
