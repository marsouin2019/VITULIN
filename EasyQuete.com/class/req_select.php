<?php

include("connect.php");

// afficher information de connexion
print_r($mysqli);


// requete de selection de la table users
$resultat = $mysqli->query("SELECT * FROM clients");

print_r($resultat);