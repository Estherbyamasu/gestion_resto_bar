<?php

namespace App\Http\Controllers;

use App\Serveur;
use Illuminate\Http\Request;

class ServeursController extends Controller
{
    
    public function index()
    {
        //
        $serveurs = Serveur::all();
        return view('serveurs/index',[
            'serveurs' => $serveurs
        ]);
    }

    
    public function create()
    {
        //
        return view('serveurs/create');
    }

    
    public function store(Request $request)
    {
        //
        $request->validate([
            'nom_serveur' => 'required',
            'prenom_serveur' => 'required',
            'address' => 'required',
            'tel' => 'required',
            
        ]);

        
        $serveur = new Serveur();

       
        $serveur->nom_serveur = $request->nom_serveur;
        $serveur->prenom_serveur = $request->prenom_serveur;
        $serveur->address = $request->address;
        $serveur->tel = $request->tel;

        //Save data
        $serveur->save();
        return redirect('serveurs');
    }

    
    public function show(Serveur $serveur)
    {
        //
    }

    
    public function edit(Serveur $serveur)
    {
        //
        $serveur = Serveur::find($serveur->id);
        return view('serveurs.edit',[
           'serveur' => $serveur
        ]);
    }

    
    public function update(Request $request, Serveur $serveur)
    {
        //
        $request->validate([
            'nom_serveur' => 'required',
            'prenom_serveur' => 'required',
            'address' => 'required',
            'tel' => 'required',
            
        ]);

        
        $serveur->nom_serveur = $request->nom_serveur;
        $serveur->prenom_serveur = $request->prenom_serveur;
        $serveur->address = $request->address;
        $serveur->tel = $request->tel;
        

       
        $serveur->save();
        return redirect('serveurs');
    }

    
    public function destroy(Serveur $serveur)
    {
        //
        $serveur = Serveur::find($serveur->id);
        $serveur->delete();
        return redirect('serveurs');
    }
}
