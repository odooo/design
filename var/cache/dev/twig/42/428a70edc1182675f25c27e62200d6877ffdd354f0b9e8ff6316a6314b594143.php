<?php

/* tontineBundle:Search:form.html.twig */
class __TwigTemplate_629e0b7f6ed2dbf477d14aec4f1dfa95f0746a09eacfaa509481d3b8a0047aa4 extends Twig_Template
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
        $__internal_9126acca7acafa0d33fa62f457e2c90ec5732454d8aa4e1811785fa49f671608 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9126acca7acafa0d33fa62f457e2c90ec5732454d8aa4e1811785fa49f671608->enter($__internal_9126acca7acafa0d33fa62f457e2c90ec5732454d8aa4e1811785fa49f671608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tontineBundle:Search:form.html.twig"));

        // line 1
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), array(0 => "bootstrap_3_layout.html.twig"));
        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start');
        echo "
    ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'widget');
        echo "
    <div>
        <button type=\"submit\" class=\"btn btn-primary btn-block\">Rechercher</button>
    </div>
";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_9126acca7acafa0d33fa62f457e2c90ec5732454d8aa4e1811785fa49f671608->leave($__internal_9126acca7acafa0d33fa62f457e2c90ec5732454d8aa4e1811785fa49f671608_prof);

    }

    public function getTemplateName()
    {
        return "tontineBundle:Search:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 8,  31 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form 'bootstrap_3_layout.html.twig' %}

{{ form_start(form) }}
    {{ form_widget(form) }}
    <div>
        <button type=\"submit\" class=\"btn btn-primary btn-block\">Rechercher</button>
    </div>
{{ form_end(form) }}
", "tontineBundle:Search:form.html.twig", "/var/www/html/tontine/src/tontineBundle/Resources/views/Search/form.html.twig");
    }
}
