<?php

namespace App\Exceptions;

use Exception;

class BaseException extends \Exception
{

    protected $data;

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * 为了兼容现在code msg 顺序
     * @param int $code
     * @param string $message
     * @param Exception|null $previous
     */
    public function __construct($code = 4000, $message = "", Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
