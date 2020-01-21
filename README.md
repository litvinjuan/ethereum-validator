## Introduction

Ethereum Validator provides an easy way to validate a given string is a valid ethereum address.

## Installation

You may install Ethereum Validator via Composer:

    composer require litvinjuan/ethereum-validator

## Usage

Ethereum Validator has a static `isValidAddress` method that receives a string containing the ethereum address and returns `true` if the address is valid, or `false` if it's not:

```php
use litvinjuan\EthereumValidator\EthereumValidator;

$address = '0x71C7656EC7ab88b098defB751B7401B5f6d8976F';
if (EthereumValidator::isValidAddress($address)) {
    // Valid Address
}

// Invalid Address
```

## Contributing

Thank you for considering contributing to Ethereum Validator! Please read the [contributing guidelines](CONTRIBUTING.md) before opening a PR.

##License

Ethereum Validator is open-sourced software licensed under the [MIT license](LICENSE.md).
