<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Annonce;

class RecruteurController extends Controller
{

  /*public function __construct ()
  {
     $this->middleware('EspaceRM');
  }*/

  public function espaceRecruteurT ()
  {
     return view ('recruteur.index');
  }

  

}
