<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class traitementform extends Controller
{
    public  function getdata(Request $r){
        return view('affichage',['resultat'=>$r]);//   methode 1 
    }
    //  public function getdata(Request $r){
    //      return view('affichage')->with(['resultat'=>$r]) ;    // methode 2

    //  }
}
