<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>

<form class="form-horizontal" action="save.php" method="post">
<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Name</label>  
  <div class="col-md-4">
  <input name="nom" type="text" placeholder="" class="form-control input-md">
  <span class="help-block">Enter name</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="surname">Surname</label>  
  <div class="col-md-4">
  <input name="prenom" type="text" placeholder="" class="form-control input-md">
  <span class="help-block">Enter surname</span>  
  </div>
  
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">E-mail</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="text" placeholder="" class="form-control input-md">
  <span class="help-block">Enter e-mail</span>  
  </div>
</div>
