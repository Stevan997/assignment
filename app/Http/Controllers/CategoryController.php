<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return response()->json(Category::all());
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);
        return response()->json($category);
    }

    public function allProducts($id)
    {
        $category = Category::findOrFail($id);
        return response()->json($category->products()->get());
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->update($request->all());

        return response()->json('Category updated');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        if($category->products()->count() == 0){
            $category->delete();
            return response()->json('Category deleted');
        }

        return response()->json('Category can not be deleted while have products assigned!');
    }
}
