<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enterprise;
use App\Models\Localisation;
use App\Models\Located;

class EnterpriseController extends Controller 
{

    protected $enterprise;
    protected $offers; //array of Id of Offers
    protected $localisations //array of ID of localisation

    function __construct()
    {
        $this->enterprise = new Enterprise;
    }

    public function Hide($id)
    {
        //We delete the line on User's table, then on the Child table.
        $deleted = new InternshipController;
        for($i = 0; isset($offers[$i]); i++)
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

    public function Create($enterprise_name, $activity_sector, $cesi_student_taken, $localisation)
    {
        $this->enterprise = new Enterprise;
        $this->enterprise->Enterprise_Name = $enterprise_name;
        $this->enterprise->Activity_Sector = $activity_sector;
        $this->enterprise->Cesi_Student_Taken = $cesi_student_taken;
        $this->enterprise->save();

        $Id_Enterprise = $this->enterprise->GetId($enterprise)
        for($i = 0; isset($localisation[i]); i++)
        {
            $EntryLocal = Localisation::updateOrCreate(
            ['Localisation' => $localisation[i] ]);
            $CurrentLocal = new Localisation;            
            $Id_Localisation = $CurrentLocal->GetId($localisation)

            $EntryLocated = Located::updateOCreate(
                ['$Id_Localisation' => $Id_Localisation, '$Id_Enterprise' => $Id_Enterprise]);
        }
    }

    public function Show($id)
    {
        return $this->enterprise->GetById(id);
    }
}

?>
