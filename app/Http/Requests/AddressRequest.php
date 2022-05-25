<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
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
        $method = strtolower($this->method());
        if ($method === "post") {
            return array_merge($this->postRules, self::postRules());
        }
        if ($method === "get") {
            return array_merge($this->getRules, [

            ]);
        }
        if ($method === "put") {
            return array_merge($this->putRules, [

            ]);
        }
    }

    public static function postRules()
    {
        return ["city" => 'required|string|max:191',
            "street" => 'required|string|max:191',
            "zipcode" => 'required|string|max:191',
            "long" => 'required|string|max:191',
            "lat" => 'required|string|max:191'];
    }
}
