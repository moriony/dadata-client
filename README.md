==========
Dadata.ru API Client
==========
[Dadata.ru](http://dadata.ru) API client based on Guzzle 5

How to use
==========

Add this code into your project. Use yours `token` and `secret` provided by [dadata.ru](http://dadata.ru)
```php
$factory = new \Moriony\Dadata\Factory();
$client = $factory->createClient([
    'token' => '***auth token here***',
    'secret' => '***secret key here***'
]);
```

Now client ready to use.

Installing
==========

This project can be installed using Composer. Add the following to your
composer.json:

```javascript

{
    "require": {
        "moriony/dadata-client": "dev-master"
    }
}
```
