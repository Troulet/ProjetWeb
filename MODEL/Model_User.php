<?php

class Model_User
{
	private $id;
	private $Mail;
	private $Password;
	private $User_First_name;
	private $User_Last_name;
	private $Center;
	private $Promotion;
	private $Delegue;
	private $Right;

	public function VERIFY_ACCOUNT($bdd)
	{
		$query = $bdd->prepare("SELECT mail, Mot_de_passe FROM user WHERE Mail = :mail AND Mot_de_passe = :mdp;");

		$query->bindParam(':mail', $this->Mail, PDO::PARAM_STR);
		$query->bindParam(':mdp', $this->Password, PDO::PARAM_STR);

		if(!$query->execute())
		{
			echo 'erreur de requête';
		}
		else
		{
			$result = $query->fetch(PDO::FETCH_LAZY);

			if($result)
			{
				return true;
			}
			else
			{
				return false;
			}
		}

		$query->closecursor();
	}

	public function GET_id()
	{
		return $this->id;
	}

	public function SET_id($id)
	{
		$this->id = $id;
	}

	public function DELETE_Entry()
	{
	//Supprime une entrée utilisateur basée sur l'id
	}

	public function GET_Mail()
	{
		return $this->Mail;
	}

	public function SET_Mail($Mail)
	{
		$this->Mail = $Mail;
	}

	public function GET_Password()
	{
		return $this->Password;
	}

	public function SET_Password($Password)
	{
		$this->Password = $Password;
	}

}

?>