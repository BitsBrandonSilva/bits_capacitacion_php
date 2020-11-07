<?php

$strings = [
    " Lorem ipsum dolor sit amet drupal, consectetur adipiscing elit. Etiam sapien Drupal mauris, vestibulum quis mattis sit amet.",
    "Praesent elementum urna et Drupal condimentum DRUPAL vulputate blandit. Vestibulum eget ipsum Drupal sapien consequat vulputate Drupal. ",
    "Phasellus laoreet eu drupal orci et tincidunt. Quisque ac drupal gravida sem, non eleifend erat DrUPal."
   ];

   $longitud = count($strings);
   
   for($i = 0; $i < $longitud; $i++) {
        echo strlen($strings[0]) . " Cadena 1 <br>";
        echo strlen($strings[1]) . " Cadena 2 <br>";
        echo strlen($strings[2]) . " Cadena 3 <br>";
        echo strlen($strings[0]) + strlen($strings[1]) + strlen($strings[2]) . " Total caracteres <br><br>";
        echo "La longitud de la cadena 1 es de " . strlen(preg_replace("/^(\s)/", "", $strings[0])) . " sin espacios al inicio y al final<br>";
        echo "La longitud de la cadena 2 es de " . strlen(preg_replace("/(\s$)/", "", $strings[1])) . " sin espacios al inicio y al final<br>";
        echo strlen($strings[2]) . " Cadena 3 No tiene espacios al inicio y al final <br><br>";
        echo "Hay " . substr_count($strings[0], ' ') . " espacios en la cadena 1<br>";
        echo "Hay " . substr_count($strings[1], ' ') . " espacios en la cadena 2<br>";
        echo "Hay " . substr_count($strings[2], ' ') . " espacios en la cadena 3<br>";
        echo "El total de espacios de las tres cadenas es: "; echo substr_count($strings[0], ' ') + substr_count($strings[1], ' ') + substr_count($strings[2], ' ') . "<br><br>";
        echo preg_replace("/drupal/i", "<strong>Drupal</strong>", $strings[0]) . "<br><br>";
        echo preg_replace("/drupal/i", "<strong>Drupal</strong>", $strings[1]) . "<br><br>";
        echo preg_replace("/drupal/i", "<strong>Drupal</strong>", $strings[2]) . "<br><br>";
        echo "La palabra (Drupal) esta " . substr_count(preg_replace("/drupal/i", "Drupal", $strings[0]), 'Drupal') . " veces en la cadena 1 <br><br>";
        echo "La palabra (Drupal) esta " . substr_count(preg_replace("/drupal/i", "Drupal", $strings[1]), 'Drupal') . " veces en la cadena 2 <br><br>";
        echo "La palabra (Drupal) esta " . substr_count(preg_replace("/drupal/i", "Drupal", $strings[2]), 'Drupal') . " veces en la cadena 3 <br><br>";
        echo "El total de veces que aparece la palabra (Drupal) en las tres cadenas es: ";
        echo substr_count(preg_replace("/drupal/i", "Drupal", $strings[0]), 'Drupal') + substr_count(preg_replace("/drupal/i", "Drupal", $strings[1]), 'Drupal') + substr_count(preg_replace("/drupal/i", "Drupal", $strings[2]), 'Drupal') . "<br><br>";
        break;
   };
?>