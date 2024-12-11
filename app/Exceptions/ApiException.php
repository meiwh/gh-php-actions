<?php

namespace App\Exceptions;

use Exception;

class ApiException extends BaseException
{

    public function __construct($code = 400, $message = "", Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
