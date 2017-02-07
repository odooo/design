<?php

/* __string_template__26dfa66b58a7943f08c68ad7d817b4bb1226acc0e65914d1e44fec6e8aa364bd */
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
        $__internal_e7ce6d52c5ba8b1804fa54a0436c7ce3d06c219e9f1463c1cae6e5faca036a9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7ce6d52c5ba8b1804fa54a0436c7ce3d06c219e9f1463c1cae6e5faca036a9e->enter($__internal_e7ce6d52c5ba8b1804fa54a0436c7ce3d06c219e9f1463c1cae6e5faca036a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "__string_template__26dfa66b58a7943f08c68ad7d817b4bb1226acc0e65914d1e44fec6e8aa364bd"));

        // line 1
        echo "<script>AjaxifySearch.URL = {count: \"";
        echo twig_escape_filter($this->env, (isset($context["count_url"]) || array_key_exists("count_url", $context) ? $context["count_url"] : (function () { throw new Twig_Error_Runtime('Variable "count_url" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "\",search: \"";
        echo twig_escape_filter($this->env, (isset($context["search_url"]) || array_key_exists("search_url", $context) ? $context["search_url"] : (function () { throw new Twig_Error_Runtime('Variable "search_url" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "\"}</script>";
        
        $__internal_e7ce6d52c5ba8b1804fa54a0436c7ce3d06c219e9f1463c1cae6e5faca036a9e->leave($__internal_e7ce6d52c5ba8b1804fa54a0436c7ce3d06c219e9f1463c1cae6e5faca036a9e_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__26dfa66b58a7943f08c68ad7d817b4bb1226acc0e65914d1e44fec6e8aa364bd";
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
        return new Twig_Source("<script>AjaxifySearch.URL = {count: \"{{ count_url }}\",search: \"{{ search_url }}\"}</script>", "__string_template__26dfa66b58a7943f08c68ad7d817b4bb1226acc0e65914d1e44fec6e8aa364bd", "");
    }
}
