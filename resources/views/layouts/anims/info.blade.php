@extends('main')
@section('title')
    @foreach($anims as $anims2)
    {{$anims2->titleAnim}}
    @endforeach
@endsection
@section('content')
<div class="container">
    <div class="col-md-offset-4" style="direction: rtl;">
        <div class="row">
            @foreach($anims as $anims)
            <h2>عنوان انیمیشن: <b> {{$anims->titleAnim}}</b></h2>
                    <?php /*فرم ارسال اطلاعات برای ثبت رای */?>
            <div>
                <form method="GET" class="content" action="<?= Url('Anims/'.$anims->idAnim.'/info') ?>">
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
                        <button type="hidden" value={{$anims->idAnim}} name="idAnim"  />
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
                        <input type="hidden" value={{$anims->idAnim}} name="idAnim"  />
                     @endif  
                </form>
            </div>
            <br/>
            <img src="<?= Url('img/anim/'.$anims->img) ?>" alt="{{$anims->titleAnim}}" height="400px" width="300px" style="border-radius: 10px;border: 2px solid #481e5c;" />
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