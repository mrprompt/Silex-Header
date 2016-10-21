<?php
namespace SilexFriends\Tests\Header;

use SilexFriends\Header\Header;
use PHPUnit_Framework_TestCase;
use Silex\Application;

/**
 * @author Thiago Paes <mrprompt@gmail.com>
 */
class HeaderTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Application
     */
    private $app;

    public function setUp()
    {
        parent::setUp();

        $this->app = new Application();
    }

    public function tearDown()
    {
        $this->app = null;

        parent::tearDown();
    }

    /**
     * Test registration
     *
     * @test
     */
    public function registerMustBeCreateResources()
    {
        $this->app->register(new Header());

        $this->assertArrayHasKey(Header::HTTP_HEADER_GET_TOKEN, $this->app);
    }
}
