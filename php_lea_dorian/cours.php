<?php
require_once('bdd_objet.php');

$article = 	BDD::getInstance()->SelectOneBy("SELECT * FROM article WHERE ID=:id", array (':id'=>1));



/*$req = "SELECT 	* FROM article WHERE id=:id";
$statement = $dbh->prepare($req);
$statement->execute(array(':id'=>3));
var_dump($statement->fetch());
*/
?>