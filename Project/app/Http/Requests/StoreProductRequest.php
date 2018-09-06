<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'categoryId' => 'required',
            'name' => 'required|max:50|min:3|unique:products',
            'thumbnail' => 'required',
            'discount' => 'numeric|max:100|min:0',
            'price' => 'required|numeric|min:0',
            'description' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên bộ sưu tập.',
            'name.min' => 'Tên quá ngắn, vui lòng nhập ít nhất 3 ký tự.',
            'name.max' => 'Tên quá dài, vui lòng nhập nhiều nhất 50 ký tự.',
            'name.unique' => 'Tên đã được sử dụng, vui lòng chọn tên khác.',
            'categoryId.required' => 'Vui lòng chọn danh mục cho sản phẩm',
            'discount.numeric' => 'Chỉ được nhập số cho mục giảm giá',
            'discount.min' => 'Giảm giá không được nhỏ hơn 0%',
            'discount.max' => 'Giảm giá không được lớn hơn 100%',
            'price.numeric' => 'Chỉ được nhập số cho mục giá của sản phấm',
            'price.required' => 'Vui lòng nhập giá cho sản phấm',
            'price.min' => 'Giá của sản phấm không được nhỏ hơn 0 đồng',
            'description.required' => 'Vui lòng nhập mô tả cho danh mục',
            'thumbnail.required' => 'Vui lòng thêm ảnh đại diện cho danh mục'
        ];
    }
}
