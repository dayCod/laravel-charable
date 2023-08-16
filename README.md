# Charable Laravel Facade
Get expected return value from char such as Alphabetic, Alphanumeric, Digit, Upper and Lower Case.

## Installation Guide
```bash
composer require daycode/charable
```
Update to the newest laravel project vendor
```bash
composer update
```
Go to config/app.php, then put these code on service providers
```php
'providers' => [
    /*
    * Package Service Providers...
    */
    DayCod\Charable\CharableServiceProvider::class,
],
```
Put this code also on the class aliases
```php
'aliases' => [
    /*
    * Class Aliases
    */
    'Charable'=> DayCod\Charable\Charable::class,
],
```
Last, for make sure this package installed correctly.
```bash
composer dump-autoload && php artisan optimize:clear
```

## Usage Guide

### Get Only Alphabet
```php

Charable::getOnlyAlphabet(string $char, bool $remove_whitespace = false);

// ex: 123abcdef*&^0
// return: abcdef

```
### Get Only Number or Digit
```php

Charable::getOnlyNumberOrDigit(string $char, bool $remove_whitespace = false);

// ex: 123abcdef*&^0
// return: 1230

```
### Get Only Lower Alphabet
```php

Charable::getOnlyLowerAlphabet(string $char, bool $remove_whitespace = false);

// ex: 123abcdef*&^0
// return: abcdef

```
### Get Only Upper Alphabet
```php

Charable::getOnlyUpperAlphabet(string $char, bool $remove_whitespace = false);

// ex: 123abcdef*&^0
// return: ""

```
### Get Only Alphabet Numeric
```php

Charable::getOnlyAlphabetNumeric(string $char, bool $remove_whitespace = false);

// ex: 123abcdef*&^0
// return: 123abcdef0

```

## Credits
- [Wirandra Alaya](https://github.com/dayCod)
- [See all Contributor](https://github.com/dayCod/laravel-charable/contributors)

## Tested on 
| Release                | Supported Versions |
|------------------------|--------------------|
| Laravel Charable 1.0.0 | Laravel 8/9/10     |





