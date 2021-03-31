<?php 

namespace App\Http\Controllers;

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
        $this->Offer->find($id);
        $this->Offer->delete();
    }

    public function Delete($id)
    {
        $this->Offer->find($id);
        $this->Offer->forceDelete();
    }

    public function Create(Request $request)
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

    public function Update(Request $request)
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

    public function Show($id)
    {
        return $this->Offer->GetById(id);
    }
}

?>
