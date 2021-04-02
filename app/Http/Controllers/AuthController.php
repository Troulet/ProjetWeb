<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Crypt;

class AuthController extends Controller 
{
    public function Login(Request $request)
    {
        /*We securize the password by encrypting it.
        We also need it encrypted to be compared on the database*/

        /*$user = new Users;
        $user->find(1);
        $password = 'Lagew929';
        $passwordcrypt = \Hash::make($password);
        $user->email = 'root@gmail.com';
        $user->First_Name = 'Admin';
        $user->Last_Name = 'Admin';
        $user->password = $passwordcrypt;
        $user->save();*/
        
        if ($this->Validation($request))
        {

             $user = array(
                'email' => $request['email'],
                'password' => $request['password']
                );
             if(Auth::attempt($user, $request['_token']))
             {
                 $request->session()->regenerate();
                 /*We redirect the user on the correct page*/
                $User = new UsersController;
                $user = Auth::user();
                switch ($User->Get_Table($user['id']))
                {
                    case 2 :
                        return View::make('welcome_admin')->with('user_type', 2);
                        break;

                    case 0 :
                        return View::make('welcome_student')->with('user_type', 0);
                        break;

                    case 1 :
                        return View::make('welcome_pilot')->with('user_type', 1);
                        break;

                }

            //Renvoyer une vue si l'utilisateur n'appartient à aucune des tables
                 
             }
             else
             {
                echo $dude;
                echo $request['email'];
                echo $request['password'];
	            echo "FAIL";
             }


            
        }
        else
        {
            echo 'erreur de champs de connexion.';
        }

    }

    /*public function Logout(Request $request)
    {
            return View::make('login');
    }*/

    public function Validation(Request $request)
    {
        $validator = Validator::make($request->all(), [
            '_token' => 'required',
            'email' => 'required|exists:users,email|email',
            'password' => 'required',
            'cookie' => 'boolean',
        ]);

        //if the inputs are not validated, we came back on the previous page.
        if ($validator->fails())
        {
            return false;
        }
        else
        {
            return true;
        }
    }

}
