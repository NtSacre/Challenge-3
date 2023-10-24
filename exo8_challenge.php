<?php
// function ListeDenombrePiare($nombre)
// {
//     $tabNombrePaire = [];
//     if ($nombre > 0 && is_numeric($nombre)) {
//         for ($i = 1; $i <= $nombre; $i++) {
//             if ($i % 2 == 0) {
//                 $tabNombrePaire[] = $i;
//             }
//         }
//         return $tabNombrePaire;
//     } else {
//         return $tabNombrePaire;
//     }
// }
// $NbrPaire = ListeDenombrePiare("1");
// if (count($NbrPaire) > 0) {
//     foreach ($NbrPaire as $pair) {
//         echo $pair . "\n";
//     }
// } else {
//     echo "Aucun nombre paire, la saisi doit etre un nombre positive";
// }

function ListeDenombrePaire($list)
{
    $typeliste = gettype($list);

    if ($typeliste === "array") {
        $tableauNbrPaire = [];
        if (count($list) != 0) {

            for ($i = 0; $i < count($list); $i++) {
                if (is_numeric($list[$i]) && $list[$i] % 2 == 0) {
                    $tableauNbrPaire[] = $list[$i];
                }
            }
            return $tableauNbrPaire;
        } else {
            return $tableauNbrPaire;
        }
    } else {
        return ["cette fonction ne prend qu'en parametre un tableau d'entier"];
    }
}
$NbrePaire = ListeDenombrePaire(["de"]);

if (count($NbrePaire) != 0) {
    foreach ($NbrePaire as $paire) {
        echo $paire . "\n";
    }
} else {
    echo "Aucun nombre paire, la saisi doit etre un nombre positive";
}
