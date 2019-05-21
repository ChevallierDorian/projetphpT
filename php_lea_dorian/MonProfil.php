<?php
session_start();
require_once('connexion.php');
$utili = $_SESSION['id'];
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Mon Profil</title>
	</head>
		<body>
			<h1> Option du compte </h1>
			<a href="index2.php">Revenir à la page principale</a>
			<h3>Mes informations personnelles : </h3>
			<?php
			$bdd = new PDO('mysql:host=127.0.0.1;dbname=amicale_fulbert', 'root', '');

			$statement=$bdd->prepare("SELECT Nom, Prenom, Pseudo, adresse_mail FROM utilisateur WHERE id= ?");
			$statement->execute(array($_SESSION['id']));
			$item2 = $statement->fetch();
			?>

			<p><strong>Nom : </strong><?php echo  $item2['Nom']; ?></p>
			<p><strong>Prenom : </strong><?php echo $item2['Prenom']; ?></p>
			<p><strong>Pseudo : </strong><?php echo $item2['Pseudo']; ?></p>
			<p><strong>Adresse e-mail : </strong><?php echo $item2['adresse_mail']; ?></p> 
			<h3>Modifier ses informations : </h3>
			<form action="MonProfil.php?id=<?= $utili?>" method="post">
			<p><strong>Changer de Nom : </strong></p> <input class="changer_nom" type="text" name="ch_nom">
			<input type="submit" name="change_nom" for="ch_nom">
			<p><strong>Changer de Prenom : </strong></p> <input class="changer_prenom" type="text" name="ch_prenom">
			<input type="submit" name="change_prenom" for="ch_prenom">
			<p><strong>Changer de Pseudo : </strong></p> <input class="changer_pseudo" type="text" name="ch_pseudo">
			<input type="submit" name="change_prenom" for="ch_pseudo">
			<p><strong>Changer de Adresse e-mail : </strong></p> <input class="changer_adr_mail" type="text" name="ch_adresse_mail">
			<input type="submit" name="change_prenom" for="ch_adresse_mail">

			<?php
				
				if (empty($_POST['ch_nom'])) {
					$statement2 = $bdd->prepare("SELECT Nom FROM utilisateur WHERE id=?");
					$statement2->execute(array($utili));
					$leNom = $statement2->fetch();

					$statement3 = $bdd->prepare("UPDATE utilisateur Nom =? WHERE id =?");
					$statement3->execute(array($leNom['Nom'],$utili));
				}
				elseif (isset($_POST['ch_nom'])) {
					$statement4 =$bdd->prepare("UPDATE utilisateur SET Nom =? WHERE id=?");
					$statement4->execute(array($_POST['ch_nom'],$utili));
				}
								
				if (empty($_POST['ch_prenom'])) {
					$statement5 = $bdd->prepare("SELECT Prenom FROM utilisateur WHERE id=?");
					$statement5->execute(array($utili));
					$lePrenom = $statement5->fetch();

					$statement6 = $bdd->prepare("UPDATE utilisateur SET Prenom = ? WHERE id=?");
					$statement6->execute(array($lePrenom['Prenom'],$utili));
				}

				elseif (isset($_POST['ch_prenom'])) {
					$statement7 =$bdd->prepare("UPDATE utilisateur SET Prenom =? WHERE id=?");
					$statement7->execute(array($_POST['ch_prenom'],$utili));
				}

				if (empty($_POST['ch_pseudo'])) {
					$statement8 = $bdd->prepare("SELECT Pseudo FROM utilisateur WHERE id=?");
					$statement8->execute(array($utili));
					$lePseudo = $statement8->fetch();

					$statement9 = $bdd->prepare("UPDATE utilisateur Pseudo =? WHERE id =?");
					$statement9->execute(array($lePseudo['Pseudo'],$utili));
				}
				elseif (isset($_POST['ch_pseudo'])) {
					$statement10 =$bdd->prepare("UPDATE utilisateur SET Pseudo =? WHERE id=?");
					$statement10->execute(array($_POST['ch_pseudo'],$utili));
				}
								
				if (empty($_POST['ch_adresse_mail'])) {
					$statement11 = $bdd->prepare("SELECT adresse_mail FROM utilisateur WHERE id=?");
					$statement11->execute(array($utili));
					$l_adresse_mail = $statement11->fetch();

					$statement12 = $bdd->prepare("UPDATE utilisateur SET adresse_mail = ? WHERE id=?");
					$statement12->execute(array($l_adresse_mail['adresse_mail'],$utili));
				}

				elseif (isset($_POST['ch_adresse_mail'])) {
					$statement13 =$bdd->prepare("UPDATE utilisateur SET adresse_mail =? WHERE id=?");
					$statement13->execute(array($_POST['ch_adresse_mail'],$utili));
				}
			?>
		</body>
</html>