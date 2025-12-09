<?php

class PasswordValidator
{
    public static function validate(string $password): bool
    {
        
        if (strlen($password) < 8) {
            return false;
        }

        
        if (!preg_match('/[A-Z]/', $password)) {
            return false;
        }

        
        if (!preg_match('/[0-9]/', $password)) {
            return false;
        }

        
        if (preg_match('/\s/', $password)) {
            return false;
        }

        return true;
    }
}
