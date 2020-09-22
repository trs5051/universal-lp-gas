<?php

namespace App\Http\Controllers;

use App\Models\LandOwner;
use App\Models\LandTaxInfo;
use App\Models\OtherFlat;
use App\Models\OtherFlatCurrentOwner;
use App\Models\OtherFlatFutureOwner;
use App\Models\OwnerFlat;
use App\Models\OwnerFlatCurrentOwner;
use App\Models\OwnerFlatFutureOwner;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('backend.home');
    }

    public function getProfile()
    {
        $profile = User::findOrFail(auth()->id());
        // dd($profile);
        return view('backend.profile', compact('profile'));
    }

    public function profileinfo(Request $request)
    {
        // dd($request->all());

        $user = User::findOrFail(auth()->user()->id);
        if ($request->name) {
            $user->name = $request->name;
        }
        if ($request->email) {
            $user->email = $request->email;
        }

        if ($request->hasFile('profile')) {
            $img = time() . '-' . $request->profile->getClientOriginalName();
            $request->profile->move('storage/profile', $img);
        }
        if ($request->hasFile('profile')) {
            $user->img = $img;
        }

        $user->update();
        return back()->with('successinfo', 'Updated Successfully!');

    }


    public function changePassword(Request $request)
    {
        // dd($request->all());

        $this->validate($request, [

            'current_password' => 'required',
            'password' => 'required|confirmed|min:6'

        ]);

        $user = User::findOrFail(auth()->user()->id);

        if (Hash::check($request->current_password, $user['password']) && $request->password == $request->password_confirmation) {

            $user->password = bcrypt($request->password);
            $user->update();
            return back()->with('success', 'Password Changed Successfully!');
        } else {
            return back()->with('error', 'Old Password does not matched!');
        }
    }
}
