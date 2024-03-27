<?php

namespace App\Http\Requests;

use App\Enums\UserRole;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class UpdateOrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->user()->role->value === UserRole::ADMIN->value;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'warehouse' => ['required', 'exists:warehouses,id'],
            'city' => ['required', 'exists:cities,id'],
            'card' => ['required', 'exists:cards,id'],
            'status' => ['required', 'exists:statuses,id'],
            'pieces' => ['required', 'integer', 'min:100', 'max:1000'],
        ];
    }
}
