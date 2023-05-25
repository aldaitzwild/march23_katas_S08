<?php
    /*
    Faire en sorte que recharger cette page fasse décrémenter le chiffre affiché de 1.
    Une fois le chiffre arrivé à zéro, recharger la page repasse le compteur à 12
    */
    session_start();
    $number = $_SESSION['number'] ?? 13;
    $number--;

    if($number < 0) {
        session_destroy();
        header('location: thursday.php');
    }

    $_SESSION['number'] = $number
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        h1 {
            font-size: 87pt;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1><?= $number?></h1>
</body>
</html>