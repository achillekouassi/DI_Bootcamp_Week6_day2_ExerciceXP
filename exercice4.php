<?php
if (!empty($_GET)) {
    $jour = $_GET["jour"] ?? "";

    if ($jour == 1) {
        echo "Lundi";
    } elseif ($jour == 2) {
        echo "Mardi";
    } elseif ($jour == 3) {
        echo "Mercredi";
    } elseif ($jour == 4) {
        echo "Jeudi";
    } elseif ($jour == 5) {
        echo "Vendredi";
    } elseif ($jour == 6) {
        echo "Samedi";
    } elseif ($jour == 7) {
        echo "Dimanche";
    } else {
        echo "Le jour n'existe pas";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <form method="get">
    <label for="">Entrer un chiffre compris de 1 à 7</label><br>
    <input type="number" name="jour">
    <input type="submit">
    </form>

    <?php 

    ?>
</body>

</html>