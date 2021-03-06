<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrator;
use App\Models\Localisation;
use App\Models\Users;
use App\Models\Student;
use App\Models\Pilot;
use Illuminate\Support\Facades\View;

class AdministratorController extends Controller 
{
    protected $user;
    protected $localisation;

    function __construct()
    {
        $this->user = new Administrator;
        $this->localisation = new Localisation;
    }

    public function Get_Local($id)
    {
    
        if(Administrator::find($id) !== null)
        {
            $user = Administrator::find($id);
            return $user->Localisation_id;
        }
        else
        {
            return null;
        }
    }

    public function tablereturn($localid)
    {
        return ObjectController::objtoArray($this->user->tablereturn($localid));
    }

    public function GetById($id)
    {
        return $this->user->GetById($id);
    }

    public function Delete($id)
    {

        //We delete the line on User's table, then on the Child table.
        $this->user = Administrator::find($id);
        $this->user->delete();
        $deleted = new UsersController;
        $deleted->Delete($id);
    }

    public function Create(Request $request, $Users_id, $Localisation_id )
    {
        $this->user->Users_id = $Users_id[0];
        $this->user->Localisation_id = $Localisation_id[0];
        $this->user->save();
    }

    public function Update(Request $request, $Localisation_id)
    {
        $this->user = Administrator::find($request->Users_id);
        $this->user->Localisation_id = $Localisation_id[0];
        $this->user->save();
    }

}

?>
