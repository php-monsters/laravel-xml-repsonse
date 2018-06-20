<?php

namespace Tartan\XmlResponse;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;

/**
 * Class XmlResponseServiceProvider
 * @package XmlResponse
 */
class XmlResponseServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../../config/xml.php' => config_path('xml.php'),
        ], 'config');
    }

    public function register()
    {
        Response::macro('xml', function ($value, $headerTemplate = [], $template = null) {
            return (new XmlResponse())->array2xml($value, false, $headerTemplate, $template);
        });
    }
}
