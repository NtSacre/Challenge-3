<?php
function CalculAgeNaissance($annee)
{
    if ($annee > 0) {
        $dateActuelle = date('Y');
        // var_dump($dateActuelle);
        //echo "\n";
        if ($dateActuelle < $annee) {
            echo "==================================================\n";
            echo "vous n'etes pas encore né, l'homme du futur :( \n";
            echo "==================================================\n";
        } else {
            echo "vous avez " . ($age = $dateActuelle - $annee) . " ans \n";
        }
    } else {
        echo "l'année ne doit etre négative \n";
    }
}
CalculAgeNaissance(4000);
