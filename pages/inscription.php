<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Validator</title>
	<link rel="stylesheet" href="../assets/css/style.css">
	
</head>
<body>
	<div class="container">
		<form id="form" class="form" action="http://localhost/PHP/exam/" method="POST">
			<h2>Inscription</h2>
			<div class="form-control">
				<label for="username">  Prenom </label>
				<input type="text" id="username" placeholder="Enter username" name="prenomClient">
				<small>Validation Error !</small>
			</div>
            <div class="form-control">
				<label for="username">  Nom </label>
				<input type="text" id="username" placeholder="Enter username" name="nomClient">
				<small>Validation Error !</small>
			</div>
            <div class="form-control">
				<label for="username">  Adresse </label>
				<input type="text" id="username" placeholder="Enter username" name="adresseClient">
				<small>Validation Error !</small>
			</div>
            <div class="form-control">
				<label for="username">  Tel </label>
				<input type="text" id="username" placeholder="Enter username" name="telClient">
				<small>Validation Error !</small>
			</div>
            <div class="form-control">
				<label for="username">  Email </label>
				<input type="email" id="username" placeholder="Enter username" name="emailClient">
				<small>Validation Error !</small>
			</div>
            <select class="form-select" aria-label="Default select example" name="genreClient">
                <option selected>Genre</option>
                <option value="M">M</option>
                <option value="F">F</option>
            </select>
            <div class="form-control">
				<label for="username">  NIN </label>
				<input type="text" id="username" placeholder="Enter username" name="NIN">
				<small>Validation Error !</small>
			</div>
            <div class="form-control">
				<label for="username">  Login </label>
				<input type="text" id="username" placeholder="Enter username" name="login">
				<small>Validation Error !</small>
			</div>
			<div class="form-control">
				<label for="password">Mot de Passe</label>
				<input type="password" id="password" placeholder="Enter password" name="password">
				<small>Validation Error !</small>
			</div>
			<button type="submit" name="inscrire">S'Inscrire</button>
			<a href="http://localhost/PHP/exam/"> Se connecter</a>
		</form>

	</div>

</body>
</html>

