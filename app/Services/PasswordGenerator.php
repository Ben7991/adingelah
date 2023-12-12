<?php


namespace App\Services;


class PasswordGenerator
{
    public static function generate() : string
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
        $length = 8;
        $randomPassword = '';
        for ($i = 0; $i < $length; $i++) {
            $randomPassword .= $characters[random_int(0, strlen($characters) - 1)];
        }

        return strtoupper($randomPassword);
    }
}
