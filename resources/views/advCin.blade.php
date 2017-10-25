

<div class="row">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="<?= Url('img/cinema/1.jpg')?>" alt="تبلیغ سینما" height="300px" width="100%" class="gallery"/> 
          <div class="carousel-caption">
              <a id="cinema-title" href="#">نام سینما</a>
              <p id="cinema-caption">فیلم در حال اکران: در سالن شماره... از ساعت ... تا ...</p>
          </div>
        </div>

        <div class="item">
          <img src="<?= Url('img/cinema/2.jpg')?>" alt="تبلیغ سینما" height="300px" width="100%" class="gallery"/>
          <div class="carousel-caption">
            <a id="cinema-title" href="#">نام سینما</a>
            <p id="cinema-caption">فیلم در حال اکران: در سالن شماره... از ساعت ... تا ...</p>
          </div>      
        </div>

        <div class="item">
          <img src="<?= Url('img/cinema/3.jpg')?>" alt="تبلیغ سینما" height="300px" width="100%" class="gallery"/>
          <div class="carousel-caption">
            <a id="cinema-title" href="#">نام سینما</a>
            <p id="cinema-caption">فیلم در حال اکران: در سالن شماره... از ساعت ... تا ...</p>
          </div>        
        </div>

        <div class="item">
          <img src="<?= Url('img/cinema/4.jpg')?>" alt="تبلیغ سینما" height="300px" width="100%" class="gallery"/>
          <div class="carousel-caption">
            <a id="cinema-title" href="#">نام سینما</a>
            <p id="cinema-caption">فیلم در حال اکران: در سالن شماره... از ساعت ... تا ...</p>
          </div>        
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">قبلی</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">بعدی</span>
      </a>
    </div>
</div>


