<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_6b73e02dd5429fe5bb4d0d28ce82f4f81448c703d02e1a989504a725fb2d210f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a08c824250cecb88993943509d147b74ce90c4dd3a63634bdbe72a9e91876b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a08c824250cecb88993943509d147b74ce90c4dd3a63634bdbe72a9e91876b7->enter($__internal_9a08c824250cecb88993943509d147b74ce90c4dd3a63634bdbe72a9e91876b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a08c824250cecb88993943509d147b74ce90c4dd3a63634bdbe72a9e91876b7->leave($__internal_9a08c824250cecb88993943509d147b74ce90c4dd3a63634bdbe72a9e91876b7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e5cb8c5672a993142a553164e8cf0f511969f2ced864b7e51927dc9b9da20b05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5cb8c5672a993142a553164e8cf0f511969f2ced864b7e51927dc9b9da20b05->enter($__internal_e5cb8c5672a993142a553164e8cf0f511969f2ced864b7e51927dc9b9da20b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e5cb8c5672a993142a553164e8cf0f511969f2ced864b7e51927dc9b9da20b05->leave($__internal_e5cb8c5672a993142a553164e8cf0f511969f2ced864b7e51927dc9b9da20b05_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_226e55029a4c00ec63f0fff30088d2a6a93068cd429d2356e3a49e99b9be9377 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_226e55029a4c00ec63f0fff30088d2a6a93068cd429d2356e3a49e99b9be9377->enter($__internal_226e55029a4c00ec63f0fff30088d2a6a93068cd429d2356e3a49e99b9be9377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_226e55029a4c00ec63f0fff30088d2a6a93068cd429d2356e3a49e99b9be9377->leave($__internal_226e55029a4c00ec63f0fff30088d2a6a93068cd429d2356e3a49e99b9be9377_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_69e35746dcbf3338c1b7f878e0862fdbffefed83fb29d99140c9fcb91e3ca683 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69e35746dcbf3338c1b7f878e0862fdbffefed83fb29d99140c9fcb91e3ca683->enter($__internal_69e35746dcbf3338c1b7f878e0862fdbffefed83fb29d99140c9fcb91e3ca683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_69e35746dcbf3338c1b7f878e0862fdbffefed83fb29d99140c9fcb91e3ca683->leave($__internal_69e35746dcbf3338c1b7f878e0862fdbffefed83fb29d99140c9fcb91e3ca683_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/tontine/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
