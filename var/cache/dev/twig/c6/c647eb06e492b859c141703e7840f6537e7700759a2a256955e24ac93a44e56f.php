<?php

/* @tontine/Default/sidebar.html.twig */
class __TwigTemplate_aec742ee13803cfdee5ad05b06fd17a03ce13667d3d5137e0f41d6510056de21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_64b0c64dce13e7da0293eb5331014ef4bf8b45a7199f23a7ebf4a17bc3278752 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64b0c64dce13e7da0293eb5331014ef4bf8b45a7199f23a7ebf4a17bc3278752->enter($__internal_64b0c64dce13e7da0293eb5331014ef4bf8b45a7199f23a7ebf4a17bc3278752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@tontine/Default/sidebar.html.twig"));

        // line 1
        echo "<div class=\"user-panel\">
    <div class=\"pull-left image\">
        ";
        // line 3
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->getSourceContext()); })()), "user", array()), "photo", array())) {
            // line 4
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_join_filter(array(0 => "uploads/pieces", 1 => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 4, $this->getSourceContext()); })()), "user", array()), "photo", array())), "/")), "html", null, true);
            echo "\" widht=\"48\" height=\"48\" class=\"img-circle\" alt=\"User Image\">
        ";
        } else {
            // line 5
            echo "        
            <img src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/images/avatar04.png"), "html", null, true);
            echo "\" widht=\"48\" class=\"img-circle\" alt=\"User Image\">
        ";
        }
        // line 8
        echo "    </div>
    <div class=\"pull-left info\">
        <p>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->getSourceContext()); })()), "user", array()), "name", array()), "html", null, true);
        echo "</p>
        ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 11, $this->getSourceContext()); })()), "user", array()), "profilName", array()), "html", null, true);
        echo "
    </div>
</div>

<ul class=\"sidebar-menu\">
    <li>
        <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_dashboard");
        echo "\"><i class=\"fa fa-dashboard\"></i> <span>Tableau de bord</span></a>
    </li>

    ";
        // line 25
        echo "
    ";
        // line 31
        echo "        
    ";
        // line 32
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CLIENT_VIEW")) {
            // line 33
            echo "        <li>
            <a href=\"";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_client_index");
            echo "\">
                <i class=\"fa fa-user\"></i> 
                <span>Clients</span>
            </a>
        </li>
    ";
        }
        // line 40
        echo "
    ";
        // line 41
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_TONTINE_VALIDATE_MISE")) {
            // line 42
            echo "        <li>
            <a href=\"";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_caisse_home");
            echo "\">
                <i class=\"fa fa-money\"></i> 
                <span>Caisse Mises</span>
            </a>
        </li>
    ";
        }
        // line 49
        echo "
    ";
        // line 58
        echo "
    ";
        // line 59
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_AGENT_VIEW") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_AGENT_CREATE"))) {
            // line 60
            echo "        <li class=\"treeview\">
            <a href=\"#\">
                <i class=\"fa fa-users\"></i>
                <span>Agents</span>
                <span class=\"pull-right-container\">
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </span>
            </a>
            <ul class=\"treeview-menu\">
                ";
            // line 69
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_AGENT_VIEW")) {
                echo "                
                    <li><a href=\"";
                // line 70
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_agent");
                echo "\"><i class=\"fa fa-angle-right\"></i> Liste des agents</a></li>
                ";
            }
            // line 71
            echo "    
                ";
            // line 72
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_AGENT_CREATE")) {
                // line 73
                echo "                    <li><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_agent_new");
                echo "\"><i class=\"fa fa-angle-right\"></i> Enregistrer un agent</a></li>
                ";
            }
            // line 75
            echo "            </ul>
        </li>
    ";
        }
        // line 78
        echo "
    ";
        // line 79
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_AGENCY_VIEW") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_AGENCY_CREATE"))) {
            // line 80
            echo "        <li class=\"treeview\">
            <a href=\"#\">
                <i class=\"fa fa-institution\"></i>
                <span>Agences d'APHEDD</span>
                <span class=\"pull-right-container\">
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </span>
            </a>
            <ul class=\"treeview-menu\">
                ";
            // line 89
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_AGENCY_VIEW")) {
                echo "                
                    <li><a href=\"";
                // line 90
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_agencies_index");
                echo "\"><i class=\"fa fa-angle-right\"></i> Liste des agences</a></li>
                ";
            }
            // line 91
            echo "    
                ";
            // line 92
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_AGENCY_CREATE")) {
                // line 93
                echo "                    <li><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_agencies_create");
                echo "\"><i class=\"fa fa-angle-right\"></i> Ajouter une agence</a></li>
                ";
            }
            // line 95
            echo "            </ul>
        </li>
    ";
        }
        // line 98
        echo "
    ";
        // line 99
        $this->loadTemplate("tontineBundle:Default:sidebar/etat.html.twig", "@tontine/Default/sidebar.html.twig", 99)->display($context);
        // line 100
        echo "    
    ";
        // line 101
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_GROUP_VIEW") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SETTING_EDIT"))) {
            // line 102
            echo "        <li class=\"treeview\">
            <a href=\"#\">
                <i class=\"fa fa-cogs\"></i>
                <span>Configuration</span>
                <span class=\"pull-right-container\">
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </span>
            </a>
            <ul class=\"treeview-menu\">
                ";
            // line 111
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_GROUP_VIEW")) {
                // line 112
                echo "                    <li><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_agents_groups_index");
                echo "\"><i class=\"fa fa-angle-right\"></i> Liste des profils d'agent</a></li>
                ";
            }
            // line 114
            echo "                ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SETTING_EDIT")) {
                // line 115
                echo "                    <li><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_parameters_edit");
                echo "\"><i class=\"fa fa-angle-right\"></i> Modifier les paramètres</a></li>
                ";
            }
            // line 117
            echo "            </ul>
        </li>
    ";
        }
        // line 119
        echo "        

    ";
        // line 125
        echo "   
</ul>";
        
        $__internal_64b0c64dce13e7da0293eb5331014ef4bf8b45a7199f23a7ebf4a17bc3278752->leave($__internal_64b0c64dce13e7da0293eb5331014ef4bf8b45a7199f23a7ebf4a17bc3278752_prof);

    }

    public function getTemplateName()
    {
        return "@tontine/Default/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 125,  230 => 119,  225 => 117,  219 => 115,  216 => 114,  210 => 112,  208 => 111,  197 => 102,  195 => 101,  192 => 100,  190 => 99,  187 => 98,  182 => 95,  176 => 93,  174 => 92,  171 => 91,  166 => 90,  162 => 89,  151 => 80,  149 => 79,  146 => 78,  141 => 75,  135 => 73,  133 => 72,  130 => 71,  125 => 70,  121 => 69,  110 => 60,  108 => 59,  105 => 58,  102 => 49,  93 => 43,  90 => 42,  88 => 41,  85 => 40,  76 => 34,  73 => 33,  71 => 32,  68 => 31,  65 => 25,  59 => 17,  50 => 11,  46 => 10,  42 => 8,  37 => 6,  34 => 5,  28 => 4,  26 => 3,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"user-panel\">
    <div class=\"pull-left image\">
        {% if app.user.photo %}
            <img src=\"{{ asset((['uploads/pieces', app.user.photo] | join('/'))) }}\" widht=\"48\" height=\"48\" class=\"img-circle\" alt=\"User Image\">
        {% else %}        
            <img src=\"{{ asset('bundles/images/avatar04.png') }}\" widht=\"48\" class=\"img-circle\" alt=\"User Image\">
        {% endif %}
    </div>
    <div class=\"pull-left info\">
        <p>{{ app.user.name }}</p>
        {{ app.user.profilName }}
    </div>
</div>

<ul class=\"sidebar-menu\">
    <li>
        <a href=\"{{ path('tontine_dashboard') }}\"><i class=\"fa fa-dashboard\"></i> <span>Tableau de bord</span></a>
    </li>

    {# {% if is_granted('ROLE_BIEN_SEARCH') %}
        <li>
            <a href=\"{{ path('tontine_tontinecriteria_search') }}\"><i class=\"fa fa-search\"></i> <span>Rechercher un bien</span></a>
        </li>
    {% endif %} #}

    {# {% if is_granted('ROLE_BIEN_CREATE_OPTIONS') %}
        <li>
            <a href=\"{{ path('tontine_bien_fiche_preview') }}\"><i class=\"fa fa-check-square-o\"></i> <span>Feuille de Choix </span></a>
        </li>
    {% endif %} #}
        
    {% if is_granted('ROLE_CLIENT_VIEW') %}
        <li>
            <a href=\"{{ path('tontine_client_index') }}\">
                <i class=\"fa fa-user\"></i> 
                <span>Clients</span>
            </a>
        </li>
    {% endif %}

    {% if is_granted('ROLE_TONTINE_VALIDATE_MISE') %}
        <li>
            <a href=\"{{ path('tontine_caisse_home') }}\">
                <i class=\"fa fa-money\"></i> 
                <span>Caisse Mises</span>
            </a>
        </li>
    {% endif %}

    {# {% if is_granted('ROLE_TRANSFER_CREATE') %}
        <li>
            <a href=\"{{ path('tontine_transfert_fonds_new') }}\">
                <i class=\"fa fa-plus\"></i> 
                <span>Transfert de fonds</span>
            </a>
        </li>
    {% endif %} #}

    {% if is_granted('ROLE_AGENT_VIEW') or is_granted('ROLE_AGENT_CREATE') %}
        <li class=\"treeview\">
            <a href=\"#\">
                <i class=\"fa fa-users\"></i>
                <span>Agents</span>
                <span class=\"pull-right-container\">
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </span>
            </a>
            <ul class=\"treeview-menu\">
                {% if is_granted('ROLE_AGENT_VIEW') %}                
                    <li><a href=\"{{ path('tontine_agent') }}\"><i class=\"fa fa-angle-right\"></i> Liste des agents</a></li>
                {% endif %}    
                {% if is_granted('ROLE_AGENT_CREATE') %}
                    <li><a href=\"{{ path('tontine_agent_new') }}\"><i class=\"fa fa-angle-right\"></i> Enregistrer un agent</a></li>
                {% endif %}
            </ul>
        </li>
    {% endif %}

    {% if is_granted('ROLE_AGENCY_VIEW') or is_granted('ROLE_AGENCY_CREATE') %}
        <li class=\"treeview\">
            <a href=\"#\">
                <i class=\"fa fa-institution\"></i>
                <span>Agences d'APHEDD</span>
                <span class=\"pull-right-container\">
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </span>
            </a>
            <ul class=\"treeview-menu\">
                {% if is_granted('ROLE_AGENCY_VIEW') %}                
                    <li><a href=\"{{ path('tontine_agencies_index') }}\"><i class=\"fa fa-angle-right\"></i> Liste des agences</a></li>
                {% endif %}    
                {% if is_granted('ROLE_AGENCY_CREATE') %}
                    <li><a href=\"{{ path('tontine_agencies_create') }}\"><i class=\"fa fa-angle-right\"></i> Ajouter une agence</a></li>
                {% endif %}
            </ul>
        </li>
    {% endif %}

    {% include 'tontineBundle:Default:sidebar/etat.html.twig' %}
    
    {% if is_granted('ROLE_GROUP_VIEW') or is_granted('ROLE_SETTING_EDIT') %}
        <li class=\"treeview\">
            <a href=\"#\">
                <i class=\"fa fa-cogs\"></i>
                <span>Configuration</span>
                <span class=\"pull-right-container\">
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </span>
            </a>
            <ul class=\"treeview-menu\">
                {% if is_granted('ROLE_GROUP_VIEW') %}
                    <li><a href=\"{{ path('tontine_agents_groups_index') }}\"><i class=\"fa fa-angle-right\"></i> Liste des profils d'agent</a></li>
                {% endif %}
                {% if is_granted('ROLE_SETTING_EDIT') %}
                    <li><a href=\"{{ path('tontine_parameters_edit') }}\"><i class=\"fa fa-angle-right\"></i> Modifier les paramètres</a></li>
                {% endif %}
            </ul>
        </li>
    {% endif %}        

    {#{% include 'tontineBundle:Default:sidebar/agents.html.twig' %}
    {% include 'tontineBundle:Default:sidebar/tontine.html.twig' %}
    {% include 'tontineBundle:Default:sidebar/client.html.twig' %}
    {% include 'tontineBundle:Default:sidebar/etat.html.twig' %}    
    {% include 'tontineBundle:Default:sidebar/transfert.html.twig' %}#}   
</ul>", "@tontine/Default/sidebar.html.twig", "/var/www/html/tontine2/src/tontineBundle/Resources/views/Default/sidebar.html.twig");
    }
}