<?php



class BDD
{
	private static $instance = null;
	private $db;
	private $debug;


	public function __construct($debug=true)
	{
		$this->debug=$debug;

			//$this->db = new PDO($dsn, $user, $password);


		try
		{

			$this->db = new PDO('mysql:host=localhost;dbname=coursbdd;charset=utf8','root','');
			
		}
		catch(PDOException $e) {
			echo 'Connexion echouée : ' .$e->getMessage();
		}
	}
	public static function getInstance() : BDD {
		if (BDD::$instance == NULL)
		{
			BDD::$instance = new BDD();
		}
		return BDD::$instance;
	}

	public function SelectOneBy($req, array $arg)
	{
		$statement = $this->db->prepare($req);
		$statement->execute($arg);

		($this->debug)?$statement->debugDumpParams():'';

		return $statement->fetchAll();
	}
}


?>