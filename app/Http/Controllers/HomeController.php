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
use Illuminate\Support\Facades\Hash;

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
    public function formIndex()
    {
        return view('land-tax-form');
    }

    public function getProfile()
    {
        $profile = User::findOrFail(auth()->id());
        return view('backend.profile', compact('profile'));
    }

    public function changePassword(Request $request)
    {

        $this->validate($request, [
            'current_password' => 'required',
            'new_password' => 'required|confirmed|min:6'
        ]);

        $user = User::findOrFail(auth()->user()->id);
        if (Hash::check($request->current_password, $user['password']) && $request->new_password == $request->new_password_confirmation) {
            $user->password = bcrypt($request->new_password);
            $user->update();
            return back()->with('success', 'Password Changed Successfully!');
        } else {
            return back()->with('error', 'Old Password does not matched!');
        }
    }
}
