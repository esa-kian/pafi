@extends('main')
@section('title')
صد سینمای برتر
@endsection
@section('content')
<div class="container">
    <div class="col-md-offset-5" style="direction: rtl;">
        <div class="row"> 
            <h2>صد سینمای برتر</h2>
            <br/>
        </div>
    </div>
    <div class="col-md-10 col-md-offset-1">  
        <table class="table table-bordered table-striped table-hover">
                <thead>
                        <tr>
                                <th></th>
                                <th id="centerer">نام سینما</th>
                                <th id="centerer">امتیاز</th>
                                <th id="centerer">تعداد آرا</th>
                                <th id="centerer">امتیاز دهید</th>
                        </tr>
                </thead>
                <tbody>
                    <?php $counter=1; ?>
                        @foreach($cins as $cins)
                                <tr>
                                        <th><?=$counter?></th>
                                        <th id="centerer">
                                            <a href="<?= Url('Cinemas/'.$cins->idCin.'/info')?>">
                                                {{$cins->nameCin}}
                                            </a>
                                        </th>
                                        <th id="centerer">{{$cins->avg}}</th>
                                        <th id="centerer">{{$cins->count}}</th>
                                        <th id="centerer"> 
                            <?php //فرم ارسال اطلاعات برای ثبت رای ?>
                                            <form method="GET" class="content" action="<?= Url('Cinemas/top100') ?>">
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
                                                <button type="hidden" value={{$cins->idCin}} name="idCin"/>
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
                                                <input type="hidden" value={{$cins->idCin}} name="idCin" />
                                             @endif 

                                            </form>
                                        </th>                                         
                                </tr>
                            <?php  $counter+=1; ?>
                        @endforeach
                </tbody>
        </table>
    </div>
</div>
@endsection

