<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
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
            //
            'customer_name' => 'required',
            'ship_name' => 'required',
            'ship_address' => 'required',
            'ship_phone' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'customer_name.required' => 'Vui lòng nhập tên người đặt',
            'ship_name.required' => 'Vui lòng nhập tên người nhận',
            'ship_address.required' => 'Vui lòng nhập số phòng',
            'ship_phone.required' => 'Vui lòng nhập số điện thoại',
            'ship_phone.numeric' => 'Số điện thoại phải ở dạng số'
        ];
    }
}
