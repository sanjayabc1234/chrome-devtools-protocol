<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Response to Page.getInstallabilityErrors command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetInstallabilityErrorsResponse implements \JsonSerializable
{
	/** @var string[] */
	public $errors;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->errors)) {
			$instance->errors = [];
			foreach ($data->errors as $item) {
				$instance->errors[] = (string)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->errors !== null) {
			$data->errors = [];
			foreach ($this->errors as $item) {
				$data->errors[] = $item;
			}
		}
		return $data;
	}
}
