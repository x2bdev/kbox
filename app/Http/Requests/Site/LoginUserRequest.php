<?php
/**
 * Created by PhpStorm.
 * User: macos
 * Date: 10/7/18
 * Time: 20:05
 */

namespace App\Http\Requests\Site;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Config;

class LoginUserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        switch ($this->method()) {
            case 'GET':
            case 'DELETE': {
                return [];
            }
            case 'POST': {
                return [
                    'email'                 => 'required|email',
                    'password'              => 'required',
                ];
                break;
            }
            default:
                break;
        }
    }

    public function messages() {
        return [
            'email.required' => Config::get('constants.VALIDATE_MESSAGE.EMAIL_REQUIRED'),
            'email.email'   => Config::get('constants.VALIDATE_MESSAGE.EMAIL_INVALID'),
            'password.required'  => Config::get('constants.VALIDATE_MESSAGE.PASSWORD_REQUIRED'),
        ];
    }
}