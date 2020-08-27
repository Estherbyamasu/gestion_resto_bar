<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index()
    {
        $clients = Client::all();

        return view('clients/index', [
            'clients' => $clients
        ]);
    }

    public function create()
    {
        return view('clients/create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'nom_client' => 'required',
            'prenom_client' => 'required',
            'address' => 'required',
            'tel' => 'required',
            
        ]);

        $client = new Client();

        $client->nom_client = $request->nom_client;
        $client->prenom_client = $request->prenom_client;
        $client->address = $request->address;
        $client->tel = $request->tel;

        $client->save();
        return redirect('clients');

    }

    public function edit(Client $client)
    {
        
        $client= Client::find($client->id);
        return view('clients/edit', [
            'client' => $client]);
    }

    public function update(Request $request,Client $client)
    {
        $request->validate([
            'nom_client' => 'required',
            'prenom_client' => 'required',
            'address' => 'required',
            'tel' => 'required',
            
        ]);

        $client->nom_client = $request->nom_client;
        $client->prenom_client = $request->prenom_client;
        $client->address = $request->address;
        $client->tel = $request->tel;
        $client->save();
        return redirect('clients');
    }

    public function destroy(Client $client)
    {
        $client = Client::find($client->id);
        $client->delete();
        return redirect('clients');
    }
}
