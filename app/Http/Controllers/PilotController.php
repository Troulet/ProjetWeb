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
}

?>
