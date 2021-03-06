<?php

namespace Djavue\Apps\Requests\Backend;

use Djavue\Apps\Models\Background;
use Illuminate\Foundation\Http\FormRequest;

class UpdateBackgroundsRequest extends FormRequest
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
        return Background::updateValidation($this);
    }
}
