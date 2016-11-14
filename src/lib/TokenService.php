<?php
namespace Alvee\WorldPay\lib;

class TokenService
{
    public static function getStoredCardDetails($token)
    {
        return Connection::getInstance()->sendRequest('tokens/' . $token, false, true, 'GET');
    }
}
