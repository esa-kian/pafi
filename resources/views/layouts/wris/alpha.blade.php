@extends('main')
@section('title')
نویسندگان براساس حروف الفبا
@endsection
@section('content')
<div class="container img-thumbnail" style="background-color: #efe3f6;opacity: 0.8">
    <div class="col-md-offset-5" style="direction: rtl;">
        <div class="row">        
            <h2>نویسندگان براساس حروف الفبا</h2>
            <br>
        </div>
    </div>
    <div class="col-md-8 col-md-offset-4">  
        <table class="table table-bordered table-striped">
                <thead>
                        <tr>
                            <th></th>
                            <th id="centerer">نام نویسنده</th>
                            <th id="centerer">امتیاز</th>
                            <th id="centerer">تعداد آرا</th>
                            <th id="centerer">امتیاز دهید</th>
                        </tr>
                </thead>
                <tbody>
                    <?php $counter=1; ?>
                        @foreach($wris as $wris)
                                <tr>
                                    <th><?=$counter?></th>
                                    <th id="centerer">
                                        <a href="<?= Url('Wris/'.$wris->idWri.'/info')?>">
                                            {{$wris->nameWri}}
                                        </a>
                                    </th>
                                    <th id="centerer">{{$wris->avg}}</th>
                                    <th id="centerer">{{$wris->count}}</th>
                                    <th id="centerer"> 
                        <?php //فرم ارسال اطلاعات برای ثبت رای ?>
                                        <form method="GET" class="content" action="<?= Url('Wris/alpha') ?>">
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
                                            <input type="hidden" value={{$wris->idWri}} name="idWri" />
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