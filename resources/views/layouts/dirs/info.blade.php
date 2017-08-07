@extends('main')
@section('title')
    @foreach($dirs as $dirs2)
        {{$dirs2->nameDir}}
    @endforeach
@endsection
@section('content')
<div class="container img-thumbnail" style="background-color: #efe3f6;opacity: 0.8">
    <div class="col-md-offset-4" style="direction: rtl;">
        <div class="row">
            @foreach($dirs as $dirs)
            <h2>نام کارگردان: <b> {{$dirs->nameDir}} </b></h2>
            <?php /*فرم ارسال اطلاعات برای ثبت رای */?>
            <div>
                <form method="GET" class="content" action="<?= Url('Dirs/'.$dirs->idDir.'/info') ?>">
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
                    <input type="hidden" value={{$dirs->idDir}} name="idDir" />
                </form>  
            </div>
            <hr/>
            <p>
                فیلم ها:
                @foreach($films as $films)
                <a href="<?= Url('Films/'.$films->idFilm.'/info')?>">
                    {{$films->titleFilm}}
                </a> | &nbsp;
                @endforeach
            </p>
            <p>
                سریال ها:
                @foreach($seris as $seris)
                <a href="<?= Url('Seris/'.$seris->idSeri.'/info') ?>">
                    {{$seris->titleSeri}}
                </a> | &nbsp;
                @endforeach
            </p>
            <p>
                <span class="btn btn-danger">
                 امتیاز:{{$dirs->avg}}
                </span>
            </p>
            <p>
                <span class="btn btn-danger">              
                    تعداد آرا:{{$dirs->count}}
                </span>
            </p>
            <p>
                تاریخ تولد:{{$dirs->dateBirth}} &numsp;
                &numsp; محل تولد:{{$dirs->placeBirth}}
            </p>
            <p>
                توضیحات:{{$dirs->comment}}<br>
            </p>
            @endforeach
            <br/>
        </div>
    </div>
</div>
@endsection