<?php

namespace App\Http\Controllers;
use App\Events\UserRegisteredEvent;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Validator; 
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerController extends Controller
{
    function register()
    {
        return view('frontend.seller.register'); 
    }
    function dashboard()
    {
        return view('frontend.seller.dashboard'); 
    }

    function login()
    {
        return view('frontend.seller.login'); 
    }

    function create(RegisterRequest $request)
    {

        $info = [
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'role' => User::SELLER_ROLE,
        ];
        // dd($info);
        $user = User::create($info);
        if ($user and $user->id > 0) {
            UserRegisteredEvent::dispatch($user);
            return redirect(route('seller.login'))->with('message', 'Succesfully Registered!');
        } else {
            return redirect()->back()->with('error', 'Error occured!');
        }
    }
    function reset()
    {
        return view('auth.reset');
    }

    public function verification(LoginRequest $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $remember = request('remember', 0);
        $info = [
            'email' => $email,
            'password' => $password, 
        ];

        if (Auth::attempt($info, $remember)) {
            $request->session()->regenerate();
            return redirect()->intended(route('seller.dashboard'));
        } else {
            return redirect()->back()->with('error', 'Invalid Credentials !');
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
