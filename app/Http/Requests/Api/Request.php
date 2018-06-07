<?php

namespace App\Http\Requests\Api;

use Dingo\Api\Http\FormRequest as baseRequest;

class Request extends baseRequest
{
    public function authorize()
    {
        // Using policy for Authorization
        return true;
    }
}
