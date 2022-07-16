<?php
function nav_item (string $lien,string $titre):string{
  $html = 'nav-item';
  if($_SERVER['SCRIPT_NAME'] === $lien){
        $html .= 'active';
  }
  return '<li class="'. $html.'">
  <a class="nav-link " href="'.$lien.'"> '.$titre.'</a>
</li>';
  
  
}
?>