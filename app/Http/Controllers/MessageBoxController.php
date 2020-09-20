<?php

namespace App\Http\Controllers;

use App\Models\MessageBox;
use Illuminate\Http\Request;

class MessageBoxController extends Controller
{
    public function  messageSubmit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        $message = new MessageBox();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->message = $request->message;
        $message->save();
        return redirect()->back()->with('messageBox', 'Successfully Sent Your Message!');

    }
    public function message()
    {
        $messageBox = MessageBox::where('delete_status', 1)->get();
        return view('backend.messageBox', compact('messageBox'));

    }
    public function destroy(Request $request)
    {
        // dd($request->all());
        $messageBox = MessageBox::where('id', $request->id)->first();
        $messageBox->delete_status = 0;
        $messageBox->update();
        return $messageBox;
    }
}
