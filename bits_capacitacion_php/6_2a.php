<?php

$strings = [
    " Lorem ipsum dolor sit amet drupal, consectetur adipiscing elit. Etiam sapien Drupal mauris, vestibulum quis mattis sit amet.",
    "Praesent elementum urna et Drupal condimentum DRUPAL vulputate blandit. Vestibulum eget ipsum Drupal sapien consequat vulputate Drupal. ",
    "Phasellus laoreet eu drupal orci et tincidunt. Quisque ac drupal gravida sem, non eleifend erat DrUPal."
   ];

   $longitud = count($strings);
   
   for($i = 0; $i < $longitud; $i++) {
        
        
     echo strlen($strings[$i]) . " Cadena ". ($i+1) . "<br>";
     echo "<br>";
     echo "La longitud de la cadena " . ($i+1) . " es de " . strlen(preg_replace("/^(\s)/", "", $strings[$i])) . " sin espacios al inicio <br>";
     echo "La longitud de la cadena " . ($i+1) . " es de " . strlen(preg_replace("/(\s$)/", "", $strings[$i])) . " sin espacios al final <br>";
     echo "Hay " . substr_count($strings[$i], ' ') . " espacios en la cadena " . ($i+1) . "<br>";
     echo preg_replace("/drupal/i", "<strong>Drupal</strong>", $strings[$i]) . "<br>";
     echo "La palabra (Drupal) esta " . substr_count(preg_replace("/drupal/i", "Drupal", $strings[$i]), 'Drupal') . " veces en la cadena " . ($i+1) . " <br><br>";
             
   };
     echo strlen($strings[0]) + strlen($strings[1]) + strlen($strings[2]) . " Total caracteres en las tres cadenas <br><br>";
     echo "El total de espacios de las tres cadenas es: "; echo substr_count($strings[0], ' ') + substr_count($strings[1], ' ') + substr_count($strings[2], ' ') . "<br><br>";
     echo "El total de veces que aparece la palabra (Drupal) en las tres cadenas es: ";
     echo substr_count(preg_replace("/drupal/i", "Drupal", $strings[0]), 'Drupal') + substr_count(preg_replace("/drupal/i", "Drupal", $strings[1]), 'Drupal') + substr_count(preg_replace("/drupal/i", "Drupal", $strings[2]), 'Drupal') . "<br><br>";

?>