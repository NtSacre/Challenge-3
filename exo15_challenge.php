<?php
function carreNombre($nombre)
{
    return $nombre * $nombre;
}
$carreNbre = "";
$erreur = '';
if (isset($_POST["envoyer"]) && isset($_POST["carreNombre"])) {
    $carreNbre = strip_tags($_POST["carreNombre"]);
    if (is_numeric($carreNbre)) {
        $carreNbre = intval($carreNbre);
        $carreNbre = carreNombre($carreNbre);
    } else {
        $erreur = "Veuillez entrer un nombre svp!";
    }
} else {
    $erreur = "Le formulaire n'a pas bien été soumis";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="carreNombre" id=""><br />
        <input type="submit" value="Envoyer" name="envoyer">
    </form>
    <div><?= is_numeric($carreNbre) ? $carreNbre : "" ?></div>
    <div><?= isset($erreur) ? $erreur : "" ?></div>
</body>

</html>