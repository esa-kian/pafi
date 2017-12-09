@extends('main')
@section('title')
    @foreach($films as $films2)
        {{$films2->titleFilm}}
    @endforeach
@endsection
@section('content')
<div class="container">
    <div class="col-md-offset-4" style="direction: rtl;">
        <div class="row">
            @foreach($films as $films)
            <h2>عنوان فیلم: <b> {{$films->titleFilm}} </b></h2>
               <?php //فرم ارسال اطلاعات برای ثبت رای ?>

            <div>

                <form class="content">
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
                        <button type="hidden" value={{$films->idFilm}} name="idFilm" />
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
                        <!-- Send ID for update -->
                        <input type="hidden" value={{$films->idFilm}} name="idFilm" />
                     @endif   
                </form>
            </div>
            <br/>
            <img src="<?= Url('img/film/'.$films->img) ?>" alt="{{$films->titleFilm}}" height="400px" width="300px" style="border-radius: 10px;border: 2px solid #481e5c;" />
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
                <span  id="vote" class="btn btn-danger">  امتیاز: {{$films->avg}}</span>
            </p>
            <p>
                <span  id="vote" class="btn btn-danger"> تعداد آرا: {{$films->count}}</span>
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

@section('js')
    <script type="text/javascript">
    var datastring= 'avg='+ avg + '&idFilm='+ idFilm;
    $.ajax({
        type: "GET",
        url: "<?= Url('Films/'.$films->idFilm.'/info') ?>",
        data: datastring
    });
    request.done(function(data){
        alert(data);
    });

    </script>
@endsection