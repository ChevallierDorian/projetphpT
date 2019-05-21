<!DOCTYPE html>
<html>
<head>
	<title>Mon Profil</title>
</head>
<body>

		<?php 
			define('DB_SERVER', 'localhost');
			define('DB_USERNAME', 'root');
			define('DB_PASSWORD', '');
			define('DB_NAME', 'amicale_fulbert');
			$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

			if(isset($_POST['Connexion']))
			{
				$pseudo = $_POST['Pseudo'];
				$mdp = $_POST['Mot_de_passe'];

				if(!empty($pseudo) AND (!empty($mdp)))
				{
					$requeer = $bdd->prepare("SELECT Nom FROM utilisateur WHERE Pseudo = ? AND Mot_de_passe = ?");
					$sql = "SELECT id, Nom, Mot_de_passe where Mot_de_passe = ?";
					$requeer->execute(array($pseudo, $mdp));
					if ($stmt = mysqli_prepare($link, $sql))
					{
						mysqli_stmt_bind_parameters($stmt, "s", $param_pseudo);
						$param_pseudo = $pseudo;

						if(mysqli_execute($stmt))
						{
							mysqli_stmt_store_result($stmt);
							if(mysqli_stmt_num_row($stmt) == 1)
							{
								mysqli_stmt_bind_result($stmt, $id, $username, $hashedpassword);
								if(mysqli_stmt_fetch($stmt))
								{
									if(password_verify($mdp, $hashedpassword))
									{
										session_start();
										var_dump($userinfo ); die;
										$_SESSION['ID']=$userinfo['ID'];
										$_SESSION['Nom']=$userinfo['Nom'];
										$_SESSION['Mot_de_passe']=$userinfo['Mot_de_passe'];
										//header("Location: index2.php");
									}
								}
							}
						}
					}
					
				}
				else
				{
					echo 'Mauvais Pseudo ou Mot de passe';
				}

			}

		?>
</body>
</html>