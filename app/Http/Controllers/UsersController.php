<?php 

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Localisation;

class UsersController extends Controller 
{

  protected $user;
  protected $student;
  protected $administrator;
  protected $pilot;

  public function GetId($Login)
  {
    return $this->user->GetId($Login);
  }

  public function Get_Table($id)
  {
      $table = [$this->student, $this->pilot, $this->administrator];
      for ($i=0; isset($table[$i]); $i++)
      {
        if($table[$i]->GetById($id) !== null)
        {
            $reponse = $i;
        }
      }
      return $reponse;
  }

  function __construct()
  {
      $this->user = new Users;
      $this->student = new StudentController;
      $this->pilot = new PilotController;
      $this->administrator = new AdministratorController;
  }

  public function Delete($id)
  {

  //We delete the line on User's table.
    $this->user->find($id);
    $this->user->delete();
  }

  public function GetOfferPage(Request $request)
  {
      if(isset($_COOKIE['Login']))
      {
        $User_id = $this->GetId($_COOKIE['Login']);
      }
      else
      {
        $User_id = $this->GetId($request->session()->get('Login'));
      }

      switch ($this->Get_Table($User_id))
            {
                case 2 :
                    return View::make('internship_pilot')->with('user_type', 2);
                    break;

                case 0 :
                    return View::make('internship_student')->with('user_type', 0);
                    break;

                case 1 :
                    return View::make('internship_pilot')->with('user_type', 1);
                    break;

            }

  }

  public function VerifPage(Request $request)
  {
    if(isset($_COOKIE['Login']))
     {
        return $this->GetId($_COOKIE['Login']);
     }
     else
     {
       return $this->GetId($request->session()->get('Login'));
     }
  }
  
  public function GetHomePage(Request $request)
  {
     $auth->AuthVerify($request);
     $User_id = $this->VerifPage($request);
     switch ($this->Get_Table($User_id))
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

  }

  public function GetUsersPage(Request $request)
  {
    $User_id = $this->VerifPage($request);
      switch ($this->Get_Table($User_id))
            {
                case 2 :
                    return View::make('user_admin')->with('user_type', 2);
                    break;

                case 1 :
                    return View::make('student_pilot')->with('user_type', 1);
                    break;

            }
  }

  public function GetPostulatePage(Request $request)
    {
      $User_id = $this->VerifPage($request);
      switch ($this->Get_Table($User_id))
            {
                case 0 :
                    return View::make('postulate')->with('user_type', 0);
                    break;
            }

  }

  public function GetContactPage(Request $request)
    {
      $User_id = $this->VerifPage($request);
      switch ($this->Get_Table($User_id))
            {
                case 2 :
                    return View::make('contact_admin')->with('user_type', 2);
                    break;

                case 0 :
                    return View::make('contact_student')->with('user_type', 0);
                    break;

                case 1 :
                    return View::make('contact_pilot')->with('user_type', 1);
                    break;

            }

  }

  public function Create_User(Request $request)
  {
    $this->Create($request);
    $User_id = $this->user->GetId($request->Mail);
    $EntryLocal = Localisation::updateOrCreate(
        ['Localisation' => $request->Localisation_Name ]);

    $NewLocal = new Localisation;
    $Localisation_id = $NewLocal->GetId($request->Localisation_Name);
    switch($request->$UpUser_type)
    {
        case 0 :
            $this->student->Create($request, $User_id, $Localisation_id);
            break;

        case 1 :
            $this->pilot->Create($request, $User_id, $Localisation_id);
            break;

        case 2 :
            $this->administrator->Create($request, $User_id, $Localisation_id);
            break;
    }
  }

  public function Create(Request $request)
  {
        $this->user->Mail = $request->Mail;
        $this->user->Password = $request->Password;
        $this->user->save();
  }
}

?>
