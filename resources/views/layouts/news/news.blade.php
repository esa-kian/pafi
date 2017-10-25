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
            <p style="text-align: justify;">
            	{{$news->body}}
            </p>
            @endforeach
        </div>
    </div>
</div>
@endsection