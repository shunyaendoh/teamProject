<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateIdea extends FormRequest
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
            //タイトル、アイデア欄が空欄の時に「入力して下さい。」と表示する。'value'=> 'required',
            'title' => 'required',
            'job_id' => 'required',
            'body' => 'required',

        ];
    }


    public function attributes()
    {
        return [
            //言語を日本語に。
            'title' => 'タイトル',
            'job_id' => '対象の職業',
            'body' => 'アイデア',
        ];
    }
}
