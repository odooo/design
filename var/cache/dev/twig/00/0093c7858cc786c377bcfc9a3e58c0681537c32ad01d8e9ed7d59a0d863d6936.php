<?php

/* tontineBundle:Agent:Group/form_body.html.twig */
class __TwigTemplate_47f7454ea51bc988ea363f768bc730e446fcf695122231b220e608451a30dd9c extends Twig_Template
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
        $__internal_7ffc3115c4a9e5aa00da644c7b69e2b5fbafb25b2a0fac100b97ab8cc14af8c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ffc3115c4a9e5aa00da644c7b69e2b5fbafb25b2a0fac100b97ab8cc14af8c3->enter($__internal_7ffc3115c4a9e5aa00da644c7b69e2b5fbafb25b2a0fac100b97ab8cc14af8c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tontineBundle:Agent:Group/form_body.html.twig"));

        // line 1
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), "name", array()), 'row');
        echo "
<div class=\"form-group\">
    ";
        // line 4
        echo "    ";
        $context["index"] = 0;
        // line 5
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), "roles", array()), "vars", array()), "choices", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 6
            echo "        ";
            $context["length"] = ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "choices", array())) + (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new Twig_Error_Runtime('Variable "index" does not exist.', 6, $this->getSourceContext()); })())) - 1);
            echo "        
        <div class=\"row\">            
            <h3 class=\"role-group\">";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "label", array()), "html", null, true);
            echo "</h3>
            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new Twig_Error_Runtime('Variable "index" does not exist.', 9, $this->getSourceContext()); })()), (isset($context["length"]) || array_key_exists("length", $context) ? $context["length"] : (function () { throw new Twig_Error_Runtime('Variable "length" does not exist.', 9, $this->getSourceContext()); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 10
                echo "                <div class=\"col-md-6\">
                ";
                // line 11
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), "roles", array()), $context["i"], array(), "array"), 'widget');
                echo "
                </div>                
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </div>
        ";
            // line 15
            $context["index"] = ((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new Twig_Error_Runtime('Variable "index" does not exist.', 15, $this->getSourceContext()); })()) + twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "choices", array())));
            // line 16
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</div>
";
        
        $__internal_7ffc3115c4a9e5aa00da644c7b69e2b5fbafb25b2a0fac100b97ab8cc14af8c3->leave($__internal_7ffc3115c4a9e5aa00da644c7b69e2b5fbafb25b2a0fac100b97ab8cc14af8c3_prof);

    }

    public function getTemplateName()
    {
        return "tontineBundle:Agent:Group/form_body.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 17,  66 => 16,  64 => 15,  61 => 14,  52 => 11,  49 => 10,  45 => 9,  41 => 8,  35 => 6,  30 => 5,  27 => 4,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_row(form.name) }}
<div class=\"form-group\">
    {#{{ form_label(form.roles)}}    #}
    {% set index = 0 %}
    {% for group in form.roles.vars.choices %}
        {% set length = group.choices | length + index - 1 %}        
        <div class=\"row\">            
            <h3 class=\"role-group\">{{ group.label }}</h3>
            {% for i in index..length %}
                <div class=\"col-md-6\">
                {{ form_widget(form.roles[i]) }}
                </div>                
            {% endfor %}
        </div>
        {% set index = index + group.choices | length %}
    {% endfor %}
</div>
", "tontineBundle:Agent:Group/form_body.html.twig", "/var/www/html/tontine/src/tontineBundle/Resources/views/Agent/Group/form_body.html.twig");
    }
}
