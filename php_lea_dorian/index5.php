<!DOCTYPE html>
<html>
<head>
	<title>Recette enregistrée</title>
	<link rel="stylesheet" type="text/css" href="site5.css">
</head>
<body>
	<?php 

					$bdd = new PDO('mysql:host=127.0.0.1;dbname=amicale_fulbert', 'root', '');

					if(isset($_POST['suivant']))
					{
						$Titre = htmlspecialchars($_POST['Titre']);
						$Contenu = htmlspecialchars($_POST['Contenu']);
						$DureeCuisson = htmlspecialchars($_POST['DureeCuisson']);
						$DureePrepa = htmlspecialchars($_POST['DureePrepa']);

						$req="INSERT INTO recettes(Titre, Contenu, DureeCuisson, DureePrepa) VALUES('".$Titre."','".$Contenu."','".$DureeCuisson."','".$DureePrepa."')";
						

						$bdd->exec("INSERT INTO recettes(Titre, Contenu, DureeCuisson, DureePrepa) VALUES('".$Titre."','".$Contenu."','".$DureeCuisson."','".$DureePrepa."')");
					}
				?>

				<p> Votre recette a bien été ajoutée <br /> <a href="index2.php"> Retour a la page d'accueil </a> </p>

</body>
</html>