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




