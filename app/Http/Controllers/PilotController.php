<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pilot;

class PilotController extends Controller 
{
  protected $user;

  function __construct()
  {
    $this->user = new Pilot;
  }

  public function GetById($id)
  {
        return $this->user->GetById($id);
  }
}

?>
