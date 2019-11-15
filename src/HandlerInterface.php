<?php
namespace ZF\Console;

use Zend\Console\Adapter\AdapterInterface;

/**
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @copyright Copyright (c) 2014 Zend Technologies USA Inc. (http://www.zend.com)
 */

interface HandlerInterface
{

    /**
     * Invokable for Zf/Console Route handler
     *
     * @param Route $route
     * @param AdapterInterface $console
     */

    public function __invoke(Route $route, AdapterInterface $console);
}

