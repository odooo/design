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
        $__internal_270277d27db7875cf27d99e7c294a661a215c1695d6c2623d0baf443c1090acb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_270277d27db7875cf27d99e7c294a661a215c1695d6c2623d0baf443c1090acb->enter($__internal_270277d27db7875cf27d99e7c294a661a215c1695d6c2623d0baf443c1090acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tontineBundle:Default:dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_270277d27db7875cf27d99e7c294a661a215c1695d6c2623d0baf443c1090acb->leave($__internal_270277d27db7875cf27d99e7c294a661a215c1695d6c2623d0baf443c1090acb_prof);

    }

    // line 3
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_e6972c1de5d8b4da3818c83354b83af728248edd9b840e8a424847eb935bdb35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6972c1de5d8b4da3818c83354b83af728248edd9b840e8a424847eb935bdb35->enter($__internal_e6972c1de5d8b4da3818c83354b83af728248edd9b840e8a424847eb935bdb35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 4
        echo "    <h1>Tableau de bord</h1>
";
        
        $__internal_e6972c1de5d8b4da3818c83354b83af728248edd9b840e8a424847eb935bdb35->leave($__internal_e6972c1de5d8b4da3818c83354b83af728248edd9b840e8a424847eb935bdb35_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_00f75fffd32e4498b19ea6696a80a57aca6c6f59b802fb4bb7bed98d206539f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00f75fffd32e4498b19ea6696a80a57aca6c6f59b802fb4bb7bed98d206539f5->enter($__internal_00f75fffd32e4498b19ea6696a80a57aca6c6f59b802fb4bb7bed98d206539f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_TONTINE_CREATE")) {
            // line 28
            echo "            <div class=\"col-md-4 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    <span class=\"info-box-icon bg-blue\"><i class=\"fa fa-user\"></i></span>
                    <div class=\"info-box-content\">
                        <span class=\"info-box-text\">Commandes effectuées aujourd'hui</span>
                        <span class=\"info-box-number\">0</span> 
                        <div class=\"progress\">
                            <div class=\"progress-bar\" style=\"width: 100%\"></div>
                        </div>
                        <span class=\"progress-description\">
                            <a href=\"\"> >> Voir la liste</a>
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
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_TONTINE_ADD_MISE")) {
            // line 46
            echo "            <div class=\"col-md-4 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    <span class=\"info-box-icon bg-yellow\"><i class=\"fa fa-user\"></i></span>
                    <div class=\"info-box-content\">
                        <span class=\"info-box-text\">Ventes effectuées aujourd'hui</span>
                        <span class=\"info-box-number\">
                            0
                        </span>
                        <div class=\"progress\">
                            <div class=\"progress-bar\" style=\"width: 100%\"></div>
                        </div>
                        <span class=\"progress-description\">
                            <a href=\"\"> >> Voir la liste</a>
                        </span>
                    </div>
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dashClientDatas"]) || array_key_exists("dashClientDatas", $context) ? $context["dashClientDatas"] : (function () { throw new Twig_Error_Runtime('Variable "dashClientDatas" does not exist.', 81, $this->getSourceContext()); })()), "clientList", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 82
            echo "                        <li>
                            <img src=\"";
            // line 83
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "photo", array())) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/pieces/"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "photo", array()), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/images/avatar04.png"), "html", null, true);
            }
            echo "\" alt=\"Photo du client\">
                            <a class=\"users-list-name\" href=\"#\">";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "name", array()), "html", null, true);
            echo " </a>
                            <span class=\"users-list-date\">Depuis le ";
            // line 85
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "createdAt", array()), "d/m/Y h:i:s"), "html", null, true);
            echo "</span>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                    </ul>
                </div>
                <div class=\"box-footer text-center\">
                    <a href=\"";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_client_new");
        echo "\" class=\"btn btn-sm btn-primary btn-flat pull-left\">Enregistrer un client</a>
                    <a href=\"";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_client_index");
        echo "\" class=\"btn btn-sm btn-default btn-flat pull-right\">Voir la liste de tous les clients</a>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6\">
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
        </div>
    </div>
";
        
        $__internal_00f75fffd32e4498b19ea6696a80a57aca6c6f59b802fb4bb7bed98d206539f5->leave($__internal_00f75fffd32e4498b19ea6696a80a57aca6c6f59b802fb4bb7bed98d206539f5_prof);

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
        return array (  185 => 92,  181 => 91,  176 => 88,  167 => 85,  163 => 84,  154 => 83,  151 => 82,  147 => 81,  128 => 64,  108 => 46,  106 => 45,  103 => 44,  85 => 28,  83 => 27,  80 => 26,  74 => 22,  67 => 15,  60 => 10,  58 => 9,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
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

        {% if is_granted('ROLE_TONTINE_CREATE') %}
            <div class=\"col-md-4 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    <span class=\"info-box-icon bg-blue\"><i class=\"fa fa-user\"></i></span>
                    <div class=\"info-box-content\">
                        <span class=\"info-box-text\">Commandes effectuées aujourd'hui</span>
                        <span class=\"info-box-number\">0</span> 
                        <div class=\"progress\">
                            <div class=\"progress-bar\" style=\"width: 100%\"></div>
                        </div>
                        <span class=\"progress-description\">
                            <a href=\"\"> >> Voir la liste</a>
                        </span>
                    </div>
                </div>
            </div>
        {% endif %}

        {% if is_granted('ROLE_TONTINE_ADD_MISE') %}
            <div class=\"col-md-4 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    <span class=\"info-box-icon bg-yellow\"><i class=\"fa fa-user\"></i></span>
                    <div class=\"info-box-content\">
                        <span class=\"info-box-text\">Ventes effectuées aujourd'hui</span>
                        <span class=\"info-box-number\">
                            0
                        </span>
                        <div class=\"progress\">
                            <div class=\"progress-bar\" style=\"width: 100%\"></div>
                        </div>
                        <span class=\"progress-description\">
                            <a href=\"\"> >> Voir la liste</a>
                        </span>
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
                    {% for client in dashClientDatas.clientList %}
                        <li>
                            <img src=\"{% if client.photo %}{{ asset('uploads/pieces/') }}{{client.photo}}{% else %}{{ asset('bundles/images/avatar04.png') }}{% endif %}\" alt=\"Photo du client\">
                            <a class=\"users-list-name\" href=\"#\">{{ client.name }} </a>
                            <span class=\"users-list-date\">Depuis le {{ client.createdAt|date('d/m/Y h:i:s') }}</span>
                        </li>
                    {% endfor %}
                    </ul>
                </div>
                <div class=\"box-footer text-center\">
                    <a href=\"{{ path('tontine_client_new') }}\" class=\"btn btn-sm btn-primary btn-flat pull-left\">Enregistrer un client</a>
                    <a href=\"{{ path('tontine_client_index') }}\" class=\"btn btn-sm btn-default btn-flat pull-right\">Voir la liste de tous les clients</a>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6\">
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
        </div>
    </div>
{% endblock %}", "tontineBundle:Default:dashboard.html.twig", "/var/www/html/tontine/src/tontineBundle/Resources/views/Default/dashboard.html.twig");
    }
}
