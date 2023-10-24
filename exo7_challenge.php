<?php
// function est_un_operateur($op)
// {
//     $tableauOperateurs = ["+", "-", "*", "/"];
//     $is_false = false;
//     while (!$is_false) {
//         foreach ($tableauOperateurs as $operateur) {
//             if ($operateur == $op) {
//                 $is_false = true;
//             } else {
//                 $is_false = false;
//             }
//         }
//     }
// }

function Calculatrice($nbr1, $nbr2, $operateur)
{
    if ($operateur != "") {

        switch ($operateur) {
            case "+":
                echo "la somme de $nbr1 + $nbr2 = " . ($nbr1 + $nbr2) . "\n";
                break;
            case "-":
                echo "la difference de $nbr1 - $nbr2 = " . ($nbr1 - $nbr2) . "\n";
                break;
            case "*":
                echo "le produit de $nbr1 x $nbr2 = " . ($nbr1 * $nbr2) . "\n";
                break;
            case "/":
                if ($nbr2 == 0) {
                    echo "la division par $nbr2 n'est pas possible";
                    break;
                } else {
                    echo "la division de $nbr1 / $nbr2 = " . ($nbr1 / $nbr2) . "\n";
                    break;
                }
            default:
                echo "veuillez entrer une opération valide ";
                break;
        }
    } else {
        echo " vous avez oublié l'opérateur";
    }
}
Calculatrice(2, 4, "");
