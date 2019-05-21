<?php session_start(); ?>

<!DOCTYPE html>
<html>
	<head>
		<title> Créer un compte </title>
		
		<link rel="stylesheet" type="text/css" href="site.css">
	</head>
		<body>

  			<h1>Créer un compte</h1>
		
			<form action="cobdd.php" method="post" id="monForm" align="right">
				<p> Nom : <input type="text" name="Nom" /></p>
				<p> Prénom : <input type="text" name="Prenom" /></p>
				<p> Pseudo : <input type="text" name="Pseudo" /></p>
				<p> Age : <input type="text" name="Age" /></p>
				<p> Mot de passe : <input type="password" name="Mot_de_passe"></p>
				<p> Adresse mail : <input type="text" name="adresse_mail"></p>
				<p><input type="submit" name="suivant" value="Suivant"></p>

				<p> Vous avez déjà un compte ? <a href="index3.php"> Connectez vous ici </a> </p>
			</form>
		</body>
</html>