<?php

include "header.php";

?>

<h2 class="h3 mt-5 fw-normal">Veuillez vous inscrire</h2>

<form class="form-horizontal" action="php/save.php" method="post">


  <!-- Text input-->
  <div class="form-group ">
    <label class=" control-label" for="name">Nom</label>  
    <div class="">
      <input name="nom" type="text" placeholder="" required class="form-control">
      <span class="help-block"></span>  
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group ">
    <label class=" control-label" for="surname">Prénom</label>  
    <div class="">
      <input name="prenom" type="text" placeholder="" required class="form-control">
      <span class="help-block"></span>  
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group ">
    <label class=" control-label" for="email">E-mail</label>  
    <div class="">
      <input id="email" name="email" type="text" placeholder="" required class="form-control">
      <span class="help-block"></span>  
    </div>
  </div>

  <!-- Password input-->
  <div class="form-group ">
    <label class=" control-label" for="password">Mot de passe</label>
    <div class="">
      <input id="password" name="password" type="password" placeholder="" required class="form-control">
      <span class="help-block"></span>
    </div>
  </div>

  <!-- Password input-->
  <div class="form-group ">
    <label class=" control-label" for="password">Mot de Passe</label>
    <div class="">
      <input id="password" name="password2" type="password" placeholder="" required class="form-control">
      <span class="help-block"></span>
    </div>
  </div>

  <!-- Button -->
  <div class="form-group ">
    <div class="">
      <button id="buttonRegistry" name="buttonRegistry" class="btn btn-success">s'inscrire</button>
      <a href="identification.php" class="btn btn-success">se connecter</a>
    </div>
  </div>

</form>
<?php

include "footer.php";

?>