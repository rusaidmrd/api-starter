<?php
declare(strict_types=1);

namespace App\Services\Core;

abstract class HTTPResponseCodes {
    const Success = [
        "title" => "success",
        "code" => 200,
        "message" => "Request has been processed successfully"
    ];

    const NotFound = [
        "title" => "not_found_error",
        "code" => 404,
        "message" => "Could not locate resource"
    ];

    const InvalidArguments = [
        "title" => "invalid_arguments_error",
        "code" => 404,
        "message" => "Invalid arguments. Server failed to process the request."
    ];

    const BadRequest = [
        "title" => "bad_request_error",
        "code" => 400,
        "message" => "Server failed to process the request."
    ];
}
