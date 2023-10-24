<?php
// function intostring($value)
// {
//     if (strlen($value) != 0) {
//         $tableauDeCorrespondance = [
//             "1" => "Un",
//             "2" => "Deux",
//             "3" => "Trois",
//             "4" => "Quatre",
//             "5" => "Cinq",
//             "6" => "Six",
//             "7" => "Sept",
//             "8" => "Huit",
//             "9" => "Neuf",
//         ];
//         foreach ($tableauDeCorrespondance as $key => $correspondance) {
//             if ($key == $value) {
//                 echo $correspondance;
//                 return;
//             }
//         }
//     }else{
// echo "la chaine de caractères ne doit pas etre vide.";
//}
// }
// intostring("8");

function intostring($value)
{
    if (strlen($value) > 0) {
        switch ($value) {
            case "1":
                echo "Un";
                break;
            case "2":
                echo "Deux";
                break;
            case "3":
                echo "Trois";
                break;
            case "4":
                echo "Quatre";
                break;
            case "5":
                echo "Cinq";
                break;
            case "6":
                echo "Six";
                break;
            case "7":
                echo "Sept";
                break;
            case "8":
                echo "Huit";
                break;
            case "9":
                echo "Neuf";
                break;
            default:
                echo "Entrer un nombre entre 1 ert 9";
                break;
        }
    } else {
        echo "la chaine de caractère est vide ";
    }
}
intostring("de");
