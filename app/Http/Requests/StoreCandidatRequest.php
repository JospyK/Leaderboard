<?php

namespace App\Http\Requests;

use App\Models\Candidat;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCandidatRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('candidat_create');
    }

    public function rules()
    {
        return [
            'order' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'nom' => [
                'string',
                'nullable',
            ],
            'photo' => [
                'string',
                'nullable',
            ],
            'vpro' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'vjury' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'vpublic' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'total' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'classement' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
