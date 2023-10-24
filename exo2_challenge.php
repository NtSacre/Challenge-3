<?php
function MultiplicationNombre($nombre)
{
    if ($nombre >= 0) {
        for ($i = 0; $i <= 10; $i++) {
            echo "$nombre x $i = " . ($nombre * $i) . "<br>";
        }
    } else {
        echo "le nombre ne doit pas etre positif";
    }
}
// MultiplicationNombre(-1);

if (isset($_POST['envoyer']) && isset($_POST['nombre'])) {
    $nombre = "";
    if (is_numeric($_POST['nombre'])) {
        $nombre = intval(strip_tags($_POST['nombre']));
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table de multiplication d'un nombre</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="nombre" id="">
        <input type="submit" name="envoyer" id="">

    </form>
    <div><?= isset($nombre) ? MultiplicationNombre($nombre) : "" ?></div>
</body>

</html>