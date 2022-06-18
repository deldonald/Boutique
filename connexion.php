<?php
session_start();
include "header.php";

?>

<form class="form-horizontal" action="php/save.php" method="post">
<fieldset>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">E-mail</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="text" placeholder="" class="form-control input-md">
  <span class="help-block">Entrez  votre mail</span>  
  </div>
</div>


<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password</label>
  <div class="col-md-4">
    <input id="password1" name="password" type="password" placeholder="" class="form-control input-md">
    <span class="help-block">Enter password</span>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="buttonRegistry"></label>
  <div class="col-md-4">
    <button id="buttonRegistry" name="buttonRegistry" class="btn btn-success">Registry</button>
  </div>
</div>

</fieldset>
</form>
<?php

include "footer.php";

?>