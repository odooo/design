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
        $__internal_29ee81802279bbd2a18d9d80ccd5f3beb15015077c4bf366902375d1937de150 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29ee81802279bbd2a18d9d80ccd5f3beb15015077c4bf366902375d1937de150->enter($__internal_29ee81802279bbd2a18d9d80ccd5f3beb15015077c4bf366902375d1937de150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tontineBundle:Default:dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29ee81802279bbd2a18d9d80ccd5f3beb15015077c4bf366902375d1937de150->leave($__internal_29ee81802279bbd2a18d9d80ccd5f3beb15015077c4bf366902375d1937de150_prof);

    }

    // line 3
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_33003b1ee629021159f92a67a5d5cb0049b2916f88b46db12bae80cdf623156e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33003b1ee629021159f92a67a5d5cb0049b2916f88b46db12bae80cdf623156e->enter($__internal_33003b1ee629021159f92a67a5d5cb0049b2916f88b46db12bae80cdf623156e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 4
        echo "    <h1>Tableau de bord</h1>
";
        
        $__internal_33003b1ee629021159f92a67a5d5cb0049b2916f88b46db12bae80cdf623156e->leave($__internal_33003b1ee629021159f92a67a5d5cb0049b2916f88b46db12bae80cdf623156e_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_07a57013af57e60f45026729acbc394f1c410ed4c1d999415d012783771b3e91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07a57013af57e60f45026729acbc394f1c410ed4c1d999415d012783771b3e91->enter($__internal_07a57013af57e60f45026729acbc394f1c410ed4c1d999415d012783771b3e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                        <span class=\"progress-description\">
                            <a href=\"";
            // line 20
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_etat_client_enregistrer_journalier");
            echo "\"> >> Voir la liste</a>
                        </span>
                    </div>
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
                        <span class=\"info-box-text\">Tontines démarrées aujourd'hui</span>
                        <span class=\"info-box-number\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dashboardDatas"]) || array_key_exists("dashboardDatas", $context) ? $context["dashboardDatas"] : (function () { throw new Twig_Error_Runtime('Variable "dashboardDatas" does not exist.', 33, $this->getSourceContext()); })()), "newTontineStarted", array()), "html", null, true);
            echo "</span>
                        <div class=\"progress\">
                            <div class=\"progress-bar\" style=\"width: 100%\"></div>
                        </div>
                        <span class=\"progress-description\">
                            <a href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_dashboard_my_today_tontines");
            echo "\"> >> Voir la liste</a>
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
                        <span class=\"info-box-text\">Mise collectées aujourd'hui</span>
                        <span class=\"info-box-number\">
                            ";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dashboardDatas"]) || array_key_exists("dashboardDatas", $context) ? $context["dashboardDatas"] : (function () { throw new Twig_Error_Runtime('Variable "dashboardDatas" does not exist.', 52, $this->getSourceContext()); })()), "newMiseCollected", array()), "html", null, true);
            echo "
                            (";
            // line 53
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dashboardDatas"]) || array_key_exists("dashboardDatas", $context) ? $context["dashboardDatas"] : (function () { throw new Twig_Error_Runtime('Variable "dashboardDatas" does not exist.', 53, $this->getSourceContext()); })()), "newMiseAmount", array()), 0, ",", " "), "html", null, true);
            echo " Fcfa)
                        </span>
                        <div class=\"progress\">
                            <div class=\"progress-bar\" style=\"width: 100%\"></div>
                        </div>
                        <span class=\"progress-description\">
                            <a href=\"";
            // line 59
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_dashboard_my_today_collected_mises");
            echo "\"> >> Voir la liste</a>
                        </span>
                    </div>
                </div>
            </div>
        ";
        }
        // line 65
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
                        <li>
                            <img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/images/avatar04.png"), "html", null, true);
        echo "\" alt=\"User Image\">
                            <a class=\"users-list-name\" href=\"#\">Alexander Pierce</a>
                            <span class=\"users-list-date\">Il y a un instant</span>
                        </li>
                        <li>
                            <img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/images/avatar04.png"), "html", null, true);
        echo "\" alt=\"User Image\">
                            <a class=\"users-list-name\" href=\"#\">Alexander Pierce</a>
                            <span class=\"users-list-date\">Il y a 30min.</span>
                        </li>
                        <li>
                            <img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/images/avatar04.png"), "html", null, true);
        echo "\" alt=\"User Image\">
                            <a class=\"users-list-name\" href=\"#\">Alexander Pierce</a>
                            <span class=\"users-list-date\">Il y a 2h.</span>
                        </li>
                    </ul>
                </div>
                <div class=\"box-footer text-center\">
                    <a href=\"";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_client_new");
        echo "\" class=\"btn btn-sm btn-primary btn-flat pull-left\">Enregistrer un client</a>
                    <a href=\"";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_client_index");
        echo "\" class=\"btn btn-sm btn-default btn-flat pull-right\">Voir la liste des clients</a>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"box box-primary\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Dernières tontines enregistrées</h3>
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
                </div>
                <div class=\"box-footer text-center\">
                    <a href=\"#\" class=\"uppercase\">Liste de toutes les tontines</a>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_07a57013af57e60f45026729acbc394f1c410ed4c1d999415d012783771b3e91->leave($__internal_07a57013af57e60f45026729acbc394f1c410ed4c1d999415d012783771b3e91_prof);

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
        return array (  198 => 101,  194 => 100,  184 => 93,  176 => 88,  168 => 83,  148 => 65,  139 => 59,  130 => 53,  126 => 52,  118 => 46,  116 => 45,  113 => 44,  104 => 38,  96 => 33,  89 => 28,  87 => 27,  84 => 26,  75 => 20,  67 => 15,  60 => 10,  58 => 9,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
                        <span class=\"progress-description\">
                            <a href=\"{{ path('tontine_etat_client_enregistrer_journalier')}}\"> >> Voir la liste</a>
                        </span>
                    </div>
                </div>
            </div>                        
        {% endif %}

        {% if is_granted('ROLE_TONTINE_CREATE') %}
            <div class=\"col-md-4 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    <span class=\"info-box-icon bg-blue\"><i class=\"fa fa-user\"></i></span>
                    <div class=\"info-box-content\">
                        <span class=\"info-box-text\">Tontines démarrées aujourd'hui</span>
                        <span class=\"info-box-number\">{{ dashboardDatas.newTontineStarted }}</span>
                        <div class=\"progress\">
                            <div class=\"progress-bar\" style=\"width: 100%\"></div>
                        </div>
                        <span class=\"progress-description\">
                            <a href=\"{{ path('tontine_dashboard_my_today_tontines')}}\"> >> Voir la liste</a>
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
                        <span class=\"info-box-text\">Mise collectées aujourd'hui</span>
                        <span class=\"info-box-number\">
                            {{ dashboardDatas.newMiseCollected }}
                            ({{ dashboardDatas.newMiseAmount | number_format(0, ',', ' ') }} Fcfa)
                        </span>
                        <div class=\"progress\">
                            <div class=\"progress-bar\" style=\"width: 100%\"></div>
                        </div>
                        <span class=\"progress-description\">
                            <a href=\"{{ path('tontine_dashboard_my_today_collected_mises')}}\"> >> Voir la liste</a>
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
                        <li>
                            <img src=\"{{ asset('bundles/images/avatar04.png') }}\" alt=\"User Image\">
                            <a class=\"users-list-name\" href=\"#\">Alexander Pierce</a>
                            <span class=\"users-list-date\">Il y a un instant</span>
                        </li>
                        <li>
                            <img src=\"{{ asset('bundles/images/avatar04.png') }}\" alt=\"User Image\">
                            <a class=\"users-list-name\" href=\"#\">Alexander Pierce</a>
                            <span class=\"users-list-date\">Il y a 30min.</span>
                        </li>
                        <li>
                            <img src=\"{{ asset('bundles/images/avatar04.png') }}\" alt=\"User Image\">
                            <a class=\"users-list-name\" href=\"#\">Alexander Pierce</a>
                            <span class=\"users-list-date\">Il y a 2h.</span>
                        </li>
                    </ul>
                </div>
                <div class=\"box-footer text-center\">
                    <a href=\"{{ path('tontine_client_new') }}\" class=\"btn btn-sm btn-primary btn-flat pull-left\">Enregistrer un client</a>
                    <a href=\"{{ path('tontine_client_index') }}\" class=\"btn btn-sm btn-default btn-flat pull-right\">Voir la liste des clients</a>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"box box-primary\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Dernières tontines enregistrées</h3>
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
                </div>
                <div class=\"box-footer text-center\">
                    <a href=\"#\" class=\"uppercase\">Liste de toutes les tontines</a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "tontineBundle:Default:dashboard.html.twig", "/var/www/html/tontine/src/tontineBundle/Resources/views/Default/dashboard.html.twig");
    }
}
