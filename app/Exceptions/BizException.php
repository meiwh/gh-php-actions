<?php

namespace App\Exceptions;

use Exception;

class BizException extends BaseException
{

    /**
     * 为了兼容现在code msg 顺序
     * @param int $code
     * @param string $message
     * @param Exception|null $previous
     */
    public function __construct($message = "", $code = 4001, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
