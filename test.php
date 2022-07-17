<?php
$title = "Newlester";
$nav = "test";
require_once "config.php";
require_once "fonctions.php";

require ("header.php");


if(isset($_POST["email"])){
    $email = $_POST["email"];
    $date = date("Y-m-d H:i:s"); 
    $fichier = $date;
    $handle = fopen($fichier,"a+");
    fwrite($handle,$email);
    fclose($handle);
   
}

?>
<div class=" container-fluid px-4 py-5" >
<h2>Newlester</h2>
<form class="row g-3" action="" method="post">
  
  <div class="col-auto">
    <label for="inputPassword2" class="visually-hidden">Password</label>
    <input type="Email" name="email" class="form-control" id="inputPassword2" placeholder="example@gamil.com">
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Inscrivez-vous</button>
  </div>
</form>
</div>

<?php require ("footer.php") ?>