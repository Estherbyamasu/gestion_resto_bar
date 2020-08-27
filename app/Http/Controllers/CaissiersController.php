<?php

namespace App\Http\Controllers;

use App\Caissier;
use Illuminate\Http\Request;

class CaissiersController extends Controller
{
    public function index()
    {
        $caissiers = Caissier::all();

        return view('caissiers/index', [
            'caissiers' => $caissiers
        ]);
    }

    public function create()
    {
        return view('caissiers/create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'nom_caissier' => 'required',
            'prenom_caissier' => 'required',
            'address' => 'required',
            'tel' => 'required',
            
        ]);

        $caissier = new Caissier();

        
        $caissier->nom_caissier = $request->nom_caissier;
        $caissier->prenom_caissier = $request->prenom_caissier;
        $caissier->address = $request->address;
        $caissier->tel = $request->tel;

        $caissier->save();
        return redirect('caissiers');

    }

    public function edit(Caissier $caissier)
    {
        
        $caissier= Caissier::find($caissier->id);
        return view('caissiers/edit', [
            'caissier' => $caissier]);
    }

    public function update(Request $request,Caissier $caissier)
    {
        $request->validate([
            'nom_caissier' => 'required',
            'prenom_caissier' => 'required',
            'address' => 'required',
            'tel' => 'required',
            
        ]);

        $caissier->nom_caissier = $request->nom_caissier;
        $caissier->prenom_caissier = $request->prenom_caissier;
        $caissier->address = $request->address;
        $caissier->tel = $request->tel;
        $caissier->save();
        
        return redirect('caissiers');
    }


    public function destroy(Caissier $caissier)
    {
        $caissier = Caissier::find($caissier->id);
        $caissier->delete();
        return redirect('caissiers');
    }
}
