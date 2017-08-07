@extends('main')
@section('title')
    @foreach($anims as $anims2)
    {{$anims2->titleAnim}}
    @endforeach
@endsection
@section('content')
<div class="container img-thumbnail" style="background-color: #efe3f6;opacity: 0.8">
    <div class="col-md-offset-4" style="direction: rtl;">
        <div class="row">
            @foreach($anims as $anims)
            <h2>عنوان انیمیشن: <b> {{$anims->titleAnim}}</b></h2>
                    <?php /*فرم ارسال اطلاعات برای ثبت رای */?>
            <div>
                <form method="GET" class="content" action="<?= Url('Anims/'.$anims->idAnim.'/info') ?>">
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
                    <input type="hidden" value={{$anims->idAnim}} name="idAnim" />
                </form>
            </div>
                        <hr/>
                        <p>
                            نام کارگردان:{{$anims->nameDir}}
                        </p>
                        <p>
                            نام نویسنده:{{$anims->nameWri}}
                        </p>
                        <p>
                            گویندگان:{{$anims->nameArt}}
                        </p>
                        <p>
                            <span class="btn btn-danger">
                                امتیاز:{{$anims->avg}}
                            </span>
                        </p>
                        <p>
                            <span class="btn btn-danger"> 
                                تعداد آرا:{{$anims->count}}
                            </span>
                        </p>
                        <p>
                            سال تولید:{{$anims->year}} &numsp;
                            &numsp; ژانر:{{$anims->Genre}}
                        </p>
                        <p>
                        توضیحات:{{$anims->comment}}<br/>
                        </p>
            @endforeach
            <br/>
        </div>
    </div>
</div>
@endsection