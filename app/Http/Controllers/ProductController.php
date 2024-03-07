<?php
namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Models\Product;
 
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::with('kategori')
            ->orderBy('created_at', 'DESC')
            ->get();
 
        return view('products.index', compact('product'));
    }
 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('products.create', compact('kategori'));
    }
 
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->image) {
            $fileName = time() . '.' . $request->image->extension();
             $request->image->storeAs('public/products', $fileName);
        }
        Product::create($request->all());
 
        return redirect()->route('admin/products')->with('success', 'Product added successfully');
    }
 
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
 
        return view('products.show', compact('product'));
    }
 
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        $kategori = Kategori::all(); 
        return view('products.edit', compact('product', 'kategori'));
    }
 
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);

        if($request->image) {
            $fileName = time() . '.' . $request->image->extension();
             $request->image->storeAs('public/products', $fileName);
        }

        $product->update($request->all());
 
        return redirect()->route('admin/products')->with('success', 'product updated successfully');
    }
 
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
 
        $product->delete();
 
        return redirect()->route('admin/products')->with('success', 'product deleted successfully');
    }
}