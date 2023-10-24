<?php
function MaxEtMin($value)
{
    if (count($value) > 0) {
        $min = $value[0];
        $max = $value[0];
        for ($i = 0; $i < count($value); $i++) {
            $min = $value[$i] < $min ? $value[$i] : $min;
            $max = $value[$i] > $max ? $value[$i] : $max;
        }
        echo "la valeur minimumal de ce tableau est $min et la valeur maximal de ce tableau est $max";
    } else {
        echo "le tableau est vide";
    }
}
MaxEtMin([15, 28, 30, 30, 45, 1]);
