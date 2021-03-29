<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller 
{
    public function Login(Request $request)
    {
        $this->Validate($request);

    }

    public function Logout()
    {
        if (isset($_COOKIE['Login']) AND isset($_COOKIE['Password']))
        {
            unset($_COOKIE['Login']);
            unset($_COOKIE['Password']);
            //Retour à l'écran de connexion
        }
        elseif (isset($_SESSION['Login']) AND isset($_SESSION['Password']))
        {
            unset($_SESSION['Login']);
            unset($_SESSION['Password']);
            //Retour à l'écran de connexion
        }
        else
        {
            //Retour à l'écran de connexion
        }

    }

    public function Validate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Login' => 'required|email|exists:users,email',
            'Pasword' => 'required|alpha_num',
            'Cookie'=> 'boolean',
        ]);

        if ($validator->fails()) {
            return redirect('post/create')
                        ->withErrors($validator)
                        ->withInput();
        }
    }
}
