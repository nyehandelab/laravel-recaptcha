<?php
namespace Nyehandel\ReCaptcha\Tests;

use Nyehandel\ReCaptcha\Facades\ReCaptcha;
use Nyehandel\ReCaptcha\ReCaptchaServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

/**
 * Class TestCase
 * @package Nyehandel\ReCaptcha\Tests
 */
class TestCase extends OrchestraTestCase
{

	/**
	 * Load package alias
	 *
	 * @param  \Illuminate\Foundation\Application $app
	 *
	 * @return array
	 */
	protected function getPackageAliases($app)
	{

		return [
			'ReCaptcha' => ReCaptcha::class,
		];
	}

	/**
	 * Load package service provider
	 *
	 * @param \Illuminate\Foundation\Application $app
	 *
	 * @return array
	 */
	protected function getPackageProviders($app)
	{

		return [ReCaptchaServiceProvider::class];
	}
}
