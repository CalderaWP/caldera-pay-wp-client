<?php


namespace calderawp\CalderaPay\WpClient\Qualpay;


class Settings
{

    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var bool
     */
    private $isSandbox;


    public function __construct(array $defaults = [])
    {
        $this->apiKey = ! empty( $defaults['apiKey']) ?  $defaults['apiKey'] : null;
        $this->isSandbox = isset( $defaults['isSandbox']) ?  $defaults['isSandbox'] : null;

    }

    /**
     * @return bool
     */
    public function isSandbox(): bool
    {
        return is_bool($this->isSandbox) ? $this->isSandbox : true;
    }

    /**
     * @param bool $isSandbox
     * @return Settings
     */
    public function setIsSandbox(bool $isSandbox): Settings
    {
        $this->isSandbox = $isSandbox;
        return $this;
    }

    /**
     * @return string
     */
    public function getApiKey(): string
    {
        return is_string($this->apiKey) ? $this->apiKey : '';
    }

    /**
     * @param string $apiKey
     * @return Settings
     */
    public function setApiKey(string $apiKey): Settings
    {
        $this->apiKey = $apiKey;
        return $this;
    }


}