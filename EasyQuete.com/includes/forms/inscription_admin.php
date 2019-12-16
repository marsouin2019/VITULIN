<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link rel="stylesheet" href="css/admin.css">
	</head>
	<body>
		<div class="login">
			<h1>Inscription d'admin</h1>
			<form action="traitement.php" method="POST">
				<label for="firstname">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="firstname" placeholder="Votre prénom" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Votre mot de passe" id="password" required>
			    <input type="submit" name="" value="S'inscrire">
			</form>
		</div>
	</body>
</html>