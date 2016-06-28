<?php

namespace AppBundle\Utils;

/**
 * Created by PhpStorm.
 * User: gtostain
 * Date: 24/06/2016
 * Time: 22:38
 */
class RandomString
{
    static public function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}