<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Termwind\Components\Dd;

class NewUsersRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {



        return [
            'nom' => 'required|between:3,25|string',
            'prenom' => 'required|between:3,25|string',
            'email' => 'required|email|unique:monbeatmakers',
            'ville' => 'required|in:Douala,Dackar,Abbidjan,else',
            'pays' => 'required|in:Cameroun,Senegal,Cote d\'ivoir,else ',
            'tel' => 'required|string|regex:#^[0-9]{9}$#',
            'password1' => 'required|between:8,8|alpha_num',
            'password2' => 'required|between:8,8|alpha_num'
        ];
    }
}
