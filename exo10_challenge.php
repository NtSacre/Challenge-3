<?php
function FcfaTofrguinee($nombre)
{
    echo $nombre > 0 ? "$nombre fcfa fait " . ($nombre * 13.7) . " franc guinéen" : "le montant ne doit pas etre négative $nombre";
}
FcfaTofrguinee(10);
