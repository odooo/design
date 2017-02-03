<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_468a71cfcfd7142e1365cbb627742721623ab6d0c6905122a11f2e7050365294 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ad6c20fb5b65b049c6328046d0cb80fdc9c1fd8c04527463c2818a7fb6df368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ad6c20fb5b65b049c6328046d0cb80fdc9c1fd8c04527463c2818a7fb6df368->enter($__internal_9ad6c20fb5b65b049c6328046d0cb80fdc9c1fd8c04527463c2818a7fb6df368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ad6c20fb5b65b049c6328046d0cb80fdc9c1fd8c04527463c2818a7fb6df368->leave($__internal_9ad6c20fb5b65b049c6328046d0cb80fdc9c1fd8c04527463c2818a7fb6df368_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_090b0d1597936a4acdd4f556bad37cf136ee808e0ec20082463965b76563de50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_090b0d1597936a4acdd4f556bad37cf136ee808e0ec20082463965b76563de50->enter($__internal_090b0d1597936a4acdd4f556bad37cf136ee808e0ec20082463965b76563de50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_090b0d1597936a4acdd4f556bad37cf136ee808e0ec20082463965b76563de50->leave($__internal_090b0d1597936a4acdd4f556bad37cf136ee808e0ec20082463965b76563de50_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_867a8b6617ab6f8cf9b17328f3bd16a6f73322c3b731eeb8c99a466fb4b173f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_867a8b6617ab6f8cf9b17328f3bd16a6f73322c3b731eeb8c99a466fb4b173f0->enter($__internal_867a8b6617ab6f8cf9b17328f3bd16a6f73322c3b731eeb8c99a466fb4b173f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_867a8b6617ab6f8cf9b17328f3bd16a6f73322c3b731eeb8c99a466fb4b173f0->leave($__internal_867a8b6617ab6f8cf9b17328f3bd16a6f73322c3b731eeb8c99a466fb4b173f0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_551b340e8f71a87083154c09df01b72ac9103572d04799d0e6886cc49dfa0a24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_551b340e8f71a87083154c09df01b72ac9103572d04799d0e6886cc49dfa0a24->enter($__internal_551b340e8f71a87083154c09df01b72ac9103572d04799d0e6886cc49dfa0a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_551b340e8f71a87083154c09df01b72ac9103572d04799d0e6886cc49dfa0a24->leave($__internal_551b340e8f71a87083154c09df01b72ac9103572d04799d0e6886cc49dfa0a24_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/design/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
