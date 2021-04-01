<?php 

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
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
  protected $User_id

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
      $User_id = Auth::id();
  }

  public function Delete($id)
  {

  //We delete the line on User's table.
    $this->user->find($id);
    $this->user->delete();
  }

  public function GetOfferPage(Request $request)
  {
      switch ($this->Get_Table($this->User_id))
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
  
  public function GetHomePage(Request $request)
  {
     switch ($this->Get_Table($this->User_id))
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
      switch ($this->Get_Table($this->User_id))
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
      switch ($this->Get_Table($this->User_id))
            {
                case 0 :
                    return View::make('postulate')->with('user_type', 0);
                    break;
            }

  }

  public function GetContactPage(Request $request)
    {
      switch ($this->Get_Table($this->User_id))
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
    $Users_id = $this->user->GetId($request->Mail);
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


  public function Update_User(Request $request)
  {
    $this->Update($request);
    $EntryLocal = Localisation::updateOrCreate(
        ['Localisation' => $request->Localisation_Name ]);

    $NewLocal = new Localisation;
    $Localisation_id = $NewLocal->GetId($request->Localisation_Name);
    switch($request->$UpUser_type)
    {
        case 0 :
            $this->student->Update($request, $Localisation_id);
            break;

        case 1 :
            $this->pilot->Update($request, $Localisation_id);
            break;

        case 2 :
            $this->administrator->Update($request, $Localisation_id);
            break;
    }

  }

  public function Update(Request $request)
  {
        $this->user->find($request->User_id);
        $this->user->Mail = $request->Mail;
        $this->user->Password = $request->Password;
        $this->user->save();
  }
}

?>
