<?php


namespace calderawp\CalderaPay\WpClient\CalderaPay;

class CustomerEntity extends Entity
{


	public static function fromEdd(\EDD_Customer $EDD_Customer)
	{

		return static::fromArray([
			'id' => $EDD_Customer->id,
			'vendor_id' => $EDD_Customer->id,
			'user_id' => $EDD_Customer->user_id
		]);
	}

	public function toEdd() : \EDD_Customer
	{
		return new \EDD_Customer($this->user_id, true);
	}

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
			'user_id' => [
				'type' => 'user_id',
				'default' => 0,
				'sanitize' => '',
				'validate' => 'intval'
			],
		]);
	}
}
