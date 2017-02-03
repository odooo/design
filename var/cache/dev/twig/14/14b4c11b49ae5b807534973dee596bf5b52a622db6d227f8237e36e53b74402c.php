<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b81e2989d4f3b3966fc26b54b6c6e22143ddca2e6b7a6fa2cdb5ec2d5eb8b41f extends Twig_Template
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
        $__internal_1434cb52604a4121de7af5ac80ce0d6f62eabdfdc86c43a0b85675914d8f1dff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1434cb52604a4121de7af5ac80ce0d6f62eabdfdc86c43a0b85675914d8f1dff->enter($__internal_1434cb52604a4121de7af5ac80ce0d6f62eabdfdc86c43a0b85675914d8f1dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1434cb52604a4121de7af5ac80ce0d6f62eabdfdc86c43a0b85675914d8f1dff->leave($__internal_1434cb52604a4121de7af5ac80ce0d6f62eabdfdc86c43a0b85675914d8f1dff_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1bc990258e8551a5301e64150200beda62244c8943828e2f2df5c97f50886ab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bc990258e8551a5301e64150200beda62244c8943828e2f2df5c97f50886ab2->enter($__internal_1bc990258e8551a5301e64150200beda62244c8943828e2f2df5c97f50886ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1bc990258e8551a5301e64150200beda62244c8943828e2f2df5c97f50886ab2->leave($__internal_1bc990258e8551a5301e64150200beda62244c8943828e2f2df5c97f50886ab2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_10aaf615ad30badb88ca8fec4d4a4abc5e85a1c63d431d854a66b7982d905f02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10aaf615ad30badb88ca8fec4d4a4abc5e85a1c63d431d854a66b7982d905f02->enter($__internal_10aaf615ad30badb88ca8fec4d4a4abc5e85a1c63d431d854a66b7982d905f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_10aaf615ad30badb88ca8fec4d4a4abc5e85a1c63d431d854a66b7982d905f02->leave($__internal_10aaf615ad30badb88ca8fec4d4a4abc5e85a1c63d431d854a66b7982d905f02_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4051ab04b9a7471bd2c83d32fa79bb423ed239060c0e532fe5076d1aca08950c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4051ab04b9a7471bd2c83d32fa79bb423ed239060c0e532fe5076d1aca08950c->enter($__internal_4051ab04b9a7471bd2c83d32fa79bb423ed239060c0e532fe5076d1aca08950c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_4051ab04b9a7471bd2c83d32fa79bb423ed239060c0e532fe5076d1aca08950c->leave($__internal_4051ab04b9a7471bd2c83d32fa79bb423ed239060c0e532fe5076d1aca08950c_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/tontine/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
