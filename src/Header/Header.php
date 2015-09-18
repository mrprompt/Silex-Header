<?php
/**
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 */
namespace MrPrompt\Silex\Header;

use Silex\Application;
use Silex\ServiceProviderInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 *
 * @author Thiago Paes <mrprompt@gmail.com>
 */
final class Header implements HeaderInterface, ServiceProviderInterface
{
    /**
     * (non-PHPdoc)
     * @see \Silex\ServiceProviderInterface::register()
     */
    public function register(Application $app)
    {
        $app[self::HTTP_HEADER_GET_TOKEN] = $app->protect(
            function (Request $request) use ($app) {
                $token  = $request->headers->get(self::TOKEN_HEADER_KEY, $request->get(self::TOKEN_REQUEST_KEY));
                $arr    = explode(' ', $token);
                $type   = array_shift($arr);
                $value  = array_pop($arr);

                return [
                    'type'  => $type,
                    'value' => $value,
                ];
            }
        );
    }

    /**
     * (non-PHPdoc)
     * @see \Silex\ServiceProviderInterface::boot()
     */
    public function boot(Application $app)
    {
        // :)
    }
}
