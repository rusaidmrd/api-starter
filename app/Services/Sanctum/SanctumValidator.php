<?php

declare(strict_types=1);

namespace App\Services\Sanctum;

use InvalidArgumentException;

class SanctumValidator
{

    public function validateIssueToken(array $data):void
    {
        $validator = validator($data,[
            "email" => "required|email",
            "password" => "required|string",
            "device" => "required|string"
        ]);

        if($validator->fails()){
            throw new InvalidArgumentException(json_encode($validator->errors()->all()));
        }
    }
}
