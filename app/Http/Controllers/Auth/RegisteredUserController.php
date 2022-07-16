<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Batch;
use App\Models\Designation;
use App\Models\Profile;
use App\Models\StdProfile;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $batches = Batch::all();
        $degis = Designation::all();
        return view('auth.register', compact("batches", "degis"));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed'],
            'role_id' => ['required', 'integer'],
            'batch_id' => "required_if:role_id,0",
            'designation_id' => "required_if:role_id,1",
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            "user_role" => $request->role_id,
            'password' => Hash::make($request->password),
        ]);

        if ($request->role_id == 0) {
            StdProfile::create([
                'batch_id' => $request->batch_id,
                'user_id' => $user->id,
                'mobile' => $request->mobile,
                'address' => $request->address
            ]);
        } else if ($request->role_id == 1) {
            Profile::create([
                'user_id' => $user->id,
                'designation_id' => $request->designation_id,
                'mobile' => $request->mobile,
                'address' => $request->address
            ]);
        }

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
