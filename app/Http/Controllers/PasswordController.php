<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecoverPasswordRequest;
use App\Http\Requests\UpdatePasswordRequest;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\View\View;

class PasswordController extends Controller
{
	public function recover(RecoverPasswordRequest $request): RedirectResponse
	{
		$status = Password::sendResetLink(
			$request->only('email')
		);

		return $status === Password::RESET_LINK_SENT
					? redirect()->route('password.notice')->with(['status' => __($status)])
					: back()->withErrors(['email' => __($status)]);
	}

	public function reset($token): View
	{
		return view('password.set-password', [
			'token' => $token,
			'email' => request('email'),
		]);
	}

	public function update(UpdatePasswordRequest $request): RedirectResponse
	{
		$status = Password::reset(
			$request->only('email', 'password', 'password_confirmation', 'token'),
			function ($user, $password) {
				$user->forceFill([
					'password' => $password,
				])->setRememberToken(Str::random(60));

				$user->save();

				event(new PasswordReset($user));
			}
		);

		return $status === Password::PASSWORD_RESET
					? redirect()->route('login')->with('status', __($status))
					: back()->withErrors(['email' => [__($status)]]);
	}
}
