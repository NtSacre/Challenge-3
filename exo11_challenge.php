<?php
function DollarToEuro($valeur)
{
    echo $valeur >= 0 ? "$valeur dollar americain vaut " . ($valeur * 0.95) . " euro" : "le montant ne doit etre négative ";
}
DollarToEuro(10);
