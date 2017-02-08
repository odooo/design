<?php

/* __string_template__c8e362d51bda92ef0bf3ce335996c9c0f2d49499e2ad2c4909b800877af98703 */
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
        $__internal_9ca9dcbaaea93209c616924a2c7413a96f7c5a488fc0402d850b8873ea3dc576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ca9dcbaaea93209c616924a2c7413a96f7c5a488fc0402d850b8873ea3dc576->enter($__internal_9ca9dcbaaea93209c616924a2c7413a96f7c5a488fc0402d850b8873ea3dc576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "__string_template__c8e362d51bda92ef0bf3ce335996c9c0f2d49499e2ad2c4909b800877af98703"));

        // line 1
        echo "<script>AjaxifySearch.URL = {count: \"";
        echo twig_escape_filter($this->env, (isset($context["count_url"]) || array_key_exists("count_url", $context) ? $context["count_url"] : (function () { throw new Twig_Error_Runtime('Variable "count_url" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "\",search: \"";
        echo twig_escape_filter($this->env, (isset($context["search_url"]) || array_key_exists("search_url", $context) ? $context["search_url"] : (function () { throw new Twig_Error_Runtime('Variable "search_url" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "\"}</script>";
        
        $__internal_9ca9dcbaaea93209c616924a2c7413a96f7c5a488fc0402d850b8873ea3dc576->leave($__internal_9ca9dcbaaea93209c616924a2c7413a96f7c5a488fc0402d850b8873ea3dc576_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__c8e362d51bda92ef0bf3ce335996c9c0f2d49499e2ad2c4909b800877af98703";
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
        return new Twig_Source("<script>AjaxifySearch.URL = {count: \"{{ count_url }}\",search: \"{{ search_url }}\"}</script>", "__string_template__c8e362d51bda92ef0bf3ce335996c9c0f2d49499e2ad2c4909b800877af98703", "");
    }
}
