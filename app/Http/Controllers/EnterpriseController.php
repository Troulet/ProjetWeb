<?php 

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Enterprise;
use App\Models\Internship;
use App\Models\Localisation;
use App\Models\Located;
use App\Models\Pilot_Commentary;
use App\Models\Student_Commentary;


class EnterpriseController extends Controller 
{

    protected $enterprise;
    protected $offers; //array of Id of Offers
    protected $Comments; //array of comments

    function __construct()
    {
        $this->enterprise = new Enterprise;
    }

    public function Hide(Request $request)
    {
        $deleted = new InternshipController;
        $dataOffer = $this->GetInternship($request->id);
        foreach($dataOffer as $Offer)
        {
            $deleted->Hide($Offer['id']);
        }

        $this->enterprise = Enterprise::find($request->id);
        $this->enterprise->delete();
    }

    public function Restore(Request $request)
    {
        $restored = new InternshipController;
        $dataOffer = $this->GetInternship($request->id);
        foreach($dataOffer as $Offer)
        {
            $restored->Restore($Offer['id']);
        }

        $this->enterprise = Enterprise::withTrashed()->find($request->id)->restore();
    }

    public function GetInternship($entid)
    {
        return ObjectController::objtoArray(Internship::GetInternship($entid));
    }

    /*public function GetLocalisation()
    {
        //Récupérer dans un tableau les ID des localisations liées.
    }*/

    public function ValidationCreate(Request $request)
    {       
        $validator = Validator::make($request->all(), [
            'Enterprise_Name' => 'required|alpha_num',
            'Activity_Sector' => 'required|alpha',
            'Cesi_Student_Taken' => 'required|numeric',
            'Localisation_Name' => 'required|alpha'
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

    public function Create(Request $request)
    {
        if($this->ValidationCreate($request))
        {
            $this->enterprise->Enterprise_Name = $request->Enterprise_Name;
            $this->enterprise->Activity_Sector = $request->Activity_Sector;
            $this->enterprise->Cesi_Student_Taken = $request->Cesi_Student_Taken;

            //We update the localisation table, in case we created a new place.
            $EntryLocal = Localisation::updateOrCreate(
            ['Localisation' => $request->Localisation_Name ]);

            $NewLocal = new Localisation;
            $localid = $NewLocal->GetId($request->Localisation_Name);
            $this->enterprise->Localisation_id = $localid[0];
            $this->enterprise->save();
        }
        else
        {
            echo "Erreur de saisie des données";
        }
    }

    public function ValidationUpdate(Request $request)
    {       
        $validator = Validator::make($request->all(), [
            'Enterprise_id' => 'required|numeric|exists:enterprise,id',
            'Enterprise_Name' => 'required|Alpha_num',
            'Activity_Sector' => 'required|Alpha',
            'Cesi_Student_Taken' => 'required|numeric',
            'Localisation_Name' => 'required|Alpha'
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

    public function Update(Request $request)
    {        
        if($this->ValidationUpdate($request) && Auth::check() == true)
        {
            $this->enterprise = Enterprise::find($request->Enterprise_id);
            $this->enterprise->Enterprise_Name = $request->Enterprise_Name;
            $this->enterprise->Activity_Sector = $request->Activity_Sector;
            $this->enterprise->Cesi_Student_Taken = $request->Cesi_Student_Taken;

            //We update the localisation table, in case we created a new place.
            $EntryLocal = Localisation::updateOrCreate(
            ['Localisation' => $request->Localisation_Name ]);

            $NewLocal = new Localisation;
            $localid = $NewLocal->GetId($request->Localisation_Name);
            $this->enterprise->Localisation_id = $localid[0];
            $this->enterprise->save();
        }
        else
        {
            echo "Erreur de saisie des données";
        }
    }

    public function GetUpdatePage(Request $request)
    {
        $user = new UsersController;
        switch($user->Get_Table(Auth::id()))
        {
                case 2 :
                    return View::make('modify/modify_enterprise')->with('user_type', 2)->with('dataEnterprise', ObjectController::objtoArray(Enterprise::GetforUpdate($request->id)));
                    break;

                case 0 :
                    return View::make('modify/modify_enterprise')->with('user_type', 0)->with('dataEnterprise', ObjectController::objtoArray(Enterprise::GetforUpdate($request->id)));
                    break;

                case 1 :
                    return View::make('modify/modify_enterprise')->with('user_type', 1)->with('dataEnterprise', ObjectController::objtoArray(Enterprise::GetforUpdate($request->id)));
                    break;

     }
    }


    public function PostComment(Request $request)
    {
        $User = new UsersController;
        switch($User->Get_Table(Auth::id()))
        {
            case 0 :
                $Comment = new Student_Commentary;
                $Comment->Student_id = $User_id;
                $Comment->Tutor_Lead = $request->Tutor_Lead;
                $Comment->Infrastructure = $request->Infrastructure;
                $Comment->Accessibility = $request->Accessibility;
                break;
            case 1 :
                $Comment = new Pilot_Commentary;
                $Comment->Pilot_id = $User_id;         
                break;
        }
        $Comment->Enterprise_id = $request->Enterprise_id;
        $Comment->Internship_Difficulty = $request->Internship_Difficulty;
        $Comment->Level_Of_Knowledge = $request->Level_Of_Knowledge;
        $Comment->Work_Environment = $request->Work_Environment;
        $Comment->Commentary = $request->Commentary;
        $Comment->save();


    }

    public function GetCreateCommentPage(Request $request)
    {
        $user = new UsersController;
        switch($user->Get_Table(Auth::id()))
        {
                case 0 :
                    return View::make('create/commentary')->with('user_type', 0)->with('Users_id', Auth::id())->with('Enterprise_id', $request->id);
                    break;

                case 1 :
                    return View::make('create/commentary')->with('user_type', 1)->with('Users_id', Auth::id())->with('Enterprise_id', $request->id);
                    break;

     }
    }

    public function GetCreatePage()
    {
        $user = new UsersController;
        switch($user->Get_Table(Auth::id()))
        {
                case 2 :
                    return View::make('create/create_enterprise')->with('user_type', 2);
                    break;

                case 0 :
                    return View::make('create/create_enterprise')->with('user_type', 0);
                    break;

                case 1 :
                    return View::make('create/create_enterprise')->with('user_type', 1);
                    break;

     }
    }

    public function Search(Request $request)
    {
        //On récupère les données à afficher puis on les convertis en array
        $dataOffer = ObjectController::objtoArray(Internship::tablereturnsearch($request->research));
        $dataEnterprise =  ObjectController::objtoArray(Enterprise::tablereturnsearch($request->research));     
        $user = new UsersController;
        switch ($user->Get_Table(Auth::id()))
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

    public function GetProfil(Request $request)
        {
        $user = new UsersController;
        $dataEnterprise = ObjectController::objtoArray(Enterprise::GetProfil($request->id));
        $dataOffer = $this->GetInternship($request->id);
        $dataCommentPilot = ObjectController::objtoArray(Pilot_Commentary::tablereturn($request->id));
        $dataCommentStudent = ObjectController::objtoArray(Student_Commentary::tablereturn($request->id));
            switch($user->Get_Table(Auth::id()))
            {
                case 2 :
                    return View::make('internship/internship_profile_enterprise_template')->with('user_type', 2)->with('dataOffer', $dataOffer)->with('dataEnterprise', $dataEnterprise)->with('dataCommentPilot', $dataCommentPilot)->with('dataCommentStudent', $dataCommentStudent);
                    break;
                    
                case 0 :
                    return View::make('internship/internship_profile_enterprise_template')->with('user_type', 0)->with('dataOffer', $dataOffer)->with('dataEnterprise', $dataEnterprise)->with('dataCommentPilot', $dataCommentPilot)->with('dataCommentStudent', $dataCommentStudent);
                    break;

                case 1 :
                    return View::make('internship/internship_profile_enterprise_template')->with('user_type', 1)->with('dataOffer', $dataOffer)->with('dataEnterprise', $dataEnterprise)->with('dataCommentPilot', $dataCommentPilot)->with('dataCommentStudent', $dataCommentStudent);
                    break;

            }
        }

}

?>
