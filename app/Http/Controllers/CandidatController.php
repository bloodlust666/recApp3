<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandidatController extends Controller
{

    //
    /*public function __construct ()
    {
       $this->middleware('EspaceRM');
    }*/

    public function espaceCandidatT ()
    {
       return view ('candidat.index');
    }


}
