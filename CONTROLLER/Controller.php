<?php
session_start();
require "../MODEL/Model_User.php";

function connection($mail, $password)
{
	User = new Model_User
	User->SET_Mail($mail)
	User->SET_
}


$Controller = new Controller();

switch ($_POST['function_mode'])
{
	case 'connection' :
		$state = connection($_POST['login'], $_POST['password']);
		if($state)
		{

		}
		echo json_encode($state);
		break
}

