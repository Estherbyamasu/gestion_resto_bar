<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    
    public function index()
    {
        //
        $categories = Category::all();
        $products = DB::table('categories')
            ->join('products', 'products.category_id', '=', 'categories.id')
            ->get();
        $somme = DB::table('categories')
            ->select(DB::raw('sum(prix) as prix ') )
            ->join('products', 'products.category_id', '=', 'categories.id')
            ->get();
        return view('products/index',[
            'products' => $products,
            'categories' => $categories,
            'somme' => $somme
        ]);
    }

    
    public function create()
    {
        //
        $categories = Category::all();
        return view('products/create',[
           'categories' => $categories
        ]);
    }

    
     
    public function store(Request $request)
    {
        //
        $request->validate([
            'category_id' => 'required',
            'nom_produit' => 'required',
            'prix' => 'required'
        ]);

        $product = new Product();
        $product->category_id = $request->category_id;
        $product->nom_produit = $request->nom_produit;
        $product->prix = $request->prix;
        $product->save();

        return redirect('products');
    }

    
    public function show($id)
    {
        $product_detailleachats = Product::with(['detailleachats'])->find($id);
        $somme = DB::table('detailleachats')
                    ->select(DB::raw('sum(prix) as prix ') )
                    ->join('products', 'detailleachats.product_id', '=', 'products.id')
                    ->join('achats', 'detailleachats.achat_id', '=', 'achats.id')
                    ->select('products.*', 'achats.*', 'detailleachats.*')
                    ->where('detailleachats.product_id', $id)
                    ->get();
        return view('products.show',compact('product_detailleachats','somme'));
    }

    public function show1($id)
    {
        $product_detailleachats =App\Product::with('detailleachats')->GroupBy('$id')->sum('quantite');
    }
    public function edit(Product $product)
    {
        //
        $categories = Category::all();
        $product = Product::find($product->id);
        return view('products/edit',[
            'product' => $product,
            'categories' => $categories
        ]);
    }

    
    public function update(Request $request, Product $product)
    {
        //
        $request->validate([
            'category_id' => 'required',
            'nom_produit' => 'required',
            'prix' => 'required'
        ]);

        $product->category_id = $request->category_id;
        $product->nom_produit = $request->nom_produit;
        $product->prix = $request->prix;
        $product->save();

        return redirect('products');
    }

    
    public function destroy(Product $product)
    {
        //
        $product = Product::find($product->id);
        $product->delete();

        return redirect('products');
    }
}
