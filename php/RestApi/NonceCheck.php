<?php


namespace calderawp\CalderaPay\WpClient\RestApi;


class NonceCheck
{


    protected $nonceAction;

    protected $nonceParamName;

    /**
     * @param mixed $nonceAction
     * @return NonceCheck
     */
    public function setNonceAction($nonceAction): self
    {
        $this->nonceAction = $nonceAction;
        return $this;
    }

    /**
     * @param mixed $nonceParamName
     * @return NonceCheck
     */
    public function setNonceParamName($nonceParamName): self
    {
        $this->nonceParamName = $nonceParamName;
        return $this;
    }


    /**
     * @param \WP_REST_Request $request
     * @return bool
     */
    public function verifyRequest(\WP_REST_Request $request) : bool
    {

        return false !== (wp_verify_nonce(
            $request->get_param($this->nonceParamName),
            $this->nonceAction
        ));
    }
}