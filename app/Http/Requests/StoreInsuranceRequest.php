<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\Rule;

class StoreInsuranceRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 */
	public function authorize(): bool
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
	 */
	public function rules(): array
	{
		return [
			'valid_from' => 'required|date',
			'valid_until' => 'required|date',
			'company' => 'required|string|max:255',
			'cost' => 'required|numeric',
			'kilometers' => 'required|integer'
	  ];
	}

	public function failedValidation(Validator $validator)
	{
		$response = response()->json([
			'errors' => $validator->errors()
		], 400);

		throw new HttpResponseException($response);
	}
}
