<?php
function heightPassword($str)
{
    return strlen($str) >= 8 ? true : false;
}
$erreur = "";


if (isset($_POST['password']) && isset($_POST['envoyer'])) {


    if (heightPassword($_POST['password'])) {
        $bol = "true";
    } else {
        $bol = "false";
    }
} else {
    $erreur = "desolé le formulaire n'a pas été envoyé";
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
        <input type="password" name="password" id="">
        <input type="submit" value="envoyer" name="envoyer">

    </form>
    <div><?= isset($bol) ? $bol : $bol ?></div>

    <div><?= isset($erreur) ? $erreur : "" ?></div>
</body>

</html>