<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Validator</title>
	<link rel="stylesheet" href="assets/css/style.css">
	
</head>
<body>
	<div class="container">
		<form id="form" class="form" action="index.php" method="POST">
			<h2>Connexion </h2>
			<div class="form-control">
				<label for="username">Nom d'utilisateur</label>
				<input type="text" id="username" placeholder="Enter username" name="username">
				<small>Validation Error !</small>
			</div>
			<div class="form-control">
				<label for="password">Mot de Passe</label>
				<input type="password" id="password" placeholder="Enter password" name="password">
				<small>Validation Error !</small>
			</div>
			<button type="submit" name="connexion">Se connecter</button>
			<a href="http://localhost/PHP/exam/pages/inscription.php"> s'inscrire</a>
		</form>

	</div>

</body>
</html>

