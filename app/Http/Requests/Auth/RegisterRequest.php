<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use App\User;

class RegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
        //return Auth::check();
    }

    public function rules()
    {
        return User::rules();
    }
}
