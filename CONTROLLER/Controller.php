<?php

include "../MODEL/Model_User.php";

class Controller
{
	private $User;
	private $Enterprise;
	private $Offer;
	private $Candidate;

	public function CONNECTION($Login, $Mdp)
	{
		$this->User[] = new Model_User;
		$this->User[0]->SET_Mail($Login);
		$this->User[0]->SET_Password($Mdp);
		if ($this->User[0]->VERIFY_ACCOUNT())
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

switch ($_POST['function_mode'])
{
	case 'connection' :
		$state = $Controller->CONNECTION($_POST['Login'], $_POST['Mdp']);
		if($state)
		{

		}
		echo json_encode($state);
		break
}

