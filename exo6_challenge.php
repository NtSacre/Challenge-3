<?php
function checkVilleName($villeUser)
{
    $montableauDeVilles = ["Dakar", "Thies"];
    if (strlen($villeUser) > 0) {
        foreach ($montableauDeVilles as $montableau) {
            if (strtolower($montableau) == strtolower($villeUser)) {
                echo "$villeUser existe dans mon tableau";
                return;
            }
        }
        echo "$villeUser n'existe pas dans mon tableau";
    } else {
        echo "Veillez entrer le nom de la ville ";
    }
}

if (isset($_POST['envoyer']) && isset($_POST['ville_user'])) {
    $securiser_Le_nom_de_la_ville = strip_tags($_POST['ville_user']);
    checkVilleName($securiser_Le_nom_de_la_ville);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trouver le nom de la ville</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="ville_user" id="" placeholder="le nom de la ville ici"><br>
        <input type="submit" name="envoyer" value="envoyer">

    </form>
</body>

</html>