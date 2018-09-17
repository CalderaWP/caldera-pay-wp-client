<?php


namespace calderawp\CalderaPay\WpClient\CalderaPay;


class ProductEntity extends Entity
{
    /** @inheritdoc */
    public function __construct()
    {
        $this->setAttributes([
            'id' => [
                'type' => 'id',
                'default' => $this->getId(),
                'sanitize' => '',
                'validate' => 'is_string'
            ],
            'vendor_id' => [
                'type' => 'string',
                'default' => '',
                'sanitize' => '',
                'validate' => 'is_string'
            ],

        ]);


        \EDD_Payment::
    }

}