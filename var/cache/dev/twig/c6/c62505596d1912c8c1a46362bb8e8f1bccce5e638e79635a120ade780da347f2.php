<?php

/* @tontine/Default/footer.html.twig */
class __TwigTemplate_b40711292fe2f2149e9eaa48808270618cc10a5fa77e64e44b59212418e372d2 extends Twig_Template
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
        $__internal_03210ca97ee763aecd4d7b0811f76475c832950d896c0e782e56358aa3204d3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03210ca97ee763aecd4d7b0811f76475c832950d896c0e782e56358aa3204d3e->enter($__internal_03210ca97ee763aecd4d7b0811f76475c832950d896c0e782e56358aa3204d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@tontine/Default/footer.html.twig"));

        // line 1
        echo "<footer class=\"main-footer\">
    <div class=\"pull-right hidden-xs\">
        Tous droits réservés.
    </div>
    <strong>Copyright &copy; 2017 TIC 4 ALL | Global Design</strong>
</footer>";
        
        $__internal_03210ca97ee763aecd4d7b0811f76475c832950d896c0e782e56358aa3204d3e->leave($__internal_03210ca97ee763aecd4d7b0811f76475c832950d896c0e782e56358aa3204d3e_prof);

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
</footer>", "@tontine/Default/footer.html.twig", "/var/www/html/tontine/src/tontineBundle/Resources/views/Default/footer.html.twig");
    }
}
