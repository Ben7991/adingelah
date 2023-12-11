<?php


namespace App\Services;


class PasswordGenerator
{
    public static function generate() : string
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
        $length = 8;
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, strlen($characters) - 1)];
        }

        return $randomString;
    }
}
