@extends('main')
@section('title')
    @foreach($news as $news2)
        {{$news2->title}}
    @endforeach
@endsection
@section('content') 
<div class="container">
    <div style="direction: rtl;">
        <div class="row">
            @foreach($news as $news)
            <h3 style="text-align:right;"><b> {{$news->title}} </b></h3>
            <br/>
                <img src="<?= Url('img/news/'.$news->img) ?>" alt="{{$news->title}}" height="400px" width="500px" style="border-radius: 2px;border: 2px solid #481e5c;" />
            <p style="text-align: justify;">
            	{{$news->body}}
            </p>
            @endforeach
        </div>
    </div>
</div>
@endsection