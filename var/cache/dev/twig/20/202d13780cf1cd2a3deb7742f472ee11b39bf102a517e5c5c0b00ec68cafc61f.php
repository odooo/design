<?php

/* tontineBundle:Fournisseur:partials/form.html.twig */
class __TwigTemplate_6ed344a14c6665fcdefaeb6ef04c3f2bfbdd7e616c502677f300d4bab9e55dcd extends Twig_Template
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
        $__internal_f1423030763b9d6aaed504b2acc3303e919d10902cfb5a28d130ade5491059ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1423030763b9d6aaed504b2acc3303e919d10902cfb5a28d130ade5491059ab->enter($__internal_f1423030763b9d6aaed504b2acc3303e919d10902cfb5a28d130ade5491059ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tontineBundle:Fournisseur:partials/form.html.twig"));

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
                    <h3 class=\"box-title\">Fournisseur : </h3>
                    <div class=\"row\">
                        <div class=\"col-sm-offset-6 col-sm-6\" style=\"text-align: center\">
                            ";
        // line 12
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new Twig_Error_Runtime('Variable "fournisseur" does not exist.', 12, $this->getSourceContext()); })()), "photo", array())) {
            // line 13
            echo "                                <img  src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/pieces/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new Twig_Error_Runtime('Variable "fournisseur" does not exist.', 13, $this->getSourceContext()); })()), "photo", array()), "html", null, true);
            echo "\" id=\"profile-img-tag\" class=\"btn img-circle img-responsive\" />
                            ";
        } else {
            // line 15
            echo "                                <img  src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/images/profil.png"), "html", null, true);
            echo "\" id=\"profile-img-tag\" class=\"btn img-circle img-responsive\" />
                            ";
        }
        // line 17
        echo "                        </div>
                    </div>
                </div>
                <div class=\"box-body\">            
                    ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), 'rest');
        echo "
                </div>
                <div class=\"box-footer\">        
                    ";
        // line 24
        if ( !array_key_exists("isModal", $context)) {
            // line 25
            echo "                        ";
            $this->displayBlock('form_actions', $context, $blocks);
            // line 33
            echo "                    ";
        }
        // line 34
        echo "                </div>
            </div>            
            ";
        // line 36
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->getSourceContext()); })()), 'form_end');
        echo "
        </div>
    </div>
</div>";
        
        $__internal_f1423030763b9d6aaed504b2acc3303e919d10902cfb5a28d130ade5491059ab->leave($__internal_f1423030763b9d6aaed504b2acc3303e919d10902cfb5a28d130ade5491059ab_prof);

    }

    // line 25
    public function block_form_actions($context, array $blocks = array())
    {
        $__internal_24f68fbb8d71622253a0683feb20aa70da2121bef7d82823f314b264632da6ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24f68fbb8d71622253a0683feb20aa70da2121bef7d82823f314b264632da6ff->enter($__internal_24f68fbb8d71622253a0683feb20aa70da2121bef7d82823f314b264632da6ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_actions"));

        // line 26
        echo "                            <div class=\"record-actions pull-left\">
                                <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_fournisseur_index");
        echo "\" class=\"btn btn-default\" style=\"margin: 5px;\">Retour</a>
                            </div>
                            <div class=\"record-actions pull-right\">
                                <input type=\"submit\" class=\"btn btn-primary\" value=\"";
        // line 30
        if (array_key_exists("submit", $context)) {
            echo twig_escape_filter($this->env, (isset($context["submit"]) || array_key_exists("submit", $context) ? $context["submit"] : (function () { throw new Twig_Error_Runtime('Variable "submit" does not exist.', 30, $this->getSourceContext()); })()), "html", null, true);
        } else {
            echo "Valider";
        }
        echo "\" />
                            </div>
                        ";
        
        $__internal_24f68fbb8d71622253a0683feb20aa70da2121bef7d82823f314b264632da6ff->leave($__internal_24f68fbb8d71622253a0683feb20aa70da2121bef7d82823f314b264632da6ff_prof);

    }

    public function getTemplateName()
    {
        return "tontineBundle:Fournisseur:partials/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 30,  99 => 27,  96 => 26,  90 => 25,  79 => 36,  75 => 34,  72 => 33,  69 => 25,  67 => 24,  61 => 21,  55 => 17,  49 => 15,  42 => 13,  40 => 12,  31 => 6,  25 => 2,  23 => 1,);
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
                    <h3 class=\"box-title\">Fournisseur : </h3>
                    <div class=\"row\">
                        <div class=\"col-sm-offset-6 col-sm-6\" style=\"text-align: center\">
                            {% if fournisseur.photo %}
                                <img  src=\"{{asset('uploads/pieces/')}}{{fournisseur.photo}}\" id=\"profile-img-tag\" class=\"btn img-circle img-responsive\" />
                            {% else %}
                                <img  src=\"{{asset('bundles/images/profil.png')}}\" id=\"profile-img-tag\" class=\"btn img-circle img-responsive\" />
                            {% endif %}
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
                                <a href=\"{{ path('tontine_fournisseur_index') }}\" class=\"btn btn-default\" style=\"margin: 5px;\">Retour</a>
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
</div>", "tontineBundle:Fournisseur:partials/form.html.twig", "/var/www/html/tontine/src/tontineBundle/Resources/views/Fournisseur/partials/form.html.twig");
    }
}
