<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4440cc53d60b9199b1c9b45eca6a4041dd84c1fcde1e46c123f4a42ebd450cf6 extends Twig_Template
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
        $__internal_96cf0a18e3be46594ce83c99cc88dea23d211394f8eca207f51467bdadfe62ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96cf0a18e3be46594ce83c99cc88dea23d211394f8eca207f51467bdadfe62ac->enter($__internal_96cf0a18e3be46594ce83c99cc88dea23d211394f8eca207f51467bdadfe62ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96cf0a18e3be46594ce83c99cc88dea23d211394f8eca207f51467bdadfe62ac->leave($__internal_96cf0a18e3be46594ce83c99cc88dea23d211394f8eca207f51467bdadfe62ac_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7e3e00febdccf5c072efab602264fc3b157873366f783b17691cf7406e402aa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e3e00febdccf5c072efab602264fc3b157873366f783b17691cf7406e402aa6->enter($__internal_7e3e00febdccf5c072efab602264fc3b157873366f783b17691cf7406e402aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7e3e00febdccf5c072efab602264fc3b157873366f783b17691cf7406e402aa6->leave($__internal_7e3e00febdccf5c072efab602264fc3b157873366f783b17691cf7406e402aa6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d21ec5cc159dd847670e5914c075cf877abcc0eb01f4960e038f71a72863ddb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d21ec5cc159dd847670e5914c075cf877abcc0eb01f4960e038f71a72863ddb2->enter($__internal_d21ec5cc159dd847670e5914c075cf877abcc0eb01f4960e038f71a72863ddb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d21ec5cc159dd847670e5914c075cf877abcc0eb01f4960e038f71a72863ddb2->leave($__internal_d21ec5cc159dd847670e5914c075cf877abcc0eb01f4960e038f71a72863ddb2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5381c966baf0974c2205ca8fe7082060a4dcbea644d8abcf665fbdf089c11585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5381c966baf0974c2205ca8fe7082060a4dcbea644d8abcf665fbdf089c11585->enter($__internal_5381c966baf0974c2205ca8fe7082060a4dcbea644d8abcf665fbdf089c11585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_5381c966baf0974c2205ca8fe7082060a4dcbea644d8abcf665fbdf089c11585->leave($__internal_5381c966baf0974c2205ca8fe7082060a4dcbea644d8abcf665fbdf089c11585_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/tontine2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
