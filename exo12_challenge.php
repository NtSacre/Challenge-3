<?php
function strReplace($chaineDecharactere, $aRechercher, $aRemplacer,)
{
    $typeofstring = gettype($chaineDecharactere);
    if ($typeofstring == 'string') {
        $nouvelleChaine = "";
        if (strlen($aRemplacer) == 1 && strlen($chaineDecharactere) > 0 && strlen($aRechercher) == 1) {
            for ($i = 0; $i < strlen($chaineDecharactere); $i++) {
                if (strtolower($chaineDecharactere[$i]) == strtolower($aRechercher)) {
                    $nouvelleChaine .= $aRemplacer;
                } else {
                    $nouvelleChaine .= $chaineDecharactere[$i];
                }
            }
            return $nouvelleChaine;
        } elseif (strlen($aRemplacer) >= 2 && strlen($chaineDecharactere) > 0 && strlen($aRechercher) >= 2) {
            $tableaudemot = explode(' ', $chaineDecharactere);
            for ($i = 0; $i < count($tableaudemot); $i++) {
                if (strtolower($tableaudemot[$i]) == strtolower($aRechercher)) {
                    $tableaudemot[$i] = $aRemplacer;
                }
            }
            $tableaudemot = implode(' ', $tableaudemot);
            return $tableaudemot;
        } else {
            return "veiller Entrer une chaine de caractères valide ";
        }
    } else {
        return "veiller entrer une chaine de caractère ";
    }
}
echo strReplace("hallo world", "h", "H");
