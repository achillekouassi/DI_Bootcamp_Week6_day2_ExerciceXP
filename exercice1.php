<?php
if (!empty($_GET)) {
    $nb1 = $_GET["nb1"];
    $nb2 = $_GET["nb2"];
    $somme = $nb1 + $nb2;
    echo "la somme de " . $nb1 . " et " . $nb2 . " est: " . $somme;

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
    <form method="get">
        <label for="">Nombre 1</label>
        <input type="number" name="nb1">
        <label for="">Nombre 2</label>
        <input type="number" name="nb2">
        <input type="submit">
    </form>
</body>
</html>