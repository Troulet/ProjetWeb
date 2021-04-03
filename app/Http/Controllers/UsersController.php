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

  public function Delete($id)
  {

  //We delete the line on users table.
    $this->user->find($id);
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
  
  public function GetHomePage(Request $request)
  {
     switch ($this->Get_Table(Auth::id()))
     {
                case 2 :
                    return View::make('welcome/welcome_admin')->with('user_type', 2);
                    break;

                case 0 :
                    return View::make('welcome/welcome_student')->with('user_type', 0);
                    break;

                case 1 :
                    return View::make('welcome/welcome_pilot')->with('user_type', 1);
                    break;

     }
     return View::make('login/login');

  }

  public function GetUsersPage(Request $request)
  {
      $userArray = json_encode($this->user->GetAll());
      
      /*for($i = 0; $userArray[$i] !== null; $i++)
      {
          $AllUser[$i]['User_id'] = $userArray[$i]['id'];
          switch ($this->Get_Table($userArray[$i]->id))
          {
                case 2 :
                    $AllUser[$i]['thisUser_type'] = "Administrateur";
                    $usertemp = new AdministratorController;
                    break;

                case 0 :
                    $AllUser[$i]['thisUser_type'] = "Pilote";
                    $usertemp = new PilotController;
                    break;

                case 1 :
                    $AllUser[$i]['thisUser_type'] = "Pilote";
                    $usertemp = new StudentController;
                    break;

          }
          
          $AllUser[$i]['Last_Name'] = $userArray[$i]['Last_Name'];
          $AllUser[$i]['First_Name'] = $userArray[$i]->First_Name;
          $AllUser[$i]['email'] = $userArray[$i]->email;
          $AllUser[$i]['password'] = $userArray[$i]->password;
          $usertempOBJECT = $usertemp->GetById($userArray[$i]->id);
          $NewLocal = new Localisation;
          $NewLocal->GetById($usertempOBJECT->Localisation_id);
          $AllUser[$i]['Localisation_name'] = $NewLocal->Localisation;
      }*/

      switch ($this->Get_Table($this->User_id))
            {
                case 2 :
                    return View::make('admin_gestion_user/user_admin')->with('user_type', 2)->with('data', $userArray);
                    break;

                case 1 :
                    return View::make('pilot_gestion_student/student_pilot')->with('user_type', 1)->with('data', $userArray);
                    break;

            }
  }

  public function GetPostulatePage(Request $request)
    {
      switch ($this->Get_Table(Auth::id()))
            {
                case 0 :
                    return View::make('postulate/postulate')->with('user_type', 0);
                    break;
            }

  }

  public function GetContactPage(Request $request)
    {
      switch ($this->Get_Table(Auth::id()))
            {
                case 2 :
                    return View::make('contact/contact_admin')->with('user_type', 2);
                    break;

                case 0 :
                    return View::make('contact/contact_student')->with('user_type', 0);
                    break;

                case 1 :
                    return View::make('contact/contact_pilot')->with('user_type', 1);
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
        $this->user = Users::find($request->id);
        $this->user->First_Name = $request->First_Name;
        $this->user->Last_Name = $request->Last_Name;
        $this->user->email = $request->email;
        $this->user->password = $request->password;
        $this->user->save();
  }

  public function GetCreationPage()
  {
      return View::make('create/create_user')->with('user_type', $this->Get_Table(Auth::id()));
  }

}

?>
