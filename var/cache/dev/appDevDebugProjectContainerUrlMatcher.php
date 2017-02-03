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

        if (0 === strpos($pathinfo, '/biens')) {
            // tontine_bien_index
            if (rtrim($pathinfo, '/') === '/biens') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tontine_bien_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tontine_bien_index');
                }

                return array (  '_controller' => 'tontineBundle\\Controller\\BienTontineController::indexAction',  '_route' => 'tontine_bien_index',);
            }
            not_tontine_bien_index:

            // tontine_bien_preview
            if (preg_match('#^/biens/(?P<id>\\d+)/preview$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_bien_preview')), array (  '_controller' => 'tontineBundle\\Controller\\BienTontineController::previewAction',));
            }

            if (0 === strpos($pathinfo, '/biens/fiche/pr')) {
                // tontine_bien_fiche_preview
                if ($pathinfo === '/biens/fiche/preview') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_tontine_bien_fiche_preview;
                    }

                    return array (  '_controller' => 'tontineBundle\\Controller\\BienTontineController::FichedeChoixAction',  '_route' => 'tontine_bien_fiche_preview',);
                }
                not_tontine_bien_fiche_preview:

                // tontine_bien_fiche_print
                if ($pathinfo === '/biens/fiche/print') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_tontine_bien_fiche_print;
                    }

                    return array (  '_controller' => 'tontineBundle\\Controller\\BienTontineController::FichePrintAction',  '_route' => 'tontine_bien_fiche_print',);
                }
                not_tontine_bien_fiche_print:

            }

            // tontine_bien_options
            if (preg_match('#^/biens/(?P<id>\\d+)/options$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tontine_bien_options;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_bien_options')), array (  '_controller' => 'tontineBundle\\Controller\\BienTontineController::bienOptionsAction',));
            }
            not_tontine_bien_options:

        }

        if (0 === strpos($pathinfo, '/c')) {
            // tontine_caisse_home
            if (rtrim($pathinfo, '/') === '/caisse') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tontine_caisse_home');
                }

                return array (  '_controller' => 'tontineBundle\\Controller\\CaisseController::caisseAction',  '_route' => 'tontine_caisse_home',);
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

            if (0 === strpos($pathinfo, '/con')) {
                if (0 === strpos($pathinfo, '/conditiongenerale')) {
                    // tontine_conditiongenerale_index
                    if (rtrim($pathinfo, '/') === '/conditiongenerale') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_tontine_conditiongenerale_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'tontine_conditiongenerale_index');
                        }

                        return array (  '_controller' => 'tontineBundle\\Controller\\ConditionGeneraleController::indexAction',  '_route' => 'tontine_conditiongenerale_index',);
                    }
                    not_tontine_conditiongenerale_index:

                    // tontine_conditiongenerale_show
                    if (preg_match('#^/conditiongenerale/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_tontine_conditiongenerale_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_conditiongenerale_show')), array (  '_controller' => 'tontineBundle\\Controller\\ConditionGeneraleController::showAction',));
                    }
                    not_tontine_conditiongenerale_show:

                    // tontine_conditiongenerale_preview
                    if (preg_match('#^/conditiongenerale/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_tontine_conditiongenerale_preview;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_conditiongenerale_preview')), array (  '_controller' => 'tontineBundle\\Controller\\ConditionGeneraleController::previewAction',));
                    }
                    not_tontine_conditiongenerale_preview:

                    // tontine_conditiongenerale_new
                    if (preg_match('#^/conditiongenerale/(?P<idc>[^/]++)/new$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_tontine_conditiongenerale_new;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_conditiongenerale_new')), array (  '_controller' => 'tontineBundle\\Controller\\ConditionGeneraleController::newAction',));
                    }
                    not_tontine_conditiongenerale_new:

                    if (0 === strpos($pathinfo, '/conditiongeneralecg')) {
                        // tontine_cg_new_form
                        if ($pathinfo === '/conditiongeneralecg/new-form') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_tontine_cg_new_form;
                            }

                            return array (  '_controller' => 'tontineBundle\\Controller\\ConditionGeneraleController::ajaxNewFormAction',  '_route' => 'tontine_cg_new_form',);
                        }
                        not_tontine_cg_new_form:

                        // tontine_cg_newpopup_form
                        if (preg_match('#^/conditiongeneralecg/(?P<idc>[^/]++)/newpopup\\-form$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_tontine_cg_newpopup_form;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_cg_newpopup_form')), array (  '_controller' => 'tontineBundle\\Controller\\ConditionGeneraleController::newFormAction',));
                        }
                        not_tontine_cg_newpopup_form:

                    }

                    // tontine_conditiongenerale_edit
                    if (preg_match('#^/conditiongenerale/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_tontine_conditiongenerale_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_conditiongenerale_edit')), array (  '_controller' => 'tontineBundle\\Controller\\ConditionGeneraleController::editAction',));
                    }
                    not_tontine_conditiongenerale_edit:

                    // tontine_conditiongenerale_edit_form
                    if (preg_match('#^/conditiongenerale/(?P<id>[^/]++)/edit\\-form$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_tontine_conditiongenerale_edit_form;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_conditiongenerale_edit_form')), array (  '_controller' => 'tontineBundle\\Controller\\ConditionGeneraleController::ajaxEditFormAction',));
                    }
                    not_tontine_conditiongenerale_edit_form:

                    // tontine_conditiongenerale_delete
                    if (preg_match('#^/conditiongenerale/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('DELETE', 'GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('DELETE', 'GET', 'HEAD'));
                            goto not_tontine_conditiongenerale_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_conditiongenerale_delete')), array (  '_controller' => 'tontineBundle\\Controller\\ConditionGeneraleController::deleteAction',));
                    }
                    not_tontine_conditiongenerale_delete:

                }

                if (0 === strpos($pathinfo, '/contrat')) {
                    // tontine_contrat_index
                    if (rtrim($pathinfo, '/') === '/contrat') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_tontine_contrat_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'tontine_contrat_index');
                        }

                        return array (  '_controller' => 'tontineBundle\\Controller\\ContratController::indexAction',  '_route' => 'tontine_contrat_index',);
                    }
                    not_tontine_contrat_index:

                    // tontine_contrat_show
                    if (preg_match('#^/contrat/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_tontine_contrat_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_contrat_show')), array (  '_controller' => 'tontineBundle\\Controller\\ContratController::showAction',));
                    }
                    not_tontine_contrat_show:

                    // tontine_contrat_preview
                    if (preg_match('#^/contrat/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_tontine_contrat_preview;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_contrat_preview')), array (  '_controller' => 'tontineBundle\\Controller\\ContratController::previewAction',));
                    }
                    not_tontine_contrat_preview:

                    // tontine_contrat_new
                    if ($pathinfo === '/contrat/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_tontine_contrat_new;
                        }

                        return array (  '_controller' => 'tontineBundle\\Controller\\ContratController::newAction',  '_route' => 'tontine_contrat_new',);
                    }
                    not_tontine_contrat_new:

                    // tontine_contrat_new_form
                    if (preg_match('#^/contrat/(?P<id>[^/]++)/new\\-form$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_tontine_contrat_new_form;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_contrat_new_form')), array (  '_controller' => 'tontineBundle\\Controller\\ContratController::ajaxNewFormAction',));
                    }
                    not_tontine_contrat_new_form:

                    // tontine_contrat_new_form_contrat
                    if (preg_match('#^/contrat/(?P<id>\\d+)/new\\-form\\-contrat$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_tontine_contrat_new_form_contrat;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_contrat_new_form_contrat')), array (  '_controller' => 'tontineBundle\\Controller\\ContratController::ajaxNewContratFormAction',));
                    }
                    not_tontine_contrat_new_form_contrat:

                    // tontine_contrat_edit
                    if (preg_match('#^/contrat/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_tontine_contrat_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_contrat_edit')), array (  '_controller' => 'tontineBundle\\Controller\\ContratController::editAction',));
                    }
                    not_tontine_contrat_edit:

                    // tontine_contrat_edit_form
                    if (preg_match('#^/contrat/(?P<id>[^/]++)/edit\\-form$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_tontine_contrat_edit_form;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_contrat_edit_form')), array (  '_controller' => 'tontineBundle\\Controller\\ContratController::ajaxEditFormAction',));
                    }
                    not_tontine_contrat_edit_form:

                    // tontine_contrat_delete
                    if (preg_match('#^/contrat/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('DELETE', 'GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('DELETE', 'GET', 'HEAD'));
                            goto not_tontine_contrat_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_contrat_delete')), array (  '_controller' => 'tontineBundle\\Controller\\ContratController::deleteAction',));
                    }
                    not_tontine_contrat_delete:

                    // tontine_contrat_popup
                    if ($pathinfo === '/contrat/newcontrat') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_tontine_contrat_popup;
                        }

                        return array (  '_controller' => 'tontineBundle\\Controller\\ContratController::popupAction',  '_route' => 'tontine_contrat_popup',);
                    }
                    not_tontine_contrat_popup:

                    // tontine_contrat_new_contrat
                    if (preg_match('#^/contrat/(?P<id>\\d+)/ajaxcontrat$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_tontine_contrat_new_contrat;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_contrat_new_contrat')), array (  '_controller' => 'tontineBundle\\Controller\\ContratController::newContratAction',));
                    }
                    not_tontine_contrat_new_contrat:

                }

            }

        }

        if (0 === strpos($pathinfo, '/etats/my-today-')) {
            // tontine_dashboard_my_today_tontines
            if ($pathinfo === '/etats/my-today-tontines') {
                return array (  '_controller' => 'tontineBundle\\Controller\\DefaultController::agentTodayTontinesAction',  '_route' => 'tontine_dashboard_my_today_tontines',);
            }

            // tontine_dashboard_my_today_collected_mises
            if ($pathinfo === '/etats/my-today-collected-mises') {
                return array (  '_controller' => 'tontineBundle\\Controller\\DefaultController::agentTodayCollectedMisesAction',  '_route' => 'tontine_dashboard_my_today_collected_mises',);
            }

        }

        if (0 === strpos($pathinfo, '/tontines/depot-mise')) {
            // tontine_depotmise_index
            if (rtrim($pathinfo, '/') === '/tontines/depot-mise') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tontine_depotmise_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tontine_depotmise_index');
                }

                return array (  '_controller' => 'tontineBundle\\Controller\\DepotMiseController::indexAction',  '_route' => 'tontine_depotmise_index',);
            }
            not_tontine_depotmise_index:

            // tontine_depotmise_show
            if (preg_match('#^/tontines/depot\\-mise/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tontine_depotmise_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_depotmise_show')), array (  '_controller' => 'tontineBundle\\Controller\\DepotMiseController::showAction',));
            }
            not_tontine_depotmise_show:

            // tontine_depotmise_preview
            if (preg_match('#^/tontines/depot\\-mise/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tontine_depotmise_preview;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_depotmise_preview')), array (  '_controller' => 'tontineBundle\\Controller\\DepotMiseController::previewAction',));
            }
            not_tontine_depotmise_preview:

            // tontine_depotmise_new
            if (preg_match('#^/tontines/depot\\-mise/(?P<tontine>[^/]++)/new$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_tontine_depotmise_new;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_depotmise_new')), array (  '_controller' => 'tontineBundle\\Controller\\DepotMiseController::newAction',));
            }
            not_tontine_depotmise_new:

            // tontine_depotmise_new_form
            if (preg_match('#^/tontines/depot\\-mise/(?P<tontine>[^/]++)/new\\-form$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tontine_depotmise_new_form;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_depotmise_new_form')), array (  '_controller' => 'tontineBundle\\Controller\\DepotMiseController::ajaxNewFormAction',));
            }
            not_tontine_depotmise_new_form:

            // tontine_depotmise_edit
            if (preg_match('#^/tontines/depot\\-mise/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_tontine_depotmise_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_depotmise_edit')), array (  '_controller' => 'tontineBundle\\Controller\\DepotMiseController::editAction',));
            }
            not_tontine_depotmise_edit:

            // tontine_depotmise_edit_form
            if (preg_match('#^/tontines/depot\\-mise/(?P<id>[^/]++)/edit\\-form$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tontine_depotmise_edit_form;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_depotmise_edit_form')), array (  '_controller' => 'tontineBundle\\Controller\\DepotMiseController::ajaxEditFormAction',));
            }
            not_tontine_depotmise_edit_form:

            // tontine_depotmise_delete
            if (preg_match('#^/tontines/depot\\-mise/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('DELETE', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('DELETE', 'GET', 'HEAD'));
                    goto not_tontine_depotmise_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_depotmise_delete')), array (  '_controller' => 'tontineBundle\\Controller\\DepotMiseController::deleteAction',));
            }
            not_tontine_depotmise_delete:

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

        if (0 === strpos($pathinfo, '/fincontrat')) {
            // tontine_fincontrat_index
            if (rtrim($pathinfo, '/') === '/fincontrat') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tontine_fincontrat_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tontine_fincontrat_index');
                }

                return array (  '_controller' => 'tontineBundle\\Controller\\FinContratController::indexAction',  '_route' => 'tontine_fincontrat_index',);
            }
            not_tontine_fincontrat_index:

            // tontine_fincontrat_show
            if (preg_match('#^/fincontrat/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tontine_fincontrat_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_fincontrat_show')), array (  '_controller' => 'tontineBundle\\Controller\\FinContratController::showAction',));
            }
            not_tontine_fincontrat_show:

            // tontine_fincontrat_preview
            if (preg_match('#^/fincontrat/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tontine_fincontrat_preview;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_fincontrat_preview')), array (  '_controller' => 'tontineBundle\\Controller\\FinContratController::previewAction',));
            }
            not_tontine_fincontrat_preview:

            // tontine_fincontrat_new
            if ($pathinfo === '/fincontrat/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_tontine_fincontrat_new;
                }

                return array (  '_controller' => 'tontineBundle\\Controller\\FinContratController::newAction',  '_route' => 'tontine_fincontrat_new',);
            }
            not_tontine_fincontrat_new:

            // tontine_fincontrat_new_form
            if (preg_match('#^/fincontrat/(?P<id>[^/]++)/new\\-form$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tontine_fincontrat_new_form;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_fincontrat_new_form')), array (  '_controller' => 'tontineBundle\\Controller\\FinContratController::ajaxNewFormAction',));
            }
            not_tontine_fincontrat_new_form:

            // tontine_fincontrat_new_form_fincontrat
            if (preg_match('#^/fincontrat/(?P<id>\\d+)/new\\-form\\-fincontrat$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tontine_fincontrat_new_form_fincontrat;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_fincontrat_new_form_fincontrat')), array (  '_controller' => 'tontineBundle\\Controller\\FinContratController::ajaxNewFincontratFormAction',));
            }
            not_tontine_fincontrat_new_form_fincontrat:

            // tontine_fincontrat_edit
            if (preg_match('#^/fincontrat/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_tontine_fincontrat_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_fincontrat_edit')), array (  '_controller' => 'tontineBundle\\Controller\\FinContratController::editAction',));
            }
            not_tontine_fincontrat_edit:

            // tontine_fincontrat_edit_form
            if (preg_match('#^/fincontrat/(?P<id>[^/]++)/edit\\-form$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tontine_fincontrat_edit_form;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_fincontrat_edit_form')), array (  '_controller' => 'tontineBundle\\Controller\\FinContratController::ajaxEditFormAction',));
            }
            not_tontine_fincontrat_edit_form:

            // tontine_fincontrat_delete
            if (preg_match('#^/fincontrat/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('DELETE', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('DELETE', 'GET', 'HEAD'));
                    goto not_tontine_fincontrat_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_fincontrat_delete')), array (  '_controller' => 'tontineBundle\\Controller\\FinContratController::deleteAction',));
            }
            not_tontine_fincontrat_delete:

            // tontine_fincontrat_popup
            if ($pathinfo === '/fincontrat/newfincontrat') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tontine_fincontrat_popup;
                }

                return array (  '_controller' => 'tontineBundle\\Controller\\FinContratController::popupAction',  '_route' => 'tontine_fincontrat_popup',);
            }
            not_tontine_fincontrat_popup:

            // tontine_fincontrat_new_fincontrat
            if (preg_match('#^/fincontrat/(?P<id>\\d+)/ajaxfincontrat$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_tontine_fincontrat_new_fincontrat;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_fincontrat_new_fincontrat')), array (  '_controller' => 'tontineBundle\\Controller\\FinContratController::newfincontratAction',));
            }
            not_tontine_fincontrat_new_fincontrat:

        }

        // tontine_parameters_edit
        if (rtrim($pathinfo, '/') === '/parameters') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'tontine_parameters_edit');
            }

            return array (  '_controller' => 'tontineBundle\\Controller\\ParameterController::editAction',  '_route' => 'tontine_parameters_edit',);
        }

        if (0 === strpos($pathinfo, '/resiliationcontrat')) {
            // tontine_resiliationcontrat_index
            if (rtrim($pathinfo, '/') === '/resiliationcontrat') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tontine_resiliationcontrat_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tontine_resiliationcontrat_index');
                }

                return array (  '_controller' => 'tontineBundle\\Controller\\ResiliationContratController::indexAction',  '_route' => 'tontine_resiliationcontrat_index',);
            }
            not_tontine_resiliationcontrat_index:

            // tontine_resiliationcontrat_show
            if (preg_match('#^/resiliationcontrat/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tontine_resiliationcontrat_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_resiliationcontrat_show')), array (  '_controller' => 'tontineBundle\\Controller\\ResiliationContratController::showAction',));
            }
            not_tontine_resiliationcontrat_show:

            // tontine_resiliationcontrat_preview
            if (preg_match('#^/resiliationcontrat/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tontine_resiliationcontrat_preview;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_resiliationcontrat_preview')), array (  '_controller' => 'tontineBundle\\Controller\\ResiliationContratController::previewAction',));
            }
            not_tontine_resiliationcontrat_preview:

            // tontine_resiliationcontrat_new
            if ($pathinfo === '/resiliationcontrat/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_tontine_resiliationcontrat_new;
                }

                return array (  '_controller' => 'tontineBundle\\Controller\\ResiliationContratController::newAction',  '_route' => 'tontine_resiliationcontrat_new',);
            }
            not_tontine_resiliationcontrat_new:

            // tontine_resiliationcontrat_valider
            if (preg_match('#^/resiliationcontrat/(?P<id>[^/]++)/valider$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_tontine_resiliationcontrat_valider;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_resiliationcontrat_valider')), array (  '_controller' => 'tontineBundle\\Controller\\ResiliationContratController::validateAction',));
            }
            not_tontine_resiliationcontrat_valider:

            // tontine_resiliationcontrat_new_form
            if (preg_match('#^/resiliationcontrat/(?P<id>[^/]++)/new\\-form$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tontine_resiliationcontrat_new_form;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_resiliationcontrat_new_form')), array (  '_controller' => 'tontineBundle\\Controller\\ResiliationContratController::ajaxNewFormAction',));
            }
            not_tontine_resiliationcontrat_new_form:

            // tontine_resiliationcontrat_new_form_resiliationcontra
            if (preg_match('#^/resiliationcontrat/(?P<id>[^/]++)/new\\-form\\-resiliationcontrat$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tontine_resiliationcontrat_new_form_resiliationcontra;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_resiliationcontrat_new_form_resiliationcontra')), array (  '_controller' => 'tontineBundle\\Controller\\ResiliationContratController::ajaxNewResiliationContratFormAction',));
            }
            not_tontine_resiliationcontrat_new_form_resiliationcontra:

            // tontine_resiliationcontrat_new_addform
            if (preg_match('#^/resiliationcontrat/(?P<id>[^/]++)/new\\-addform$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tontine_resiliationcontrat_new_addform;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_resiliationcontrat_new_addform')), array (  '_controller' => 'tontineBundle\\Controller\\ResiliationContratController::ajaxAddFormAction',));
            }
            not_tontine_resiliationcontrat_new_addform:

            // tontine_resiliationcontrat_edit
            if (preg_match('#^/resiliationcontrat/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_tontine_resiliationcontrat_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_resiliationcontrat_edit')), array (  '_controller' => 'tontineBundle\\Controller\\ResiliationContratController::editAction',));
            }
            not_tontine_resiliationcontrat_edit:

            // tontine_resiliationcontrat_edit_form
            if (preg_match('#^/resiliationcontrat/(?P<id>[^/]++)/edit\\-form$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tontine_resiliationcontrat_edit_form;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_resiliationcontrat_edit_form')), array (  '_controller' => 'tontineBundle\\Controller\\ResiliationContratController::ajaxEditFormAction',));
            }
            not_tontine_resiliationcontrat_edit_form:

            // tontine_resiliationcontrat_delete
            if (preg_match('#^/resiliationcontrat/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('DELETE', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('DELETE', 'GET', 'HEAD'));
                    goto not_tontine_resiliationcontrat_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_resiliationcontrat_delete')), array (  '_controller' => 'tontineBundle\\Controller\\ResiliationContratController::deleteAction',));
            }
            not_tontine_resiliationcontrat_delete:

            // tontine_resiliationcontrat_new_resiliationcontrat
            if (preg_match('#^/resiliationcontrat/(?P<id>\\d+)/ajaxresiliationcontrat$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_tontine_resiliationcontrat_new_resiliationcontrat;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_resiliationcontrat_new_resiliationcontrat')), array (  '_controller' => 'tontineBundle\\Controller\\ResiliationContratController::newResiliationContratAction',));
            }
            not_tontine_resiliationcontrat_new_resiliationcontrat:

            // tontine_resiliationcontrat_popup
            if ($pathinfo === '/resiliationcontrat/newresiliationcontrat') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tontine_resiliationcontrat_popup;
                }

                return array (  '_controller' => 'tontineBundle\\Controller\\ResiliationContratController::popupAction',  '_route' => 'tontine_resiliationcontrat_popup',);
            }
            not_tontine_resiliationcontrat_popup:

        }

        if (0 === strpos($pathinfo, '/t')) {
            if (0 === strpos($pathinfo, '/tontines')) {
                // tontine_tontines_index
                if (rtrim($pathinfo, '/') === '/tontines') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_tontine_tontines_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'tontine_tontines_index');
                    }

                    return array (  '_controller' => 'tontineBundle\\Controller\\TontineController::indexAction',  '_route' => 'tontine_tontines_index',);
                }
                not_tontine_tontines_index:

                // tontine_tontines_show
                if (preg_match('#^/tontines/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_tontine_tontines_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_tontines_show')), array (  '_controller' => 'tontineBundle\\Controller\\TontineController::showAction',));
                }
                not_tontine_tontines_show:

                // tontine_tontines_preview
                if (preg_match('#^/tontines/(?P<id>\\d+)/preview$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_tontine_tontines_preview;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_tontines_preview')), array (  '_controller' => 'tontineBundle\\Controller\\TontineController::previewAction',));
                }
                not_tontine_tontines_preview:

                if (0 === strpos($pathinfo, '/tontines/new')) {
                    // tontine_tontines_new
                    if ($pathinfo === '/tontines/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_tontine_tontines_new;
                        }

                        return array (  '_controller' => 'tontineBundle\\Controller\\TontineController::newAction',  '_route' => 'tontine_tontines_new',);
                    }
                    not_tontine_tontines_new:

                    // tontine_tontines_new_form
                    if ($pathinfo === '/tontines/new-form') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_tontine_tontines_new_form;
                        }

                        return array (  '_controller' => 'tontineBundle\\Controller\\TontineController::ajaxNewFormAction',  '_route' => 'tontine_tontines_new_form',);
                    }
                    not_tontine_tontines_new_form:

                }

                // tontine_tontines_edit
                if (preg_match('#^/tontines/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_tontine_tontines_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_tontines_edit')), array (  '_controller' => 'tontineBundle\\Controller\\TontineController::editAction',));
                }
                not_tontine_tontines_edit:

                // tontine_tontines_edit_form
                if (preg_match('#^/tontines/(?P<id>[^/]++)/edit\\-form$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_tontine_tontines_edit_form;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_tontines_edit_form')), array (  '_controller' => 'tontineBundle\\Controller\\TontineController::ajaxEditFormAction',));
                }
                not_tontine_tontines_edit_form:

                // tontine_tontines_delete
                if (preg_match('#^/tontines/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('DELETE', 'GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('DELETE', 'GET', 'HEAD'));
                        goto not_tontine_tontines_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_tontines_delete')), array (  '_controller' => 'tontineBundle\\Controller\\TontineController::deleteAction',));
                }
                not_tontine_tontines_delete:

                if (0 === strpos($pathinfo, '/tontines/ejce')) {
                    // tontine_etat_client_enregistrer_journalier
                    if ($pathinfo === '/tontines/ejce') {
                        return array (  '_controller' => 'tontineBundle\\Controller\\TontineCriteriaController::etatClientEnregistrerJournalierAction',  '_route' => 'tontine_etat_client_enregistrer_journalier',);
                    }

                    // tontine_etat_client_enregistrer_journalier_print
                    if ($pathinfo === '/tontines/ejce/print') {
                        return array (  '_controller' => 'tontineBundle\\Controller\\TontineCriteriaController::etatClientEnregistrerJournalierPrintAction',  '_route' => 'tontine_etat_client_enregistrer_journalier_print',);
                    }

                }

                // tontine_tontinecriteria_search
                if ($pathinfo === '/tontines/search-bien') {
                    return array (  '_controller' => 'tontineBundle\\Controller\\TontineCriteriaController::searchAction',  '_route' => 'tontine_tontinecriteria_search',);
                }

                // tontine_tontinecriteria_calculatemise
                if ($pathinfo === '/tontines/calculate-mise') {
                    return array (  '_controller' => 'tontineBundle\\Controller\\TontineCriteriaController::calculateMiseAction',  '_route' => 'tontine_tontinecriteria_calculatemise',);
                }

                // tontines_do_calculate_mise
                if ($pathinfo === '/tontines/do-calculate-mise') {
                    return array (  '_controller' => 'tontineBundle\\Controller\\TontineCriteriaController::doCalculateMiseAction',  '_route' => 'tontines_do_calculate_mise',);
                }

            }

            if (0 === strpos($pathinfo, '/transfert-fonds')) {
                if (0 === strpos($pathinfo, '/transfert-fonds/commissions')) {
                    // tontine_transfertcommissions_index
                    if (rtrim($pathinfo, '/') === '/transfert-fonds/commissions') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_tontine_transfertcommissions_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'tontine_transfertcommissions_index');
                        }

                        return array (  '_controller' => 'tontineBundle\\Controller\\TransfertCommissionsController::indexAction',  '_route' => 'tontine_transfertcommissions_index',);
                    }
                    not_tontine_transfertcommissions_index:

                    // tontine_transfertcommissions_show
                    if (preg_match('#^/transfert\\-fonds/commissions/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_tontine_transfertcommissions_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_transfertcommissions_show')), array (  '_controller' => 'tontineBundle\\Controller\\TransfertCommissionsController::showAction',));
                    }
                    not_tontine_transfertcommissions_show:

                    // tontine_transfertcommissions_preview
                    if (preg_match('#^/transfert\\-fonds/commissions/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_tontine_transfertcommissions_preview;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_transfertcommissions_preview')), array (  '_controller' => 'tontineBundle\\Controller\\TransfertCommissionsController::previewAction',));
                    }
                    not_tontine_transfertcommissions_preview:

                    // tontine_transfertcommissions_new
                    if ($pathinfo === '/transfert-fonds/commissions/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_tontine_transfertcommissions_new;
                        }

                        return array (  '_controller' => 'tontineBundle\\Controller\\TransfertCommissionsController::newAction',  '_route' => 'tontine_transfertcommissions_new',);
                    }
                    not_tontine_transfertcommissions_new:

                    // tontine_transfertcommissions_new_form
                    if (preg_match('#^/transfert\\-fonds/commissions/(?P<id>[^/]++)/new\\-form$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_tontine_transfertcommissions_new_form;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_transfertcommissions_new_form')), array (  '_controller' => 'tontineBundle\\Controller\\TransfertCommissionsController::ajaxNewFormAction',));
                    }
                    not_tontine_transfertcommissions_new_form:

                    // tontine_transfertcommissions_estimate_amount
                    if ($pathinfo === '/transfert-fonds/commissions/estimate-amount') {
                        return array (  '_controller' => 'tontineBundle\\Controller\\TransfertCommissionsController::estimateAmountAction',  '_route' => 'tontine_transfertcommissions_estimate_amount',);
                    }

                    // tontine_transfertcommissions_edit
                    if (preg_match('#^/transfert\\-fonds/commissions/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_tontine_transfertcommissions_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_transfertcommissions_edit')), array (  '_controller' => 'tontineBundle\\Controller\\TransfertCommissionsController::editAction',));
                    }
                    not_tontine_transfertcommissions_edit:

                    // tontine_transfertcommissions_edit_form
                    if (preg_match('#^/transfert\\-fonds/commissions/(?P<id>[^/]++)/edit\\-form$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_tontine_transfertcommissions_edit_form;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_transfertcommissions_edit_form')), array (  '_controller' => 'tontineBundle\\Controller\\TransfertCommissionsController::ajaxEditFormAction',));
                    }
                    not_tontine_transfertcommissions_edit_form:

                    // tontine_transfertcommissions_delete
                    if (preg_match('#^/transfert\\-fonds/commissions/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('DELETE', 'GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('DELETE', 'GET', 'HEAD'));
                            goto not_tontine_transfertcommissions_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_transfertcommissions_delete')), array (  '_controller' => 'tontineBundle\\Controller\\TransfertCommissionsController::deleteAction',));
                    }
                    not_tontine_transfertcommissions_delete:

                }

                // tontine_transfert_fonds_index
                if (rtrim($pathinfo, '/') === '/transfert-fonds') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_tontine_transfert_fonds_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'tontine_transfert_fonds_index');
                    }

                    return array (  '_controller' => 'tontineBundle\\Controller\\TransfertFondsController::indexAction',  '_route' => 'tontine_transfert_fonds_index',);
                }
                not_tontine_transfert_fonds_index:

                // tontine_transfert_fonds_show
                if (preg_match('#^/transfert\\-fonds/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_tontine_transfert_fonds_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_transfert_fonds_show')), array (  '_controller' => 'tontineBundle\\Controller\\TransfertFondsController::showAction',));
                }
                not_tontine_transfert_fonds_show:

                // tontine_transfert_fonds_preview
                if (preg_match('#^/transfert\\-fonds/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_tontine_transfert_fonds_preview;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_transfert_fonds_preview')), array (  '_controller' => 'tontineBundle\\Controller\\TransfertFondsController::previewAction',));
                }
                not_tontine_transfert_fonds_preview:

                // tontine_transfert_fonds_new
                if ($pathinfo === '/transfert-fonds/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_tontine_transfert_fonds_new;
                    }

                    return array (  '_controller' => 'tontineBundle\\Controller\\TransfertFondsController::newAction',  '_route' => 'tontine_transfert_fonds_new',);
                }
                not_tontine_transfert_fonds_new:

                // tontine_transfert_fonds_new_form
                if (preg_match('#^/transfert\\-fonds/(?P<id>[^/]++)/new\\-form$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_tontine_transfert_fonds_new_form;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_transfert_fonds_new_form')), array (  '_controller' => 'tontineBundle\\Controller\\TransfertFondsController::ajaxNewFormAction',));
                }
                not_tontine_transfert_fonds_new_form:

                // tontine_transfert_fonds_etat
                if ($pathinfo === '/transfert-fonds/etat') {
                    return array (  '_controller' => 'tontineBundle\\Controller\\TransfertFondsController::estimateAmountAction',  '_route' => 'tontine_transfert_fonds_etat',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/visite')) {
            // tontine_visite_index
            if (preg_match('#^/visite/(?P<idc>[^/]++)/liste$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tontine_visite_index;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_visite_index')), array (  '_controller' => 'tontineBundle\\Controller\\VisiteController::indexAction',));
            }
            not_tontine_visite_index:

            // tontine_visite_etatlist
            if (preg_match('#^/visite/(?P<etat>[^/]++)/levelliste$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tontine_visite_etatlist;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_visite_etatlist')), array (  '_controller' => 'tontineBundle\\Controller\\VisiteController::listEtatAction',));
            }
            not_tontine_visite_etatlist:

            // tontine_visite_show
            if (preg_match('#^/visite/(?P<id>\\d+)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tontine_visite_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_visite_show')), array (  '_controller' => 'tontineBundle\\Controller\\VisiteController::showAction',));
            }
            not_tontine_visite_show:

            // tontine_visite_validate
            if (preg_match('#^/visite/(?P<id>\\d+)/validate$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tontine_visite_validate;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_visite_validate')), array (  '_controller' => 'tontineBundle\\Controller\\VisiteController::validateAction',));
            }
            not_tontine_visite_validate:

            // tontine_visite_finaliser
            if (preg_match('#^/visite/(?P<id>\\d+)/finaliser$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tontine_visite_finaliser;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_visite_finaliser')), array (  '_controller' => 'tontineBundle\\Controller\\VisiteController::finaliserAction',));
            }
            not_tontine_visite_finaliser:

            // tontine_visite_ignorer
            if (preg_match('#^/visite/(?P<id>\\d+)/ignorer$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tontine_visite_ignorer;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_visite_ignorer')), array (  '_controller' => 'tontineBundle\\Controller\\VisiteController::ignorerAction',));
            }
            not_tontine_visite_ignorer:

            // tontine_visite_preview
            if (preg_match('#^/visite/(?P<id>\\d+)/preview$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tontine_visite_preview;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_visite_preview')), array (  '_controller' => 'tontineBundle\\Controller\\VisiteController::previewAction',));
            }
            not_tontine_visite_preview:

            // tontine_visite_new
            if (0 === strpos($pathinfo, '/visitetontine') && preg_match('#^/visitetontine/(?P<idc>[^/]++)/new$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_tontine_visite_new;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_visite_new')), array (  '_controller' => 'tontineBundle\\Controller\\VisiteController::newAction',));
            }
            not_tontine_visite_new:

            // tontine_visite_new_form
            if (preg_match('#^/visite/(?P<idc>[^/]++)/new\\-form$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tontine_visite_new_form;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_visite_new_form')), array (  '_controller' => 'tontineBundle\\Controller\\VisiteController::ajaxNewFormAction',));
            }
            not_tontine_visite_new_form:

            // tontine_visite_newpopup_form
            if (preg_match('#^/visite/(?P<idc>[^/]++)/newpopup\\-form$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tontine_visite_newpopup_form;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_visite_newpopup_form')), array (  '_controller' => 'tontineBundle\\Controller\\VisiteController::newFormAction',));
            }
            not_tontine_visite_newpopup_form:

            // tontine_visite_edit
            if (preg_match('#^/visite/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_tontine_visite_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_visite_edit')), array (  '_controller' => 'tontineBundle\\Controller\\VisiteController::editAction',));
            }
            not_tontine_visite_edit:

            // tontine_visite_edit_form
            if (preg_match('#^/visite/(?P<id>[^/]++)/edit\\-form$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tontine_visite_edit_form;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_visite_edit_form')), array (  '_controller' => 'tontineBundle\\Controller\\VisiteController::ajaxEditFormAction',));
            }
            not_tontine_visite_edit_form:

            // tontine_visite_delete
            if (preg_match('#^/visite/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('DELETE', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('DELETE', 'GET', 'HEAD'));
                    goto not_tontine_visite_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_visite_delete')), array (  '_controller' => 'tontineBundle\\Controller\\VisiteController::deleteAction',));
            }
            not_tontine_visite_delete:

            // tontine_visite_editpopup_form
            if (preg_match('#^/visite/(?P<id>[^/]++)/editpopup\\-form$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tontine_visite_editpopup_form;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tontine_visite_editpopup_form')), array (  '_controller' => 'tontineBundle\\Controller\\VisiteController::editFormAction',));
            }
            not_tontine_visite_editpopup_form:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
