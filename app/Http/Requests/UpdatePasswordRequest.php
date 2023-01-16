<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePasswordRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'token'    => 'required',
			'email'    => 'required|email',
			'password' => 'required|min:3|confirmed',
		];
	}

	public function messages()
	{
		return [
			'email.required' => __('texts.email_required'),
			'email.email'    => __('texts.email_email'),

			'password.required'  => __('texts.password_required'),
			'password.confirmed' => __('texts.password_confirmed'),
			'password.min'       => __('texts.password_min'),
		];
	}
}
