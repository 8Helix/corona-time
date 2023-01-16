<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Factory as ValidationFactory;

class StoreLoginRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'username'    => 'required',
			'password'    => 'required',
		];
	}

	public function messages()
	{
		return [
			'username.required' => __('texts.username_required'),
			'password.required' => __('texts.password_required'),
		];
	}

	/**
	 * Get the needed authorization credentials from the request.
	 *
	 * @return array
	 */
	public function getCredentials()
	{
		$username = $this->get('username');

		if ($this->isEmail($username))
		{
			return [
				'email'    => $username,
				'password' => $this->get('password'),
			];
		}

		return $this->only('username', 'password');
	}

	/**
	 * Validate if provided parameter is valid email.
	 *
	 * @return bool
	 */
	private function isEmail($param)
	{
		$factory = $this->container->make(ValidationFactory::class);

		return !$factory->make(
			['username' => $param],
			['username' => 'email']
		)->fails();
	}
}
