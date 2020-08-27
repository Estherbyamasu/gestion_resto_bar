<?php

namespace App\Http\Controllers;

use App\Fournisseur;
use Illuminate\Http\Request;

class FournisseursController extends Controller
{
    
    public function index()
    {
        //
        $fournisseurs = Fournisseur::all();
        return view('fournisseurs/index',[
            'fournisseurs' => $fournisseurs
        ]);
    }

    
    public function create()
    {
        //
        return view('fournisseurs/create');
    }

    
    public function store(Request $request)
    {
        //
        $request->validate([
            'nom_fournisseur' => 'required',
            'prenom_fournisseur' => 'required',
            'address' => 'required',
            'tel' => 'required',
            
        ]);

        
        $fournisseur = new Fournisseur();

       
        $fournisseur->nom_fournisseur = $request->nom_fournisseur;
        $fournisseur->prenom_fournisseur = $request->prenom_fournisseur;
        $fournisseur->address = $request->address;
        $fournisseur->tel = $request->tel;
        
        //Save data
        $fournisseur->save();
        return redirect('fournisseurs');
    }

    
    public function show(Fournisseur $fournisseur)
    {
        //
    }

    
    public function edit(Fournisseur $fournisseur)
    {
        //
        $fournisseur = Fournisseur::find($fournisseur->id);
        return view('fournisseurs.edit',[
           'fournisseur' => $fournisseur
        ]);
    }

    
    public function update(Request $request,Fournisseur $fournisseur)
    {
        //
        $request->validate([
            'nom_fournisseur' => 'required',
            'prenom_fournisseur' => 'required',
            'address' => 'required',
            'tel' => 'required',
            
        ]);

        
        $fournisseur->nom_fournisseur = $request->nom_fournisseur;
        $fournisseur->prenom_fournisseur = $request->prenom_fournisseur;
        $fournisseur->address = $request->address;
        $fournisseur->tel = $request->tel;
        

       
        $fournisseur->save();
        return redirect('fournisseurs');
    }

    
    public function destroy(Fournisseur $fournisseur)
    {
        //
        $fournisseur = Fournisseur::find($fournisseur->id);
        $fournisseur->delete();
        return redirect('fournisseurs');
    }
}
