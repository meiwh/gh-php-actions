<?php

namespace App\Exceptions;

use App\Utils\CommonUtil;
use Exception;

class UnauthException extends BaseException
{

    /**
     * 为了兼容现在code msg 顺序
     * @param int $code
     * @param string $message
     * @param Exception|null $previous
     */
    public function __construct($code = 401, $message = "未登录", Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function context(): array
    {
        return ['ip' => CommonUtil::getIp()];
    }
}
