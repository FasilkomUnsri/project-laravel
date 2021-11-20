<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;

class AuthController extends Controller
{
    protected function authenticated(Request $request, $user)
    {
        return redirect()->intended();
    }

    public function login()
    {
        $this->data['title'] = 'Login';
        return view('auth.login', $this->data);
    }

    public function do_login(LoginRequest $request)
    {
        $credentials = $request->getCredentials();
        if(!Auth::validate($credentials)):
            return redirect()->to('login')
                ->withErrors(trans('auth.failed'));
        endif;

        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        Auth::login($user);

        return $this->authenticated($request, $user);
    }

	public function register()
	{
        $this->data['title'] = 'Register';
		return view('auth.register', $this->data);
	}

	public function do_register(RegisterRequest $request)
	{
		$user = User::create($request->validated());
		auth()->login($user);
		return redirect('/')->with('success', "Berhasil mendaftar");
	}

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('login');
    }
}
