<?php 
function checkbox(string $name , string $value , array $data ):string{

    $attributes = '';
    if(isset($data[$name]) && in_array($value ,$data[$name])){
        $attributes .= 'checked';
    }
    return <<<HTML
    <input type="checkbox" name= "{$name}[]" value=$value $attributes>
HTML;
}
function radio(string $name , string $value , array $data ):string{
    $attributes = '';
    if(isset($data[$name]) && $value == $data[$name]){
        $attributes .= 'checked';
    }
    return <<<HTML
    <input type="radio" name= "$name" value=$value $attributes>
HTML;
}
function creneauHtml(array $data):String{
   if(count($data)=== 0){
     return "Fermé";
   }
      $phrases = [];
      foreach($data as $creneau){
            $phrases [] = "<strong> {$creneau[0]}h a {$creneau[1]}h</strong>";
      }
      return 'Ouvert' .implode('et', $phrases);
}