<?php 

namespace App\Http\Controllers;

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
            if ($request->input('Cookie') == true)
            {
                $_COOKIE['Login'] = $request->input('Login');
                $Login = $_COOKIE['Login'];
                $_COOKIE['Password'] = $request->input('Password');
                $Password = $_COOKIE['Password'];
            }
            else
            {
                $_SESSION['Login'] = $request->input('Login');
                $Login = $_SESSION['Login'];
                $_SESSION['Password'] = $request->input('Password');
                $Password = $_SESSION['Password'];
            }

            /*We redirect the user on the correct page*/
            $User = new UsersController;
            switch ($User->Get_Table($Login))
            {
                case 'administrator' :
                    return View::make('welcome_admin');
                    break;

                case 'student' :
                    return View::make('welcome_student');
                    break;

                case 'pilot' :
                    return View::make('welcome_pilot');
                    break;
            }

            //Renvoyer une vue si l'utilisateur n'appartient à aucune des tables
        }
    }

    public function Logout()
    {
        if (isset($_COOKIE['Login']) AND isset($_COOKIE['Password']))
        {
            unset($_COOKIE['Login']);
            unset($_COOKIE['Password']);
            return View::make('login');
        }
        elseif (isset($_SESSION['Login']) AND isset($_SESSION['Password']))
        {
            unset($_SESSION['Login']);
            unset($_SESSION['Password']);
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
            'Login' => 'required|email|exists:users,Mail',
            'Pasword' => 'required|alpha_num|exists:users,Password',
            'Cookie'=> 'boolean',
        ]);

        //if the inputs are not validated, we came back on the previous page.
        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }
        else
        {
            return true;
        }
    }
}
