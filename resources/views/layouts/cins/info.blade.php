@extends('main')
@section('title')
    @foreach($cins as $cins2)
        {{$cins2->nameCin}}
    @endforeach
@endsection
@section('content')
<div class="container img-thumbnail" style="background-color: #efe3f6;opacity: 0.8">
    <div class="col-md-offset-4" style="direction: rtl;">
        <div class="row">
            @foreach($cins as $cins)
            <h2>نام سینما: <b> {{$cins->nameCin}} </b></h2>
            <?php /*فرم ارسال اطلاعات برای ثبت رای */?>
            <div>
                <form method="GET" class="content" action="<?= Url('Cinemas/'.$cins->idCin.'/info') ?>">
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
                    <input type="hidden" value={{$cins->idCin}} name="idCin" />
                </form>
            </div>
            <hr>
            <p>
            فیلم ها:
            @foreach($films as $films)
                <a href="<?= Url('Films/'.$films->idFilm.'/info')?>">
                    {{$films->titleFilm}}
                </a><br>
            @endforeach
            </p>
            <p>
               <span class="btn btn-danger">
                   امتیاز:{{$cins->avg}}
               </span>
            </p>
            <p>
                <span class="btn btn-danger"> 
                   تعداد آرا:{{$cins->count}}
                </span>
            </p>
            <p>
            سال تاسیس:{{$cins->year}}<br>
            آدرس:{{$cins->address}}<br>
            </p>
            @endforeach
            <br>
        </div>
    </div>
</div>
@endsection