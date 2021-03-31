<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pilot;
use App\Models\Localisation;

class PilotController extends Controller 
{
  protected $user;
  protected $localisation;

  function __construct()
  {
    $this->user = new Pilot;
    $this->localisation = new Localisation;
  }

  public function GetById($id)
  {
        return $this->user->GetById($id);
  }

  public function Delete($id)
  {

  //We delete the line on User's table, then on the Child table.
    $deleted = new UsersController;
    $deleted->Delete($id);

    $this->user->find($id);
    $this->user->delete();
  }

  public function Create(Request $request, $Users_id, $Localisation_id )
  {
        $this->user->Users_id = $Users_id;
        $this->user->$Localisation_id = $Localisation_id;
        $this->user->Mail = $request->Mail;
        $this->user->Password = $request->Password;
        $this->user->Promotion = $request->Promotion;
        $this->user->First_Name = $request->First_Name;
        $this->user->Last_name = $request->Last_name;
        $this->user->save();
  }

  public function Update(Request $request, $Localisation_id)
  {
        $this->user->find($request->Users_id);
        $this->user->Users_id = $Users_id;
        $this->user->$Localisation_id = $Localisation_id;
        $this->user->Mail = $request->Mail;
        $this->user->Password = $request->Password;
        $this->user->Promotion = $request->Promotion;
        $this->user->First_Name = $request->First_Name;
        $this->user->Last_name = $request->Last_name;
        $this->user->save();
  }

}

?>
