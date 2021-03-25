<?php
session_start();
require ('../CONTROLLER/Controller.js')

//ajout d'un switch case avec $_GET['action'] = Offre par exemple

if (isset($_SESSION['page']))
{
	switch ($_SESSION['page'])
	{
		case 'Home' :

	}
}
else
{
	//Afficher la page d'Authentification
}
