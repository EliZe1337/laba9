<?php


namespace vboxuser\laba9;
use PHPUnit\Framework\TestCase;


require_once __DIR__ . '/../src/pass.php';

class pass extends TestCase
{
    public function testValidPassword()
    {
        $this->assertTrue(PasswordValidator::validate("Valid123"));
    }

    public function testTooShort()
    {
        $this->assertFalse(PasswordValidator::validate("Abc12"));
    }

    public function testNoUppercase()
    {
        $this->assertFalse(PasswordValidator::validate("password123"));
    }

    public function testNoDigits()
    {
        $this->assertFalse(PasswordValidator::validate("Password"));
    }

    public function testContainsSpaces()
    {
        $this->assertFalse(PasswordValidator::validate("Pass 1234"));
    }

    public function testEdgeCaseExactly8Chars()
    {
        $this->assertTrue(PasswordValidator::validate("Test123A"));
    }
}
