<?php

/* tontineBundle:Agent:index.html.twig */
class __TwigTemplate_6215cd2a215a0182ffd78c67fdfe33ba70c25c31ea6f1fec4ae8126ea0a5285d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/yop-layout.html.twig", "tontineBundle:Agent:index.html.twig", 1);
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
        $__internal_ff0353240b18ce02466ccf3e96878faf921c610e04d1343b6eacbae05dab5df7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff0353240b18ce02466ccf3e96878faf921c610e04d1343b6eacbae05dab5df7->enter($__internal_ff0353240b18ce02466ccf3e96878faf921c610e04d1343b6eacbae05dab5df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tontineBundle:Agent:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff0353240b18ce02466ccf3e96878faf921c610e04d1343b6eacbae05dab5df7->leave($__internal_ff0353240b18ce02466ccf3e96878faf921c610e04d1343b6eacbae05dab5df7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d8b39765c81c76ad9af392ea82472b96cfbdf09200612283ef0d78dca0bdc92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d8b39765c81c76ad9af392ea82472b96cfbdf09200612283ef0d78dca0bdc92->enter($__internal_3d8b39765c81c76ad9af392ea82472b96cfbdf09200612283ef0d78dca0bdc92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Gestion des Agents";
        
        $__internal_3d8b39765c81c76ad9af392ea82472b96cfbdf09200612283ef0d78dca0bdc92->leave($__internal_3d8b39765c81c76ad9af392ea82472b96cfbdf09200612283ef0d78dca0bdc92_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_445c45209e6fb6afa8292696e02f060b8c16f7a94ea718555c0aa0c0c4168bb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_445c45209e6fb6afa8292696e02f060b8c16f7a94ea718555c0aa0c0c4168bb6->enter($__internal_445c45209e6fb6afa8292696e02f060b8c16f7a94ea718555c0aa0c0c4168bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"yop-app two-pane\">
        <div class=\"pane pane-one\" id=\"user-list\" data-title=\"Agent: \">
            <div class=\"pane-header\">
                <div class=\"user-search-bar\">
                    <input type=\"text\" name=\"search\" class=\"form-control search-form\" placeholder=\"Recherchez un agent...\" />                
                </div>
            </div>
            <div class=\"pane-body\">
                <div class=\"infinite-list\">
                    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["agents"]) || array_key_exists("agents", $context) ? $context["agents"] : (function () { throw new Twig_Error_Runtime('Variable "agents" does not exist.', 15, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["agent"]) {
            // line 16
            echo "                    <div class=\"list-item\" data-search=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["agent"], "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["agent"], "contact", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["agent"], "profilName", array()), "html", null, true);
            echo "\" data-href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_agent_preview", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["agent"], "id", array()))), "html", null, true);
            echo "\" data-name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["agent"], "name", array()), "html", null, true);
            echo "\">
                        <div class=\"user-photo\">
                            <img src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/pieces/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["agent"], "photo", array()), "html", null, true);
            echo "\" alt=\"Photo de profil de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["agent"], "name", array()), "html", null, true);
            echo "\">
                        </div>                                                  
                        <div class=\"user-description\">
                            <div class=\"user-name\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["agent"], "name", array()), "html", null, true);
            echo "</div>
                            <div class=\"user-phone\">
                                <span class=\"fa fa-phone\"></span>
                                ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["agent"], "contact", array()), "html", null, true);
            echo "
                            </div>
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                </div>
            </div>             
        </div>
        <div class=\"pane pane-two\" id=\"user-pagelet\" yop-with-toolbar>
        </div>
    </div>
";
        
        $__internal_445c45209e6fb6afa8292696e02f060b8c16f7a94ea718555c0aa0c0c4168bb6->leave($__internal_445c45209e6fb6afa8292696e02f060b8c16f7a94ea718555c0aa0c0c4168bb6_prof);

    }

    // line 37
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_285173a18adf6ebfdd122d70a23d902fa35903226938871f6283f5697c6f1b40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_285173a18adf6ebfdd122d70a23d902fa35903226938871f6283f5697c6f1b40->enter($__internal_285173a18adf6ebfdd122d70a23d902fa35903226938871f6283f5697c6f1b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 38
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    ";
        // line 39
        if (array_key_exists("agt", $context)) {
            // line 40
            echo "        <script>
            \$(function(){
                Yop.Pagelet({            
                   url: \"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_agent_preview", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["agt"]) || array_key_exists("agt", $context) ? $context["agt"] : (function () { throw new Twig_Error_Runtime('Variable "agt" does not exist.', 43, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
            echo "\",
                   pagelet: '#user-pagelet',
                   title: '";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["agt"]) || array_key_exists("agt", $context) ? $context["agt"] : (function () { throw new Twig_Error_Runtime('Variable "agt" does not exist.', 45, $this->getSourceContext()); })()), "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["agt"]) || array_key_exists("agt", $context) ? $context["agt"] : (function () { throw new Twig_Error_Runtime('Variable "agt" does not exist.', 45, $this->getSourceContext()); })()), "nom", array()), "html", null, true);
            echo "'
               });
            });
        </script>
    ";
        }
        
        $__internal_285173a18adf6ebfdd122d70a23d902fa35903226938871f6283f5697c6f1b40->leave($__internal_285173a18adf6ebfdd122d70a23d902fa35903226938871f6283f5697c6f1b40_prof);

    }

    public function getTemplateName()
    {
        return "tontineBundle:Agent:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 45,  140 => 43,  135 => 40,  133 => 39,  128 => 38,  122 => 37,  109 => 29,  98 => 24,  92 => 21,  83 => 18,  69 => 16,  65 => 15,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'default/yop-layout.html.twig' %}

{% block title %}Gestion des Agents{% endblock %}

{% block content %}
    <div class=\"yop-app two-pane\">
        <div class=\"pane pane-one\" id=\"user-list\" data-title=\"Agent: \">
            <div class=\"pane-header\">
                <div class=\"user-search-bar\">
                    <input type=\"text\" name=\"search\" class=\"form-control search-form\" placeholder=\"Recherchez un agent...\" />                
                </div>
            </div>
            <div class=\"pane-body\">
                <div class=\"infinite-list\">
                    {% for agent in agents %}
                    <div class=\"list-item\" data-search=\"{{ agent.name }} {{ agent.contact }} {{ agent.profilName }}\" data-href=\"{{ path('tontine_agent_preview', { 'id': agent.id }) }}\" data-name=\"{{ agent.name }}\">
                        <div class=\"user-photo\">
                            <img src=\"{{ asset('uploads/pieces/') }}{{agent.photo}}\" alt=\"Photo de profil de {{ agent.name }}\">
                        </div>                                                  
                        <div class=\"user-description\">
                            <div class=\"user-name\">{{ agent.name }}</div>
                            <div class=\"user-phone\">
                                <span class=\"fa fa-phone\"></span>
                                {{ agent.contact }}
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
    {% if agt is defined %}
        <script>
            \$(function(){
                Yop.Pagelet({            
                   url: \"{{ path('tontine_agent_preview', {'id':agt.id }) }}\",
                   pagelet: '#user-pagelet',
                   title: '{{agt.prenom}} {{agt.nom}}'
               });
            });
        </script>
    {% endif %}
{% endblock %}", "tontineBundle:Agent:index.html.twig", "/var/www/html/tontine/src/tontineBundle/Resources/views/Agent/index.html.twig");
    }
}
