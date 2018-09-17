<?php


namespace calderawp\CalderaPay\WpClient;
use calderawp\CalderaPay\WpClient\Contracts\CalderaPayContainerContract;


/**
 * Class CalderaPayWpBase
 *
 * Common abstract for classes that consume the CalderaPay Container
 */
abstract class CalderaPayWpBase
{


    /**
     * @var CalderaPayContainerContract
     */
    private  $container;

    /**
     * CalderaPayWpBase constructor.
     * @param CalderaPayContainerContract $container
     */
    public function __construct(CalderaPayContainerContract $container )
    {
        $this->container = $container;
    }

    /**
     * Get the container
     *
     * @return CalderaPayContainerContract
     */
    public function getContainer() :CalderaPayContainerContract
    {
        return $this->container;
    }



}