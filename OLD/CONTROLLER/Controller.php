<?php
session_start();
require "../MODEL/Model_User.php";

function connection($mail, $password)
{
	$User = new Model_User;
	$User->SET_Mail($mail);
	$User->SET_Password($password);
	if ($User->VERIFY_ACCOUNT())
	{
		return $User->GET_USER_TABLE;
	}
	else 
	{
		return 'access denied';
	}
}


$Controller = new Controller();

switch ($_POST['function_mode'])
{
	case 'connection' :
		$state = connection($_POST['login'], $_POST['password']);
		if($state == 'acess denied')
		{
			//thrown an USER_WARNING and get back to Connection.php
		}
		else 
		{
			return $state;
        }
		break;
}

