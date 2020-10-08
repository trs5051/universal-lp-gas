<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function productCategory()
    {
        $productCategory = ProductCategory::where('delete_status',1)->orderBy('id','asc')->get();

        return view('backend.product.category',compact('productCategory'));
    }



    public function store(Request $request)
    {
        // dd($request->all());
        $productCategory = new ProductCategory();
        $productCategory->title = $request->Title;
        $productCategory->save();

        return $productCategory;

    }

    public function destroy(Request $request)
    {
        // dd($request->all());
        $productCategory = ProductCategory::findOrFail($request->id);
        $productCategory->delete();
        return $productCategory;

    }
}
