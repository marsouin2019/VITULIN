<?php

// Fonctions utilisateurs

/**
* Vérifie qu'une chaîne de caractères est comprise entre min et max
* @param $string La chaîne de caractère
* @param $min La longueur minimum
* @param $max La longueur maximum
* @return boolean Retourne true si la longueur est ok, false sinon
*/
function checkMinAndMaxLength($str, $min = 1, $max = 255) {
    
    if(!is_string($str)) {
        trigger_error('Le 1er paramètre n\'est pas une chaîne de caractères valide !', E_USER_WARNING);
        return false;
    }
    if(!is_integer($min) || $min < 0) {
        trigger_error('Le 2e paramètre min n\'est pas un entier positif', E_USER_WARNING);
        return false;
    }
    if(!is_integer($max) || $max < 0) {
        trigger_error('Le 3e paramètre max n\'est pas un entier positif', E_USER_WARNING);
        return false;
    }

    return strlen($str) >= $min && strlen($str) <= $max;
}


function calculTTC($prixHT, $tva = 20){

    if(!empty($prixHT) && !is_numeric($prixHT)) {
        trigger_error('Le prix HT doit être de type numérique ou non vide !', E_USER_WARNING);
        return false;
    }

    $tvaAvailable = [5.5, 10, 20];
    if(!in_array($tva, $tvaAvailable)) {
        trigger_error('La TVA doit être 5.5, 10 ou 20 !', E_USER_WARNING);
        return false;
    }
    return round($prixHT * (1 + ($tva/100)), 2, PHP_ROUND_HALF_DOWN);
}

function calculTotal($tabMontants){

    return array_sum($tabMontants);
}

?>