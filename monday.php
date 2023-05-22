<?php
/**
 * 
 * 1/ Créer une couleur aléatoire 
 * (Rappel : une couleur est un assemblage RGB de 3 chiffres de 0 à 255 )
 * 
 * 2/ Afficher en HTML 3 couleurs pour les 3 paragraphes sur la page ci dessous 
 */

 function generateColor()
 {
   $red = rand(0, 255);
   $green = rand(0, 255);
   $blue = rand(0, 255);

   return "#" . dechex($red) . 
               dechex($green) .
               dechex($blue)
   ;
 }

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <p style="color:<?= generateColor()  ?>">Enfin la voilà</p>
    <p style="color:<?= generateColor()  ?>">Semaine tant attendu</p>
    <p style="color:<?= generateColor()  ?>">Youpi, Symfony !</p>
 </body>
 </html>