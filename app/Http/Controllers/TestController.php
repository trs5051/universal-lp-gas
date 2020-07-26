<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function dataFormStore(Request $request){
        
        $test = new Test();
        $test->id_no = $request->id_no;
        $test->area = $request->location_area;
        $test->name = $request->Name;
        $test->age = $request->Age;
        $test->save();

        return view('/home');

    }
}
