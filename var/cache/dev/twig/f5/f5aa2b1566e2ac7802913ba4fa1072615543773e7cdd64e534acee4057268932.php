<?php

/* @tontine/Default/footer.html.twig */
class __TwigTemplate_247f67dc546e946ccc084064e939def854e15e1f30c6b10d0256380cc8ffd5b7 extends Twig_Template
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
        $__internal_6992eae4e4522b381e35a2e7d1c12ba0a61798eb17f829a990b3d73fcaab0fed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6992eae4e4522b381e35a2e7d1c12ba0a61798eb17f829a990b3d73fcaab0fed->enter($__internal_6992eae4e4522b381e35a2e7d1c12ba0a61798eb17f829a990b3d73fcaab0fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@tontine/Default/footer.html.twig"));

        // line 1
        echo "<footer class=\"main-footer\">
    <div class=\"pull-right hidden-xs\">
        Tous droits réservés.
    </div>
    <strong>Copyright &copy; 2017 TIC 4 ALL | Global Design</strong>
</footer>";
        
        $__internal_6992eae4e4522b381e35a2e7d1c12ba0a61798eb17f829a990b3d73fcaab0fed->leave($__internal_6992eae4e4522b381e35a2e7d1c12ba0a61798eb17f829a990b3d73fcaab0fed_prof);

    }

    public function getTemplateName()
    {
        return "@tontine/Default/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer class=\"main-footer\">
    <div class=\"pull-right hidden-xs\">
        Tous droits réservés.
    </div>
    <strong>Copyright &copy; 2017 TIC 4 ALL | Global Design</strong>
</footer>", "@tontine/Default/footer.html.twig", "/var/www/html/tontine2/src/tontineBundle/Resources/views/Default/footer.html.twig");
    }
}
