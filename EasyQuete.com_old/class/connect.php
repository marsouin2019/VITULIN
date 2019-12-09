<?php
// connexion base de donnees dweb

// mysqli_connect()   // connexion database
// mysqli_query()     // requete sql 
// mysqli_fetch_assoc()  // stocker resultat requete


// informations sur la connexion
/*
- localhost ou 127.0.0.1 ou bien google.com
- user de connexion
- password de connexion
- database

*/

// definir les constantes de connexion
define("SERVEUR", "localhost");
define("USER", "easyq");
define("PASSWORD", "5nq4S8WYc4");
define("DATABASE", "easyquete");


// connexion database
$mysqli = mysqli_connect(SERVEUR, USER, PASSWORD, DATABASE);

// verification connexion brut
//print_r($mysqli);


// afficher erreur de connexion
if (!$mysqli) {
    echo "Erreur : Impossible de se connecter à MySQL." . PHP_EOL;
    echo "Errno de débogage : " . mysqli_connect_errno() . PHP_EOL;
    echo "Erreur de débogage : " . mysqli_connect_error() . PHP_EOL;
    exit;
}

// afficher message de connexion reussie
//echo "connexion ok";