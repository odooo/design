<?php

/* __string_template__bfd4c115de69f75ec30dd5d030f5a842d1110bf2d5ea2c1025b9466735e6509c */
class __TwigTemplate_41e41d0cf87a714fca06efb2775f89010ff1eeed734349533389a9d759946848 extends Twig_Template
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
        $__internal_050bbce45d6c9137c7491262fabb04c5414b47d2ffcecdea4c7a754b4ab1e3dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_050bbce45d6c9137c7491262fabb04c5414b47d2ffcecdea4c7a754b4ab1e3dd->enter($__internal_050bbce45d6c9137c7491262fabb04c5414b47d2ffcecdea4c7a754b4ab1e3dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "__string_template__bfd4c115de69f75ec30dd5d030f5a842d1110bf2d5ea2c1025b9466735e6509c"));

        // line 1
        echo "<script>AjaxifySearch.URL = {count: \"";
        echo twig_escape_filter($this->env, (isset($context["count_url"]) || array_key_exists("count_url", $context) ? $context["count_url"] : (function () { throw new Twig_Error_Runtime('Variable "count_url" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "\",search: \"";
        echo twig_escape_filter($this->env, (isset($context["search_url"]) || array_key_exists("search_url", $context) ? $context["search_url"] : (function () { throw new Twig_Error_Runtime('Variable "search_url" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "\"}</script>";
        
        $__internal_050bbce45d6c9137c7491262fabb04c5414b47d2ffcecdea4c7a754b4ab1e3dd->leave($__internal_050bbce45d6c9137c7491262fabb04c5414b47d2ffcecdea4c7a754b4ab1e3dd_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__bfd4c115de69f75ec30dd5d030f5a842d1110bf2d5ea2c1025b9466735e6509c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script>AjaxifySearch.URL = {count: \"{{ count_url }}\",search: \"{{ search_url }}\"}</script>", "__string_template__bfd4c115de69f75ec30dd5d030f5a842d1110bf2d5ea2c1025b9466735e6509c", "");
    }
}
