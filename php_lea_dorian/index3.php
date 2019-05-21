<?php 
require_once"config.php";
 $id = $nom = $prenom = $pseudo = $age = $mdp = "";
			if($_SERVER["REQUEST_METHOD"] == "POST")
			{
				$pseudo = trim($_POST['Pseudo']);
				$mdp = trim($_POST['Mot_de_passe']);

				//if(!empty($pseudo) AND (!empty($mdp)))
				//{
					$sql = "SELECT id, Pseudo, Mot_de_passe FROM utilisateur where Pseudo = ?";
					if ($stmt = mysqli_prepare($link, $sql))
					{
						mysqli_stmt_bind_param($stmt, "s", $param_pseudo);
						$param_pseudo = $pseudo;

						if(mysqli_stmt_execute($stmt))
						{

							mysqli_stmt_store_result($stmt);
							

							if(mysqli_stmt_num_rows($stmt) == 1)
							{
								mysqli_stmt_bind_result($stmt, $id, $pseudo, $hashedpassword);


								if(mysqli_stmt_fetch($stmt))
								{
									if(password_verify($mdp, $hashedpassword))
									{
										session_start();
										$_SESSION['loggedin'] = true;
										$_SESSION['id']=$id;
										$_SESSION['Pseudo']=$pseudo;
										header("Location: index2.php");
									}
								
								}
								
							}
							
						}
					}
					
				//}
			}

		?>

<!DOCTYPE html>
<html>
<head>
	<title> Connexion </title>
	<link rel="stylesheet" type="text/css" href="site1.css">
</head>
<body>

		<h1>Se connecter </h1>

		<form method="post" id="monForm" align="right">
			<p> Pseudo : <input type="text" name="Pseudo" /></p>
			<p> Mot de passe : <input type="password" name="Mot_de_passe" /></p>
			<a href="index1.php">Pas encore membre ? Inscrivez vous !</a>
			<p><input type="submit" name="connexion" value="Connexion"></p>
		</form>
</body>
</html>