<?php
session_start();
require_once('afficherecette.php');

if(!empty($_GET['ID_Recette'])){
	$id = $_GET['ID_Recette'];
}

$recettes = BDD::getInstance()->getDb();

$statement = $recettes->prepare("SELECT * FROM recettes WHERE ID_Recette=?");
$statement-> execute(array($id));
$item = $statement->fetch();

echo $item['Titre']; ?>
<br /> <?php
echo $item['Contenu']; ?> 
<br /><?php
echo $item['DureePrepa'];?> 
<br /><?php
echo $item['DureeCuisson']; 


?>
<!DOCTYPE html>
<html>
	<head>
		<title>Contenu de recette</title>
	</head>
		<body>
			<form action="afficher_recette.php?ID_Recette=<?= $_GET['ID_Recette']?>" method="post">
			<textarea id="com" name="com" rows="5" cols="33"></textarea>
			<h2> <input type="submit" name="add_com" value="Ajouter un commentaire" for="com"> </h2>
			<a href="index2.php">Revenir à la page principale</a>
			<?php
				if (isset($_POST['add_com'])) {
					$texte_co = $_POST['com'];

					$statement2 = $recettes->prepare("INSERT INTO commentaires(texte_c) VALUES (?)");
					$statement2->execute(array($texte_co));
				}
				
				$statement3 =$recettes->prepare("SELECT texte_c FROM commentaires");
				$statement3-> execute();
				$item_C = $statement3->fetch();
			?>
			<h2>Commentaires : </h2></p>
			<?php
				foreach ($statement3->fetchAll() as $item_Co) {
					echo $item_Co['texte_c']; ?>
					<br />
					<?php
				}	
			?>
		</body>
</html>