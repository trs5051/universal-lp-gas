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
    public function create()
    {
        return view('create');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $this->validate($request, [
                'filenames' => 'required',
                'filenames.*' => 'mimes:doc,pdf,docx,zip'
        ]);


        if($request->hasfile('filenames'))
         {
            foreach($request->file('filenames') as $file)
            {
                $name = time().'.'.$file->extension();
                $file->move(public_path().'/files/', $name);
                $data[] = $name;
            }
         }


         $file= new Test();
         $file->filenames=json_encode($data);
         $file->save();


        return back()->with('success', 'Data Your files has been successfully added');
    }
}
