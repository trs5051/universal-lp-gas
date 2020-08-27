<?php

namespace App\Http\Controllers;

use App\Models\ManagementCategory;
use Illuminate\Http\Request;

class ManagementCategoryController extends Controller
{
    public function managementCategory()
    {
        $managementCategory = ManagementCategory::where('delete_status',1)->orderBy('id','asc')->get();

        return view('backend.management.category',compact('managementCategory'));
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $managementCategory = new ManagementCategory();
        $managementCategory->title = $request->Title;
        $managementCategory->save();

        return $managementCategory;

    }

    public function destroy(Request $request)
    {
        // dd($request->all());
        $managementCategory = ManagementCategory::findOrFail($request->id);
        $managementCategory->delete();
        return $managementCategory;

    }
}
