<?php

/* __string_template__49302cdd329cc8722e9d4ff6ffc786a39c8319ef60f2ec1301b39e2d76b0637c */
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
        $__internal_9ed4ad63cd3d66d593837b34ad0f04d94678b84003487cefa6ec5f7a08d4674a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ed4ad63cd3d66d593837b34ad0f04d94678b84003487cefa6ec5f7a08d4674a->enter($__internal_9ed4ad63cd3d66d593837b34ad0f04d94678b84003487cefa6ec5f7a08d4674a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "__string_template__49302cdd329cc8722e9d4ff6ffc786a39c8319ef60f2ec1301b39e2d76b0637c"));

        // line 1
        echo "<script>AjaxifySearch.URL = {count: \"";
        echo twig_escape_filter($this->env, (isset($context["count_url"]) || array_key_exists("count_url", $context) ? $context["count_url"] : (function () { throw new Twig_Error_Runtime('Variable "count_url" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "\",search: \"";
        echo twig_escape_filter($this->env, (isset($context["search_url"]) || array_key_exists("search_url", $context) ? $context["search_url"] : (function () { throw new Twig_Error_Runtime('Variable "search_url" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "\"}</script>";
        
        $__internal_9ed4ad63cd3d66d593837b34ad0f04d94678b84003487cefa6ec5f7a08d4674a->leave($__internal_9ed4ad63cd3d66d593837b34ad0f04d94678b84003487cefa6ec5f7a08d4674a_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__49302cdd329cc8722e9d4ff6ffc786a39c8319ef60f2ec1301b39e2d76b0637c";
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
        return new Twig_Source("<script>AjaxifySearch.URL = {count: \"{{ count_url }}\",search: \"{{ search_url }}\"}</script>", "__string_template__49302cdd329cc8722e9d4ff6ffc786a39c8319ef60f2ec1301b39e2d76b0637c", "");
    }
}
