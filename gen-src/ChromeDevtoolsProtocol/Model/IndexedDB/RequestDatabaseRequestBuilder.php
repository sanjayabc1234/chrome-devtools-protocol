<?php

namespace ChromeDevtoolsProtocol\Model\IndexedDB;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RequestDatabaseRequestBuilder
{
	private $securityOrigin;

	private $databaseName;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): RequestDatabaseRequest
	{
		$instance = new RequestDatabaseRequest();
		if ($this->securityOrigin === null) {
			throw new BuilderException('Property [securityOrigin] is required.');
		}
		$instance->securityOrigin = $this->securityOrigin;
		if ($this->databaseName === null) {
			throw new BuilderException('Property [databaseName] is required.');
		}
		$instance->databaseName = $this->databaseName;
		return $instance;
	}


	/**
	 * @param string $securityOrigin
	 *
	 * @return self
	 */
	public function setSecurityOrigin($securityOrigin): self
	{
		$this->securityOrigin = $securityOrigin;
		return $this;
	}


	/**
	 * @param string $databaseName
	 *
	 * @return self
	 */
	public function setDatabaseName($databaseName): self
	{
		$this->databaseName = $databaseName;
		return $this;
	}
}
