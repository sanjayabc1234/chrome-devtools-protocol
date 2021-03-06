<?php

namespace ChromeDevtoolsProtocol\Model\Browser;

/**
 * Definition of PermissionDescriptor defined in the Permissions API: https://w3c.github.io/permissions/#dictdef-permissiondescriptor.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PermissionDescriptor implements \JsonSerializable
{
	/**
	 * Name of permission. See https://cs.chromium.org/chromium/src/third_party/blink/renderer/modules/permissions/permission_descriptor.idl for valid permission names.
	 *
	 * @var string
	 */
	public $name;

	/**
	 * For "midi" permission, may also specify sysex control.
	 *
	 * @var bool|null
	 */
	public $sysex;

	/**
	 * For "push" permission, may specify userVisibleOnly. Note that userVisibleOnly = true is the only currently supported type.
	 *
	 * @var bool|null
	 */
	public $userVisibleOnly;

	/**
	 * For "wake-lock" permission, must specify type as either "screen" or "system".
	 *
	 * @var string|null
	 */
	public $type;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
		}
		if (isset($data->sysex)) {
			$instance->sysex = (bool)$data->sysex;
		}
		if (isset($data->userVisibleOnly)) {
			$instance->userVisibleOnly = (bool)$data->userVisibleOnly;
		}
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->sysex !== null) {
			$data->sysex = $this->sysex;
		}
		if ($this->userVisibleOnly !== null) {
			$data->userVisibleOnly = $this->userVisibleOnly;
		}
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		return $data;
	}
}
