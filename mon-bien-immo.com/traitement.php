<?php
// traitement du formulaire register
// print_r($_POST);


// echo($_POST["frmNom"]);

echo "Le nom rentré est ".$_POST['frmNom'];
echo '<br>';
echo "Le prénom rentré est ". $_POST['frmPrenom'];
echo '<br>';
echo "L'email est ".$_POST['frmEmail'];
echo '<br>';
echo "Le mot de passe est ". $_POST['frmPass'];
echo '<br>';
echo "Le mot de passe crypté est ". (password_hash($_POST["frmPass"], PASSWORD_DEFAULT));







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



/* print_r(password_hash($_POST["frmPass"], PASSWORD_DEFAULT));


$salt = " marsouins ";

$salt = md5($salt);

echo md5($salt.$_POST["frmPass"]);

*/







?>