<?php


namespace App\Security\Exceptions;

use Exception;

class SecurityException extends Exception
{
    public function getInfo(): string
    {
        return ' SecurityException ';
    }
}
