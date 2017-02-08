<?php

/* tontineBundle:Default:dashboard.html.twig */
class __TwigTemplate_abd1e96e3e7334463ac72f40c306b760154005c347e9642aaa33c364298dff22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "tontineBundle:Default:dashboard.html.twig", 1);
        $this->blocks = array(
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ccd85e81e23b4c6b42dcd128367b62fd8ae3a2e4ff6546cc9228d1374bfd6f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ccd85e81e23b4c6b42dcd128367b62fd8ae3a2e4ff6546cc9228d1374bfd6f1->enter($__internal_6ccd85e81e23b4c6b42dcd128367b62fd8ae3a2e4ff6546cc9228d1374bfd6f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tontineBundle:Default:dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ccd85e81e23b4c6b42dcd128367b62fd8ae3a2e4ff6546cc9228d1374bfd6f1->leave($__internal_6ccd85e81e23b4c6b42dcd128367b62fd8ae3a2e4ff6546cc9228d1374bfd6f1_prof);

    }

    // line 3
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_0e0fb08be9c54b93f99926db5d02a7fd52fc33903a0b26e32b0076752d2a555e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e0fb08be9c54b93f99926db5d02a7fd52fc33903a0b26e32b0076752d2a555e->enter($__internal_0e0fb08be9c54b93f99926db5d02a7fd52fc33903a0b26e32b0076752d2a555e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 4
        echo "    <h1>Tableau de bord</h1>
";
        
        $__internal_0e0fb08be9c54b93f99926db5d02a7fd52fc33903a0b26e32b0076752d2a555e->leave($__internal_0e0fb08be9c54b93f99926db5d02a7fd52fc33903a0b26e32b0076752d2a555e_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_0ffe27a1cb7e140f10a483481779eddb5fed7a4959aaee4bcf6b818d1dd31dfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ffe27a1cb7e140f10a483481779eddb5fed7a4959aaee4bcf6b818d1dd31dfc->enter($__internal_0ffe27a1cb7e140f10a483481779eddb5fed7a4959aaee4bcf6b818d1dd31dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <div class=\"row\">
        ";
        // line 9
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CLIENT_CREATE")) {
            // line 10
            echo "            <div class=\"col-md-4 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    <span class=\"info-box-icon bg-yellow\"><i class=\"fa fa-user\"></i></span>
                    <div class=\"info-box-content\">
                        <span class=\"info-box-text\">Clients enregistrés aujourd'hui</span>
                        <span class=\"info-box-number\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dashboardDatas"]) || array_key_exists("dashboardDatas", $context) ? $context["dashboardDatas"] : (function () { throw new Twig_Error_Runtime('Variable "dashboardDatas" does not exist.', 15, $this->getSourceContext()); })()), "newClientRegistered", array()), "html", null, true);
            echo "</span>
                        <div class=\"progress\">
                            <div class=\"progress-bar\" style=\"width: 100%\"></div>
                        </div>
                        ";
            // line 22
            echo "                    </div>
                </div>
            </div>
        ";
        }
        // line 26
        echo "
        ";
        // line 27
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_COMMANDE_CREATE")) {
            // line 28
            echo "            <div class=\"col-md-4 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    <span class=\"info-box-icon bg-blue\"><i class=\"fa fa-user\"></i></span>
                    <div class=\"info-box-content\">
                        <span class=\"info-box-text\">Commandes effectuées aujourd'hui</span>
                        <span class=\"info-box-number\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dashCommandeDatas"]) || array_key_exists("dashCommandeDatas", $context) ? $context["dashCommandeDatas"] : (function () { throw new Twig_Error_Runtime('Variable "dashCommandeDatas" does not exist.', 33, $this->getSourceContext()); })()), "newCommandeRegistered", array()), "html", null, true);
            echo "</span>
                        <div class=\"progress\">
                            <div class=\"progress-bar\" style=\"width: 100%\"></div>
                        </div>
                        <span class=\"progress-description\">
                            <a href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("shop_command_index");
            echo "\"> >> Voir la liste des commandes</a>
                        </span>
                    </div>
                </div>
            </div>
        ";
        }
        // line 44
        echo "
        ";
        // line 45
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_COMMANDE_CREATE")) {
            // line 46
            echo "            <div class=\"col-md-4 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    <span class=\"info-box-icon bg-green\"><i class=\"fa fa-user\"></i></span>
                    <div class=\"info-box-content\">
                        <span class=\"info-box-text\">Ventes effectuées aujourd'hui</span>
                        <span class=\"info-box-number\">
                            ";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dashVenteDatas"]) || array_key_exists("dashVenteDatas", $context) ? $context["dashVenteDatas"] : (function () { throw new Twig_Error_Runtime('Variable "dashVenteDatas" does not exist.', 52, $this->getSourceContext()); })()), "newVenteRegistered", array()), "html", null, true);
            echo "
                        </span>
                        <div class=\"progress\">
                            <div class=\"progress-bar\" style=\"width: 100%\"></div>
                        </div>
                        ";
            // line 60
            echo "                    </div>
                </div>
            </div>
        ";
        }
        // line 64
        echo "    </div>
    <div class=\"row\">
        <div class=\"col-sm-6\">
            <div class=\"box box-primary\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Derniers clients enregistrés</h3>
                    <div class=\"box-tools pull-right\">
                        <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\">
                            <i class=\"fa fa-minus\"></i>
                        </button>
                        <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\">
                            <i class=\"fa fa-times\"></i>
                        </button>
                    </div>
                </div>
                <div class=\"box-body\">
                    <ul class=\"users-list clearfix\">
                        ";
        // line 81
        if (array_key_exists("dashClientDatas", $context)) {
            // line 82
            echo "                            ";
            if (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["dashClientDatas"] ?? null), "clientList", array(), "any", true, true) &&  !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dashClientDatas"]) || array_key_exists("dashClientDatas", $context) ? $context["dashClientDatas"] : (function () { throw new Twig_Error_Runtime('Variable "dashClientDatas" does not exist.', 82, $this->getSourceContext()); })()), "clientList", array()))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dashClientDatas"]) || array_key_exists("dashClientDatas", $context) ? $context["dashClientDatas"] : (function () { throw new Twig_Error_Runtime('Variable "dashClientDatas" does not exist.', 82, $this->getSourceContext()); })()), "clientList", array())))) {
                // line 83
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dashClientDatas"]) || array_key_exists("dashClientDatas", $context) ? $context["dashClientDatas"] : (function () { throw new Twig_Error_Runtime('Variable "dashClientDatas" does not exist.', 83, $this->getSourceContext()); })()), "clientList", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                    // line 84
                    echo "                                    <li>
                                        <img src=\"";
                    // line 85
                    if (twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "photo", array())) {
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/pieces/"), "html", null, true);
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "photo", array()), "html", null, true);
                    } else {
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/images/avatar04.png"), "html", null, true);
                    }
                    echo "\"
                                             alt=\"Photo du client\">
                                        <a class=\"users-list-name\" href=\"#\">";
                    // line 87
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "name", array()), "html", null, true);
                    echo " </a>
                                        <span class=\"users-list-date\">Depuis le ";
                    // line 88
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "createdAt", array()), "d/m/Y h:i:s"), "html", null, true);
                    echo "</span>
                                    </li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 91
                echo "                            ";
            }
            // line 92
            echo "                        ";
        }
        // line 93
        echo "                    </ul>
                </div>
                <div class=\"box-footer text-center\">
                    <a href=\"";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_client_new");
        echo "\" class=\"btn btn-sm btn-primary btn-flat pull-left\">Enregistrer un nouveau client</a>
                    <a href=\"";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_client_index");
        echo "\" class=\"btn btn-sm btn-default btn-flat pull-right\">Voir
                        la liste de tous les clients</a>
                </div>
            </div>
        </div>
        ";
        // line 141
        echo "        ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_COMMANDE_CREATE")) {
            // line 142
            echo "            <div class=\"col-md-4 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    <span class=\"info-box-icon bg-gray\"><i class=\"fa fa-user\"></i></span>
                    <div class=\"info-box-content\">
                        <span class=\"info-box-text\">Mains d'oeuvres effectuées aujourd'hui</span>
                        <span class=\"info-box-number\">
                            ";
            // line 148
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dashMainDatas"]) || array_key_exists("dashMainDatas", $context) ? $context["dashMainDatas"] : (function () { throw new Twig_Error_Runtime('Variable "dashMainDatas" does not exist.', 148, $this->getSourceContext()); })()), "newMainRegistered", array()), "html", null, true);
            echo "
                        </span>
                        <div class=\"progress\">
                            <div class=\"progress-bar\" style=\"width: 100%\"></div>
                        </div>
                        ";
            // line 156
            echo "                    </div>
                </div>
            </div>
        ";
        }
        // line 160
        echo "        ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_COMMANDE_CREATE")) {
            // line 161
            echo "            <div class=\"col-md-4 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    <span class=\"info-box-icon bg-red\"><i class=\"fa fa-user\"></i></span>
                    <div class=\"info-box-content\">
                        <span class=\"info-box-text\">Ventes de modèles effectuées aujourd'hui</span>
                        <span class=\"info-box-number\">
                            ";
            // line 167
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dashModeleDatas"]) || array_key_exists("dashModeleDatas", $context) ? $context["dashModeleDatas"] : (function () { throw new Twig_Error_Runtime('Variable "dashModeleDatas" does not exist.', 167, $this->getSourceContext()); })()), "newModeleRegistered", array()), "html", null, true);
            echo "
                        </span>
                        <div class=\"progress\">
                            <div class=\"progress-bar\" style=\"width: 100%\"></div>
                        </div>
                        ";
            // line 175
            echo "                    </div>
                </div>
            </div>
        ";
        }
        // line 179
        echo "    </div>
";
        
        $__internal_0ffe27a1cb7e140f10a483481779eddb5fed7a4959aaee4bcf6b818d1dd31dfc->leave($__internal_0ffe27a1cb7e140f10a483481779eddb5fed7a4959aaee4bcf6b818d1dd31dfc_prof);

    }

    public function getTemplateName()
    {
        return "tontineBundle:Default:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 179,  258 => 175,  250 => 167,  242 => 161,  239 => 160,  233 => 156,  225 => 148,  217 => 142,  214 => 141,  206 => 97,  202 => 96,  197 => 93,  194 => 92,  191 => 91,  182 => 88,  178 => 87,  168 => 85,  165 => 84,  160 => 83,  157 => 82,  155 => 81,  136 => 64,  130 => 60,  122 => 52,  114 => 46,  112 => 45,  109 => 44,  100 => 38,  92 => 33,  85 => 28,  83 => 27,  80 => 26,  74 => 22,  67 => 15,  60 => 10,  58 => 9,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"default/index.html.twig\" %}

{% block content_header %}
    <h1>Tableau de bord</h1>
{% endblock %}

{% block content %}
    <div class=\"row\">
        {% if is_granted('ROLE_CLIENT_CREATE') %}
            <div class=\"col-md-4 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    <span class=\"info-box-icon bg-yellow\"><i class=\"fa fa-user\"></i></span>
                    <div class=\"info-box-content\">
                        <span class=\"info-box-text\">Clients enregistrés aujourd'hui</span>
                        <span class=\"info-box-number\">{{ dashboardDatas.newClientRegistered }}</span>
                        <div class=\"progress\">
                            <div class=\"progress-bar\" style=\"width: 100%\"></div>
                        </div>
                        {# <span class=\"progress-description\">
                            <a href=\"{{ path('tontine_etat_client_enregistrer_journalier')}}\"> >> Voir la liste</a>
                        </span> #}
                    </div>
                </div>
            </div>
        {% endif %}

        {% if is_granted('ROLE_COMMANDE_CREATE') %}
            <div class=\"col-md-4 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    <span class=\"info-box-icon bg-blue\"><i class=\"fa fa-user\"></i></span>
                    <div class=\"info-box-content\">
                        <span class=\"info-box-text\">Commandes effectuées aujourd'hui</span>
                        <span class=\"info-box-number\">{{ dashCommandeDatas.newCommandeRegistered }}</span>
                        <div class=\"progress\">
                            <div class=\"progress-bar\" style=\"width: 100%\"></div>
                        </div>
                        <span class=\"progress-description\">
                            <a href=\"{{ path('shop_command_index') }}\"> >> Voir la liste des commandes</a>
                        </span>
                    </div>
                </div>
            </div>
        {% endif %}

        {% if is_granted('ROLE_COMMANDE_CREATE') %}
            <div class=\"col-md-4 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    <span class=\"info-box-icon bg-green\"><i class=\"fa fa-user\"></i></span>
                    <div class=\"info-box-content\">
                        <span class=\"info-box-text\">Ventes effectuées aujourd'hui</span>
                        <span class=\"info-box-number\">
                            {{ dashVenteDatas.newVenteRegistered }}
                        </span>
                        <div class=\"progress\">
                            <div class=\"progress-bar\" style=\"width: 100%\"></div>
                        </div>
                        {#<span class=\"progress-description\">
                            <a href=\"{{ path('shop_command_index') }}\"> >> Voir la liste</a>
                        </span>#}
                    </div>
                </div>
            </div>
        {% endif %}
    </div>
    <div class=\"row\">
        <div class=\"col-sm-6\">
            <div class=\"box box-primary\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Derniers clients enregistrés</h3>
                    <div class=\"box-tools pull-right\">
                        <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\">
                            <i class=\"fa fa-minus\"></i>
                        </button>
                        <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\">
                            <i class=\"fa fa-times\"></i>
                        </button>
                    </div>
                </div>
                <div class=\"box-body\">
                    <ul class=\"users-list clearfix\">
                        {% if dashClientDatas is defined %}
                            {% if dashClientDatas.clientList is defined and dashClientDatas.clientList is not null and dashClientDatas.clientList is not empty %}
                                {% for client in dashClientDatas.clientList %}
                                    <li>
                                        <img src=\"{% if client.photo %}{{ asset('uploads/pieces/') }}{{ client.photo }}{% else %}{{ asset('bundles/images/avatar04.png') }}{% endif %}\"
                                             alt=\"Photo du client\">
                                        <a class=\"users-list-name\" href=\"#\">{{ client.name }} </a>
                                        <span class=\"users-list-date\">Depuis le {{ client.createdAt|date('d/m/Y h:i:s') }}</span>
                                    </li>
                                {% endfor %}
                            {% endif %}
                        {% endif %}
                    </ul>
                </div>
                <div class=\"box-footer text-center\">
                    <a href=\"{{ path('tontine_client_new') }}\" class=\"btn btn-sm btn-primary btn-flat pull-left\">Enregistrer un nouveau client</a>
                    <a href=\"{{ path('tontine_client_index') }}\" class=\"btn btn-sm btn-default btn-flat pull-right\">Voir
                        la liste de tous les clients</a>
                </div>
            </div>
        </div>
        {# <div class=\"col-sm-6\">
            <div class=\"box box-primary\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Mains d'oeuvres enregistrées aujourd'hui</h3>
                    <div class=\"box-tools pull-right\">
                        <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\">
                            <i class=\"fa fa-minus\"></i>
                        </button>
                        <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\">
                            <i class=\"fa fa-times\"></i>
                        </button>
                    </div>
                </div>
                <div class=\"box-body\">
                    nnnnnnnnnnnnnnnnnnnnnnnnn
                </div>
                <div class=\"box-body\">
                    nnnnnnnnnnnnnnnnnnnnnnnnn
                </div>
                <div class=\"box-body\">
                    nnnnnnnnnnnnnnnnnnnnnnnnn
                </div>
                <div class=\"box-body\">
                    nnnnnnnnnnnnnnnnnnnnnnnnn
                </div>
                <div class=\"box-body\">
                    nnnnnnnnnnnnnnnnnnnnnnnnn
                </div>
                <div class=\"box-body\">
                    nnnnnnnnnnnnnnnnnnnnnnnnn
                </div>
                <div class=\"box-body\">
                    nnnnnnnnnnnnnnnnnnnnnnnnn
                </div>
                <div class=\"box-footer text-center\">
                    <a href=\"#\" class=\"uppercase\">Liste de toutes les mains d'oeuvres</a>
                </div>
            </div>
        </div> #}
        {% if is_granted('ROLE_COMMANDE_CREATE') %}
            <div class=\"col-md-4 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    <span class=\"info-box-icon bg-gray\"><i class=\"fa fa-user\"></i></span>
                    <div class=\"info-box-content\">
                        <span class=\"info-box-text\">Mains d'oeuvres effectuées aujourd'hui</span>
                        <span class=\"info-box-number\">
                            {{ dashMainDatas.newMainRegistered }}
                        </span>
                        <div class=\"progress\">
                            <div class=\"progress-bar\" style=\"width: 100%\"></div>
                        </div>
                        {#<span class=\"progress-description\">
                            <a href=\"{{ path('shop_command_index') }}\"> >> Voir la liste</a>
                        </span>#}
                    </div>
                </div>
            </div>
        {% endif %}
        {% if is_granted('ROLE_COMMANDE_CREATE') %}
            <div class=\"col-md-4 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    <span class=\"info-box-icon bg-red\"><i class=\"fa fa-user\"></i></span>
                    <div class=\"info-box-content\">
                        <span class=\"info-box-text\">Ventes de modèles effectuées aujourd'hui</span>
                        <span class=\"info-box-number\">
                            {{ dashModeleDatas.newModeleRegistered }}
                        </span>
                        <div class=\"progress\">
                            <div class=\"progress-bar\" style=\"width: 100%\"></div>
                        </div>
                        {#<span class=\"progress-description\">
                            <a href=\"{{ path('shop_command_index') }}\"> >> Voir la liste</a>
                        </span>#}
                    </div>
                </div>
            </div>
        {% endif %}
    </div>
{% endblock %}", "tontineBundle:Default:dashboard.html.twig", "/var/www/html/tontine/src/tontineBundle/Resources/views/Default/dashboard.html.twig");
    }
}
