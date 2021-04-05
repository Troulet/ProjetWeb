<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Crypt;
use App\Models\Pilot;
use App\Models\Users;
use App\Models\Internship;
use App\Models\Enterprise;

class AuthController extends Controller 
{

    public function Login(Request $request)
    {
        /*We securize the password by encrypting it.
        We also need it encrypted to be compared on the database*/

        /*$user = new Users;
        //$user = Users::find();
        $password = 'licorne4568';
        $passwordcrypt = \Hash::make($password);
        $user->email = 'clem@gmail.com';
        $user->First_Name = 'Jarvis';
        $user->Last_Name = 'Simba';
        $user->password = $passwordcrypt;
        $user->remember_token = $request['_token'];
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
                 $user = new UsersController;
                 switch ($user->Get_Table(Auth::id()))
                 {
                    case 2 :
                        return View::make('welcome/welcome_admin')->with('user_type', 2);
                        break;

                    case 0 :
                        $dataOffer = ObjectController::objtoArray(Internship::tablereturn());
                        $dataEnterprise =  ObjectController::objtoArray(Enterprise::tablereturn());
                        return View::make('welcome/welcome_template')->with('user_type', 0)->with('dataOffer', $dataOffer)->with('dataEnterprise', $dataEnterprise);
                        break;

                    case 1 :
                        return View::make('welcome/welcome_pilot')->with('user_type', 1);
                        break;

                };

            //Renvoyer une vue si l'utilisateur n'appartient à aucune des tables
                 
             }
             else
             {
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
