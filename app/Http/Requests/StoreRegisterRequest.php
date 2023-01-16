<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegisterRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'username' => 'required|min:3|unique:users,username',
			'email'    => 'required|email|unique:users,email',
			'password' => 'required|confirmed|min:3',
		];
	}

	public function messages()
	{
		return [
			'username.required' => __('texts.username_required'),
			'username.min'      => __('texts.username_min'),
			'username.unique'   => __('texts.username_unique'),

			'email.required' => __('texts.email_required'),
			'email.email'    => __('texts.email_email'),
			'email.unique'   => __('texts.email_unique'),

			'password.required'  => __('texts.password_required'),
			'password.confirmed' => __('texts.password_confirmed'),
			'password.min'       => __('texts.password_min'),
		];
	}
}
