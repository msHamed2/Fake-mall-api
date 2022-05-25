<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Mapi\Easyapi\Requests\BaseRequest;

class ProductsRequest extends BaseRequest
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
            return array_merge($this->getRules, [
          "where_id"=>"sometimes|integer",
                'where_category'=>"sometimes|string"
            ]);
        } else if (strtolower($this->getMethod()) == 'put') {
            return array_merge($this->putRules, [
                "title" => "sometimes|string|max:191",
                "price" => "sometimes|numeric|max:191",
                "description" =>"sometimes|string|max:191",
                "category" => "sometimes|string|max:191",
                "image" =>  "sometimes|string|max:191",
                "rate"=>"sometimes",
                "rate.rating" => "sometimes|numeric|max:5|min:1",
                "rating"=> "sometimes|numeric|max:5|min:1",
            ]);
        } else {
            return array_merge($this->postRules, [
                "title" => "required|string|max:191",
                "price" => "required|numeric|max:191",
                "description" =>"required|string|max:191",
                "category" => "required|string|max:191",
                "image" =>  "required|string|max:191",
//                "rating" => "required",
//                "rating.rate"=>"required|numeric|max:5",



            ]);
        }
    }

}
