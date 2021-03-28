<?php

interface Interface_Abstract_BDD
{
	protected $bdd;

	protected function INITIALIZE()
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
}