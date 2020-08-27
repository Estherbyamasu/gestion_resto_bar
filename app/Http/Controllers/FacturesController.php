<?php

namespace App\Http\Controllers;

use App\Client;
use App\Serveur;
use App\Caissier;
use App\Facture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FacturesController extends Controller
{
    
    public function index()
    {
        //
        $clients = Client::all();
        $serveurs = Serveur::all();
        $caissiers = Caissier::all();
        $factures = DB::table('factures')
            ->join('clients', 'factures.client_id', '=', 'clients.id')
            ->join('serveurs', 'factures.serveur_id', '=', 'serveurs.id')
            ->join('caissiers', 'factures.caissier_id', '=', 'caissiers.id')
            ->select('clients.*', 'serveurs.*', 'caissiers.*','factures.*')
            ->get();
        return view('factures/index',[
            'factures' => $factures,
            'clients' => $clients,
            'serveurs' => $serveurs,
            'caissiers' => $caissiers
        ]);
    }

    
    public function create()
    {
        //
        $clients = Client::all();
        $serveurs = Serveur::all();
        $caissiers = Caissier::all();
        return view('factures/create',[
            
            'clients' => $clients,
            'serveurs' => $serveurs,
            'caissiers' => $caissiers
        ]);
    }

    
     
    public function store(Request $request)
    {
        //
        $request->validate([
            'client_id' => 'required',
            'serveur_id' => 'required',
            'caissier_id' => 'required',
            'montant' => 'required',
            'date_facture' => 'required'
        ]);

        $facture = new Facture();
        $facture->client_id = $request->client_id;
        $facture->serveur_id = $request->serveur_id;
        $facture->caissier_id = $request->caissier_id;
        $facture->montant = $request->montant;
        $facture->date_facture = $request->date_facture;
        $facture->save();

        return redirect('factures');
    }

    
    public function show(Facture $facture)
    {
        //
    }

   
    public function edit(Facture $facture)
    {
        //
        $clients = Client::all();
        $serveurs = Serveur::all();
        $caissiers = Caissier::all();
        $facture = Facture::find($facture->id);
        return view('factures/edit',[
            'facture' => $facture,
            'clients' => $clients,
            'serveurs' => $serveurs,
            'caissiers' => $caissiers
        ]);
    }

    
    public function update(Request $request, Facture $facture)
    {
        //
        $request->validate([
            'client_id' => 'required',
            'serveur_id' => 'required',
            'caissier_id' => 'required',
            'montant' => 'required',
            'date_facture' => 'required'
        ]);

        $facture->client_id = $request->client_id;
        $facture->serveur_id = $request->serveur_id;
        $facture->caissier_id = $request->caissier_id;
        $facture->montant = $request->montant;
        $facture->date_facture = $request->date_facture;
        $facture->save();

        return redirect('factures');
    }

    
    public function destroy(Facture $facture)
    {
        //
        $facture = Facture::find($facture->id);
        $facture->delete();

        return redirect('factures');
    }
}
