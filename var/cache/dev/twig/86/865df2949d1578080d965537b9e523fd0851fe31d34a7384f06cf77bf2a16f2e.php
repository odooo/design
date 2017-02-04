<?php

/* tontineBundle:Default:dashboard.html.twig */
class __TwigTemplate_3bdfb3ddff0f0e02851c7dcffec95ee7d3e6232a307dc94f42ace4a28dead0c2 extends Twig_Template
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
        $__internal_8651ef23e703d5082fc600f6c1c9bef498d984e55bfda4614d67976c0596089f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8651ef23e703d5082fc600f6c1c9bef498d984e55bfda4614d67976c0596089f->enter($__internal_8651ef23e703d5082fc600f6c1c9bef498d984e55bfda4614d67976c0596089f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tontineBundle:Default:dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8651ef23e703d5082fc600f6c1c9bef498d984e55bfda4614d67976c0596089f->leave($__internal_8651ef23e703d5082fc600f6c1c9bef498d984e55bfda4614d67976c0596089f_prof);

    }

    // line 3
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_1ed435dd6c1b188b069a90e9e979e798076ea8aa9d4a316d936f2768fa2045db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ed435dd6c1b188b069a90e9e979e798076ea8aa9d4a316d936f2768fa2045db->enter($__internal_1ed435dd6c1b188b069a90e9e979e798076ea8aa9d4a316d936f2768fa2045db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 4
        echo "    <h1>Tableau de bord</h1>
";
        
        $__internal_1ed435dd6c1b188b069a90e9e979e798076ea8aa9d4a316d936f2768fa2045db->leave($__internal_1ed435dd6c1b188b069a90e9e979e798076ea8aa9d4a316d936f2768fa2045db_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_238e1783e2ab90f7dd23964d4322ac4fcddffda909b8666d77b0d53558e8a624 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_238e1783e2ab90f7dd23964d4322ac4fcddffda909b8666d77b0d53558e8a624->enter($__internal_238e1783e2ab90f7dd23964d4322ac4fcddffda909b8666d77b0d53558e8a624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                        <span class=\"info-box-text\">Tontines démarrées aujourd'hui</span>
                        ";
            // line 34
            echo "                        <div class=\"progress\">
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
                        <span class=\"info-box-text\">Mise collectées aujourd'hui</span>
                        <span class=\"info-box-number\">
                            nnn
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
                        <li>
                            <img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/images/avatar04.png"), "html", null, true);
        echo "\" alt=\"User Image\">
                            <a class=\"users-list-name\" href=\"#\">Alexander Pierce</a>
                            <span class=\"users-list-date\">Il y a un instant</span>
                        </li>
                        <li>
                            <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/images/avatar04.png"), "html", null, true);
        echo "\" alt=\"User Image\">
                            <a class=\"users-list-name\" href=\"#\">Alexander Pierce</a>
                            <span class=\"users-list-date\">Il y a 30min.</span>
                        </li>
                        <li>
                            <img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/images/avatar04.png"), "html", null, true);
        echo "\" alt=\"User Image\">
                            <a class=\"users-list-name\" href=\"#\">Alexander Pierce</a>
                            <span class=\"users-list-date\">Il y a 2h.</span>
                        </li>
                    </ul>
                </div>
                <div class=\"box-footer text-center\">
                    <a href=\"";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_client_new");
        echo "\" class=\"btn btn-sm btn-primary btn-flat pull-left\">Enregistrer un client</a>
                    <a href=\"";
        // line 100
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
        
        $__internal_238e1783e2ab90f7dd23964d4322ac4fcddffda909b8666d77b0d53558e8a624->leave($__internal_238e1783e2ab90f7dd23964d4322ac4fcddffda909b8666d77b0d53558e8a624_prof);

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
        return array (  179 => 100,  175 => 99,  165 => 92,  157 => 87,  149 => 82,  129 => 64,  109 => 46,  107 => 45,  104 => 44,  92 => 34,  85 => 28,  83 => 27,  80 => 26,  74 => 22,  67 => 15,  60 => 10,  58 => 9,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
                        <span class=\"info-box-text\">Tontines démarrées aujourd'hui</span>
                        {# <span class=\"info-box-number\">{{ dashboardDatas.newTontineStarted }}</span> #}
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
                        <span class=\"info-box-text\">Mise collectées aujourd'hui</span>
                        <span class=\"info-box-number\">
                            nnn
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
{% endblock %}", "tontineBundle:Default:dashboard.html.twig", "/var/www/html/tontine2/src/tontineBundle/Resources/views/Default/dashboard.html.twig");
    }
}
