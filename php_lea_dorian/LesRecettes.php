<?php session_start(); ?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="site6.css">
		<title></title>
	</head>
		<body>

			<h1>Voici les recettes enregistrées</h1>
			<a href="index2.php">Retour à la page principale</a>

			<div class="phprecette"> 
			        <?php
			        require_once('afficherecette.php');
			        //$recettes = new PDO('mysql:host=localhost;dbname=amicale_fulbert', 'root', '');
			        $recettes = BDD::getInstance()->getDb();
			        //var_dump($recettes);
			        $statement=$recettes->prepare("SELECT * FROM recettes");
			        $statement->execute();
			        //$statement = $recettes->exec("SELECT * FROM recettes");
			        //var_dump($statement->fetchAll());
			        //$statement->fetchAll();
			        ?>
			        <table cellpadding="10" cellspacing="1" width="50%">

			        <?php
			        foreach($statement->fetchAll() as $recettes) 
			        {
			        ?>
			        <tr>

			           <td> <a href="afficher_recette.php?ID_Recette=<?= $recettes['ID_Recette']?>">
			            <?php echo $recettes['Titre']; ?> </a> </td>
			        
			            <!--<td> <?php echo $recettes['Contenu']; ?> </td> -->

			            <!-- <td> <?php echo $recettes['DureePrepa']; ?> </td> 

			            <td> <?php echo $recettes['DureeCuisson']; ?> </td> -->
			            
			        </tr>
			        <?php
			        }
			        ?>

			        </table>
			</div>
						<div class="Rechercher1">
			<form action = "LesRecettes.php" method = "get">
  			<input type = "search" name = "terme">
   			<input type = "submit" name = "s" value = "Rechercher">
  			</form>
  			</div>

		</body>
</html>

