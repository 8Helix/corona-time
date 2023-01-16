<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegisterRequest;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class RegisterController extends Controller
{
	public function register(StoreRegisterRequest $request): RedirectResponse
	{
		$user = User::create(['username' => $request->username, 'email' => $request->email, 'password' => $request->password]);

		event(new Registered($user));

		return redirect()->route('verification.notice');
	}

	public function verify(Request $request): View
	{
		$user = User::find($request->route('id'));

		if (!hash_equals((string) $request->route('hash'), sha1($user->getEmailForVerification())))
		{
			throw new AuthorizationException();
		}

		if ($user->markEmailAsVerified())
		{
			event(new Verified($user));
		}

		return view('register.confirmed');
	}
}
