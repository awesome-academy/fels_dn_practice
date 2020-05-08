<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{

    use RegistersUsers;

    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('auth.register');
    }

    protected function create(RegisterRequest $request)
    {
        $user = [
            'name' => $request->name,
            'email' => $request->email,

            'phone' => $request->phone,
            'address' => $request->address,
            'role' => 1,
            'avatar' => $request->avatar,
            'password' => bcrypt($request->password),
        ];
        $user = User::create($user);
        return redirect()->route('home');
    }
}
