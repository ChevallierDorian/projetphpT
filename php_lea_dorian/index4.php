<!DOCTYPE html>
<html>
<head>
	<title> Nouvelle Recette </title>
	<link rel="stylesheet" type="text/css" href="site4.css">
</head>
<body>
				<h1> Créer une nouvelle recette </h1>
	
				<form action="index5.php" method="post" id="monForm" align="right">
				<p> Titre : <input type="text" name="Titre" /></p>
				<!--<p> Contenu : <input type="text" name="Contenu" /></p>-->
				<label for="contenu">Contenu : </label><br />
				<textarea name="Contenu" id="Contenu"></textarea>
				<p> Durée de cuisson : <input type="text" name="DureeCuisson" /> Min </p>
				<p> Durée de préparation : <input type="text" name="DureePrepa" /> Min </p>
				<p><input type="submit" name="suivant" value="Suivant"></p>
				</form>


</body>
</html>