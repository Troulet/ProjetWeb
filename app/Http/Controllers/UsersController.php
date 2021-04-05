<?php 

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Localisation;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use App\Models\Internship;
use App\Models\Enterprise;
use App\Models\Administrator;
use App\Models\Pilot;
use App\Models\Student;

class UsersController extends Controller 
{

  protected $user;
  protected $student;
  protected $administrator;
  protected $pilot;
  protected $User_id;

  function __construct()
  {
      $this->user = new Users;
      $this->student = new StudentController;
      $this->pilot = new PilotController;
      $this->administrator = new AdministratorController;
      $User_id = Auth::id();
  }

  public function GetId($Login)
  {
    return $this->user->GetId($Login);
  }

  public function Get_Local($id)
  {
     if (Auth::check())
     {
      $table = [$this->student, $this->pilot, $this->administrator];
      $i = 0;
      foreach($table as $element)
      {
        if($element->Get_Local($id) !== null)
        {
            $reponse = $element->Get_Local($id);
        }
        $i++;
      }
      return $reponse;
      }
  }

  public function Get_Table($id)
  {
     if (Auth::check())
     {
      $table = [$this->student, $this->pilot, $this->administrator];
      $i = 0;
      foreach($table as $element)
      {
        if($element->GetById($id) !== null)
        {
            $reponse = $i;
        }
        $i++;
      }
      return $reponse;
      }
  }

  public function DeleteUser(Request $request)
  {
        switch ($this->Get_Table($request->id))
            {
                case 2 :
                    $this->administrator->Delete($request->id);
                    break;

                case 0 :
                    $this->student->Delete($request->id);
                   break;

                case 1 :
                   $this->pilot->Delete($request->id);
                   break;

            }
  }

  public function Delete($id)
  {
  //We delete the line on users table.
    $this->user = Users::find($id);
    $this->user->delete();
  }

  public function GetOfferPage(Request $request)
  {
      //On récupère les données à afficher puis on les convertis en array
      $dataOffer = ObjectController::objtoArray(Internship::tablereturn());
      $dataEnterprise =  ObjectController::objtoArray(Enterprise::tablereturn());
      switch ($this->Get_Table(Auth::id()))
            {
                case 2 :
                    return View::make('internship/internship_template')->with('user_type', 2)->with('dataOffer', $dataOffer)->with('dataEnterprise', $dataEnterprise);
                    break;

                case 0 :
                    return View::make('internship/internship_template')->with('user_type', 0)->with('dataOffer', $dataOffer)->with('dataEnterprise', $dataEnterprise);
                    break;

                case 1 :
                    return View::make('internship/internship_template')->with('user_type', 1)->with('dataOffer', $dataOffer)->with('dataEnterprise', $dataEnterprise);
                    break;

            }

  }
  
  public function GetHomePage()
  {
     switch ($this->Get_Table(Auth::id()))
     {
                case 2 :
                    return View::make('welcome/welcome_admin_template')->with('user_type', 2);
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

  }

  public function GetUsersPage(Request $request)
  {
      $localid = $this->Get_Local(Auth::id());
      $dataStudent = $this->student->tablereturn($localid);
      switch ($this->Get_Table(Auth::id()))
            {
                case 2 :
                    $dataPilot = $this->pilot->tablereturn($localid);
                    $dataAdmin = $this->administrator->tablereturn($localid);
                    return View::make('users/user_admin_template')->with('user_type', 2)->with('dataPilot', $dataPilot)->with('dataAdmin', $dataAdmin)->with('dataStudent', $dataStudent);
                    break;

                case 1 :

                    return View::make('users/student_pilot_template')->with('user_type', 1)->with('dataStudent', $dataStudent);
                    break;
            }
  }

  

  public function GetContactPage(Request $request)
    {
      $localid = $this->Get_Local(Auth::id());
      $dataStudent = $this->student->tablereturn($localid);
      switch ($this->Get_Table(Auth::id()))
            {
                case 2 :
                    $dataPilot = $this->pilot->tablereturn($localid);
                    $dataAdmin = $this->administrator->tablereturn($localid);
                    return View::make('contact/contact_admin_template')->with('user_type', 2)->with('dataPilot', $dataPilot)->with('dataAdmin', $dataAdmin)->with('dataStudent', $dataStudent);
                    break;

                case 1 :
                    $dataAdmin = $this->administrator->tablereturn($localid);
                    return View::make('contact/contact_pilot_template')->with('user_type', 1)->with('dataStudent', $dataStudent)->with('dataAdmin', $dataAdmin);
                    break;

                case 0 :
                    $dataPilot = $this->pilot->tablereturn($localid);
                    return View::make('contact/contact_student_template')->with('user_type', 0)->with('dataPilot', $dataPilot);
                    break;
            }

  }

  public function Validation(Request $request)
    {
        $validator = Validator::make($request->all(), [
            '_token' => 'required',
            'email' => 'required|email',
            'password' => 'required|alpha_num',
            'Promotion' => '',
            'First_Name'=> 'required|alpha',
            'Last_Name' => 'required|alpha',
            'Representative' => 'boolean',
            'Representative_Rights' => 'numeric',
            'Localisation_Name' => 'required|alpha',
            'Users_id' => 'numeric'
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

  public function Create_User(Request $request)
  {

    if($this->Validation($request))
    {
    if(Auth::id() == 0)
    {
        $data = "Vous n'avez pas les droits pour effectuer cette fonctionnalité";
        return $data;
    }
    else if (Auth::id() == 1 AND $request->UpUser_type == 2)
    {
        $data = "Vous n'avez pas les droits pour créer un profil Administrateur";
        return $data;
    }
    else
    {
        $this->Create($request);
        $Users_id = $this->user->GetId($request->email);
        $EntryLocal = Localisation::updateOrCreate(
        ['Localisation' => $request->Localisation_Name ]);

        $NewLocal = new Localisation;
        $Localisation_id = $NewLocal->GetId($request->Localisation_Name);
        switch($request->UpUser_type)
        {
            case 0 :
                $this->student->Create($request, $Users_id, $Localisation_id);
                break;

            case 1 :
                $this->pilot->Create($request, $Users_id, $Localisation_id);
                break;

            case 2 :
                $this->administrator->Create($request, $Users_id, $Localisation_id);
                break;
        }
    }
    $data = "L'Utilisateur a bien été créer.";
    return $data;
    }
    else
    {
        return "Erreur de saisie";
    }

  }

  public function Create(Request $request)
  {
        $this->user->First_Name = $request->First_Name;
        $this->user->Last_Name = $request->Last_Name;
        $this->user->email = $request->email;
        $this->user->password = $request->password;
        $this->user->save();
  }


  public function GetUpdatePage(Request $request)
    {
      switch ($this->Get_Table($request->id))
      {
          case 1 :
              $dataUser = ObjectController::objtoArray(Pilot::GetforUpdate($request->id));
              break;

          case 2 :
              $dataUser = ObjectController::objtoArray(Administrator::GetforUpdate($request->id));
              break;

          case 0 :
              $dataUser = ObjectController::objtoArray(Student::GetforUpdate($request->id));
              break;


      }

      $UpUser_type = $this->Get_Table($request->id);
      switch ($this->Get_Table(Auth::id()))
            {
                case 2 :
                    return View::make('modify/modify_user')->with('user_type', 2)->with('UpUser_type', $UpUser_type)->with('dataUser', $dataUser);
                    break;

                case 1 :
                    return View::make('modify/modify_user')->with('user_type', 1)->with('UpUser_type', $UpUser_type)->with('dataUser', $dataUser);
                    break;
            }

  }

  public function Update_User(Request $request)
  {
    $this->Update($request);
    $EntryLocal = Localisation::updateOrCreate(
        ['Localisation' => $request->Localisation_Name ]);

    $NewLocal = new Localisation;
    $Localisation_id = $NewLocal->GetId($request->Localisation_Name);
    switch($request->UpUser_type)
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
        $this->user = Users::find($request->Users_id);
        $this->user->First_Name = $request->First_Name;
        $this->user->Last_Name = $request->Last_Name;
        $this->user->email = $request->email;
        $this->user->save();
  }

  public function GetCreationPage()
  {
      return View::make('create/create_user')->with('user_type', $this->Get_Table(Auth::id()));
  }

  public function Search(Request $request)
    {
        $localid = $this->Get_Local(Auth::id());
      $dataStudent = $this->student->tablereturn($localid);
        $user = new UsersController;
        switch ($user->Get_Table(Auth::id()))
        {
                case 2 :
                    return View::make('users/user_admin_template')->with('user_type', 2)->with('dataStudent', ObjectController::objtoArray(Student::tablereturnsearch($request->research, $localid)))->with('dataPilot', ObjectController::objtoArray(Pilot::tablereturnsearch($request->research, $localid)))->with('dataAdmin', ObjectController::objtoArray(Administrator::tablereturnsearch($request->research, $localid)));
                    break;

                case 1 :
                    return View::make('user/student_pilot_template')->with('user_type', 1)->with('dataStudent', ObjectController::objtoArray(Student::tablereturnsearch($request->research, $localid)))->with('dataPilot', ObjectController::objtoArray(Pilot::tablereturnsearch($request->research, $localid)))->with('dataAdmin', ObjectController::objtoArray(Administrator::tablereturnsearch($request->research, $localid)));
                    break;

        }
       
    }

    public function GetProfil(Request $request)
    {
        
        $user = new UsersController;
        switch ($user->Get_Table($request->id))
        {
                case 2 :
                    return View::make('users/user_profile_admin_template')->with('user_type', $user->Get_Table(Auth::id()))->with('dataUser', ObjectController::objtoArray(Administrator::GetProfile($request->id)));
                    break;

                case 1 :
                    return View::make('users/user_profile_pilot_template')->with('user_type', $user->Get_Table(Auth::id()))->with('dataUser', ObjectController::objtoArray(Pilot::GetProfile($request->id)));
                    break;

                case 0 :
                    return View::make('users/user_profile_student_template')->with('user_type', $user->Get_Table(Auth::id()))->with('PostulateCount', ObjectController::objtoArray(Student::CountPostulate($request->id)))->with('dataUser', ObjectController::objtoArray(Student::GetProfile($request->id)));
                    break;
        }
    }

}

?>
