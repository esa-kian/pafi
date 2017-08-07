@extends('main')
@section('title')
    @foreach($docs as $docs2)
    {{$docs2->titleDoc}}
    @endforeach
@endsection
@section('content')
<div class="container img-thumbnail" style="background-color: #efe3f6;opacity: 0.8">
    <div class="col-md-offset-5" style="direction: rtl;">
        <div class="row">
            @foreach($docs as $docs)
            <h2>عنوان مستند: <b> {{$docs->titleDoc}} </b></h2>
                            <?php /*فرم ارسال اطلاعات برای ثبت رای */?>
            <div>
                <form method="GET" class="content" action="<?= Url('Docs/'.$docs->idDoc.'/info') ?>">
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
                    <input type="hidden" value={{$docs->idDoc}} name="idDoc" />
                </form>
            </div>
            <hr/>
            <p>
                نام کارگردان:{{$docs->nameDir}}
            </p>
            <p>
                نام نویسنده:{{$docs->nameWri}}
            </p>
            <p>
                بازیگران:{{$docs->nameArt}}
            </p>
            <p>
                <span class="btn btn-danger">            
                امتیاز:{{$docs->avg}}
                </span>
            </p>
            <p>
                <span class="btn btn-danger">             
                تعداد آرا:{{$docs->count}}
                </span>
            </p>
            <p>
                سال تولید:{{$docs->year}} &numsp;
               &numsp;  ژانر:{{$docs->Genre}}
            </p>
            <p>
                توضیحات:{{$docs->comment}}<br/>
            </p>
            @endforeach
            <br/>
        </div>
    </div>
</div>
@endsection