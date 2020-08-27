<?php

namespace App\Http\Controllers;

use App\Product;
use App\Achat;

use App\Detailleachat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailleachatsController extends Controller
{
    
    public function index()
    {
        //
        $products = Product::all();
        $achats = Achat::all();
        
        $detailleachats = DB::table('detailleachats')
            ->join('products', 'detailleachats.product_id', '=', 'products.id')
            ->join('achats', 'detailleachats.achat_id', '=', 'achats.id')
          
            ->select('products.*', 'achats.*', 'detailleachats.*')
            ->get();
        return view('detailleachats/index',[
            'detailleachats' => $detailleachats,
            'products' => $products,
            'achats' => $achats
           
        ]);
    }

    
    public function create()
    {
        //
        $products = Product::all();
        $achats = Achat::all();
      
        return view('detailleachats/create',[
            
            'products' => $products,
            'achats' => $achats
            
        ]);
    }

    
     
    public function store(Request $request)
    {
        //
        $request->validate([
            'product_id' => 'required',
            'achat_id' => 'required',
            'quantite' => 'required',
            'prix' => 'required'
        ]);

        $detailleachat = new Detailleachat();
        $detailleachat->product_id = $request->product_id;
        $detailleachat->achat_id = $request->achat_id;
        $detailleachat->quantite = $request->quantite;
        $detailleachat->prix = $request->prix;
        $detailleachat->save();

        return redirect('detailleachats');
    }
    
    
    public function show(Detailleachat $detailleachat)
    {
        //
    }

   
    public function edit(Detailleachat $detailleachat)
    {
        //
        $products = Product::all();
        $achats = Achat::all();
      
        $detaillefacture = Detailleachat::find($detailleachat->id);
        return view('detailleachats/edit',[
            'detailleachat' => $detailleachat,
            'products' => $products,
            'achats' => $achats
        ]);
    }

    
    public function update(Request $request, Detailleachat $detailleachat)
    {
        //
        $request->validate([
            'product_id' => 'required',
            'achat_id' => 'required',
            'quantite' => 'required',
            'prix' => 'required'
        ]);
        
        $detailleachat->product_id = $request->product_id;
        $detailleachat->achat_id = $request->achat_id;
        $detailleachat->quantite = $request->quantite;
        $detailleachat->prix= $request->prix;
        $detailleachat->save();

        return redirect('detailleachats');
    }

    
    public function destroy(Detailleachat $detailleachat)
    {
        //
        $detailleachat = Detailleachat::find($detailleachat->id);
        $detailleachat->delete();

        return redirect('detailleachats');
    }
}
