<?php

namespace App\Utils;

use App\Exceptions\ApiException;
use App\Exceptions\BizException;
use App\Exceptions\UnauthException;

class CommonUtil
{

    const DIGIT = '0123456789';
    const MIXED_LOWER = 'qwertyuiopasdfghjklzxcvbnm0123456789';
    const MIXED_ALL = 'QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm0123456789';


    /**
     * @param $code
     * @param $msg
     * @throws ApiException
     */
    public static function throwException($code, $msg)
    {
        throw new ApiException($code, $msg);
    }

    public static function throwBizException($msg, $code = 4100)
    {
        throw new BizException($msg, $code);
    }

    public static function throwUnauthException()
    {
        throw new UnauthException();
    }

    /**
     * @param $code
     * @param $msg
     * @param $data
     * @throws ApiException
     */
    public static function throwExceptionData($code, $msg, $data)
    {
        throw (new ApiException($code, $msg))->setData($data);
    }

}
