Dadata.ru API Client
==========
[Dadata.ru](http://dadata.ru) API client based on Guzzle 5.

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

Now client is ready to use.

### Data clean

See full code [here](/examples/clean.php).

```php
$response = $client->cleanAddress("мск сухонска 11/-89");
$response = $client->cleanPhone("тел 7165219 доб139");
$response = $client->cleanPassport("4509 235857");
$response = $client->cleanName("Срегей владимерович иванов");
$response = $client->cleanEmail("serega@yandex/ru");
$response = $client->cleanDate("24/3/12");
$response = $client->cleanVehicle("форд фокус");
```

### Multiply data clean

```php
$response = $client->cleanAddresses([
    "мск сухонска 11/-89",
    "воронеж лизюкова 16",
]);
```

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

Todo
==========
- geo location
- suggests
- other api methods
