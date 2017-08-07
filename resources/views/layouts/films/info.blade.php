@extends('main')
@section('title')
    @foreach($films as $films2)
        {{$films2->titleFilm}}
    @endforeach
@endsection
@section('content')
<div class="container img-thumbnail" style="background-color: #efe3f6;opacity: 0.8">
    <div class="col-md-offset-4" style="direction: rtl;">
        <div class="row">
            @foreach($films as $films)
            <h2>عنوان فیلم: <b> {{$films->titleFilm}} </b></h2>
               <?php //فرم ارسال اطلاعات برای ثبت رای ?>
            <div>
                    <form method="GET" class="content" action="<?= Url('Films/'.$films->idFilm.'/info') ?>">
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
                        <input type="hidden" value={{$films->idFilm}} name="idFilm" />
                    </form>
            </div>
            <hr>
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
                <span class="btn btn-danger">  امتیاز: {{$films->avg}}</span>
            </p>
            <p>
                <span class="btn btn-danger"> تعداد آرا: {{$films->count}}</span>
            </p>
            <p>
                سال تولید: {{$films->year}} &numsp;
               &numsp; ژانر: {{$films->Genre}}
            </p>
            <p>
                توضیحات:{{$films->comment}}<br/>
            </p>
            @endforeach
            <br>
        </div>
    </div>
</div>
@endsection