<center>
  <div class="col-lg-9">
    <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox" id="top-carousel">
        <div class="carousel-item active">
        <?php insertImage("/resources/img/carousel-images/cotton-candy-family.jpg",
            'class="d-block img-fluid" height="450" width="245"') ?>
        </div>
        <div class="carousel-item">
          <?php insertImage("/resources/img/carousel-images/cotton-candy-umbrella.jpg",
            'class="d-block img-fluid"  height="450" width="245"') ?>
        </div>

        <div class="carousel-item">
          <?php insertImage("/resources/img/carousel-images/cotton-candy-family.jpg",
            'class="d-block img-fluid"  height="450" width="245"') ?>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</center>