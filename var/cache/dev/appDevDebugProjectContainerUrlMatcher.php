<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/4')) {
                if (0 === strpos($pathinfo, '/js/48887b7')) {
                    // _assetic_48887b7
                    if ($pathinfo === '/js/48887b7.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '48887b7',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_48887b7',);
                    }

                    // _assetic_48887b7_0
                    if ($pathinfo === '/js/48887b7_visite_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '48887b7',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_48887b7_0',);
                    }

                }

                if (0 === strpos($pathinfo, '/js/45fe74c')) {
                    // _assetic_45fe74c
                    if ($pathinfo === '/js/45fe74c.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '45fe74c',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_45fe74c',);
                    }

                    // _assetic_45fe74c_0
                    if ($pathinfo === '/js/45fe74c_client_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '45fe74c',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_45fe74c_0',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/6d2b2d6')) {
                // _assetic_6d2b2d6
                if ($pathinfo === '/js/6d2b2d6.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6d2b2d6',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_6d2b2d6',);
                }

                // _assetic_6d2b2d6_0
                if ($pathinfo === '/js/6d2b2d6_conditiongenerale_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6d2b2d6',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_6d2b2d6_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/020da92')) {
                // _assetic_020da92
                if ($pathinfo === '/js/020da92.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '020da92',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_020da92',);
                }

                // _assetic_020da92_0
                if ($pathinfo === '/js/020da92_resiliationcontrat_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '020da92',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_020da92_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/836d2fd')) {
                // _assetic_836d2fd
                if ($pathinfo === '/js/836d2fd.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '836d2fd',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_836d2fd',);
                }

                // _assetic_836d2fd_0
                if ($pathinfo === '/js/836d2fd_datatablefonction_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '836d2fd',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_836d2fd_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/968148e')) {
                // _assetic_968148e
                if ($pathinfo === '/js/968148e.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '968148e',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_968148e',);
                }

                // _assetic_968148e_0
                if ($pathinfo === '/js/968148e_ajaxify-search_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '968148e',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_968148e_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/2c1dae7')) {
                // _assetic_2c1dae7
                if ($pathinfo === '/js/2c1dae7.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '2c1dae7',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_2c1dae7',);
                }

                // _assetic_2c1dae7_0
                if ($pathinfo === '/js/2c1dae7_loader_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '2c1dae7',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_2c1dae7_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/d58e22f')) {
                // _assetic_d58e22f
                if ($pathinfo === '/js/d58e22f.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd58e22f',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_d58e22f',);
                }

                // _assetic_d58e22f_0
                if ($pathinfo === '/js/d58e22f_enabledisableagent_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd58e22f',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_d58e22f_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // gsp_homepage
        if ($pathinfo === '/restclient') {
            return array (  '_controller' => 'GSPBundle\\Controller\\DefaultController::indexAction',  '_route' => 'gsp_homepage',);
        }

        if (0 === strpos($pathinfo, '/api')) {
            // tontine_api_homepage
            if ($pathinfo === '/api/tontineapi') {
                return array (  '_controller' => 'tontineApiBundle\\Controller\\DefaultController::indexAction',  '_route' => 'tontine_api_homepage',);
            }

            if (0 === strpos($pathinfo, '/api/client')) {
                // post_client
                if ($pathinfo === '/api/client/new') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_post_client;
                    }

                    return array (  '_controller' => 'tontineApiBundle\\Controller\\ClientController::postClientAction',  '_format' => NULL,  '_route' => 'post_client',);
                }
                not_post_client:

                // get_liste_client
                if ($pathinfo === '/api/client/liste') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_liste_client;
                    }

                    return array (  '_controller' => 'tontineApiBundle\\Controller\\ClientController::getListeClientAction',  '_format' => NULL,  '_route' => 'get_liste_client',);
                }
                not_get_liste_client:

            }

            // post_authenticate
            if ($pathinfo === '/api/authenticate') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_post_authenticate;
                }

                return array (  '_controller' => 'tontineApiBundle\\Controller\\SecurityController::postAuthenticateAction',  '_format' => NULL,  '_route' => 'post_authenticate',);
            }
            not_post_authenticate:

            if (0 === strpos($pathinfo, '/api/visite')) {
                // post_visite
                if (preg_match('#^/api/visite/(?P<idc>[^/]++)/new$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_post_visite;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_visite')), array (  '_controller' => 'tontineApiBundle\\Controller\\VisiteController::postVisiteAction',  '_format' => NULL,));
                }
                not_post_visite:

                // get_viste
                if (preg_match('#^/api/visite/(?P<id>[^/]++)/liste$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_viste;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_viste')), array (  '_controller' => 'tontineApiBundle\\Controller\\VisiteController::getVisteAction',  '_format' => NULL,));
                }
                not_get_viste:

            }

            if (0 === strpos($pathinfo, '/api/biens')) {
                // biens
                if ($pathinfo === '/api/biens') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_biens;
                    }

                    return array (  '_controller' => 'tontineApiBundle\\Controller\\RechercheBienController::biensAction',  '_format' => NULL,  '_route' => 'biens',);
                }
                not_biens:

                // get_bien
                if (preg_match('#^/api/biens/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_bien;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_bien')), array (  '_controller' => 'tontineApiBundle\\Controller\\RechercheBienController::getBienAction',  '_format' => NULL,));
                }
                not_get_bien:

                // search_biens
                if ($pathinfo === '/api/biens/search') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_search_biens;
                    }

                    return array (  '_controller' => 'tontineApiBundle\\Controller\\RechercheBienController::searchBiensAction',  '_format' => NULL,  '_route' => 'search_biens',);
                }
                not_search_biens:

                // post_mise
                if ($pathinfo === '/api/biens/calculate-mise') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_post_mise;
                    }

                    return array (  '_controller' => 'tontineApiBundle\\Controller\\RechercheMiseController::postMiseAction',  '_format' => NULL,  '_route' => 'post_mise',);
                }
                not_post_mise:

            }

            if (0 === strpos($pathinfo, '/api/contrat')) {
                // post_contrat
                if ($pathinfo === '/api/contrat/new') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_post_contrat;
                    }

                    return array (  '_controller' => 'tontineApiBundle\\Controller\\ContratController::postContratAction',  '_format' => NULL,  '_route' => 'post_contrat',);
                }
                not_post_contrat:

                // get_liste_contrat
                if (preg_match('#^/api/contrat/(?P<id>[^/]++)/liste$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_liste_contrat;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_liste_contrat')), array (  '_controller' => 'tontineApiBundle\\Controller\\ContratController::getListeContratAction',  '_format' => NULL,));
                }
                not_get_liste_contrat:

            }

            // post_tontine
            if ($pathinfo === '/api/tontines') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_post_tontine;
                }

                return array (  '_controller' => 'tontineApiBundle\\Controller\\TontineController::postTontineAction',  '_format' => NULL,  '_route' => 'post_tontine',);
            }
            not_post_tontine:

            // get_client_tontines
            if (0 === strpos($pathinfo, '/api/clients') && preg_match('#^/api/clients/(?P<id>[^/]++)/tontines$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_client_tontines;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_client_tontines')), array (  '_controller' => 'tontineApiBundle\\Controller\\TontineController::getClientTontinesAction',  '_format' => NULL,));
            }
            not_get_client_tontines:

            // get_tontine_mises
            if (0 === strpos($pathinfo, '/api/tontines') && preg_match('#^/api/tontines/(?P<id>[^/]++)/mises$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_tontine_mises;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_tontine_mises')), array (  '_controller' => 'tontineApiBundle\\Controller\\TontineController::getTontineMisesActions',  '_format' => NULL,));
            }
            not_get_tontine_mises:

            // post_depot_mise
            if ($pathinfo === '/api/mises') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_post_depot_mise;
                }

                return array (  '_controller' => 'tontineApiBundle\\Controller\\DepotMiseController::postDepotMiseAction',  '_format' => NULL,  '_route' => 'post_depot_mise',);
            }
            not_post_depot_mise:

            // get_liste_depot_mise
            if (0 === strpos($pathinfo, '/api/depot-mise') && preg_match('#^/api/depot\\-mise/(?P<id>[^/]++)/liste$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_liste_depot_mise;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_liste_depot_mise')), array (  '_controller' => 'tontineApiBundle\\Controller\\DepotMiseController::getListeDepotMiseAction',  '_format' => NULL,));
            }
            not_get_liste_depot_mise:

            // post_condition_generale
            if (0 === strpos($pathinfo, '/api/cg') && preg_match('#^/api/cg/(?P<idc>[^/]++)/new$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_post_condition_generale;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_condition_generale')), array (  '_controller' => 'tontineApiBundle\\Controller\\ConditionGeneraleController::postConditionGeneraleAction',  '_format' => NULL,));
            }
            not_post_condition_generale:

        }

        // tontine_dashboard
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'tontine_dashboard');
            }

            return array (  '_controller' => 'tontineBundle\\Controller\\DefaultController::indexAction',  '_route' => 'tontine_dashboard',);
        }

        // tontine_user_profile
        if (preg_match('#^/(?P<id>[^/]++)/myprofile$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_user_profile')), array (  '_controller' => 'tontineBundle\\Controller\\Agent\\AgentController::profileAction',));
        }

        if (0 === strpos($pathinfo, '/agents')) {
            // tontine_agent
            if (rtrim($pathinfo, '/') === '/agents') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tontine_agent');
                }

                return array (  '_controller' => 'tontineBundle\\Controller\\Agent\\AgentController::indexAction',  '_route' => 'tontine_agent',);
            }

            // tontine_agent_new
            if ($pathinfo === '/agents/new') {
                return array (  '_controller' => 'tontineBundle\\Controller\\Agent\\AgentController::newAction',  '_route' => 'tontine_agent_new',);
            }

            // tontine_agent_update
            if (preg_match('#^/agents/(?P<id>[^/]++)/update/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tontine_agent_update');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_agent_update')), array (  '_controller' => 'tontineBundle\\Controller\\Agent\\AgentController::updateAction',));
            }

            // tontine_agent_show
            if (preg_match('#^/agents/(?P<id>[^/]++)/show/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tontine_agent_show');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_agent_show')), array (  '_controller' => 'tontineBundle\\Controller\\Agent\\AgentController::showAction',));
            }

            // tontine_agent_enabledeseable
            if ($pathinfo === '/agents/enabledeseable') {
                return array (  '_controller' => 'tontineBundle\\Controller\\Agent\\AgentController::enabledeseableAction',  '_route' => 'tontine_agent_enabledeseable',);
            }

            // tontine_agent_preview
            if (preg_match('#^/agents/(?P<id>[^/]++)/preview$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_agent_preview')), array (  '_controller' => 'tontineBundle\\Controller\\Agent\\AgentController::previewAction',));
            }

            // tontine_agent_edit
            if (preg_match('#^/agents/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_agent_edit')), array (  '_controller' => 'tontineBundle\\Controller\\Agent\\AgentController::editAction',));
            }

        }

        if (0 === strpos($pathinfo, '/pagnes')) {
            // tontine_pagne
            if (rtrim($pathinfo, '/') === '/pagnes') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tontine_pagne');
                }

                return array (  '_controller' => 'tontineBundle\\Controller\\PagneController::indexAction',  '_route' => 'tontine_pagne',);
            }

            // tontine_pagne_new
            if ($pathinfo === '/pagnes/new') {
                return array (  '_controller' => 'tontineBundle\\Controller\\PagneController::newAction',  '_route' => 'tontine_pagne_new',);
            }

            // tontine_pagne_update
            if (preg_match('#^/pagnes/(?P<id>[^/]++)/update/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tontine_pagne_update');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_pagne_update')), array (  '_controller' => 'tontineBundle\\Controller\\PagneController::updateAction',));
            }

            // tontine_pagne_show
            if (preg_match('#^/pagnes/(?P<id>[^/]++)/show/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tontine_pagne_show');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_pagne_show')), array (  '_controller' => 'tontineBundle\\Controller\\PagneController::showAction',));
            }

            // tontine_pagne_preview
            if (preg_match('#^/pagnes/(?P<id>[^/]++)/preview$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_pagne_preview')), array (  '_controller' => 'tontineBundle\\Controller\\PagneController::previewAction',));
            }

            // tontine_pagne_edit
            if (preg_match('#^/pagnes/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_pagne_edit')), array (  '_controller' => 'tontineBundle\\Controller\\PagneController::editAction',));
            }

        }

        if (0 === strpos($pathinfo, '/commandes')) {
            // shop_command_index
            if (rtrim($pathinfo, '/') === '/commandes') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_shop_command_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'shop_command_index');
                }

                return array (  '_controller' => 'tontineBundle\\Controller\\CommandeController::indexAction',  '_route' => 'shop_command_index',);
            }
            not_shop_command_index:

            // shop_command_show
            if (preg_match('#^/commandes/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_shop_command_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'shop_command_show')), array (  '_controller' => 'tontineBundle\\Controller\\CommandeController::showAction',));
            }
            not_shop_command_show:

            // shop_command_new
            if ($pathinfo === '/commandes/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_shop_command_new;
                }

                return array (  '_controller' => 'tontineBundle\\Controller\\CommandeController::newAction',  '_route' => 'shop_command_new',);
            }
            not_shop_command_new:

            // shop_command_edit
            if (preg_match('#^/commandes/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_shop_command_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'shop_command_edit')), array (  '_controller' => 'tontineBundle\\Controller\\CommandeController::editAction',));
            }
            not_shop_command_edit:

            // shop_command_delete
            if (preg_match('#^/commandes/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_shop_command_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'shop_command_delete')), array (  '_controller' => 'tontineBundle\\Controller\\CommandeController::deleteAction',));
            }
            not_shop_command_delete:

<<<<<<< HEAD
            // shop_command_facture_edit
            if (preg_match('#^/commandes/(?P<id>[^/]++)/commande/facture$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_shop_command_facture_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'shop_command_facture_edit')), array (  '_controller' => 'tontineBundle\\Controller\\CommandeController::printBillAction',));
            }
            not_shop_command_facture_edit:
=======
            // shop_fiche_travail_new
            if (preg_match('#^/commandes/(?P<id>[^/]++)/new$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_shop_fiche_travail_new;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'shop_fiche_travail_new')), array (  '_controller' => 'tontineBundle\\Controller\\CommandeController::setFicheAction',));
            }
            not_shop_fiche_travail_new:

            // shop_fiche_travail_index
            if (preg_match('#^/commandes/(?P<id>[^/]++)/fiche\\-de\\-travail$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_shop_fiche_travail_index;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'shop_fiche_travail_index')), array (  '_controller' => 'tontineBundle\\Controller\\CommandeController::indexFicheAction',));
            }
            not_shop_fiche_travail_index:
>>>>>>> 98b2c5f8696a04fd29d8da15541c98568e6aa835

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/ajaxify-search')) {
                // ajaxify_search_count_all
                if ($pathinfo === '/ajaxify-search/count') {
                    return array (  '_controller' => 'ajaxify_search.controller:count',  '_route' => 'ajaxify_search_count_all',);
                }

                // ajaxify_search_search
                if ($pathinfo === '/ajaxify-search/search') {
                    return array (  '_controller' => 'ajaxify_search.controller:search',  '_route' => 'ajaxify_search_search',);
                }

            }

            if (0 === strpos($pathinfo, '/agen')) {
                if (0 === strpos($pathinfo, '/agences')) {
                    // tontine_agencies_index
                    if (rtrim($pathinfo, '/') === '/agences') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'tontine_agencies_index');
                        }

                        return array (  '_controller' => 'tontineBundle\\Controller\\AgencyController::indexAction',  '_route' => 'tontine_agencies_index',);
                    }

                    // tontine_agencies_create
                    if ($pathinfo === '/agences/create') {
                        return array (  '_controller' => 'tontineBundle\\Controller\\AgencyController::createAction',  '_route' => 'tontine_agencies_create',);
                    }

                    // tontine_agencies_edit
                    if (preg_match('#^/agences/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_agencies_edit')), array (  '_controller' => 'tontineBundle\\Controller\\AgencyController::editAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/agents/groups')) {
                    // tontine_agents_groups_index
                    if (rtrim($pathinfo, '/') === '/agents/groups') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_tontine_agents_groups_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'tontine_agents_groups_index');
                        }

                        return array (  '_controller' => 'tontineBundle\\Controller\\Agent\\GroupController::indexAction',  '_route' => 'tontine_agents_groups_index',);
                    }
                    not_tontine_agents_groups_index:

                    // tontine_agents_groups_create
                    if ($pathinfo === '/agents/groups/create') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_tontine_agents_groups_create;
                        }

                        return array (  '_controller' => 'tontineBundle\\Controller\\Agent\\GroupController::createAction',  '_route' => 'tontine_agents_groups_create',);
                    }
                    not_tontine_agents_groups_create:

                    // tontine_agents_groups_edit
                    if (preg_match('#^/agents/groups/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_tontine_agents_groups_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_agents_groups_edit')), array (  '_controller' => 'tontineBundle\\Controller\\Agent\\GroupController::editAction',));
                    }
                    not_tontine_agents_groups_edit:

                }

            }

        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/ca')) {
                // tontine_caisse_home
                if (rtrim($pathinfo, '/') === '/caisse') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'tontine_caisse_home');
                    }

                    return array (  '_controller' => 'tontineBundle\\Controller\\CaisseController::caisseAction',  '_route' => 'tontine_caisse_home',);
                }

                if (0 === strpos($pathinfo, '/categorie')) {
                    // tontine_categorie_index
                    if (rtrim($pathinfo, '/') === '/categorie') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_tontine_categorie_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'tontine_categorie_index');
                        }

                        return array (  '_controller' => 'tontineBundle\\Controller\\CategorieController::indexAction',  '_route' => 'tontine_categorie_index',);
                    }
                    not_tontine_categorie_index:

                    // tontine_categorie_index_new
                    if (preg_match('#^/categorie/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_tontine_categorie_index_new;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_categorie_index_new')), array (  '_controller' => 'tontineBundle\\Controller\\CategorieController::indexNewAction',));
                    }
                    not_tontine_categorie_index_new:

                    // tontine_categorie_show
                    if (preg_match('#^/categorie/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_tontine_categorie_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_categorie_show')), array (  '_controller' => 'tontineBundle\\Controller\\CategorieController::showAction',));
                    }
                    not_tontine_categorie_show:

                    // tontine_categorie_preview
                    if (preg_match('#^/categorie/(?P<id>\\d+)/preview$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_tontine_categorie_preview;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_categorie_preview')), array (  '_controller' => 'tontineBundle\\Controller\\CategorieController::previewAction',));
                    }
                    not_tontine_categorie_preview:

                    // tontine_categorie_new
                    if ($pathinfo === '/categorie/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_tontine_categorie_new;
                        }

                        return array (  '_controller' => 'tontineBundle\\Controller\\CategorieController::newAction',  '_route' => 'tontine_categorie_new',);
                    }
                    not_tontine_categorie_new:

                    // tontine_categorie_new_form
                    if (preg_match('#^/categorie/(?P<id>[^/]++)/new\\-form$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_tontine_categorie_new_form;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_categorie_new_form')), array (  '_controller' => 'tontineBundle\\Controller\\CategorieController::ajaxNewFormAction',));
                    }
                    not_tontine_categorie_new_form:

                    // tontine_categorie_edit
                    if (preg_match('#^/categorie/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_tontine_categorie_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_categorie_edit')), array (  '_controller' => 'tontineBundle\\Controller\\CategorieController::editAction',));
                    }
                    not_tontine_categorie_edit:

                    // tontine_categorie_edit_form
                    if (preg_match('#^/categorie/(?P<id>[^/]++)/edit\\-form$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_tontine_categorie_edit_form;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_categorie_edit_form')), array (  '_controller' => 'tontineBundle\\Controller\\CategorieController::ajaxEditFormAction',));
                    }
                    not_tontine_categorie_edit_form:

                    // tontine_categorie_delete
                    if (preg_match('#^/categorie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('DELETE', 'GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('DELETE', 'GET', 'HEAD'));
                            goto not_tontine_categorie_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_categorie_delete')), array (  '_controller' => 'tontineBundle\\Controller\\CategorieController::deleteAction',));
                    }
                    not_tontine_categorie_delete:

                }

            }

            if (0 === strpos($pathinfo, '/client')) {
                // tontine_client_index
                if (rtrim($pathinfo, '/') === '/client') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_tontine_client_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'tontine_client_index');
                    }

                    return array (  '_controller' => 'tontineBundle\\Controller\\ClientController::indexAction',  '_route' => 'tontine_client_index',);
                }
                not_tontine_client_index:

                // tontine_client_index_new
                if (preg_match('#^/client/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_tontine_client_index_new;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_client_index_new')), array (  '_controller' => 'tontineBundle\\Controller\\ClientController::indexNewAction',));
                }
                not_tontine_client_index_new:

                // tontine_client_show
                if (preg_match('#^/client/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_tontine_client_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_client_show')), array (  '_controller' => 'tontineBundle\\Controller\\ClientController::showAction',));
                }
                not_tontine_client_show:

                // tontine_client_preview
                if (preg_match('#^/client/(?P<id>\\d+)/preview$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_tontine_client_preview;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_client_preview')), array (  '_controller' => 'tontineBundle\\Controller\\ClientController::previewAction',));
                }
                not_tontine_client_preview:

                // tontine_client_new
                if ($pathinfo === '/client/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_tontine_client_new;
                    }

                    return array (  '_controller' => 'tontineBundle\\Controller\\ClientController::newAction',  '_route' => 'tontine_client_new',);
                }
                not_tontine_client_new:

                // tontine_client_new_form
                if (preg_match('#^/client/(?P<id>[^/]++)/new\\-form$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_tontine_client_new_form;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_client_new_form')), array (  '_controller' => 'tontineBundle\\Controller\\ClientController::ajaxNewFormAction',));
                }
                not_tontine_client_new_form:

                // tontine_client_edit
                if (preg_match('#^/client/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_tontine_client_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_client_edit')), array (  '_controller' => 'tontineBundle\\Controller\\ClientController::editAction',));
                }
                not_tontine_client_edit:

                // tontine_client_edit_form
                if (preg_match('#^/client/(?P<id>[^/]++)/edit\\-form$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_tontine_client_edit_form;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_client_edit_form')), array (  '_controller' => 'tontineBundle\\Controller\\ClientController::ajaxEditFormAction',));
                }
                not_tontine_client_edit_form:

                // tontine_client_delete
                if (preg_match('#^/client/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('DELETE', 'GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('DELETE', 'GET', 'HEAD'));
                        goto not_tontine_client_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_client_delete')), array (  '_controller' => 'tontineBundle\\Controller\\ClientController::deleteAction',));
                }
                not_tontine_client_delete:

            }

        }

        if (0 === strpos($pathinfo, '/etat')) {
            // tontine_etat
            if ($pathinfo === '/etat/index') {
                return array (  '_controller' => 'tontineBundle\\Controller\\EtatController::indexAction',  '_route' => 'tontine_etat',);
            }

            if (0 === strpos($pathinfo, '/etat/miselist')) {
                // tontine_etat_mise
                if ($pathinfo === '/etat/miselist') {
                    return array (  '_controller' => 'tontineBundle\\Controller\\EtatController::miseListAction',  '_route' => 'tontine_etat_mise',);
                }

                // tontine_etat_mise_print
                if ($pathinfo === '/etat/miselist/print') {
                    return array (  '_controller' => 'tontineBundle\\Controller\\EtatController::miseListPrintAction',  '_route' => 'tontine_etat_mise_print',);
                }

            }

            if (0 === strpos($pathinfo, '/etat/c')) {
                if (0 === strpos($pathinfo, '/etat/clientlist')) {
                    // tontine_etat_client
                    if ($pathinfo === '/etat/clientlist') {
                        return array (  '_controller' => 'tontineBundle\\Controller\\EtatController::clientListAction',  '_route' => 'tontine_etat_client',);
                    }

                    // tontine_etat_client_print
                    if ($pathinfo === '/etat/clientlist/print') {
                        return array (  '_controller' => 'tontineBundle\\Controller\\EtatController::clientListPrintAction',  '_route' => 'tontine_etat_client_print',);
                    }

                }

                // tontine_etat_contrat
                if ($pathinfo === '/etat/contratlist') {
                    return array (  '_controller' => 'tontineBundle\\Controller\\EtatController::contratListAction',  '_route' => 'tontine_etat_contrat',);
                }

            }

            if (0 === strpos($pathinfo, '/etat/trans')) {
                // tontine_etat_transfert_fonds
                if ($pathinfo === '/etat/trans-fondlist') {
                    return array (  '_controller' => 'tontineBundle\\Controller\\EtatController::transfertFondsListAction',  '_route' => 'tontine_etat_transfert_fonds',);
                }

                // tontine_etat_transfonds_print
                if ($pathinfo === '/etat/transfondslist/print') {
                    return array (  '_controller' => 'tontineBundle\\Controller\\EtatController::transfertFondsListPrintAction',  '_route' => 'tontine_etat_transfonds_print',);
                }

                // tontine_etat_transfert_commissions
                if ($pathinfo === '/etat/trans-commissionlist') {
                    return array (  '_controller' => 'tontineBundle\\Controller\\EtatController::transfertComissionsListAction',  '_route' => 'tontine_etat_transfert_commissions',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/fournisseur')) {
            // tontine_fournisseur_index
            if (rtrim($pathinfo, '/') === '/fournisseur') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tontine_fournisseur_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tontine_fournisseur_index');
                }

                return array (  '_controller' => 'tontineBundle\\Controller\\FournisseurController::indexAction',  '_route' => 'tontine_fournisseur_index',);
            }
            not_tontine_fournisseur_index:

            // tontine_fournisseur_index_new
            if (preg_match('#^/fournisseur/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tontine_fournisseur_index_new;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_fournisseur_index_new')), array (  '_controller' => 'tontineBundle\\Controller\\FournisseurController::indexNewAction',));
            }
            not_tontine_fournisseur_index_new:

            // tontine_fournisseur_show
            if (preg_match('#^/fournisseur/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tontine_fournisseur_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_fournisseur_show')), array (  '_controller' => 'tontineBundle\\Controller\\FournisseurController::showAction',));
            }
            not_tontine_fournisseur_show:

            // tontine_fournisseur_preview
            if (preg_match('#^/fournisseur/(?P<id>\\d+)/preview$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tontine_fournisseur_preview;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_fournisseur_preview')), array (  '_controller' => 'tontineBundle\\Controller\\FournisseurController::previewAction',));
            }
            not_tontine_fournisseur_preview:

            // tontine_fournisseur_new
            if ($pathinfo === '/fournisseur/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_tontine_fournisseur_new;
                }

                return array (  '_controller' => 'tontineBundle\\Controller\\FournisseurController::newAction',  '_route' => 'tontine_fournisseur_new',);
            }
            not_tontine_fournisseur_new:

            // tontine_fournisseur_new_form
            if (preg_match('#^/fournisseur/(?P<id>[^/]++)/new\\-form$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tontine_fournisseur_new_form;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_fournisseur_new_form')), array (  '_controller' => 'tontineBundle\\Controller\\FournisseurController::ajaxNewFormAction',));
            }
            not_tontine_fournisseur_new_form:

            // tontine_fournisseur_edit
            if (preg_match('#^/fournisseur/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_tontine_fournisseur_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_fournisseur_edit')), array (  '_controller' => 'tontineBundle\\Controller\\FournisseurController::editAction',));
            }
            not_tontine_fournisseur_edit:

            // tontine_fournisseur_edit_form
            if (preg_match('#^/fournisseur/(?P<id>[^/]++)/edit\\-form$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tontine_fournisseur_edit_form;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_fournisseur_edit_form')), array (  '_controller' => 'tontineBundle\\Controller\\FournisseurController::ajaxEditFormAction',));
            }
            not_tontine_fournisseur_edit_form:

            // tontine_fournisseur_delete
            if (preg_match('#^/fournisseur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('DELETE', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('DELETE', 'GET', 'HEAD'));
                    goto not_tontine_fournisseur_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_fournisseur_delete')), array (  '_controller' => 'tontineBundle\\Controller\\FournisseurController::deleteAction',));
            }
            not_tontine_fournisseur_delete:

        }

        if (0 === strpos($pathinfo, '/modele')) {
            // tontine_modele_index
            if (rtrim($pathinfo, '/') === '/modele') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tontine_modele_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tontine_modele_index');
                }

                return array (  '_controller' => 'tontineBundle\\Controller\\ModeleController::indexAction',  '_route' => 'tontine_modele_index',);
            }
            not_tontine_modele_index:

            // tontine_modele_index_new
            if (preg_match('#^/modele/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tontine_modele_index_new;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_modele_index_new')), array (  '_controller' => 'tontineBundle\\Controller\\ModeleController::indexNewAction',));
            }
            not_tontine_modele_index_new:

            // tontine_modele_show
            if (preg_match('#^/modele/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tontine_modele_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_modele_show')), array (  '_controller' => 'tontineBundle\\Controller\\ModeleController::showAction',));
            }
            not_tontine_modele_show:

            // tontine_modele_preview
            if (preg_match('#^/modele/(?P<id>\\d+)/preview$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tontine_modele_preview;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_modele_preview')), array (  '_controller' => 'tontineBundle\\Controller\\ModeleController::previewAction',));
            }
            not_tontine_modele_preview:

            // tontine_modele_new
            if ($pathinfo === '/modele/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_tontine_modele_new;
                }

                return array (  '_controller' => 'tontineBundle\\Controller\\ModeleController::newAction',  '_route' => 'tontine_modele_new',);
            }
            not_tontine_modele_new:

            // tontine_modele_new_form
            if (preg_match('#^/modele/(?P<id>[^/]++)/new\\-form$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tontine_modele_new_form;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_modele_new_form')), array (  '_controller' => 'tontineBundle\\Controller\\ModeleController::ajaxNewFormAction',));
            }
            not_tontine_modele_new_form:

            // tontine_modele_edit
            if (preg_match('#^/modele/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_tontine_modele_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_modele_edit')), array (  '_controller' => 'tontineBundle\\Controller\\ModeleController::editAction',));
            }
            not_tontine_modele_edit:

            // tontine_modele_edit_form
            if (preg_match('#^/modele/(?P<id>[^/]++)/edit\\-form$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tontine_modele_edit_form;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_modele_edit_form')), array (  '_controller' => 'tontineBundle\\Controller\\ModeleController::ajaxEditFormAction',));
            }
            not_tontine_modele_edit_form:

            // tontine_modele_delete
            if (preg_match('#^/modele/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('DELETE', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('DELETE', 'GET', 'HEAD'));
                    goto not_tontine_modele_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_modele_delete')), array (  '_controller' => 'tontineBundle\\Controller\\ModeleController::deleteAction',));
            }
            not_tontine_modele_delete:

        }

        // tontine_parameters_edit
        if (rtrim($pathinfo, '/') === '/parameters') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'tontine_parameters_edit');
            }

            return array (  '_controller' => 'tontineBundle\\Controller\\ParameterController::editAction',  '_route' => 'tontine_parameters_edit',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
