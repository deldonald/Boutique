<?php

include "header.php";

?>
          <form class="form-horizontal" action="php/saver.php" method="post">
            <img class="mb-4" src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
            <h2 class="h3 mb-3 fw-normal">Veuillez vous connecter</h2>
        
            <div class="form-floating">
              <label for="floatingInput">Adresse Email</label>
              <input type="email" value="donald@hotmail.fr" class="form-control" name="email" id="email" placeholder="name@example.com" required>
            </div>
            <div class="form-floating">
              <label for="floatingPassword">Mot de Passe</label>
              <input type="password" value="ilci" class="form-control" name="password" id="password" placeholder="Password" required>
            </div>
        
            <div class="checkbox mb-3">
              <label>
                <input type="checkbox" value="remember-me"> Me rappeler 
              </label>
            </div>
            <button class="btn btn-primary" type="submit">se connecter</button>
            <a href="inscription.php" class="btn btn-primary">s'inscrire</a>
          </form>
          
          <?php

include "footer.php";

?>