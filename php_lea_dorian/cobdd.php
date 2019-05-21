<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
					
					
					$bdd = new PDO('mysql:host=127.0.0.1;dbname=amicale_fulbert', 'root', '');
					
					if(isset($_POST['suivant']))
					{
						$Nom = htmlspecialchars($_POST['Nom']);
						$Prenom = htmlspecialchars($_POST['Prenom']);
						$Pseudo = htmlspecialchars($_POST['Pseudo']);
						$Age = htmlspecialchars($_POST['Age']);
						$Mot_de_passe = password_hash($_POST['Mot_de_passe'], PASSWORD_DEFAULT);
						$adresse_mail = htmlspecialchars($_POST['adresse_mail']);

						$req="INSERT INTO utilisateur(Nom, Prenom, Pseudo, Age, Mot_de_passe, adresse_mail) VALUES('".$Nom."','".$Prenom."','".$Pseudo."','".$Age."','".$Mot_de_passe."','".$adresse_mail."')";
						

						$bdd->exec("INSERT INTO utilisateur(Nom, Prenom, Pseudo, Age, Mot_de_passe, adresse_mail) VALUES('".$Nom."','".$Prenom."','".$Pseudo."','".$Age."','".$Mot_de_passe."','".$adresse_mail."')");


					}
					header('Location:index3.php');
				?>

				


</body>
</html>