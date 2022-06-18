<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  
    <title>GRACE COLLECTION SHOP</title>
  </head>
  
  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <img src="img/logo.png" alt="">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="boutique.php">boutique</a>
            </li>
            <?php if(!isset($_SESSION['personne'])): ?>
              <li class="nav-item">
              <a class="nav-link" href="identification.php">s'identifier/s'inscrire</a>
            </li>
            <?php endif; ?>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <?php if(isset($_SESSION['personne'])): ?>
              <li class="nav-item">
              <a class="nav-link btn btn-danger " href="?action=deconnexion">Deconnexion</a>
            </li>
            <?php endif; ?>
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="rechercher">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">rechercher</button>
          </form>
        </div>
      </nav>
    </header>

    <main class="container-fluid">