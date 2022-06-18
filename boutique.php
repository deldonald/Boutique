<?php



include "header.php";

include "php/siver.php";


?>
  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Boutique Grace shop</h1>
        <p class="lead text-muted">Retrouvez tous vos articles favoris dans notre boutique Grace shop  !</p>
        <p>
          <a href="#" class="btn btn-secondary my-2">Secondary action</a>
        </p>
      </div>
    </div>
  </section>

    <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
       
     <?php while ($reponse = $res->fetch_assoc()): ?>
   
        <div class="col">
          <div class="card shadow-sm">
          <img  name="photo"  src="public/img/<?= $reponse['nom_photo']; ?> " alt=""/>
            <div class="card-body">
              <p name="description" class="card-text">
              <?= $reponse['description']; ?>
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
   <?php endwhile ?>
       
      </div>
    </div>
  </div>
  <?php

include "footer.php";

?>