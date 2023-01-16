<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecoverPasswordRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'email' => 'required|email',
		];
	}

	public function messages()
	{
		return [
			'email.required' => __('texts.email_required'),
			'email.email'    => __('texts.email_email'),
		];
	}
}
