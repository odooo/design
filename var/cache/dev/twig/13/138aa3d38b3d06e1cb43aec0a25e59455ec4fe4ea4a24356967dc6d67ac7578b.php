<?php

/* tontineBundle:Categorie:partials/form.html.twig */
class __TwigTemplate_0ceed97da0eb48e108b541a819d35efe6097e67d397d43c511ad4fe5813ebe55 extends Twig_Template
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
        $__internal_aaa7a95fed548deb9498f3951248cafb591c30e0a33fbe0087158c2fd403f999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaa7a95fed548deb9498f3951248cafb591c30e0a33fbe0087158c2fd403f999->enter($__internal_aaa7a95fed548deb9498f3951248cafb591c30e0a33fbe0087158c2fd403f999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tontineBundle:Categorie:partials/form.html.twig"));

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
                    <h3 class=\"box-title\">Catégorie : </h3>
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
        
        $__internal_aaa7a95fed548deb9498f3951248cafb591c30e0a33fbe0087158c2fd403f999->leave($__internal_aaa7a95fed548deb9498f3951248cafb591c30e0a33fbe0087158c2fd403f999_prof);

    }

    // line 21
    public function block_form_actions($context, array $blocks = array())
    {
        $__internal_f34ad2e74ca738cbdd8845c76c9cf3c49e2880f74e679f429f77b914e0724926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f34ad2e74ca738cbdd8845c76c9cf3c49e2880f74e679f429f77b914e0724926->enter($__internal_f34ad2e74ca738cbdd8845c76c9cf3c49e2880f74e679f429f77b914e0724926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_actions"));

        // line 22
        echo "                            <div class=\"record-actions pull-left\">
                                <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_categorie_index");
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
        
        $__internal_f34ad2e74ca738cbdd8845c76c9cf3c49e2880f74e679f429f77b914e0724926->leave($__internal_f34ad2e74ca738cbdd8845c76c9cf3c49e2880f74e679f429f77b914e0724926_prof);

    }

    public function getTemplateName()
    {
        return "tontineBundle:Categorie:partials/form.html.twig";
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
                    <h3 class=\"box-title\">Catégorie : </h3>
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
                                <a href=\"{{ path('tontine_categorie_index') }}\" class=\"btn btn-default\" style=\"margin: 5px;\">Retour</a>
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
</div>", "tontineBundle:Categorie:partials/form.html.twig", "/var/www/html/tontine/src/tontineBundle/Resources/views/Categorie/partials/form.html.twig");
    }
}
