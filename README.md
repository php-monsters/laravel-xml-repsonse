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
Route::get('/', function () {
    return response()->xml(User::all());
});
```

### License

The Laravel XML Response is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
