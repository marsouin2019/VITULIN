<?php

session_start();

require_once 'inc/connect.php';

$error = []; 
$post = array();
$formValid = false;

if(!empty($_POST)){
	foreach($_POST as $key => $value){
		$post[$key] = trim(strip_tags($value));
	}

	if(strlen($post['firstname']) < 3){
		$error[] = 'Le prénom doit faire au moins 3 caractères';
	}
	
	if(strlen($post['lastname']) < 3){
		$error[] = 'Le nom doit faire au moins 3 caractères';
	}

	if(!filter_var($post['email'], FILTER_VALIDATE_EMAIL)){
		$error[] = 'L\'adresse email est invalide';
	}

	if(strlen($post['password']) < 3 || strlen($post['password']) > 20){
		$error[] = 'Le mot de passe doit comporter entre 3 et 20 caractères maximum';
	}

	if(count($error) > 0){
		$formError = true;
	}
	else {
		$req = $bdd->prepare('INSERT INTO users (firstname, lastname, email, password) VALUES(:prenom, :nom, :email, :mdp)');
		$req->bindValue(':prenom', $post['firstname'], PDO::PARAM_STR);
		$req->bindValue(':nom', $post['lastname'], PDO::PARAM_STR);
		$req->bindValue(':email', $post['email'], PDO::PARAM_STR);
		$req->bindValue(':mdp', password_hash($post['password'], PASSWORD_DEFAULT), PDO::PARAM_STR);
		
		if($req->execute()){
			$createSuccess = true;
			header('Location: connexion.php'); // On redirige vers la page de connexion
			die();
		}
	}
}
?><!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<?php 
		if(isset($formError) && $formError){ 
			echo '<p class="error">'.implode('<br>', $error).'</p>';
		}
		if(isset($createSuccess) && $createSuccess){
			echo '<p class="success">Votre inscription est réussie !</p>';
		}
	?>

	<form method="post">

		<label for="firstname">Prénom</label>
		<input type="text" id="firstname" name="firstname" placeholder="Votre prénom.." required>

		<br>
		<label for="lastname">Nom</label>
		<input type="text" id="lastname" name="lastname" placeholder="Votre nom de famille.." required>

		<br>
		<label for="email">Email</label>
		<input type="email" id="email" name="email" placeholder="votre@email.fr">

		<br>
		<label for="password">Mot de passe</label>
		<input type="password" id="password" name="password" placeholder="Un mot de passe super compliqué" required>

		<br>
		<input type="submit" value="Envoyer">

	</form>

</body>
</html>