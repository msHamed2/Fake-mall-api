<?php

namespace App\Http\Requests;

use Mapi\Easyapi\Requests\BaseRequest;

class UsersRequest extends BaseRequest
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
        $method= strtolower($this->method());
        if ($method ==="post"){
            return array_merge($this->postRules,[
                'name'=>'required|string|max:191',
                'email'=>'required|string|max:191',
                'password'=>'required|string|max:191',
                "address"=>"required"
            ],self::getCompoundRules('address',AddressRequest::postRules(),false));
        }
        if ($method ==="get"){
            return array_merge($this->getRules,[
                "with_address"=>"sometimes|boolean",
                "where_id"=>"sometimes|int"
            ]);
        }
        if ($method ==="put"){
            return array_merge($this->putRules,[

            ]);
        }
    }
    protected static function getCompoundRules(string $key, array $rules, bool $isArray = true)
    {
        $vRules = [];
        foreach ($rules as $field => $validationRules) {
            $vRules[$key . '.' . ($isArray ? '*.' : '') . $field] = $validationRules;
        }
        return $vRules;
    }

}
