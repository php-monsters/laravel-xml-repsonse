# Laravel XML Response
Added a method to Laravel response for handling xml response and also converting Eloquent return to XML.

### Composer Installation

```php
composer require joker/laravel-xml-repsonse
```

### Integration with Laravel 5.*

for Laravel < 5.6 add to config/app.php

```php
Joker\XmlResponse\XmlResponseServiceProvider::class
```

### Publish

```php
php artisan vendor:publish
```

### Example
```php
//default template from xml.php config file like: '<root></root>'
Route::get('/', function () {
    return response()->xml(User::all());
});


// custom template like: '<result></result>'
Route::get('/foo', function () {
    return response()->xml(['foo' => 1, 'bar' => 2, 'baz' => 3], '<result></result>);
});
```

## Team

This component is developed by the following person(s) and a bunch of [awesome contributors](https://github.com/thejokercoder/laravel-custom-validator/graphs/contributors).

[![Aboozar Ghaffari](https://avatars1.githubusercontent.com/u/35990482?s=200&v=4)](https://github.com/thejokercoder) |
--- |
[Aboozar Ghaffari](https://github.com/thejokercoder) |

## Support This Project
  
[![Donate via Paypal](https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif)](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=LXEL22GFTXTKN)

### License

The Laravel XML Response is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
