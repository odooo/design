<?php

/* tontineBundle:Categorie:index.html.twig */
class __TwigTemplate_26053ae7f43acfc61d2bcb9e5da9b7138d5adb302002ae3bd6a2a5611be5c5b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/yop-layout.html.twig", "tontineBundle:Categorie:index.html.twig", 1);
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
        $__internal_7b9a3ec454454be752f92c7e8b62bb2e27573321a51866aa879000f5700f511b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b9a3ec454454be752f92c7e8b62bb2e27573321a51866aa879000f5700f511b->enter($__internal_7b9a3ec454454be752f92c7e8b62bb2e27573321a51866aa879000f5700f511b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tontineBundle:Categorie:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b9a3ec454454be752f92c7e8b62bb2e27573321a51866aa879000f5700f511b->leave($__internal_7b9a3ec454454be752f92c7e8b62bb2e27573321a51866aa879000f5700f511b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9c2b555cdc1266ca733a20eff699ca35497450663392bc1ef67cc038a7d2914 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9c2b555cdc1266ca733a20eff699ca35497450663392bc1ef67cc038a7d2914->enter($__internal_a9c2b555cdc1266ca733a20eff699ca35497450663392bc1ef67cc038a7d2914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Gestion des catégories";
        
        $__internal_a9c2b555cdc1266ca733a20eff699ca35497450663392bc1ef67cc038a7d2914->leave($__internal_a9c2b555cdc1266ca733a20eff699ca35497450663392bc1ef67cc038a7d2914_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_105daeb6bdffae4c80c1cc78346be66b2624df963749ad9a7582d8ce3f86c5cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_105daeb6bdffae4c80c1cc78346be66b2624df963749ad9a7582d8ce3f86c5cc->enter($__internal_105daeb6bdffae4c80c1cc78346be66b2624df963749ad9a7582d8ce3f86c5cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"yop-app two-pane\">
        <div class=\"pane pane-one\" id=\"user-list\" data-title=\"Catégorie : \">
            <div class=\"pane-header\">
                <div class=\"user-search-bar\">
                    <input type=\"text\" name=\"search\" class=\"form-control search-form\" placeholder=\"Recherchez une catégorie...\" />                
                </div>
            </div>
            <div class=\"pane-body\">
                <div class=\"infinite-list\">
                    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 15, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 16
            echo "                        <div class=\"list-item\" data-search=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["categorie"], "libelle", array()), "html", null, true);
            echo "\" data-href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_categorie_preview", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["categorie"], "id", array()))), "html", null, true);
            echo "\" data-name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["categorie"], "libelle", array()), "html", null, true);
            echo "\">                                                  
                            <div class=\"user-description\">
                                <div class=\"user-name\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["categorie"], "libelle", array()), "html", null, true);
            echo "</div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                </div>
            </div>             
        </div>
        <div class=\"pane pane-two\" id=\"user-pagelet\" yop-with-toolbar>
        </div>
    </div>
";
        
        $__internal_105daeb6bdffae4c80c1cc78346be66b2624df963749ad9a7582d8ce3f86c5cc->leave($__internal_105daeb6bdffae4c80c1cc78346be66b2624df963749ad9a7582d8ce3f86c5cc_prof);

    }

    // line 30
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_1bef01c0de5dcc57ca06da78c4235b034ac2e119fa8c3b3d82689866e4da5b35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bef01c0de5dcc57ca06da78c4235b034ac2e119fa8c3b3d82689866e4da5b35->enter($__internal_1bef01c0de5dcc57ca06da78c4235b034ac2e119fa8c3b3d82689866e4da5b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 31
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    ";
        // line 32
        if (array_key_exists("cli", $context)) {
            // line 33
            echo "        <script>
            \$(function(){
                Yop.Pagelet({            
                   url: \"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_categorie_preview", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new Twig_Error_Runtime('Variable "cat" does not exist.', 36, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
            echo "\",
                   pagelet: '#user-pagelet',
                   title: '";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new Twig_Error_Runtime('Variable "cat" does not exist.', 38, $this->getSourceContext()); })()), "libelle", array()), "html", null, true);
            echo "'
               });
            });
        </script>
    ";
        }
        
        $__internal_1bef01c0de5dcc57ca06da78c4235b034ac2e119fa8c3b3d82689866e4da5b35->leave($__internal_1bef01c0de5dcc57ca06da78c4235b034ac2e119fa8c3b3d82689866e4da5b35_prof);

    }

    public function getTemplateName()
    {
        return "tontineBundle:Categorie:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 38,  120 => 36,  115 => 33,  113 => 32,  108 => 31,  102 => 30,  89 => 22,  79 => 18,  69 => 16,  65 => 15,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'default/yop-layout.html.twig' %}

{% block title %}Gestion des catégories{% endblock %}

{% block content %}
    <div class=\"yop-app two-pane\">
        <div class=\"pane pane-one\" id=\"user-list\" data-title=\"Catégorie : \">
            <div class=\"pane-header\">
                <div class=\"user-search-bar\">
                    <input type=\"text\" name=\"search\" class=\"form-control search-form\" placeholder=\"Recherchez une catégorie...\" />                
                </div>
            </div>
            <div class=\"pane-body\">
                <div class=\"infinite-list\">
                    {% for categorie in categories %}
                        <div class=\"list-item\" data-search=\"{{ categorie.libelle }}\" data-href=\"{{ path('tontine_categorie_preview', { 'id': categorie.id }) }}\" data-name=\"{{ categorie.libelle }}\">                                                  
                            <div class=\"user-description\">
                                <div class=\"user-name\">{{ categorie.libelle }}</div>
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
                   url: \"{{ path('tontine_categorie_preview', {'id':cat.id }) }}\",
                   pagelet: '#user-pagelet',
                   title: '{{cat.libelle}}'
               });
            });
        </script>
    {% endif %}
{% endblock %}", "tontineBundle:Categorie:index.html.twig", "/var/www/html/tontine/src/tontineBundle/Resources/views/Categorie/index.html.twig");
    }
}
