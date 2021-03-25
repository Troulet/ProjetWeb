<?php

class Model_User implements Interface_Abstract_BDD
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

	public function VERIFY_ACCOUNT()
	{
		INITIALIZE();
		$query = $this->bdd->prepare("SELECT mail, Mot_de_passe FROM user WHERE Mail = :mail AND Mot_de_passe = :mdp;");

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

	public function GET_USER_TABLE()
	{
		//First we get back the id_User
		INITIALIZE();
		$query = $this->bdd->prepare("SELECT id FROM user WHERE Mail = :mail AND Mot_de_passe = :mdp;");

		$query->bindParam(':mail', $this->Mail, PDO::PARAM_STR);
		$query->bindParam(':mdp', $this->Password, PDO::PARAM_STR);

		//Then we try to find the id in each table
		if(!$query->execute())
		{
			echo 'erreur de requête';
		}
		else
		{
			$result = $query->fetch(PDO::FETCH_LAZY);

			if($result)
			{
				$this->id = $result;
				$table = ['administrateur', 'pilote', 'eleve'];

				for (i=0; $table[i]; i++)
				{
					$query->closecursor();
					$query = $this->bdd->prepare("SELECT id FROM :table WHERE id_User = :id");
					$query->bindParam(':id', $this->id, PDO::PARAM_STR);
					$query->bindParam(':table', $table[i], PDO::PARAM_STR);
					$query->execute()
					$result2 = $query->fetch(PDO::FETCH_LAZY);
					if($result2)
					{
						$query->closecursor();
						return $table[i]
					}
					else 
					{
						$query->closecursor();
					}
				}
			}
			else
			{
				echo 'Aucun utilisateur ne correspond à l\'email ou le mot de passe renseigné' ;
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