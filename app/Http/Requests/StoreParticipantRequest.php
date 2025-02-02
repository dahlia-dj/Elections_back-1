<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreParticipantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'nom'=>'required',
            'num_cni'=>'required',
            'age'=>'required',
            'sexe'=>'required',
            'statut'=>'required',
            'id_region'=>'required',
            'login'=>'required',
            'pwd'=>'required',
            'email'=>'required',
            'etat'=>'required',
            'tel'=>'required'
        ];
    }
}
