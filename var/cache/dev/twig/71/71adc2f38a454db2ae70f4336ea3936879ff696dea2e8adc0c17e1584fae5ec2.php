<?php

/* tontineBundle:Client:index.html.twig */
class __TwigTemplate_306d4816a02fc8d57830d3931a2c161d13f17d1a7645411e2b4466a7fae03c57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/yop-layout.html.twig", "tontineBundle:Client:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/yop-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ff36f67cec8c3bf9af18c5cb9160ae27afceceb5e30ab0a8cdedfc4d802278c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ff36f67cec8c3bf9af18c5cb9160ae27afceceb5e30ab0a8cdedfc4d802278c->enter($__internal_1ff36f67cec8c3bf9af18c5cb9160ae27afceceb5e30ab0a8cdedfc4d802278c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tontineBundle:Client:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ff36f67cec8c3bf9af18c5cb9160ae27afceceb5e30ab0a8cdedfc4d802278c->leave($__internal_1ff36f67cec8c3bf9af18c5cb9160ae27afceceb5e30ab0a8cdedfc4d802278c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5887b383b00725fc8fe38a394f76216cebd96d52240adfa85e91324d19435c14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5887b383b00725fc8fe38a394f76216cebd96d52240adfa85e91324d19435c14->enter($__internal_5887b383b00725fc8fe38a394f76216cebd96d52240adfa85e91324d19435c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Gestion des clients";
        
        $__internal_5887b383b00725fc8fe38a394f76216cebd96d52240adfa85e91324d19435c14->leave($__internal_5887b383b00725fc8fe38a394f76216cebd96d52240adfa85e91324d19435c14_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_8f00d4f278e02dd8dc651ffea9c25160100880eb123a4959e986e6e2a49da55a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f00d4f278e02dd8dc651ffea9c25160100880eb123a4959e986e6e2a49da55a->enter($__internal_8f00d4f278e02dd8dc651ffea9c25160100880eb123a4959e986e6e2a49da55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"yop-app two-pane\">
        <div class=\"pane pane-one\" id=\"user-list\" data-title=\"Client : \">
            <div class=\"pane-header\">
                <div class=\"user-search-bar\">
                    <input type=\"text\" name=\"search\" class=\"form-control search-form\" placeholder=\"Recherchez un client...\" />                
                </div>
            </div>
            <div class=\"pane-body\">
                <div class=\"infinite-list\">
                    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new Twig_Error_Runtime('Variable "clients" does not exist.', 15, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 16
            echo "                    <div class=\"list-item\" data-search=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('phone_number_format')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "contacts", array()), "INTERNATIONAL")), "html", null, true);
            echo "\" data-href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_client_preview", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()))), "html", null, true);
            echo "\" data-name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "name", array()), "html", null, true);
            echo "\">
                        <div class=\"user-photo\">
                            <img src=\"";
            // line 18
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "photo", array())) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/pieces/"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "photo", array()), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/images/avatar04.png"), "html", null, true);
            }
            echo "\" alt=\"Photo de profil de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "name", array()), "html", null, true);
            echo "\">
                        </div>                                                  
                        <div class=\"user-description\">
                            <div class=\"user-name\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "name", array()), "html", null, true);
            echo "</div>
                            <div class=\"user-phone\">
                                <span class=\"fa fa-phone\"></span>
                                ";
            // line 24
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('phone_number_format')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "contacts", array()), "INTERNATIONAL")), "html", null, true);
            echo "
                            </div>
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                </div>
            </div>             
        </div>
        <div class=\"pane pane-two\" id=\"user-pagelet\" yop-with-toolbar>
        </div>
    </div>
";
        
        $__internal_8f00d4f278e02dd8dc651ffea9c25160100880eb123a4959e986e6e2a49da55a->leave($__internal_8f00d4f278e02dd8dc651ffea9c25160100880eb123a4959e986e6e2a49da55a_prof);

    }

    // line 37
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_4f609cf05f2f27e9db9544e9bc7d97b02978b5cdaaff784238a6fd652543c2a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f609cf05f2f27e9db9544e9bc7d97b02978b5cdaaff784238a6fd652543c2a6->enter($__internal_4f609cf05f2f27e9db9544e9bc7d97b02978b5cdaaff784238a6fd652543c2a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 38
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    ";
        // line 39
        if (array_key_exists("cli", $context)) {
            // line 40
            echo "        <script>
            \$(function(){
                Yop.Pagelet({            
                   url: \"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_client_preview", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["cli"]) || array_key_exists("cli", $context) ? $context["cli"] : (function () { throw new Twig_Error_Runtime('Variable "cli" does not exist.', 43, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
            echo "\",
                   pagelet: '#user-pagelet',
                   title: '";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["cli"]) || array_key_exists("cli", $context) ? $context["cli"] : (function () { throw new Twig_Error_Runtime('Variable "cli" does not exist.', 45, $this->getSourceContext()); })()), "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["cli"]) || array_key_exists("cli", $context) ? $context["cli"] : (function () { throw new Twig_Error_Runtime('Variable "cli" does not exist.', 45, $this->getSourceContext()); })()), "nom", array()), "html", null, true);
            echo "'
               });
            });
        </script>
    ";
        }
        
        $__internal_4f609cf05f2f27e9db9544e9bc7d97b02978b5cdaaff784238a6fd652543c2a6->leave($__internal_4f609cf05f2f27e9db9544e9bc7d97b02978b5cdaaff784238a6fd652543c2a6_prof);

    }

    public function getTemplateName()
    {
        return "tontineBundle:Client:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 45,  142 => 43,  137 => 40,  135 => 39,  130 => 38,  124 => 37,  111 => 29,  100 => 24,  94 => 21,  81 => 18,  69 => 16,  65 => 15,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'default/yop-layout.html.twig' %}

{% block title %}Gestion des clients{% endblock %}

{% block content %}
    <div class=\"yop-app two-pane\">
        <div class=\"pane pane-one\" id=\"user-list\" data-title=\"Client : \">
            <div class=\"pane-header\">
                <div class=\"user-search-bar\">
                    <input type=\"text\" name=\"search\" class=\"form-control search-form\" placeholder=\"Recherchez un client...\" />                
                </div>
            </div>
            <div class=\"pane-body\">
                <div class=\"infinite-list\">
                    {% for user in clients %}
                    <div class=\"list-item\" data-search=\"{{ user.name }} {{ user.contacts | phone_number_format('INTERNATIONAL') }}\" data-href=\"{{ path('tontine_client_preview', { 'id': user.id }) }}\" data-name=\"{{ user.name }}\">
                        <div class=\"user-photo\">
                            <img src=\"{% if user.photo %}{{ asset('uploads/pieces/') }}{{user.photo}}{% else %}{{ asset('bundles/images/avatar04.png') }}{% endif %}\" alt=\"Photo de profil de {{ user.name }}\">
                        </div>                                                  
                        <div class=\"user-description\">
                            <div class=\"user-name\">{{ user.name }}</div>
                            <div class=\"user-phone\">
                                <span class=\"fa fa-phone\"></span>
                                {{ user.contacts | phone_number_format('INTERNATIONAL') }}
                            </div>
                        </div>
                    </div>
                    {% endfor %}
                </div>
            </div>             
        </div>
        <div class=\"pane pane-two\" id=\"user-pagelet\" yop-with-toolbar>
        </div>
    </div>
{% endblock %}

{% block javascript %}
    {{ parent() }}
    {% if cli is defined %}
        <script>
            \$(function(){
                Yop.Pagelet({            
                   url: \"{{ path('tontine_client_preview', {'id':cli.id }) }}\",
                   pagelet: '#user-pagelet',
                   title: '{{cli.prenom}} {{cli.nom}}'
               });
            });
        </script>
    {% endif %}
{% endblock %}", "tontineBundle:Client:index.html.twig", "/var/www/html/tontine/src/tontineBundle/Resources/views/Client/index.html.twig");
    }
}
