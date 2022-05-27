<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include("./includes/scripts.php"); ?>
</head>
<body>
    <?php include("./includes/navbar.php"); ?>
    

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./explo/pic1.png">
      <div class="carousel-caption d-none d-sm-block">
        <h5> <p style="font-size:50px;">EXPLORING THE AMAZING COUNTRY</p></h5>
        

        <p style= "color:white;">  <em>    The main reason why India is famous for tourism means all type of tourist destinations in one place. India is the right place for wild safaris, desert safaris, nature seeking places, honeymoon spot, adventurous activities, spiritual places, and historical places of India. </em>  </p> 
      </div>
    </div>
    <div class="carousel-item">
      <img src="./explo/pic2.png">
      <div class="carousel-caption d-none d-md-block">
        <h5>  <p style="font-size:50px;"> LADAKH </p></h5>
        <p> <em> Ladakh is most famous for breathtaking landscapes, the crystal clear skies, the highest mountain passes, thrilling adventure activities, Buddhist Monasteries and festivals. </em>  </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./explo/pic3.png">
      <div class="carousel-caption d-none d-md-block">
        <h5>  <p style="font-size:50px;">VARANASI </p></h5>
        <p> <em> Varanasi is famous for the bathing ghats along the banks of river Ganga. Pilgrims throng these ghats to take a holy dip to wash themselves of their sins.</em> </p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


</style>


   

<?php include("./includes/footer.php") ?>
</body>
</html>