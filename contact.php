<?php 
$title = "Nous Contacter" ;
require_once "config.php";
require_once "fonctions.php";

require ("header.php") ?>
<div class=" container-fluid px-4 py-5" >
<h2>Nous contacter</h2>
<div class="row">
    <div class="col-md-4">
        <h2>Horaires d'ouvertures </h2> 
        <ul>
            <?php foreach (JOURS as $k =>$jour):?>accueil
                
            <li><?=$jour?>  <?= $creneaux = creneauHtml(CRENEAUX[$k]) ?></li>
            <?php endforeach ;?>
        </ul>
    </div>
    <div class="col-md-8">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
</div>

</div>
<?php require ("footer.php") ?>