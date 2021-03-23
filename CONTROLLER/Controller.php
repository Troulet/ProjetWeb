<?php

include "../MODEL/Model_User.php";

class Controller
{
	private $User;
	private $Enterprise;
	private $Offer;
	private $Candidate;
	private $bdd;

	private function INITIALIZE()
	{
		try
		{
			$this->bdd = new PDO('mysql:host=localhost;dbname=projet web', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		}
		catch(Exception $e)
		{
			die("Erreur".$e->getMessage());
		}
	}

	public function CONNECTION($Login, $Mdp)
	{
		$this->INITIALIZE();
		$this->User[] = new Model_User;
		$this->User[0]->SET_Mail($Login);
		$this->User[0]->SET_Password($Mdp);
		if ($this->User[0]->VERIFY_ACCOUNT($this->bdd))
		{
			return true;
		}
		else 
		{
			return false;
		}
	}
}

$Controller = new Controller();
if ($_POST['function_mode'] = 'connection')
{
	$state = $Controller->CONNECTION($_POST['Login'], $_POST['Mdp']);
	echo json_encode($state);
}
?>
