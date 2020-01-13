<?php

namespace litvinjuan\EthereumValidator\Tests;

use litvinjuan\EthereumValidator\EthereumValidator;
use PHPUnit\Framework\TestCase;

class ValidatorTest extends TestCase
{

    public function test_validates_valid_address()
    {
        $this->assertTrue(EthereumValidator::isValidAddress('0x71c7656ec7ab88b098defb751b7401b5f6d8976f'));
    }

    public function test_validates_valid_address_without_prefix()
    {
        $this->assertTrue(EthereumValidator::isValidAddress('71c7656ec7ab88b098defb751b7401b5f6d8976f'));
    }

    public function test_validates_all_lowercase_address()
    {
        $this->assertTrue(EthereumValidator::isValidAddress('0x71c7656ec7ab88b098defb751b7401b5f6d8976f'));
    }

    public function test_validates_all_uppercase_address()
    {
        $this->assertTrue(EthereumValidator::isValidAddress('0x71C7656EC7ab88b098defB751B7401B5f6d8976F'));
    }

    public function test_validates_valid_mixed_case_address()
    {
        $this->assertTrue(EthereumValidator::isValidAddress('0x22A8F6a6fFe30d51cBc6a5EaAF3CefC3b1599b14'));
    }

    public function test_validates_valid_mixed_case_address_without_prefix()
    {
        $this->assertTrue(EthereumValidator::isValidAddress('22A8F6a6fFe30d51cBc6a5EaAF3CefC3b1599b14'));
    }

    public function test_rejects_invalid_mixed_case_address()
    {
        $this->assertFalse(EthereumValidator::isValidAddress('0x71c7A9J656EC7ab123098defb751b7401b58976f'));
    }

    public function test_rejects_short_address()
    {
        $this->assertFalse(EthereumValidator::isValidAddress('0x71C7656EC7ab88b098defB751B7401B5f6d8976'));
    }

    public function test_rejects_super_short_address()
    {
        $this->assertFalse(EthereumValidator::isValidAddress('0x71C7656EC7ab88b098defB'));
    }

    public function test_rejects_invalid_address()
    {
        $this->assertFalse(EthereumValidator::isValidAddress('0x71c7A9J656EC723098defb751b7401b58976f'));
    }

    public function test_rejects_nonsense()
    {
        $this->assertFalse(EthereumValidator::isValidAddress('address'));
        $this->assertFalse(EthereumValidator::isValidAddress('ethereum'));
    }

}
