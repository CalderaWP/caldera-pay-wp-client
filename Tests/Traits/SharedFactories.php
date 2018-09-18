<?php


namespace calderawp\CalderaPay\WpClient\Tests\Traits;

use calderawp\CalderaPay\WpClient\CalderaPayWp;
use calderawp\CalderaPay\WpClient\Qualpay\Container;
use calderawp\CalderaPay\WpClient\Qualpay\Settings;

trait SharedFactories
{

    protected function getMainContainer() : CalderaPayWp
    {
        return new CalderaPayWp();
    }

    protected function getQualpayContainer() : Container
    {
        return new Container(
            $this->getMainContainer(),
            $this->qualpaySettingsFactory()
        );
    }
    protected function qualpaySettingsFactory(): Settings
    {
        return new Settings();
    }
}
