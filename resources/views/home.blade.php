@extends('main')
@section('title')
 صفحه اصلی
@endsection

@section('advCin')
  <div id="cinemas">
      <div class="current">
          <img src="<?= Url('img/cinema/1.jpg')?>" alt="تبلیغ سینما" height="300px" width="100%" class="gallery"/>
      </div>
      <div>
          <img src="<?= Url('img/cinema/2.jpg')?>" alt="تبلیغ سینما" height="300px" width="100%" class="gallery"/>
      </div>
      <div>
          <img src="<?= Url('img/cinema/3.jpg')?>" alt="تبلیغ سینما" height="300px" width="100%" class="gallery"/>
      </div>      
  </div>
@endsection
@section('content')

@include('userPanel')    

@endsection
@section('js')
        <script type="text/javascript">
            $(function(){
                setInterval("rotateImages()",3000);
            });
            function rotateImages(){
                var oCurPhoto= $('#cinemas div.current');
                var oNxtPhoto= oCurPhoto.next();
                if(oNxtPhoto.length==0)
                    oNxtPhoto=$('#cinemas div:first');
                oCurPhoto.removeClass('current').addClass('previous');
                oNxtPhoto.css({opacity: 0.0}).addClass('current').animate({opacity:1.0},1000,
                        function(){
                            oCurPhoto.removeClass('previous');
                        });
            }
        </script>
@endsection