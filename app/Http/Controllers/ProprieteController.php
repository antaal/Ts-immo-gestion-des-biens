<?php

namespace App\Http\Controllers;

use App\Models\Propriete;
use App\Models\Proprietaire;
use Illuminate\Http\Request;

class ProprieteController extends Controller
{
    //   public function index(){
    //       $Proprietes = Propriete::all();
    //       return view('propriete/index', ['Proprietes' => $Proprietes]);
    //  }
    
     public function index () {
        return view('propriete.index', [
            'Proprietes' => Propriete::with('bien')->get()
        ]);
    }

    public function create()
    {
        return view('propriete.create');
    }

    public function edit(Propriete  $propriete)
{


    $propriete = (new Propriete($this->getDB()))->findById($propriete);
    

    return $this->view('propriete.edit',['Proprietes' => $Proprietes]);
}

public function show(Proprietaire $Proprietaires)
    {
        return view('propriete.show', ['Proprietes' => $Proprietes]);
    }
}
