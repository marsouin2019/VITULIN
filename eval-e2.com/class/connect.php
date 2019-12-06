<?php

// definir les constantes de connexion
define("SERVEUR","localhost");
define("USER","marsouin");
define("PASSWORD","mrsma");
define("DATABASE","dweb");

// connexion database
$mysqli = mysqli_connect(SERVEUR,USER,PASSWORD,DATABASE);

//print_r($mysqli);

if (!$mysqli) {
    echo "Erreur : Impossible de se connecter à MySQL." . PHP_EOL;
    echo "Errno de déboggage :". mysql_connect_errno() . PHP_EOL;
    echo "Erreur de déboggage :". mysql_connect_error() . PHP_EOL;
    exit;
}
// afficher message de connexion réussie

echo "Succès : Une connexion correcte à MySQL à été faite!";
// echo "Information d'hôte : " . mysqli_get_host_info($mysqli). PHP_EOL;
