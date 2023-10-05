<div>
    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
    <style type="text/css">
  
/*   botones de navegacion del carusel */
  .botones
  {
    background-color: black; opacity: .7; border-color:black;
  }

/*   imagenes del carusel */
  #img-slider1
{
  background-repeat:no-repeat;
  background-image: url('https://static2.burgosconecta.es/www/multimedia/202103/05/media/cortadas/porros-U52305455405ihc-984x468@RC.jpg');
  background-size: 100%;
  height: 100%;
  background-position: center;

}

#img-slider2
{
  background-repeat:no-repeat;
  background-position: center;
  background-image: url('https://lavaperia.com/wp-content/uploads/2022/10/pexels-photo-10358625.jpeg');
  background-size: 100%;
  height: 100%;
}

#img-slider3
{
  background-repeat:no-repeat;
  background-position: center;
  background-image: url('https://arc-anglerfish-arc2-prod-infobae.s3.amazonaws.com/public/TKBLBRKYBFC2TBOTOBUKYYZUQI.jpg');
  background-size: 100%;
  height: 100%;

}
</style>

{{-- carusel --}}
<div  id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" id='img-slider1' data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" id='img-slider2' data-slide-to="1"></li>
      <li data-target="#myCarousel" id='img-slider3' data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
          <div id="img-slider1"> 
          </div>

        <div class="container">
          <div class="carousel-caption text-left" style='color:white;'>
            <h1>Smoke</h1>
            <p>Liberate con un buen cigarrillo</p>
            <p><a class="btn btn-lg btn-primary botones" href="#">Ver mas.</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div id="img-slider2"></div>

        <div class="container">
          <div class="carousel-caption" >
            <h1>Grande experiencias.</h1>
            <p>Somos lideres en crear buenos momentos.</p>
            <p><a class="btn btn-lg btn-primary botones" href="#">Leer mas.</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div id="img-slider3"></div>

        <div class="container">
          <div class="carousel-caption text-right" >
            <h1 >100% artesanal.</h1>
            <p>Articulos unicos y de gran calidad.</p>
            <p><a class="btn btn-lg btn-primary botones" href="#">Conocer mas.</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-target="#myCarousel" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#myCarousel" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </button>
  </div>
</div>