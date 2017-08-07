@extends('main')
@section('title')
    @foreach($seris as $seris2)
        {{$seris2->titleSeri}}
    @endforeach
@endsection
@section('content')
<div class="container img-thumbnail" style="background-color: #efe3f6;opacity: 0.8">
    <div class="col-md-offset-4"">
        <div class="row">
            @foreach($seris as $seris)
            <h2>عنوان سریال: <b> {{$seris->titleSeri}} </b></h2>
            <?php //فرم ارسال اطلاعات برای ثبت رای ?>
            <div>
                <form method="GET" class="content" action="<?= Url('Seris/'.$seris->idSeri.'/info') ?>">
                    <button class="glyphicon glyphicon-star btn btn-info btn-sm" value=1 name="avg" title="یک ستاره"/>
                    <button class="glyphicon glyphicon-star btn btn-info btn-sm" value=2 name="avg" title="دو ستاره"/>
                    <button class="glyphicon glyphicon-star btn btn-info btn-sm" value=3 name="avg" title="سه ستاره"/>
                    <button class="glyphicon glyphicon-star btn btn-info btn-sm" value=4 name="avg" title="چهار ستاره"/>
                    <button class="glyphicon glyphicon-star btn btn-info btn-sm" value=5 name="avg" title="پنج ستاره"/>
                    <button class="glyphicon glyphicon-star btn btn-info btn-sm" value=6 name="avg" title="شش ستاره"/>
                    <button class="glyphicon glyphicon-star btn btn-info btn-sm" value=7 name="avg" title="هفت ستاره"/>
                    <button class="glyphicon glyphicon-star btn btn-info btn-sm" value=8 name="avg" title="هشت ستاره"/>
                    <button class="glyphicon glyphicon-star btn btn-info btn-sm" value=9 name="avg" title="نه ستاره"/>
                    <button class="glyphicon glyphicon-star btn btn-info btn-sm" value=10 name="avg" title="ده ستاره"/>
                    <input type="hidden" value={{$seris->idSeri}} name="idSeri" />
                </form>
            </div>
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