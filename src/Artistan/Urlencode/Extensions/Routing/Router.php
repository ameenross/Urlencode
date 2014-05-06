<?php
/**
 * User: cpeterson
 * Date: 2013
 */
namespace Ittrader\Ittrader\Extensions\Routing;

use Illuminate\Routing\Router as Rtr;
use Ittrader\Ittrader\Extensions\Routing\Route as Route;

class Router extends Rtr
{

    /**
     * Create a new Route object.
     *
     * @param  array|string $methods
     * @param  string  $uri
     * @param  mixed  $action
     * @return \Illuminate\Routing\Route
     */
    protected function newRoute($methods, $uri, $action)
    {
        return new Route($methods, $uri, $action);
    }
}