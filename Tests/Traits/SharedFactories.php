<?php


namespace calderawp\CalderaPay\WpClient\Tests\Traits;

use calderawp\CalderaPay\WpClient\Qualpay\Settings;

trait SharedFactories
{
    protected function qualpaySettingsFactory(): Settings
    {
        return new Settings();
    }
}
