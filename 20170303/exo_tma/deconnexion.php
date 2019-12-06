<?php

session_start();

if(isset($_GET['logout']) && $_GET['logout'] == 'yes'){
	unset($_SESSION['nom'], $_SESSION['prenom'], $_SESSION['email']); 
	header('Location: index.php');
	die();
}
?><!DOCTYPE html>
<html>
<head>
	<title>Déconnexion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>

<?php if(isset($_SESSION['nom']) && isset($_SESSION['prenom']) && isset($_SESSION['email'])): ?>
	<p style="text-align:center;">
		<?php echo $_SESSION['prenom']; ?>, veux-tu te déconnecter ? Vraiment ?

		<br><br>
		<img src="http://ronron.e-monsite.com/medias/images/chaton-triste.jpg" style="height:200px;border-radius:10px;">
	
		<br><br>

		<a href="deconnexion.php?logout=yes">Oui, je veux me déconnecter</a>
	</p>

<?php else: ?>
	<p style="text-align:center;">
		Tu es déjà déconnecté, tu n'existes pas !!

		<br><br>
		<img src="http://captainquizz.s3.amazonaws.com/quizz/551aeb19366880.99678770.jpg" style="height:200px;border-radius:10px;">
	</p>
<?php endif; ?>
</body>
</html>