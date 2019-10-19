<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Carbon\Carbon;

class EditProfile extends FormRequest
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
        $dt = Carbon::now();
        $dt = $dt->year;
        return [
            'nickname' => 'required|',
            'year' => "required|digits:4|gte:1900|lte:{$dt}",
            'month' => 'required|gte:1|lte:12',
            'day' => 'required|gte:1|lte:31',
            'job' => 'required',
            'locate' => 'required',
            'comment' => 'required',
            'gender' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'nickname' => 'ニックネーム',
            'year' => '年',
            'month' => '月',
            'day' => '日',
            'job' => '仕事',
            'locate' => '居住地',
            'comment' => 'コメント',
            'gender' => '性別'
        ];
    }
}
