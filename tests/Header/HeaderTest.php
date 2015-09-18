<?php
/**
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 */
namespace MrPrompt\Tests\Silex\Header;

use MrPrompt\Silex\Header\Header;
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
