<?php


namespace calderawp\CalderaPay\WpClient\Tests\Traits;

use calderawp\CalderaPay\WpClient\CalderaPayWp;
use calderawp\CalderaPay\WpClient\Qualpay\Settings;

trait SharedFactories
{

    protected function getMainContainer() : CalderaPayWp
    {
        return new CalderaPayWp();
    }
    protected function qualpaySettingsFactory(): Settings
    {
        return new Settings();
    }
}
