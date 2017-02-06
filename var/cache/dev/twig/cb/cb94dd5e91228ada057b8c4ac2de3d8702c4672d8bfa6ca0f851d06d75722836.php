<?php

/* tontineBundle:Fournisseur:index.html.twig */
class __TwigTemplate_825d0454769f2d5b0d0727d95871f3032cc20edc498866afc83fd9e2c99ed6bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/yop-layout.html.twig", "tontineBundle:Fournisseur:index.html.twig", 1);
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
        $__internal_d64cc8acb6d0e841e198a2ebe81feb2fee02cb86ffaac4f86e431469d834872f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d64cc8acb6d0e841e198a2ebe81feb2fee02cb86ffaac4f86e431469d834872f->enter($__internal_d64cc8acb6d0e841e198a2ebe81feb2fee02cb86ffaac4f86e431469d834872f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tontineBundle:Fournisseur:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d64cc8acb6d0e841e198a2ebe81feb2fee02cb86ffaac4f86e431469d834872f->leave($__internal_d64cc8acb6d0e841e198a2ebe81feb2fee02cb86ffaac4f86e431469d834872f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d2cff5ffae62897bff59dd9b60d8132098676cbf381f039b548e94542f342ed5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2cff5ffae62897bff59dd9b60d8132098676cbf381f039b548e94542f342ed5->enter($__internal_d2cff5ffae62897bff59dd9b60d8132098676cbf381f039b548e94542f342ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Gestion des fournisseurs";
        
        $__internal_d2cff5ffae62897bff59dd9b60d8132098676cbf381f039b548e94542f342ed5->leave($__internal_d2cff5ffae62897bff59dd9b60d8132098676cbf381f039b548e94542f342ed5_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_52394cc227a096ebdcbf19c0ab2324f5da75f5b334dc17fa87b15d4be135fae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52394cc227a096ebdcbf19c0ab2324f5da75f5b334dc17fa87b15d4be135fae0->enter($__internal_52394cc227a096ebdcbf19c0ab2324f5da75f5b334dc17fa87b15d4be135fae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"yop-app two-pane\">
        <div class=\"pane pane-one\" id=\"user-list\" data-title=\"Client : \">
            <div class=\"pane-header\">
                <div class=\"user-search-bar\">
                    <input type=\"text\" name=\"search\" class=\"form-control search-form\" placeholder=\"Recherchez un fournisseur...\" />                
                </div>
            </div>
            <div class=\"pane-body\">
                <div class=\"infinite-list\">
                    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fournisseurs"]) || array_key_exists("fournisseurs", $context) ? $context["fournisseurs"] : (function () { throw new Twig_Error_Runtime('Variable "fournisseurs" does not exist.', 15, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 16
            echo "                    <div class=\"list-item\" data-search=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('phone_number_format')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "contacts", array()), "INTERNATIONAL")), "html", null, true);
            echo "\" data-href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_fournisseur_preview", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()))), "html", null, true);
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
            echo "\" alt=\"Photo du fournisseur ";
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
        
        $__internal_52394cc227a096ebdcbf19c0ab2324f5da75f5b334dc17fa87b15d4be135fae0->leave($__internal_52394cc227a096ebdcbf19c0ab2324f5da75f5b334dc17fa87b15d4be135fae0_prof);

    }

    // line 37
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_0eba1193c5beccf0ed75b0703b29fab7fa8d6d7838d7968c8654dae22a3350a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eba1193c5beccf0ed75b0703b29fab7fa8d6d7838d7968c8654dae22a3350a8->enter($__internal_0eba1193c5beccf0ed75b0703b29fab7fa8d6d7838d7968c8654dae22a3350a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_fournisseur_preview", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["frn"]) || array_key_exists("frn", $context) ? $context["frn"] : (function () { throw new Twig_Error_Runtime('Variable "frn" does not exist.', 43, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
            echo "\",
                   pagelet: '#user-pagelet',
                   title: '";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["frn"]) || array_key_exists("frn", $context) ? $context["frn"] : (function () { throw new Twig_Error_Runtime('Variable "frn" does not exist.', 45, $this->getSourceContext()); })()), "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["frn"]) || array_key_exists("frn", $context) ? $context["frn"] : (function () { throw new Twig_Error_Runtime('Variable "frn" does not exist.', 45, $this->getSourceContext()); })()), "nom", array()), "html", null, true);
            echo "'
               });
            });
        </script>
    ";
        }
        
        $__internal_0eba1193c5beccf0ed75b0703b29fab7fa8d6d7838d7968c8654dae22a3350a8->leave($__internal_0eba1193c5beccf0ed75b0703b29fab7fa8d6d7838d7968c8654dae22a3350a8_prof);

    }

    public function getTemplateName()
    {
        return "tontineBundle:Fournisseur:index.html.twig";
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

{% block title %}Gestion des fournisseurs{% endblock %}

{% block content %}
    <div class=\"yop-app two-pane\">
        <div class=\"pane pane-one\" id=\"user-list\" data-title=\"Client : \">
            <div class=\"pane-header\">
                <div class=\"user-search-bar\">
                    <input type=\"text\" name=\"search\" class=\"form-control search-form\" placeholder=\"Recherchez un fournisseur...\" />                
                </div>
            </div>
            <div class=\"pane-body\">
                <div class=\"infinite-list\">
                    {% for user in fournisseurs %}
                    <div class=\"list-item\" data-search=\"{{ user.name }} {{ user.contacts | phone_number_format('INTERNATIONAL') }}\" data-href=\"{{ path('tontine_fournisseur_preview', { 'id': user.id }) }}\" data-name=\"{{ user.name }}\">
                        <div class=\"user-photo\">
                            <img src=\"{% if user.photo %}{{ asset('uploads/pieces/') }}{{user.photo}}{% else %}{{ asset('bundles/images/avatar04.png') }}{% endif %}\" alt=\"Photo du fournisseur {{ user.name }}\">
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
                   url: \"{{ path('tontine_fournisseur_preview', {'id':frn.id }) }}\",
                   pagelet: '#user-pagelet',
                   title: '{{frn.prenom}} {{frn.nom}}'
               });
            });
        </script>
    {% endif %}
{% endblock %}", "tontineBundle:Fournisseur:index.html.twig", "/var/www/html/tontine/src/tontineBundle/Resources/views/Fournisseur/index.html.twig");
    }
}
