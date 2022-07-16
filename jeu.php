<?php
require "header.php";
require "fonctions.php";
$parfums = [
    "fraises" => 4,
    "vanille" => 5,
    "chocolat" => 6

];
//radioBox
$cornets = [
    "pot" => 2,
    "cornet" => 3
];
$supplements = [
    "pepites " => 1,
    "chantily" => 0.5
];

$ingredients =[];
$total =0 ;
if(isset($_POST['parfum'])){
    foreach($_POST['parfum'] as $parfum){
        if(isset($parfums[$parfum])){
            $ingredients[] = $parfum;
            $total += $parfums[$parfum];
        }
    }
}
if(isset($_POST['supplement'])){
    foreach($_POST['supplement'] as $supplement){
        if(isset($supplements[$supplement])){
            $ingredients[] = $supplement;
            $total += $supplements[$supplement];
        }
    }
}
if(isset($_POST['cornet'])){
    $cornet = $_POST['cornet'];
        if(isset($cornets[$cornet])){
            $ingredients[] = $cornet;
            $total += $cornets[$cornet];
        }
    
}
?>
<h1>Composez votre glace</h1>

<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">
                    votre Glace</h3>
                    <ul>
                    <?php foreach($ingredients as $ingredient) : ?>
                        <li>
                                        <?=$ingredient?>
                          
                        </li>
                        <?php endforeach ;?> 
                    </ul>
                    <Strong>Total: </Strong><?=$total?>$
               

            </div>
        </div>
    </div>
    <div class="col-md-8">
    <form action="/jeu.php" method="post">
    <h3>choice votre parfum</h3>
    <?php foreach ($parfums as $parfum => $prix) : ?>
        <div class="checkbox">   
        <label>
<?=checkbox("parfum",$parfum , $_POST )?>
        <?=$parfum?>- <?=$prix?>$
        </div>  
<?php endforeach ; ?>
<h3> choice votre cornet</h3>
<?php foreach ($cornets as $cornet => $prix) : ?>
        <div class="radio">   
        <label>
<?=radio("cornet",$cornet , $_POST )?>
        <?=$cornet?>- <?=$prix?>$
        </div>  
<?php endforeach ; ?>
<h3>choice votre supplement</h3>
<?php foreach ($supplements as $supplement => $prix) : ?>
        <div class="checkbox">   
        <label>
<?=checkbox("supplement",$supplement , $_POST )?>
        <?=$supplement?>- <?=$prix?>$
        </div>  
<?php endforeach ; ?>

<button type = "submit">Composer ma glace</button>
</form>
    </div>
</div>


<?php require "footer.php";
?>