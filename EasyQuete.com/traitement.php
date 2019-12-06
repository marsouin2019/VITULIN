<?php
//traitement du formulaire register
//print_r($_POST);

//var_dump($_POST["frmPrenom"]);
/*
foreach($_POST as $key => $value)

{
   //echo $key. "valeur". strip_tags($value). "<br />"; &
    if(strlen(htmlentities(strip_tags($value))) < 50)
    {
        echo "la chaine correspondant a $key , n'est pas valide <br />" ;
    }else{
        echo "champ $key correspond à $value <br />";
    }
}

//print_r( password_hash($_POST["frmPass"],PASSWORD_DEFAULT));


//$salt = "MARsouins";

//$salt = md5($salt);

//echo shal(md5($_POST["frmPass"]));

//echo $key correspond à $value

*/
include("class/connect.php");
include("class/add_client.class.php");


// création objet
$addUser = new Personne($mysqli);

// conditions if/else ou un switch/case
switch($_POST["frmForm"]){

    case "frmRegister" :
        // appel methode add_personne
        $addUser->add_user($_POST);
    break;
    case "frmLogin":
        // appel methode login
        $addUser->login($_POST);
    break;
    default :
        // accueil
        // header('Location: http://localhost/eval-e2.com/login.php', replace);

    break;

};


// appel méthode add_user
//$addUser->add_user($_POST);




?>