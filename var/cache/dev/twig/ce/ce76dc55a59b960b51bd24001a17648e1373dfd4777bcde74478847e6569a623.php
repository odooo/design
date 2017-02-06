<?php

/* tontineBundle:Agency:edit.html.twig */
class __TwigTemplate_5e174248026fa1e687db2142fdc52166775aadc418aef9aed6b4f95c7be41d1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "tontineBundle:Agency:edit.html.twig", 1);
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
        $__internal_872b91274166371ec0f4eb9a409add97ddda2f74fee469fe9ac7ca1e3e989a4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_872b91274166371ec0f4eb9a409add97ddda2f74fee469fe9ac7ca1e3e989a4b->enter($__internal_872b91274166371ec0f4eb9a409add97ddda2f74fee469fe9ac7ca1e3e989a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tontineBundle:Agency:edit.html.twig"));

        // line 2
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->getSourceContext()); })()), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_872b91274166371ec0f4eb9a409add97ddda2f74fee469fe9ac7ca1e3e989a4b->leave($__internal_872b91274166371ec0f4eb9a409add97ddda2f74fee469fe9ac7ca1e3e989a4b_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_aafb1e3bed8d3eddca055e0d6f35d384e3dbbfe4b0a297ac09c477191a9a8c96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aafb1e3bed8d3eddca055e0d6f35d384e3dbbfe4b0a297ac09c477191a9a8c96->enter($__internal_aafb1e3bed8d3eddca055e0d6f35d384e3dbbfe4b0a297ac09c477191a9a8c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Modifier les information d'une agence";
        
        $__internal_aafb1e3bed8d3eddca055e0d6f35d384e3dbbfe4b0a297ac09c477191a9a8c96->leave($__internal_aafb1e3bed8d3eddca055e0d6f35d384e3dbbfe4b0a297ac09c477191a9a8c96_prof);

    }

    // line 6
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_f93a087d0e40fb7d2bee76e7697e6b10598c383db4c707dd17c7c0a85746eb52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f93a087d0e40fb7d2bee76e7697e6b10598c383db4c707dd17c7c0a85746eb52->enter($__internal_f93a087d0e40fb7d2bee76e7697e6b10598c383db4c707dd17c7c0a85746eb52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 7
        echo "    <h3>Modifier les information d'une agence</h3>
";
        
        $__internal_f93a087d0e40fb7d2bee76e7697e6b10598c383db4c707dd17c7c0a85746eb52->leave($__internal_f93a087d0e40fb7d2bee76e7697e6b10598c383db4c707dd17c7c0a85746eb52_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_d91828993f1507f323ffe09aeb300ba37ade16e73e71a094ffb1fa1f575d2ca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d91828993f1507f323ffe09aeb300ba37ade16e73e71a094ffb1fa1f575d2ca5->enter($__internal_d91828993f1507f323ffe09aeb300ba37ade16e73e71a094ffb1fa1f575d2ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "    <div class=\"box box-primary\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">Modifier les information d'une agence</h3>
        </div>
        <div class=\"box-body\">
            <div class=\"container\" style=\"max-width: 700px;\">
                ";
        // line 17
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), 'form_start');
        echo "
                    ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), 'widget');
        echo "
                    <div style=\"margin-top: 20px;\">
                        <a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_agencies_index");
        echo "\" class=\"btn btn-default pull-left\">Retour</a>
                        <button type=\"submit\" class=\"btn btn-primary pull-right\">Valider</button>
                    </div>
                ";
        // line 23
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_d91828993f1507f323ffe09aeb300ba37ade16e73e71a094ffb1fa1f575d2ca5->leave($__internal_d91828993f1507f323ffe09aeb300ba37ade16e73e71a094ffb1fa1f575d2ca5_prof);

    }

    public function getTemplateName()
    {
        return "tontineBundle:Agency:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 23,  88 => 20,  83 => 18,  79 => 17,  71 => 11,  65 => 10,  57 => 7,  51 => 6,  39 => 4,  32 => 1,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"default/index.html.twig\" %}
{% form_theme form 'bootstrap_3_layout.html.twig' %}

{% block title %}Modifier les information d'une agence{% endblock %}

{% block content_header %}
    <h3>Modifier les information d'une agence</h3>
{% endblock %}

{% block content %}
    <div class=\"box box-primary\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">Modifier les information d'une agence</h3>
        </div>
        <div class=\"box-body\">
            <div class=\"container\" style=\"max-width: 700px;\">
                {{ form_start(form) }}
                    {{ form_widget(form) }}
                    <div style=\"margin-top: 20px;\">
                        <a href=\"{{ path('tontine_agencies_index') }}\" class=\"btn btn-default pull-left\">Retour</a>
                        <button type=\"submit\" class=\"btn btn-primary pull-right\">Valider</button>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "tontineBundle:Agency:edit.html.twig", "/var/www/html/tontine/src/tontineBundle/Resources/views/Agency/edit.html.twig");
    }
}
