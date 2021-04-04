<?php 

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Internship;
use App\Models\Enterprise;


class InternshipController extends Controller 
{
    protected $Offer;
    function __construct()
    {
        $this->Offer = new Internship;
    }

    public function Hide($id)
    {
        $this->Offer = Internship::find($id);
        $this->Offer->delete();
    }

    public function Delete($id)
    {
        $this->Offer = Internship::find($id);
        $this->Offer->forceDelete();
    }

    public function ValidationCreate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Description' => 'required|alpha_num',
            'Skills_reserached' => 'required|alpha_num',
            'Promotion_researched' => 'required|alpha_num',
            'Internship_Duration' => 'required|numeric',
            'Salary' => 'required|numeric',
            'Number_Of_Places' => 'required|numeric',
            'Contact' => 'required|alpha_num',
            'Enterprise_id' => 'required|exists:enterprise,id'
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
            $this->Offer->Description = $request->Description;
            $this->Offer->Skills_researched = $request->Skills_researched;
            $this->Offer->Promotion_researched = $request->Promotion_researched;
            $this->Offer->Internship_Duration = $request->Internship_Duration;
            $this->Offer->Salary = $request->Salary;
            $this->Offer->Offer_Date = date("F j, Y, g:i a");
            $this->Offer->Number_Of_Places = $request->Number_Of_Places;
            $this->Offer->Contact = $request->Contact;

            //We update the localisation table, in case we created a new place.
             $EntryLocal = Localisation::updateOrCreate(
            ['Localisation' => $request->Localisation_Name ]);
            
            $NewLocal = new Localisation;
            $this->Offer->Localisation_id = $NewLocal->GetId($request->Localisation_Name);
            $NewEnter = new Enterprise;
            $this->Offer->Enterprise_id = $NewEnter->GetId($request->Enterprise_Name);
            $this->Offer->save();
        }
        else
        {
            echo "Erreur de saisie des données";
        }
    }

    public function ValidationUpdate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Internship_id' => 'required|numeric',
            'Description' => 'required|alpha_num',
            'Skills_reserached' => 'required|alpha_num',
            'Promotion_researched' => 'required|alpha_num',
            'Internship_Duration' => 'required|numeric',
            'Salary' => 'required|numeric',
            'Number_Of_Places' => 'required|numeric',
            'Contact' => 'required|alpha_num',
            'Enterprise_id' => 'required|exists:enterprise,id'
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
        if($this->ValidationUpdate($request))
        {
            $this->Offer = Internship::find($request->Internship_id);
            $this->Offer->Description = $request->Description;
            $this->Offer->Skills_researched = $request->Skills_researched;
            $this->Offer->Promotion_researched = $request->Promotion_researched;
            $this->Offer->Internship_Duration = $request->Internship_Duration;
            $this->Offer->Salary = $request->Salary;
            $this->Offer->Offer_Date = date("F j, Y, g:i a");
            $this->Offer->Number_Of_Places = $request->Number_Of_Places;
            $this->Offer->Contact = $request->Contact;
    
    
            //We update the localisation table, in case we created a new place.
             $EntryLocal = Localisation::updateOrCreate(
            ['Localisation' => $request->Localisation_Name ]);
            
            $NewLocal = new Localisation;
            $this->Offer->Localisation_id = $NewLocal->GetId($request->Localisation_Name);
            $NewEnter = new Enterprise;
            $this->Offer->Enterprise_id = $NewEnter->GetId($request->Enterprise_Name);
            $this->Offer->save();
        }
        else
        {
            echo "Erreur de saisie des données";
        }
    }

    /*public function Show($id)
    {
        return $this->Offer->GetById(id);
    }*/

    public function GetCreatePage()
    {
        $user = new UsersController;
        switch($user->Get_Table(Auth::id()))
        {
                case 2 :
                    return View::make('create/create_offer')->with('user_type', 2);
                    break;

                case 0 :
                    return View::make('create/create_offer')->with('user_type', 0);
                    break;

                case 1 :
                    return View::make('create/create_offer')->with('user_type', 1);
                    break;

     }
    }

    public function GetProfil(Request $request)
    {
        $user = new UsersController;
        $dataOffer = ObjectController::objtoArray(Internship::GetProfil($request->id));
        switch($user->Get_Table(Auth::id()))
        {
                case 2 :
                    return View::make('internship/internship_profile_offer_template')->with('user_type', 2)->with('dataOffer', $dataOffer);
                    break;

                case 0 :
                    return View::make('internship/internship_profile_offer_template')->with('user_type', 0)->with('dataOffer', $dataOffer);
                    break;

                case 1 :
                    return View::make('internship/internship_profile_offer_template')->with('user_type', 1)->with('dataOffer', $dataOffer);
                    break;

     }
    }
}

?>
