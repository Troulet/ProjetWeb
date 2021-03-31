<?php 


namespace App\Http\Controllers;
session_start();

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Crypt;

class AuthController extends Controller 
{
    public function Login(Request $request)
    {
        /*We securize the password by encrypting it.
        We also need it encrypted to be compared on the database*/
        Crypt::encryptString($request->input('Password'));

        if ($this->Validation($request))
        {
            if($request->input('cookie') == true)
            {
                $request->session()->put('Login', $request->input('Username'));
                $Login = $request->session()->get('Login');
                $request->session()->put('Password', $request->input('Password'));
                $Password = $request->session()->get('Password');
            }

            /*We redirect the user on the correct page*/
            $User = new UsersController;
            $Id = $User->GetId($Login);
            switch ($User->Get_Table($Id))
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
            echo 'erreur de champs de connexion.';
        }

    }

    public function Logout(Request $request)
    {
        if ($request->session()->get('Login') !== null OR $request->session()->get('Password') !== null)
        {
            $request->session()->invalidate();
            return View::make('login');
        }
        else
        {
            return View::make('login');
        }

    }

    public function Validation(Request $request)
    {
        $validator = Validator::make($request->all(), [
            '_token' => 'required',
            'Username' => 'required|exists:users,Mail',
            'Password' => 'required|exists:users,Password',
            'cookie' => 'required|boolean|accepted',
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
