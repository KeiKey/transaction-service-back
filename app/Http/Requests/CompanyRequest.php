<?php

namespace App\Http\Requests;

use App\Enums\TransactionStatusEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CompanyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name'          => ['required'],
            'email'         => ['required'],
            'address'       => ['required'],
            'vat_number'    => ['required'],
            'contact_name'  => ['required'],
            'contact_phone' => ['required'],
            'contact_email' => ['required'],
        ];
    }
}
