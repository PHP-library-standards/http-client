<?php
/**
 * @package   Pls\Http\Client
 * @author    PHP Library Standards <https://github.com/PHP-library-standards>
 * @copyright 2017 PHP Library Standards
 * @license   https://opensource.org/licenses/MIT The MIT License
 */

namespace Pls\Http\Client;

use Pls\Http\Message\{Request, Response};

interface Client
{
    public function send(Request $request): Response;
}
