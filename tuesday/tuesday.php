<!--

    Changer la couleur de fond de la div "square" en fonction de la couleur choisi
    dans l'input "squareColor"

-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div id="container">
        <form method="post">
            <input type="color" name="squareColor" id="squareColor">
            <input type="submit" value="Changer">
        </form>

        <div id="square">
        </div>
    </div>

    
</body>
</html>