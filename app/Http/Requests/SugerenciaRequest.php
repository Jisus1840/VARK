<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SugerenciaRequest extends FormRequest
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
            'empresaId' => 'required',
            'mensaje' => 'required',
            'g-recaptcha-response'=> ['required', 'string', function ($attribute, $value, $fail) {
                $secretKey = config('services.recaptcha.secret');
                $response = $value;
                $userIP = $_SERVER['REMOTE_ADDR'];
                $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$response&remoteip=$userIP";
                $response = \file_get_contents($url);
                $response = json_decode($response);
                
                if(!$response->success)
                {
                    $fail($attribute.' fallo el google reCaptcha, eres un robot!!');
                }
         }]
        ];
    }
}
