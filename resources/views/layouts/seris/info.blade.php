@extends('main')
@section('title')
    @foreach($seris as $seris2)
        {{$seris2->titleSeri}}
    @endforeach
@endsection
@section('content')
<div class="container">
    <div class="col-md-offset-4"">
        <div class="row">
            @foreach($seris as $seris)
            <h2>عنوان سریال: <b> {{$seris->titleSeri}} </b></h2>
            <?php //فرم ارسال اطلاعات برای ثبت رای ?>
            <div>
                <form method="GET" class="content" action="<?= Url('Seris/'.$seris->idSeri.'/info') ?>">
                    @if (Auth::guest())
                    <a href="#" data-toggle="modal" data-target="#myModal">
                        <button class="glyphicon glyphicon-star" value=1 name="avg" title="یک ستاره"/>1
                        <button class="glyphicon glyphicon-star" value=2 name="avg" title="دو ستاره"/>2
                        <button class="glyphicon glyphicon-star" value=3 name="avg" title="سه ستاره"/>3
                        <button class="glyphicon glyphicon-star" value=4 name="avg" title="چهار ستاره"/>4
                        <button class="glyphicon glyphicon-star" value=5 name="avg" title="پنج ستاره"/>5
                        <button class="glyphicon glyphicon-star" value=6 name="avg" title="شش ستاره"/>6
                        <button class="glyphicon glyphicon-star" value=7 name="avg" title="هفت ستاره"/>7
                        <button class="glyphicon glyphicon-star" value=8 name="avg" title="هشت ستاره"/>8
                        <button class="glyphicon glyphicon-star" value=9 name="avg" title="نه ستاره"/>9
                        <button class="glyphicon glyphicon-star" value=10 name="avg" title="ده ستاره"/>10
                        <button type="hidden" value={{$seris->idSeri}} name="idSeri" />
                     </a>
                     @else   
                        <button class="glyphicon glyphicon-star" value=1 name="avg" title="یک ستاره"/>1
                        <button class="glyphicon glyphicon-star" value=2 name="avg" title="دو ستاره"/>2
                        <button class="glyphicon glyphicon-star" value=3 name="avg" title="سه ستاره"/>3
                        <button class="glyphicon glyphicon-star" value=4 name="avg" title="چهار ستاره"/>4
                        <button class="glyphicon glyphicon-star" value=5 name="avg" title="پنج ستاره"/>5
                        <button class="glyphicon glyphicon-star" value=6 name="avg" title="شش ستاره"/>6
                        <button class="glyphicon glyphicon-star" value=7 name="avg" title="هفت ستاره"/>7
                        <button class="glyphicon glyphicon-star" value=8 name="avg" title="هشت ستاره"/>8
                        <button class="glyphicon glyphicon-star" value=9 name="avg" title="نه ستاره"/>9
                        <button class="glyphicon glyphicon-star" value=10 name="avg" title="ده ستاره"/>10
                        <input type="hidden" value={{$seris->idSeri}} name="idSeri" />
                     @endif 
                </form>
            </div>
            <br/>
            <img src="<?= Url('img/seri/'.$seris->img) ?>" alt="{{$seris->titleSeri}}" height="400px" width="300px" style="border-radius: 10px;border: 2px solid #481e5c;" />
            <hr/>
            <p>
                نام کارگردان:
                @foreach($dirs as $dirs)
                <a href="<?= Url('Dirs/'.$dirs->idDir.'/info') ?>">
                    {{$dirs->nameDir}}
                </a> | &nbsp;
                @endforeach
            </p>
            <p>
                نام نویسنده:
                @foreach($wris as $wris)
                <a href="<?= Url('Wris/'.$wris->idWri.'/info')?>">
                    {{$wris->nameWri}}
                </a> | &nbsp;
                @endforeach
            </p>
            <p>
                بازیگران:
                @foreach($arts as $arts)
                <a href="<?= Url('Arts/'.$arts->idArt.'/info')?>">
                   {{$arts->nameArt}}
                </a> | &nbsp;
                @endforeach
            </p>
            <p>
                <span class="btn btn-danger">امتیاز:{{$seris->avg}} </span>
            </p>
            <p>
                <span class="btn btn-danger"> تعداد آرا:{{$seris->count}}</span>
            </p>
            <p>
                سال تولید:{{$seris->year}} &numsp;
             &numsp;   ژانر:{{$seris->Genre}}
            </p>
            <p>
                توضیحات:{{$seris->comment}}<br/>
            </p>
            @endforeach
            <br/>
        </div>
    </div>
</div>
@endsection