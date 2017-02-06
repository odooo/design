<?php

/* tontineBundle:Parameter:edit.html.twig */
class __TwigTemplate_76ac4df9483b8b0bb44beec4587fb0ae02443fc3d7144e5afc61c43098501f36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "tontineBundle:Parameter:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_f683d873298035c40d594ab96beedc950cdaf68255a7f4de7b239c20f36968f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f683d873298035c40d594ab96beedc950cdaf68255a7f4de7b239c20f36968f2->enter($__internal_f683d873298035c40d594ab96beedc950cdaf68255a7f4de7b239c20f36968f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tontineBundle:Parameter:edit.html.twig"));

        // line 3
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f683d873298035c40d594ab96beedc950cdaf68255a7f4de7b239c20f36968f2->leave($__internal_f683d873298035c40d594ab96beedc950cdaf68255a7f4de7b239c20f36968f2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_11bbeeccc294ce3557b7b22354714506abbeeee51180aa3cf65ae65c0814d7dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11bbeeccc294ce3557b7b22354714506abbeeee51180aa3cf65ae65c0814d7dc->enter($__internal_11bbeeccc294ce3557b7b22354714506abbeeee51180aa3cf65ae65c0814d7dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Paramètres";
        
        $__internal_11bbeeccc294ce3557b7b22354714506abbeeee51180aa3cf65ae65c0814d7dc->leave($__internal_11bbeeccc294ce3557b7b22354714506abbeeee51180aa3cf65ae65c0814d7dc_prof);

    }

    // line 7
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_238c53fa16aba8c9f4c94508637d94a166a834548a517a2fbc26d9105726eb06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_238c53fa16aba8c9f4c94508637d94a166a834548a517a2fbc26d9105726eb06->enter($__internal_238c53fa16aba8c9f4c94508637d94a166a834548a517a2fbc26d9105726eb06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 8
        echo "    <h1>Paramètres</h1>
";
        
        $__internal_238c53fa16aba8c9f4c94508637d94a166a834548a517a2fbc26d9105726eb06->leave($__internal_238c53fa16aba8c9f4c94508637d94a166a834548a517a2fbc26d9105726eb06_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_6064022d96d5fe0529081f1562b8bad5607b211556a3d1cb15f5d8a2a8881ae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6064022d96d5fe0529081f1562b8bad5607b211556a3d1cb15f5d8a2a8881ae3->enter($__internal_6064022d96d5fe0529081f1562b8bad5607b211556a3d1cb15f5d8a2a8881ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "    <div class=\"box box-primary\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">Paramètres</h3>
        </div>
        <div class=\"box-body\">
            <div class=\"container\" style=\"max-width: 750px;\">
                ";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), 'form_start');
        echo "
                    ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        echo "
                    <div class=\"text-center\">
                        <button type=\"submit\" class=\"btn btn-primary\">Mettre à jour</button>
                    </div>
                ";
        // line 23
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_6064022d96d5fe0529081f1562b8bad5607b211556a3d1cb15f5d8a2a8881ae3->leave($__internal_6064022d96d5fe0529081f1562b8bad5607b211556a3d1cb15f5d8a2a8881ae3_prof);

    }

    public function getTemplateName()
    {
        return "tontineBundle:Parameter:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 23,  83 => 19,  79 => 18,  71 => 12,  65 => 11,  57 => 8,  51 => 7,  39 => 5,  32 => 1,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"default/index.html.twig\" %}

{% form_theme form 'bootstrap_3_layout.html.twig' %}

{% block title %}Paramètres{% endblock %}

{% block content_header %}
    <h1>Paramètres</h1>
{% endblock %}

{% block content %}
    <div class=\"box box-primary\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">Paramètres</h3>
        </div>
        <div class=\"box-body\">
            <div class=\"container\" style=\"max-width: 750px;\">
                {{ form_start(form) }}
                    {{ form_widget(form) }}
                    <div class=\"text-center\">
                        <button type=\"submit\" class=\"btn btn-primary\">Mettre à jour</button>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}
", "tontineBundle:Parameter:edit.html.twig", "/var/www/html/tontine/src/tontineBundle/Resources/views/Parameter/edit.html.twig");
    }
}
