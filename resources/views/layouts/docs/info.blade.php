@extends('main')
@section('title')
    @foreach($docs as $docs2)
    {{$docs2->titleDoc}}
    @endforeach
@endsection
@section('content')
<div class="container">
    <div class="col-md-offset-5" style="direction: rtl;">
        <div class="row">
            @foreach($docs as $docs)
            <h2>عنوان مستند: <b> {{$docs->titleDoc}} </b></h2>
                            <?php /*فرم ارسال اطلاعات برای ثبت رای */?>
            <div>
                <form method="GET" class="content" action="<?= Url('Docs/'.$docs->idDoc.'/info') ?>">
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
                        <button type="hidden" value={{$docs->idDoc}} name="idDoc"  />
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
                        <input type="hidden" value={{$docs->idDoc}} name="idDoc"   />
                     @endif 
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