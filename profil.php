<?php 

require "header.php";
function donneAge($date_naissance):int{
$am = explode('/', $date_naissance);

$an = explode('/', date('d/m/Y'));
$year1 = intval($an[2]);
$year2 = intval($am[2]);

return $year1 - $year2;
}

if(isset($_POST['age']) && !empty($_POST['age'])){
    
    $age =donneAge($_POST['age']);
  
    if($age>=18){
        $succes = "Vous avez ". $age ." acces a la page";
        $true = true ;
    }else{
        $error = "vous avez ". $age ." , mineure et vous n'avez pas acces a la page";
        $true = false ;
    }
}

?>

<h1>Verification </h1>
<?php if($true):?>
    <h3 > <?=$succes?></h3>
   <?php //header("Location: /contact.php");?>
<?php else :?>

    <h3 > <?=$error?></h3>
<?php endif;?>

<form action="" method="post"  >
    <label for="" class="form-label-sm">Entrez votre  date de naissance</label>
<input type="date" name="age" class="form-control" >
<button type="submit" class="btn btn-primary mb-3">verifier</button>

</form>



<?php require ("footer.php") ?>