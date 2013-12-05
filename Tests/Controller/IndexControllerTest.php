<?php
namespace Symfolation\Tests\Controller;

use Zend\Test\PHPUnit\Controller\AbstractHttpControllerTestCase as WebTestCase;

class IndexControllerTest extends WebTestCase
{
    public function setUp()
    {
        $this->setApplicationConfig(
            array(
                "modules" => array(
                    "Symfolation",
                ),
                "module_listener_options" => array(
                    "module_paths" => array(
                        realpath(__DIR__ . '/../../../')
                    ),
                    'config_glob_paths' => array(
                        'Resources/config/autoload/{,*.}{testing}.php',
                    ),
                ),
            )
        );

        parent::setup();
    }

    public function testIndexActionCanBeAccessed()
    {
        $this->dispatch('/symfolation');
        $this->assertResponseStatusCode(200);

        $this->assertModuleName('Symfolation');
        $this->assertControllerName('Symfolation\Controller\Index');
        $this->assertControllerClass('IndexController');
        $this->assertMatchedRouteName('symfolation');

        $this->assertQueryContentContains("h1", "am I Symfony2?");
    }
}
