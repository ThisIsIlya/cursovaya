<?php

namespace App\Http\Requests\Task;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'Task_date_of_manufacturing'=>'required|date',
            'Task_date_of_issue'=>'required|date',
            'Task_price'=>'required|Integer',
            'Task_status'=>'required|string',
            'Task_date_of_order'=>'required|date',

            'manager_id'=>'required|Integer',
            'client_id'=>'required|Integer',
            'cathalog_id'=>'required|Integer',
        ];
    }
}
