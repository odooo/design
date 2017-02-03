<?php

namespace AjaxifySearch\Routing;

use Symfony\Component\Config\Loader\Loader;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

/**
 * AjaxifySearch Route loader
 * Parse all controller and generate route for ajax search action 
 */
class RouteLoader extends Loader
{
    private $loaded = false;

    public function supports($resource, $type = null)
    {
        return $type === 'ajaxify-search';
    }

    public function load($resource, $type = null)
    {
        if (true === $this->loaded) {
            throw new \RuntimeException('Do not add the "extra" loader twice');
        }

        $routes = new RouteCollection();

        $routes->add('ajaxify_search_count_all', new Route(
            '/ajaxify-search/count',     // path
            array(
                '_controller' => 'ajaxify_search.controller:count',
            )
        ));

        $routes->add('ajaxify_search_search', new Route(
            '/ajaxify-search/search',     // path
            array(
                '_controller' => 'ajaxify_search.controller:search',
            )
        ));

        $this->loaded = true;

        return $routes;
    }
}