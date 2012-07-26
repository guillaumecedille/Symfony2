<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       'HelloTheWorld' => true,
       'ByeTheWorld' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function getHelloTheWorldRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Iosh\\BlogBundle\\Controller\\BlogController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/hello-world',  ),));
    }

    private function getByeTheWorldRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Iosh\\BlogBundle\\Controller\\BlogController::byebyeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/byebye-world',  ),));
    }
}
