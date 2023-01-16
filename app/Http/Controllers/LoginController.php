<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
	public function login(StoreLoginRequest $request): RedirectResponse
	{
		$credentials = $request->getCredentials();

		$remember = $request->remember ? true : false;

		if (!auth()->attempt($credentials, $remember))
		{
			throw ValidationException::withMessages([
				'username' => __('texts.username_validation'),
				'password' => __('texts.password_validation'),
			]);
		}

		session()->regenerate();

		return redirect()->route('home');
	}

	public function logout(): RedirectResponse
	{
		auth()->logout();

		return redirect()->route('login');
	}
}
