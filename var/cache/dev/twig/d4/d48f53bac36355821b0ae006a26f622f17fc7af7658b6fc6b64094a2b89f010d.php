<?php

/* __string_template__5b2e321acb5794394d51c733f90cfdfe9085b20a9e8c62e46fe220df219bf5c5 */
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
        $__internal_e926c7ecef8f7734add01b4905bbf84d7013af44fb486bee8114c18b9f44e1c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e926c7ecef8f7734add01b4905bbf84d7013af44fb486bee8114c18b9f44e1c8->enter($__internal_e926c7ecef8f7734add01b4905bbf84d7013af44fb486bee8114c18b9f44e1c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "__string_template__5b2e321acb5794394d51c733f90cfdfe9085b20a9e8c62e46fe220df219bf5c5"));

        // line 1
        echo "<script>AjaxifySearch.URL = {count: \"";
        echo twig_escape_filter($this->env, (isset($context["count_url"]) || array_key_exists("count_url", $context) ? $context["count_url"] : (function () { throw new Twig_Error_Runtime('Variable "count_url" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "\",search: \"";
        echo twig_escape_filter($this->env, (isset($context["search_url"]) || array_key_exists("search_url", $context) ? $context["search_url"] : (function () { throw new Twig_Error_Runtime('Variable "search_url" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "\"}</script>";
        
        $__internal_e926c7ecef8f7734add01b4905bbf84d7013af44fb486bee8114c18b9f44e1c8->leave($__internal_e926c7ecef8f7734add01b4905bbf84d7013af44fb486bee8114c18b9f44e1c8_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__5b2e321acb5794394d51c733f90cfdfe9085b20a9e8c62e46fe220df219bf5c5";
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
        return new Twig_Source("<script>AjaxifySearch.URL = {count: \"{{ count_url }}\",search: \"{{ search_url }}\"}</script>", "__string_template__5b2e321acb5794394d51c733f90cfdfe9085b20a9e8c62e46fe220df219bf5c5", "");
    }
}
