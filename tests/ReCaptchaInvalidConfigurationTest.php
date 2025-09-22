<?php
namespace Nyehandel\ReCaptcha\Tests;

use Nyehandel\ReCaptcha\Exceptions\InvalidConfigurationException;
use Nyehandel\ReCaptcha\ReCaptchaBuilder;

/**
 * Class ReCaptchaInvalidConfigurationTest
 * @package Nyehandel\ReCaptcha\Tests
 */
class ReCaptchaInvalidConfigurationTest extends TestCase
{

    /**
     * @test
     */
    public function testV2HtmlScriptTagJsApiThrowsInvalidConfigurationException()
    {

        $this->expectException(InvalidConfigurationException::class);

        htmlScriptTagJsApi();
    }

    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application $app
     *
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {

        $app['config']->set('recaptcha.api_site_key', 'api_site_key');
        $app['config']->set('recaptcha.api_secret_key', 'api_secret_key');
        $app['config']->set('recaptcha.explicit', true);
        $app['config']->set('recaptcha.tag_attributes.callback', ReCaptchaBuilder::DEFAULT_ONLOAD_JS_FUNCTION);
    }

}