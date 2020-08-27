<?php

namespace App\Http\Controllers;

use App\Product;
use App\Facture;

use App\Detaillefacture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetaillefacturesController extends Controller
{
    
    public function index()
    {
        //
        $products = Product::all();
        $factures = Facture::all();
        
        $detaillefactures = DB::table('detaillefactures')
            ->join('products', 'detaillefactures.product_id', '=', 'products.id')
            ->join('factures', 'detaillefactures.facture_id', '=', 'factures.id')
          
            ->select('products.*', 'factures.*', 'detaillefactures.*')
            ->get();
        return view('detaillefactures/index',[
            'detaillefactures' => $detaillefactures,
            'products' => $products,
            'factures' => $factures
           
        ]);
    }

    
    public function create()
    {
        //
        $products = Product::all();
        $factures = Facture::all();
      
        return view('detaillefactures/create',[
            
            'products' => $products,
            'factures' => $factures
            
        ]);
    }

    
     
    public function store(Request $request)
    {
        //
        $request->validate([
            'product_id' => 'required',
            'facture_id' => 'required',
            'quantite' => 'required',
            'prix_unitaire' => 'required'
        ]);

        $detaillefacture = new Detaillefacture();
        $detaillefacture->product_id = $request->product_id;
        $detaillefacture->facture_id = $request->facture_id;
        $detaillefacture->quantite = $request->quantite;
        $detaillefacture->prix_unitaire = $request->prix_unitaire;
        $detaillefacture->save();

        return redirect('detaillefactures');
    }
    
    
    public function show(Detaillefacture $detaillefacture)
    {
        //
    }

   
    public function edit(Detaillefacture $detaillefacture)
    {
        //
        $products = Product::all();
        $factures = Facture::all();
      
        $detaillefacture = Detaillefacture::find($detaillefacture->id);
        return view('detaillefactures/edit',[
            'detaillefacture' => $detaillefacture,
            'products' => $products,
            'factures' => $factures
        ]);
    }

    
    public function update(Request $request, Detaillefacture $detaillefacture)
    {
        //
        $request->validate([
            'product_id' => 'required',
            'facture_id' => 'required',
            'quantite' => 'required',
            'prix_unitaire' => 'required'
        ]);
        
        $detaillefacture->product_id = $request->product_id;
        $detaillefacture->facture_id = $request->facture_id;
        $detaillefacture->quantite = $request->quantite;
        $detaillefacture->prix_unitaire = $request->prix_unitaire;
        $detaillefacture->save();

        return redirect('detaillefactures');
    }

    
    public function destroy(Detaillefacture $detaillefacture)
    {
        //
        $detaillefacture = Detaillefacture::find($detaillefacture->id);
        $detaillefacture->delete();

        return redirect('detaillefactures');
    }
}
