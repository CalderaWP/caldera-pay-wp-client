<?php


namespace calderawp\CalderaPay\WpClient\Qualpay;


trait DescribesPaymentRequests
{


    /**
     * @return array
     */
    protected function getFieldGroups(): array
    {
        return [
            'card' => [
                'card_id',
                'billing_zip',
            ],
            'customer' => [
                'customer_first_name',
                'customer_last_name',
                'customer_email',
            ]
        ];

    }

    /**
     * @return array
     */
    public function fieldGroupsAsRestApiArgs(): array
    {
        $args = [
            'product' => [
                'type' => 'integer',
                'required' => true,
                'description' => __('Product to purchase', 'caldera-pay')
            ],
            'priceOption' => [
                'type' => 'integer',
                'required' => false,
                'description' => __('Price option', 'caldera-pay')
            ]
        ];
        foreach ($this->getFieldGroups() as $fieldGroup => $fieldGroupFields) {
            foreach ($fieldGroupFields as $field) {
                $args[$field] = [
                    'type' => 'string',
                    'required' => 'true'
                ];
            }
        }
        return $args;
    }

}