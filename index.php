<?php
session_start();

if( isset($_GET['action']) && $_GET['action'] == "deconnexion" ){
    session_destroy();
    header("Location: .");
    exit;
}

include "header.php";
?>

<h1>BIENVENU CHEZ GRACE COLLECTION SHOP</h1>    

<p class="lead">
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="public/img/ba.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Bienvenu chez Grace shop </h5>
        <p>Boutique de pagne à la mode.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="public/img/oip.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h5>Bienvenu chez Grace shop</h5>
        <p>Boutique de pagne à la mode.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="public/img/bak.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h5>Bienvenu chez Grace shop</h5>
        <p>Boutique de pagne à la mode.</p>
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
</p>


<?php

include "footer.php";
    