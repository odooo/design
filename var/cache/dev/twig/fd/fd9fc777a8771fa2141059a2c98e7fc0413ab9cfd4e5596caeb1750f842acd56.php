<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5dbdd4ff5ac6ef9af25fd9d862e2d1db403baef7e6a3106542dc4d0fea1f1b20 extends Twig_Template
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
        $__internal_67477977a0641ed93e34e9eb15eea53074439d6fc8c0d8d2aefbe250f23415cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67477977a0641ed93e34e9eb15eea53074439d6fc8c0d8d2aefbe250f23415cd->enter($__internal_67477977a0641ed93e34e9eb15eea53074439d6fc8c0d8d2aefbe250f23415cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67477977a0641ed93e34e9eb15eea53074439d6fc8c0d8d2aefbe250f23415cd->leave($__internal_67477977a0641ed93e34e9eb15eea53074439d6fc8c0d8d2aefbe250f23415cd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_38d4d082c25ab7e046c155d6f5ec7fec232687b04a57bbe9322459df56005360 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38d4d082c25ab7e046c155d6f5ec7fec232687b04a57bbe9322459df56005360->enter($__internal_38d4d082c25ab7e046c155d6f5ec7fec232687b04a57bbe9322459df56005360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_38d4d082c25ab7e046c155d6f5ec7fec232687b04a57bbe9322459df56005360->leave($__internal_38d4d082c25ab7e046c155d6f5ec7fec232687b04a57bbe9322459df56005360_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_231775d94a1b954a53fe1b2041ea901367e55c4254146107f192e49d966026e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_231775d94a1b954a53fe1b2041ea901367e55c4254146107f192e49d966026e8->enter($__internal_231775d94a1b954a53fe1b2041ea901367e55c4254146107f192e49d966026e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_231775d94a1b954a53fe1b2041ea901367e55c4254146107f192e49d966026e8->leave($__internal_231775d94a1b954a53fe1b2041ea901367e55c4254146107f192e49d966026e8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c20aa404f3478e77e3f7fa0e232da51e3f2a5d8ad91aa8b3636322b49563e959 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c20aa404f3478e77e3f7fa0e232da51e3f2a5d8ad91aa8b3636322b49563e959->enter($__internal_c20aa404f3478e77e3f7fa0e232da51e3f2a5d8ad91aa8b3636322b49563e959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_c20aa404f3478e77e3f7fa0e232da51e3f2a5d8ad91aa8b3636322b49563e959->leave($__internal_c20aa404f3478e77e3f7fa0e232da51e3f2a5d8ad91aa8b3636322b49563e959_prof);

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
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/tontine2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
