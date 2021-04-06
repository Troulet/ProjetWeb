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
use App\Models\Postulate;

class AuthController extends Controller 
{

    public function Login(Request $request)
    {
        /*$user = new Users;
        //$user = Users::find();
        $password = 'admin';
        $passwordcrypt = \Hash::make($password);
        $user->email = 'admin@gmail.com';
        $user->First_Name = 'Jean-Aymeric';
        $user->Last_Name = 'Diet';
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
                $dataInform4 = InformController::GetInform4(Auth::id());
                $user = new UsersController;
                $dataInform4 = InformController::GetInform4(Auth::id());
                switch ($user->Get_Table(Auth::id()))
                {
                    case 2 :
                        return View::make('welcome/welcome_admin_template')->with('user_type', 2)->with('dataInform4', $dataInform4);
                        break;

                    case 0 :
                        $dataOffer = ObjectController::objtoArray(Internship::tablereturn());
                        $dataEnterprise =  ObjectController::objtoArray(Enterprise::tablereturn());
                        return View::make('welcome/welcome_student_template')->with('user_type', 0)->with('dataOffer', $dataOffer)->with('dataEnterprise', $dataEnterprise);
                        break;

                    case 1 :
                        return View::make('welcome/welcome_pilot_template')->with('user_type', 1);
                        break;

                }
                return View::make('login/login');

                //Renvoyer une vue si l'utilisateur n'appartient à aucune des tables
                 
            }
            else
            {
                echo 'erreur de champs de connexion.';
                return View::make('login/login');
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
