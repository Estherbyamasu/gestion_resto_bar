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
        return view('products/index',[
            'products' => $products,
            'categories' => $categories
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
        return view('products.show',compact('product_detailleachats'));
    }

    /*public function show1($id)
    {
        $product_detailleachats = Product::with(['detailleachats' =>function ($req){
            $req->SUM('quantite','prix');
        }])->find($id);
        
    return view('products.show',compact('product_detailleachats'));
    }*/
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
