<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevDebugProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_assetic_48887b7' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '48887b7',    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/48887b7.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_48887b7_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '48887b7',    'pos' => 0,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/48887b7_visite_1.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_836d2fd' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '836d2fd',    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/836d2fd.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_836d2fd_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '836d2fd',    'pos' => 0,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/836d2fd_datatablefonction_1.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_968148e' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '968148e',    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/968148e.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_968148e_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '968148e',    'pos' => 0,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/968148e_ajaxify-search_1.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_2c1dae7' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '2c1dae7',    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/2c1dae7.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_2c1dae7_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '2c1dae7',    'pos' => 0,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/2c1dae7_loader_1.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_d58e22f' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'd58e22f',    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/d58e22f.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_d58e22f_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'd58e22f',    'pos' => 0,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/d58e22f_enabledisableagent_1.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsp_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GSPBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/restclient',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tontine_api_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'tontineApiBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/tontineapi',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'post_client' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'tontineApiBundle\\Controller\\ClientController::postClientAction',    '_format' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/client/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_liste_client' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'tontineApiBundle\\Controller\\ClientController::getListeClientAction',    '_format' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/client/liste',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'post_authenticate' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'tontineApiBundle\\Controller\\SecurityController::postAuthenticateAction',    '_format' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/authenticate',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'post_visite' => array (  0 =>   array (    0 => 'idc',  ),  1 =>   array (    '_controller' => 'tontineApiBundle\\Controller\\VisiteController::postVisiteAction',    '_format' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/new',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idc',    ),    2 =>     array (      0 => 'text',      1 => '/api/visite',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_viste' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'tontineApiBundle\\Controller\\VisiteController::getVisteAction',    '_format' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/liste',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/api/visite',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'biens' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'tontineApiBundle\\Controller\\RechercheBienController::biensAction',    '_format' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/biens',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_bien' => array (  0 =>   array (    0 => 'code',  ),  1 =>   array (    '_controller' => 'tontineApiBundle\\Controller\\RechercheBienController::getBienAction',    '_format' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'code',    ),    1 =>     array (      0 => 'text',      1 => '/api/biens',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'search_biens' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'tontineApiBundle\\Controller\\RechercheBienController::searchBiensAction',    '_format' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/biens/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'post_mise' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'tontineApiBundle\\Controller\\RechercheMiseController::postMiseAction',    '_format' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/biens/calculate-mise',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'post_contrat' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'tontineApiBundle\\Controller\\ContratController::postContratAction',    '_format' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/contrat/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_liste_contrat' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'tontineApiBundle\\Controller\\ContratController::getListeContratAction',    '_format' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/liste',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/api/contrat',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'post_tontine' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'tontineApiBundle\\Controller\\TontineController::postTontineAction',    '_format' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/tontines',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_client_tontines' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'tontineApiBundle\\Controller\\TontineController::getClientTontinesAction',    '_format' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/tontines',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/api/clients',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_tontine_mises' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'tontineApiBundle\\Controller\\TontineController::getTontineMisesActions',    '_format' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/mises',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/api/tontines',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'post_depot_mise' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'tontineApiBundle\\Controller\\DepotMiseController::postDepotMiseAction',    '_format' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/mises',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_liste_depot_mise' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'tontineApiBundle\\Controller\\DepotMiseController::getListeDepotMiseAction',    '_format' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/liste',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/api/depot-mise',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'post_condition_generale' => array (  0 =>   array (    0 => 'idc',  ),  1 =>   array (    '_controller' => 'tontineApiBundle\\Controller\\ConditionGeneraleController::postConditionGeneraleAction',    '_format' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/new',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idc',    ),    2 =>     array (      0 => 'text',      1 => '/api/cg',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tontine_dashboard' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'tontineBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tontine_user_profile' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'tontineBundle\\Controller\\Agent\\AgentController::profileAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/myprofile',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tontine_agent' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'tontineBundle\\Controller\\Agent\\AgentController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/agents/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tontine_agent_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'tontineBundle\\Controller\\Agent\\AgentController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/agents/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tontine_agent_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'tontineBundle\\Controller\\Agent\\AgentController::updateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/agents',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tontine_agent_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'tontineBundle\\Controller\\Agent\\AgentController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/agents',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tontine_agent_enabledeseable' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'tontineBundle\\Controller\\Agent\\AgentController::enabledeseableAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/agents/enabledeseable',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tontine_agent_preview' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'tontineBundle\\Controller\\Agent\\AgentController::previewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/preview',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/agents',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tontine_agent_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'tontineBundle\\Controller\\Agent\\AgentController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/agents',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_js_routing_js' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'fos_js_routing.controller:indexAction',    '_format' => 'js',  ),  2 =>   array (    '_format' => 'js|json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'js|json',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/js/routing',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajaxify_search_count_all' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ajaxify_search.controller:count',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajaxify-search/count',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajaxify_search_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ajaxify_search.controller:search',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajaxify-search/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tontine_agencies_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'tontineBundle\\Controller\\AgencyController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/agences/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tontine_agencies_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'tontineBundle\\Controller\\AgencyController::createAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/agences/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tontine_agencies_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'tontineBundle\\Controller\\AgencyController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/agences',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tontine_agents_groups_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'tontineBundle\\Controller\\Agent\\GroupController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/agents/groups/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tontine_agents_groups_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'tontineBundle\\Controller\\Agent\\GroupController::createAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/agents/groups/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tontine_agents_groups_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'tontineBundle\\Controller\\Agent\\GroupController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/agents/groups',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tontine_caisse_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'tontineBundle\\Controller\\CaisseController::caisseAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/caisse/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tontine_client_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'tontineBundle\\Controller\\ClientController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/client/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tontine_client_index_new' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'tontineBundle\\Controller\\ClientController::indexNewAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/client',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tontine_client_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'tontineBundle\\Controller\\ClientController::showAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/client',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tontine_client_preview' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'tontineBundle\\Controller\\ClientController::previewAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/preview',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/client',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tontine_client_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'tontineBundle\\Controller\\ClientController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/client/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tontine_client_new_form' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'tontineBundle\\Controller\\ClientController::ajaxNewFormAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/new-form',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/client',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tontine_client_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'tontineBundle\\Controller\\ClientController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/client',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tontine_client_edit_form' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'tontineBundle\\Controller\\ClientController::ajaxEditFormAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit-form',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/client',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tontine_client_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'tontineBundle\\Controller\\ClientController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/client',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tontine_dashboard_my_today_tontines' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'tontineBundle\\Controller\\DefaultController::agentTodayTontinesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/etats/my-today-tontines',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tontine_dashboard_my_today_collected_mises' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'tontineBundle\\Controller\\DefaultController::agentTodayCollectedMisesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/etats/my-today-collected-mises',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tontine_parameters_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'tontineBundle\\Controller\\ParameterController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/parameters/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
