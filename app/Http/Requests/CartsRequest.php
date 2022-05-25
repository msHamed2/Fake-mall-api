<?php

namespace App\Http\Requests;

use Mapi\Easyapi\Requests\BaseRequest;

class CartsRequest extends BaseRequest
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
        if (strtolower($this->getMethod()) == 'get') {
            return array_merge($this->getRules,[
                "where_id"=>'sometimes|int',
                'where_user_id'=>"sometimes|int",
                'with_cartProducts'=>"sometimes|boolean",
                'with_user'=>"sometimes|boolean"
            ]);
        } else if (strtolower($this->getMethod()) == 'put') {
            return array_merge($this->putRules,[
                "products"=>"sometimes|array",
                "products.*.product_id"=>"bail|sometimes|integer|exists:products,id",
                "products.*.quantity"=>"bail|sometimes|required|max:10|min:1"
            ]);
        } else {
            return array_merge($this->postRules,[
                "user_id"=>"bail|required|exists:users,id",
                "products"=>"required|array",
                "products.*.product_id"=>"bail|required|integer|exists:products,id",
                "products.*.quantity"=>"bail|integer|required|max:10|min:1"
            ]);
        }
    }
}
