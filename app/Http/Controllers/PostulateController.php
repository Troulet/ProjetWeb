<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postulate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class PostulateController extends Controller 
{
    protected $postulate;

    function __construct()
    {
        $this->postulate = new Postulate;
    }

    public function Create(Request $request){
        $this->postulate->Internship_id = $request->Internship_id;
        $this->postulate->Student_id = Auth::id();
        $this->postulate->Curiculum_Vitae = $request->Curiculum_Vitae;
        $this->postulate->Motivation_Letter = $request->Motivation_Letter;
        $this->postulate->Response_State = 0;
        $this->postulate->Mail_Content = $request->Mail_Content;
        $this->postulate->save();
    }

    public function Update(Request $request){
        if($request->Response_State == "Pas de réponse")
        {
            $Response_State = 0;
        }
        elseif($request->Response_State == "Oui")
        {
            $Response_State = 2;
        }
        elseif($request->Response_State == "Non")
        {
            $Response_State = 1;
        }

        Postulate::where('Internship_id', $request->Internship_id)
            ->where('Student_id', Auth::id())
            ->update(['Response_State' => $Response_State]);
    }

    public function GetCreatePage(Request $request)
    {
        $user = new UsersController;
        switch($user->Get_Table(Auth::id()))
        {
                case 0 :
                    return View::make('create/form_postulate')->with('user_type', 0)->with('Internship_id', $request->id);
                    break;

        }
    }

    public function GetPostulatePage(Request $request)
    {
        $user = new UsersController;
      switch ($user->Get_Table(Auth::id()))
            {
                case 0 :
                    return View::make('postulate/postulate_template')->with('user_type', 0)->with('dataOffer', ObjectController::objtoArray(Postulate::GetPostulate(Auth::id())));
                    break;
            }


    }
    public function ViewCV(Request $request)
    {
      $user = new UsersController;
      switch ($user->Get_Table(Auth::id()))
            {
                case 0 :
                    return View::make('postulate/show_pdf')->with('user_type', 0)->with('data', $request->PDF);
                    break;
            }
    }
}
