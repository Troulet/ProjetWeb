<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Internship;

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

    punblic function Delete($id)
    {
        $this->Offer->find($id);
        $this->Offer->forceDelete();
    }
}

?>
