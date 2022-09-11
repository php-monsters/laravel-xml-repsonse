# Laravel XML Response
Added a method to Laravel response for handling xml response and also converting Eloquent return to XML.

### Composer Installation

```php
composer require tartan/laravel-xml-repsonse
```

### Integration with Laravel 5.*

for Laravel < 5.6 add to config/app.php

```php
Tartan\XmlResponse\XmlResponseServiceProvider::class
```

### Publish

```php
php artisan vendor:publish
```

### Example
```php
// basic usage with default config from xml.php file
Route::get('/', function () {
    return response()->xml(User::all());
});


// custom template like: '<result></result>'
Route::get('/foo', function () {
    return response()->xml(['foo' => 1, 'bar' => 2, 'baz' => 3], [], '<result></result>);
});
```

## Team

This component is developed by the following person(s) and a bunch of [awesome contributors](https://github.com/iamtartan/laravel-xml-repsonse/graphs/contributors).

[![Aboozar Ghaffari](https://avatars1.githubusercontent.com/u/502961?s=130&v=4)](https://github.com/iamtartan) |
--- |
[Aboozar Ghaffari](https://github.com/iamtartan) |


### License

The Laravel XML Response is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
