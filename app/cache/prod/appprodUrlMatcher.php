<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = urldecode($pathinfo);

        // HelloTheWorld
        if ($pathinfo === '/hello-world') {
            return array (  '_controller' => 'Iosh\\BlogBundle\\Controller\\BlogController::indexAction',  '_route' => 'HelloTheWorld',);
        }

        // ByeTheWorld
        if ($pathinfo === '/byebye-world') {
            return array (  '_controller' => 'Iosh\\BlogBundle\\Controller\\BlogController::byebyeAction',  '_route' => 'ByeTheWorld',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
