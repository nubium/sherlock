<?php

namespace Codeception\Module;

use Codeception\Module;
use Codeception\Step;
use Codeception\TestCase;
use Facebook\WebDriver\Exception\InvalidElementStateException;

/**
 * Class Puffin
 * @package Codeception\Module
 */
class Sherlock extends Module
{
	private $checkTracyBluescreen;


	/**
	 * Initialize the module and read the config.
	 *
	 * @throws \RuntimeException
	 * @throws InvalidElementStateException
	 */
	public function _initialize()
	{
		if (array_key_exists('checkTracyBluescreen', $this->config)) {
			$this->checkTracyBluescreen = $this->config['checkTracyBluescreen'] === 'true' ?: 'false';
		}
	}


	/**
	 * Event hook before a test starts
	 *
	 * @param TestCase $test
	 * @throws InvalidElementStateException
	 */
	public function _before(TestCase $test)
	{
		$this->test = $test;
	}


	/**
	 * @param Step $step
	 */
	public function _beforeStep(Step $step)
	{
		var_dump($step);
	}
}
