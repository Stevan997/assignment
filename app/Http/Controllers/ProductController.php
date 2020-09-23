<?php

namespace App\Http\Controllers;

use App\Imports\CategoryImport;
use App\Imports\ProductsImport;
use App\Models\Product;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{

    public function index()
    {
        return response()->json(Product::with('category')->get());
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return response()->json($product);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'model_number'=>'string',
            'category_name'=>'string',
            'department_name'=>'string',
            'manufacturer_name'=>'string',
            'upc'=>'numeric',
            'sku'=>'numeric',
            'regular_price'=>'numeric',
            'sale_price'=>'numeric',
            'description'=>'string',
            'url'=>'string'
        ]);
        
        $product = Product::findOrFail($id);
        $product->update($request->all());

        return response()->json('Product updated');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return response()->json('Product deleted');
    }

    public function importForm(){
        return view('import-form');
    }

    public function import(Request $request)
    {
        Excel::import(new CategoryImport, $request->file);
        Excel::import(new ProductsImport, $request->file);
        return "Records are imported successfully";
    }
}
