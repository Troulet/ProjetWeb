<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enterprise;
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

    public function Hide($id)
    {
        //We delete the line on User's table, then on the Child table.
        $deleted = new InternshipController;
        for($i = 0; isset($offers[$i]); $i++)
        {
            $deleted->Hide($offers[$i]);
        }

        $this->enterprise->find($id);
        $this->enterprise->delete();
    }

    public function GetInternship()
    {
        //Récupérer dans un tableau les ID des offres liées.
    }

    public function GetLocalisation()
    {
        //Récupérer dans un tableau les ID des localisations liées.
    }

    public function Create(Request $request)
    {
        $this->enterprise->Enterprise_Name = $request->Enterprise_name;
        $this->enterprise->Activity_Sector = $request->Activity_Sector;
        $this->enterprise->Cesi_Student_Taken = $request->Cesi_Student_Taken;

        //We update the localisation table, in case we created a new place.
         $EntryLocal = Localisation::updateOrCreate(
        ['Localisation' => $request->Localisation_Name ]);

        $NewLocal = new Localisation;
        $this->enterprise->Localisation_id = $NewLocal->GetId($request->Localisation_Name);
        $this->enterprise->save();
    }

    public function Update(Request $request)
    {
        $this->enterprise = Enterprise::find($request->Enterprise_id);
        $this->enterprise->Enterprise_Name = $request->Enterprise_name;
        $this->enterprise->Activity_Sector = $request->Activity_Sector;
        $this->enterprise->Cesi_Student_Taken = $request->Cesi_Student_Taken;

        //We update the localisation table, in case we created a new place.
         $EntryLocal = Localisation::updateOrCreate(
        ['Localisation' => $request->Localisation_Name ]);

        $NewLocal = new Localisation;
        $this->enterprise->Localisation_id = $NewLocal->GetId($request->Localisation_Name);
        $this->enterprise->save();
    }

    public function Show($id)
    {
        return $this->enterprise->GetById(id);
    }

    public function PostComment(Request $request)
    {
        $User = new UsersController;
        $User_id->$User->VerifPage($request);
        switch($User->Get_Table($User_id))
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

    public function GetComment()
    {
        //array : First_name - Last_name - Critere - Critere - Critere - Critere - Critere - Critere - Commentary
    }

}

?>
