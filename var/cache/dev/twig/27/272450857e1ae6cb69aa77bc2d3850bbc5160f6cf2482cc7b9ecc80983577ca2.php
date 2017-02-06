<?php

/* @tontine/Default/sidebar.html.twig */
class __TwigTemplate_a3042f903645d1aad4def66114d6fa5e14c8c9f08d57aa206b68fe05e5447400 extends Twig_Template
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
        $__internal_a81d7e732f79feaceb32f7946e4751be95f3d6e268f5142b76eb9f1543a26d4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a81d7e732f79feaceb32f7946e4751be95f3d6e268f5142b76eb9f1543a26d4d->enter($__internal_a81d7e732f79feaceb32f7946e4751be95f3d6e268f5142b76eb9f1543a26d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@tontine/Default/sidebar.html.twig"));

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
        // line 20
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CLIENT_VIEW")) {
            // line 21
            echo "        <li class=\"treeview\">
            <a href=\"#\">
                <i class=\"fa fa-users\"></i>
                <span>Client</span>
                <span class=\"pull-right-container\">
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </span>
            </a>
            <ul class=\"treeview-menu\">
                ";
            // line 30
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CLIENT_VIEW")) {
                echo "                
                    <li><a href=\"";
                // line 31
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_client_index");
                echo "\"><i class=\"fa fa-angle-right\"></i> Liste des client</a></li>
                ";
            }
            // line 32
            echo "    
                ";
            // line 33
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CLIENT_CREATE")) {
                // line 34
                echo "                    <li><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_client_new");
                echo "\"><i class=\"fa fa-angle-right\"></i> Enregistrer un client</a></li>
                ";
            }
            // line 36
            echo "            </ul>
        </li>
    ";
        }
        // line 39
        echo "
    ";
        // line 40
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_AGENT_VIEW") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_AGENT_CREATE"))) {
            // line 41
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
            // line 50
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_AGENT_VIEW")) {
                echo "                
                    <li><a href=\"";
                // line 51
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_agent");
                echo "\"><i class=\"fa fa-angle-right\"></i> Liste des agents</a></li>
                ";
            }
            // line 52
            echo "    
                ";
            // line 53
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_AGENT_CREATE")) {
                // line 54
                echo "                    <li><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_agent_new");
                echo "\"><i class=\"fa fa-angle-right\"></i> Enregistrer un agent</a></li>
                ";
            }
            // line 56
            echo "            </ul>
        </li>
    ";
        }
        // line 59
        echo "
    ";
        // line 60
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_AGENT_VIEW") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_AGENT_CREATE"))) {
            // line 61
            echo "        <li class=\"treeview\">
            <a href=\"#\">
                <i class=\"fa fa-users\"></i>
                <span>Tissus</span>
                <span class=\"pull-right-container\">
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </span>
            </a>
            <ul class=\"treeview-menu\">
                ";
            // line 70
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_AGENT_VIEW")) {
                echo "                
                    <li><a href=\"";
                // line 71
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_pagne");
                echo "\"><i class=\"fa fa-angle-right\"></i> Liste des tissus</a></li>
                ";
            }
            // line 72
            echo "    
                ";
            // line 73
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_AGENT_CREATE")) {
                // line 74
                echo "                    <li><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_pagne_new");
                echo "\"><i class=\"fa fa-angle-right\"></i> Enregistrer un tissu</a></li>
                ";
            }
            // line 76
            echo "            </ul>
        </li>
    ";
        }
        // line 79
        echo "
    ";
        // line 80
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CATEGORIE_VIEW") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CATEGORIE_CREATE"))) {
            // line 81
            echo "        <li class=\"treeview\">
            <a href=\"#\">
                <i class=\"fa fa-users\"></i>
                <span>Catégorie de Tissus</span>
                <span class=\"pull-right-container\">
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </span>
            </a>
            <ul class=\"treeview-menu\">
                ";
            // line 90
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CATEGORIE_VIEW")) {
                echo "                
                    <li><a href=\"";
                // line 91
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_categorie_index");
                echo "\"><i class=\"fa fa-angle-right\"></i> Liste des catégories</a></li>
                ";
            }
            // line 92
            echo "    
                ";
            // line 93
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CATEGORIE_CREATE")) {
                // line 94
                echo "                    <li><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_categorie_new");
                echo "\"><i class=\"fa fa-angle-right\"></i> Enregistrer une catégorie</a></li>
                ";
            }
            // line 96
            echo "            </ul>
        </li>
    ";
        }
        // line 99
        echo "
    ";
        // line 100
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_AGENCY_VIEW") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_AGENCY_CREATE"))) {
            // line 101
            echo "        <li class=\"treeview\">
            <a href=\"#\">
                <i class=\"fa fa-institution\"></i>
                <span>Agences</span>
                <span class=\"pull-right-container\">
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </span>
            </a>
            <ul class=\"treeview-menu\">
                ";
            // line 110
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_AGENCY_VIEW")) {
                echo "                
                    <li><a href=\"";
                // line 111
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_agencies_index");
                echo "\"><i class=\"fa fa-angle-right\"></i> Liste des agences</a></li>
                ";
            }
            // line 112
            echo "    
                ";
            // line 113
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_AGENCY_CREATE")) {
                // line 114
                echo "                    <li><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_agencies_create");
                echo "\"><i class=\"fa fa-angle-right\"></i> Ajouter une agence</a></li>
                ";
            }
            // line 116
            echo "            </ul>
        </li>
    ";
        }
        // line 119
        echo "    
    ";
        // line 120
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_GROUP_VIEW") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SETTING_EDIT"))) {
            // line 121
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
            // line 130
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_GROUP_VIEW")) {
                // line 131
                echo "                    <li><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_agents_groups_index");
                echo "\"><i class=\"fa fa-angle-right\"></i> Liste des profils d'agent</a></li>
                ";
            }
            // line 133
            echo "                ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SETTING_EDIT")) {
                // line 134
                echo "                    <li><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_parameters_edit");
                echo "\"><i class=\"fa fa-angle-right\"></i> Modifier les paramètres</a></li>
                ";
            }
            // line 136
            echo "            </ul>
        </li>
    ";
        }
        // line 138
        echo "        

    ";
        // line 144
        echo "   
</ul>";
        
        $__internal_a81d7e732f79feaceb32f7946e4751be95f3d6e268f5142b76eb9f1543a26d4d->leave($__internal_a81d7e732f79feaceb32f7946e4751be95f3d6e268f5142b76eb9f1543a26d4d_prof);

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
        return array (  309 => 144,  305 => 138,  300 => 136,  294 => 134,  291 => 133,  285 => 131,  283 => 130,  272 => 121,  270 => 120,  267 => 119,  262 => 116,  256 => 114,  254 => 113,  251 => 112,  246 => 111,  242 => 110,  231 => 101,  229 => 100,  226 => 99,  221 => 96,  215 => 94,  213 => 93,  210 => 92,  205 => 91,  201 => 90,  190 => 81,  188 => 80,  185 => 79,  180 => 76,  174 => 74,  172 => 73,  169 => 72,  164 => 71,  160 => 70,  149 => 61,  147 => 60,  144 => 59,  139 => 56,  133 => 54,  131 => 53,  128 => 52,  123 => 51,  119 => 50,  108 => 41,  106 => 40,  103 => 39,  98 => 36,  92 => 34,  90 => 33,  87 => 32,  82 => 31,  78 => 30,  67 => 21,  65 => 20,  59 => 17,  50 => 11,  46 => 10,  42 => 8,  37 => 6,  34 => 5,  28 => 4,  26 => 3,  22 => 1,);
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
        
    {% if is_granted('ROLE_CLIENT_VIEW') %}
        <li class=\"treeview\">
            <a href=\"#\">
                <i class=\"fa fa-users\"></i>
                <span>Client</span>
                <span class=\"pull-right-container\">
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </span>
            </a>
            <ul class=\"treeview-menu\">
                {% if is_granted('ROLE_CLIENT_VIEW') %}                
                    <li><a href=\"{{ path('tontine_client_index') }}\"><i class=\"fa fa-angle-right\"></i> Liste des client</a></li>
                {% endif %}    
                {% if is_granted('ROLE_CLIENT_CREATE') %}
                    <li><a href=\"{{ path('tontine_client_new') }}\"><i class=\"fa fa-angle-right\"></i> Enregistrer un client</a></li>
                {% endif %}
            </ul>
        </li>
    {% endif %}

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

    {% if is_granted('ROLE_AGENT_VIEW') or is_granted('ROLE_AGENT_CREATE') %}
        <li class=\"treeview\">
            <a href=\"#\">
                <i class=\"fa fa-users\"></i>
                <span>Tissus</span>
                <span class=\"pull-right-container\">
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </span>
            </a>
            <ul class=\"treeview-menu\">
                {% if is_granted('ROLE_AGENT_VIEW') %}                
                    <li><a href=\"{{ path('tontine_pagne') }}\"><i class=\"fa fa-angle-right\"></i> Liste des tissus</a></li>
                {% endif %}    
                {% if is_granted('ROLE_AGENT_CREATE') %}
                    <li><a href=\"{{ path('tontine_pagne_new') }}\"><i class=\"fa fa-angle-right\"></i> Enregistrer un tissu</a></li>
                {% endif %}
            </ul>
        </li>
    {% endif %}

    {% if is_granted('ROLE_CATEGORIE_VIEW') or is_granted('ROLE_CATEGORIE_CREATE') %}
        <li class=\"treeview\">
            <a href=\"#\">
                <i class=\"fa fa-users\"></i>
                <span>Catégorie de Tissus</span>
                <span class=\"pull-right-container\">
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </span>
            </a>
            <ul class=\"treeview-menu\">
                {% if is_granted('ROLE_CATEGORIE_VIEW') %}                
                    <li><a href=\"{{ path('tontine_categorie_index') }}\"><i class=\"fa fa-angle-right\"></i> Liste des catégories</a></li>
                {% endif %}    
                {% if is_granted('ROLE_CATEGORIE_CREATE') %}
                    <li><a href=\"{{ path('tontine_categorie_new') }}\"><i class=\"fa fa-angle-right\"></i> Enregistrer une catégorie</a></li>
                {% endif %}
            </ul>
        </li>
    {% endif %}

    {% if is_granted('ROLE_AGENCY_VIEW') or is_granted('ROLE_AGENCY_CREATE') %}
        <li class=\"treeview\">
            <a href=\"#\">
                <i class=\"fa fa-institution\"></i>
                <span>Agences</span>
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
</ul>", "@tontine/Default/sidebar.html.twig", "/var/www/html/tontine/src/tontineBundle/Resources/views/Default/sidebar.html.twig");
    }
}
