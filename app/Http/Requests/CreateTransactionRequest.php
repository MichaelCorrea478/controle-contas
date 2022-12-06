<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Transaction;

class CreateTransactionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'income' => 'required|boolean',
            'category_id' => 'nullable|integer',
            'description' => 'required|string',
            'value' => 'required|numeric',
            'due_date' => 'required',
            'installments_qty' => 'nullable|integer',
            'recurrent' => 'nullable|boolean',
            'fixed_value' => 'nullable|boolean',
            'paid' => 'nullable|boolean',
            'created_at' => 'nullable',
            'updated_at' => 'nullable'
        ];
    }
}
