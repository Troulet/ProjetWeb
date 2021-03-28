<?php
session_start();
require ('../CONTROLLER/Controller.js')

//ajout d'un switch case avec $_GET['action'] = Offre par exemple

if (isset($_GET['page']))
{
	switch ($_GET['page'])
	{
		case 'admin-home' :
			break;

		case 'student-home' :
			break;

		case 'pilot-home' :
			break;


	}
}
else
{
	//Afficher la page d'Authentification
}
