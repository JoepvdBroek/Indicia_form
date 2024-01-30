<?php

namespace App\Http\Requests;

use App\Rules\Iban;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class FormPostRequest extends FormRequest
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
            'company_name' => [
                'required',
                'string'
            ],
            'legal_structure' => [
                'required',
                'string',
                Rule::in(['Eenmanszaak', 'VOF', 'Maatschap', 'Besloten vennootschap', 'Naamloze vennootschap', 'Stichting', 'Vereniging', 'Overig']),
            ],
            'street_name' => [
                'required',
                'string'
            ],
            'house_number' => [
                'required',
                'integer'
            ],
            'postcode' => [
                'required',
                'string',
                'regex:/^[1-9][0-9]{3} [A-Z]{2}$/'
            ],
            'iban' => [
                'required',
                'string',
                new Iban,
            ],
            'email_of_client' => [
                'required',
                'email'
            ],
            'email_of_financial_correspondence' => [
                'required',
                'email'
            ],
        ];
    }
}
