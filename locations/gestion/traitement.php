<?php
// traitement du formulaire register
print_r($_POST);


var_dump($_POST["frmNom"]);

foreach(POST as $key => $value)
{
        if( str_word_count(htmlentities(strip_tags($value))) < 25) 
        {
                echo "$key valeur".htmlentities(strip_tags($value)). "<br />";
        } else {
                echo "La chaine correspondant à $key, n'est pas valide <br />";
        }
        //echo $key . " valeur ". htmlspecialchars($value) . "<br />";

}



print_r(password_hash($_POST["frmPass"], PASSWORD_DEFAULT));


$salt = " marsouins ";

$salt = md5($salt);

echo md5($salt.$_POST["frmPass"]);









?>