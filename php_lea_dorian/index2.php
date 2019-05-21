<?php session_start();
echo 'Bonjour ';
echo $_SESSION['Pseudo'];
echo ' ! ';
?>

<!DOCTYPE html>
<html>
<head>
	<title> Bienvenue </title>
	<link rel="stylesheet" type="text/css" href="site2.css">
</head>
<body>
			<h1> Site de recettes</h1>
			<h2>Amicale du lycée Fulbert</h2>
			


			<div class="Rechercher">
			<form action = "index2.php" method = "get">
  			<input type = "search" name = "terme">
   			<input type = "submit" name = "s" value = "Rechercher">
  			</form>
  			</div>

			<div class="logo">
  			<img src="logo.png" alt="" />
  			</div>



  			<div class="NewRecette">
  			<form action="index4.php" method="post" id="monForm" align="right">
  				<p><input type="submit" name="suivant" value=" Ajouter une nouvelle recette"></p>
  			</form>
  			</div>

        <!--<div class="Logout">
  			<a href="Logout.php">Deconnexion</a>

        </div>-->
        <?php
        $utili = $_SESSION['id'];
        ?>

        <div class="barre">
            <div class="navbar">
              <a href="LesRecettes.php"> Nos Recettes </a>
              <a href="Logout.php" style="float: right;">Deconnexion</a>
              <a href="MonProfil.php?id=<?= $utili?>" style="float: center"> Mon Profil</a>
            </div>



        </div>

        <div class="img1">
          
        </div>

        <div class="img2">
          
        </div>

        <div class="img3">
          
        </div>
</body>
</html>  