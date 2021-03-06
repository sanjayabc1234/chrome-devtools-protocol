<?php

namespace ChromeDevtoolsProtocol\Model\Browser;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetPermissionRequestBuilder
{
	private $origin;

	private $permission;

	private $setting;

	private $browserContextId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetPermissionRequest
	{
		$instance = new SetPermissionRequest();
		if ($this->origin === null) {
			throw new BuilderException('Property [origin] is required.');
		}
		$instance->origin = $this->origin;
		if ($this->permission === null) {
			throw new BuilderException('Property [permission] is required.');
		}
		$instance->permission = $this->permission;
		if ($this->setting === null) {
			throw new BuilderException('Property [setting] is required.');
		}
		$instance->setting = $this->setting;
		$instance->browserContextId = $this->browserContextId;
		return $instance;
	}


	/**
	 * @param string $origin
	 *
	 * @return self
	 */
	public function setOrigin($origin): self
	{
		$this->origin = $origin;
		return $this;
	}


	/**
	 * @param PermissionDescriptor $permission
	 *
	 * @return self
	 */
	public function setPermission($permission): self
	{
		$this->permission = $permission;
		return $this;
	}


	/**
	 * @param string $setting
	 *
	 * @return self
	 */
	public function setSetting($setting): self
	{
		$this->setting = $setting;
		return $this;
	}


	/**
	 * @param string $browserContextId
	 *
	 * @return self
	 */
	public function setBrowserContextId($browserContextId): self
	{
		$this->browserContextId = $browserContextId;
		return $this;
	}
}
