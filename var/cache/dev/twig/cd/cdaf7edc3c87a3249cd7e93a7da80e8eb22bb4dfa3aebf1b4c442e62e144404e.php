<?php

/* tontineBundle:Modele:partials/form.html.twig */
class __TwigTemplate_c8d8000e67a863c0658e3049be7f704d2e87bac29e2fd839edf5d06e3287445e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_actions' => array($this, 'block_form_actions'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be7919985a5becbd6879119454722f920377c7359dbe615a54710608aede61fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be7919985a5becbd6879119454722f920377c7359dbe615a54710608aede61fb->enter($__internal_be7919985a5becbd6879119454722f920377c7359dbe615a54710608aede61fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tontineBundle:Modele:partials/form.html.twig"));

        // line 1
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), array(0 => "bootstrap_3_layout.html.twig"));
        // line 2
        echo "
<div class=\"container-fluid container-small\">
    <div class='row'>
        <div class=\"col-sm-12\">
            ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
            <div class=\"box box-primary\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Modèle : </h3>
                    <div class=\"row\">
                        <div class=\"col-sm-offset-6 col-sm-6\" style=\"text-align: center\">
                            
                        </div>
                    </div>
                </div>
                <div class=\"box-body\">            
                    ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), 'rest');
        echo "
                </div>
                <div class=\"box-footer\">        
                    ";
        // line 20
        if ( !array_key_exists("isModal", $context)) {
            // line 21
            echo "                        ";
            $this->displayBlock('form_actions', $context, $blocks);
            // line 29
            echo "                    ";
        }
        // line 30
        echo "                </div>
            </div>            
            ";
        // line 32
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), 'form_end');
        echo "
        </div>
    </div>
</div>";
        
        $__internal_be7919985a5becbd6879119454722f920377c7359dbe615a54710608aede61fb->leave($__internal_be7919985a5becbd6879119454722f920377c7359dbe615a54710608aede61fb_prof);

    }

    // line 21
    public function block_form_actions($context, array $blocks = array())
    {
        $__internal_80627d1ca6ebe5054b8e76e8377946ad9c8c5eb761fe22924cad706e2a8621e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80627d1ca6ebe5054b8e76e8377946ad9c8c5eb761fe22924cad706e2a8621e5->enter($__internal_80627d1ca6ebe5054b8e76e8377946ad9c8c5eb761fe22924cad706e2a8621e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_actions"));

        // line 22
        echo "                            <div class=\"record-actions pull-left\">
                                <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_modele_index");
        echo "\" class=\"btn btn-default\" style=\"margin: 5px;\">Retour</a>
                            </div>
                            <div class=\"record-actions pull-right\">
                                <input type=\"submit\" class=\"btn btn-primary\" value=\"";
        // line 26
        if (array_key_exists("submit", $context)) {
            echo twig_escape_filter($this->env, (isset($context["submit"]) || array_key_exists("submit", $context) ? $context["submit"] : (function () { throw new Twig_Error_Runtime('Variable "submit" does not exist.', 26, $this->getSourceContext()); })()), "html", null, true);
        } else {
            echo "Valider";
        }
        echo "\" />
                            </div>
                        ";
        
        $__internal_80627d1ca6ebe5054b8e76e8377946ad9c8c5eb761fe22924cad706e2a8621e5->leave($__internal_80627d1ca6ebe5054b8e76e8377946ad9c8c5eb761fe22924cad706e2a8621e5_prof);

    }

    public function getTemplateName()
    {
        return "tontineBundle:Modele:partials/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 26,  83 => 23,  80 => 22,  74 => 21,  63 => 32,  59 => 30,  56 => 29,  53 => 21,  51 => 20,  45 => 17,  31 => 6,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form 'bootstrap_3_layout.html.twig' %}

<div class=\"container-fluid container-small\">
    <div class='row'>
        <div class=\"col-sm-12\">
            {{ form_start(form) }}
            <div class=\"box box-primary\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Modèle : </h3>
                    <div class=\"row\">
                        <div class=\"col-sm-offset-6 col-sm-6\" style=\"text-align: center\">
                            
                        </div>
                    </div>
                </div>
                <div class=\"box-body\">            
                    {{ form_rest(form) }}
                </div>
                <div class=\"box-footer\">        
                    {% if isModal is not defined %}
                        {% block form_actions %}
                            <div class=\"record-actions pull-left\">
                                <a href=\"{{ path('tontine_modele_index') }}\" class=\"btn btn-default\" style=\"margin: 5px;\">Retour</a>
                            </div>
                            <div class=\"record-actions pull-right\">
                                <input type=\"submit\" class=\"btn btn-primary\" value=\"{% if submit is defined %}{{ submit }}{% else %}Valider{% endif %}\" />
                            </div>
                        {% endblock %}
                    {% endif %}
                </div>
            </div>            
            {{ form_end(form) }}
        </div>
    </div>
</div>", "tontineBundle:Modele:partials/form.html.twig", "/var/www/html/tontine/src/tontineBundle/Resources/views/Modele/partials/form.html.twig");
    }
}
