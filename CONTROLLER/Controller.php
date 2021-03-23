<?php

include "./MODEL/Model_User.php";

class Controller
{
	private User;
	private Enterprise;
	private Offer;
	private Candidate;
	private bdd;

	private function INITIALIZE()
	{
		this->bdd = new PDO('mysql:host=localhost;dbname=projetweb', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}

	public function CONNECTION()
	{
		User[] = new Model_User;
		User[0]->SET_Mail($_POST['Login']);
		User[0]->SET_Password($_POST['Mdp']);
		if (User[0]->VERIFY_ACCOUNT(this->bdd))
		{
			echo "Congratulation my friend !";
		}
		else 
		{
			echo "Why are you lying ?"
		}
	}
}
?>
