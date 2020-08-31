<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use App\Models\Setting;


class ProductController extends Controller
{
    public function index(){
        $settings = Setting::where('delete_status',1)->first();
        $products = Product::with('category')->where('delete_status',1)->get();
        $categories = ProductCategory::where('delete_status',1)->get();
        // dd($products);
        return view('frontend.projects',compact("settings",'products','categories'));
    }
    public function product()
    {
        $products = Product::with('category')->where('delete_status',1)->get();
        $categories = ProductCategory::where('delete_status',1)->get();

        return view('backend.product.productIndex',compact('products','categories'));
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'category' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        if ($request->hasFile('image')) {
            $img = time() . '-' . $request->image->getClientOriginalName();
            $request->image->move('storage/productimage', $img);
        }
        $category_id = $request->category;
        $findCategory = ProductCategory::where('id',$category_id)->first();
        if (!$findCategory) {
            $category = new ProductCategory();
            $category->title = $request->category;
            $category->save();
            $category_id = $category->id;
        }
        $products = new Product();
        $products->img = $img;
        $products->product_categories_id = $category_id;
        $products->save();
        $category = ProductCategory::findOrFail($category_id);

        return array ($products,$category);
    }

    public function findOne(Request $request)
    {
        $products = Product::findOrFail($request->id);
        return $products;
    }

    public function update(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'Plant_Name' => 'required|max:255',
        ]);
        if ($request->hasFile('image')) {
            $img = time() . '-' . $request->image->getClientOriginalName();
            $request->image->move('storage/productimage', $img);
        }

        $products = Product::findOrFail($request->Plant_Id);
        if ($request->hasFile('image')) {
            $products->img = $img;
        }

        $products->heading = $request->Plant_Name;
        $products->text1 = $request->text1;
        $products->text2 = $request->text2;
        $products->update();
        return $products;
    }

    public function destroy(Request $request)
    {

        $products = Product::where('id',$request->id)->first();
        $products->delete_status = 0;
        $products->update();
        return $products;

    }
}
