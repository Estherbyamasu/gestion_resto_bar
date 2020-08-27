<?php

namespace App\Http\Controllers;

use App\Fournisseur;
use App\Achat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AchatsController extends Controller
{
    
    public function index()
    {
        //
        $fournisseurs = Fournisseur::all();
        $achats = DB::table('achats')
            ->join('fournisseurs', 'achats.fournisseur_id', '=', 'fournisseurs.id')
            ->get();
        return view('achats/index',[
            'achats' => $achats,
            'fournisseurs' => $fournisseurs
        ]);
    }

    
    public function create()
    {
        //
        $fournisseurs = Fournisseur::all();
        return view('achats/create',[
           'fournisseurs' => $fournisseurs
        ]);
    }

    
     
    public function store(Request $request)
    {
        //
        $request->validate([
            'fournisseur_id' => 'required',
            'date_achat' => 'required',
            
        ]);

        $achat = new Achat();
        $achat->fournisseur_id = $request->fournisseur_id;
        $achat->date_achat = $request->date_achat;
        
        $achat->save();

        return redirect('achats');
    }

    
    public function show(Achat $achat)
    {
        //
    }

   
    public function edit(Achat $achat)
    {
        //
        $fournisseur = Fournisseur::all();
        $achat = Achat::find($achat->id);
        return view('achats/edit',[
            'achat' => $achat,
            'fournisseurs' => $fournisseurs
        ]);
    }

    
    public function update(Request $request, Product $product)
    {
        //
        $request->validate([
            'fournisseur_id' => 'required',
            'date_achat' => 'required',
            
        ]);

        $achat->fournisseur_id = $request->fournisseur_id;
        $achat->date_achat = $request->date_achat;
        
        $achat->save();

        return redirect('achats');
    }

    
    public function destroy(Achat $product)
    {
        //
        $achat = Achat::find($achat->id);
        $achat->delete();

        return redirect('achats');
    }
}
