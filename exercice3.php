<?php
if (!empty($_GET)) {
    $note = $_GET["note"];

    if ($note >= 60) {
        echo "la note sera la première division";
    } elseif (($note >= 45) && ($note <= 59)) {
        echo "la note sera la deuxième division";
    } elseif (($note >= 33) && ($note <= 44)) {
        echo "la note sera la troisième division.";
    } elseif ($note < 33) {
        echo "l'étudiant sera en échec";
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
    <label for="">Entrer une note</label>
    <input type="number" name="note">
    <input type="submit">
    </form>

    <?php 

    ?>
</body>

</html>