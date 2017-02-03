<?php

/* tontineBundle:Client:partials/form.html.twig */
class __TwigTemplate_8d6d5ecece2c5e8efae422d9c266a9cc0a45d47590280e0cf760497a817f8326 extends Twig_Template
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
        $__internal_7d329739d19d900e44c59d1cb3030bfeb549fc02bc6748f82ce827a2a4d6137d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d329739d19d900e44c59d1cb3030bfeb549fc02bc6748f82ce827a2a4d6137d->enter($__internal_7d329739d19d900e44c59d1cb3030bfeb549fc02bc6748f82ce827a2a4d6137d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tontineBundle:Client:partials/form.html.twig"));

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
                    <h3 class=\"box-title\">Client: </h3>
                    <div class=\"row\">
                        <div class=\"col-sm-offset-6 col-sm-6\" style=\"text-align: center\">
                            ";
        // line 12
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 12, $this->getSourceContext()); })()), "photo", array())) {
            // line 13
            echo "                                <img  src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/pieces/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 13, $this->getSourceContext()); })()), "photo", array()), "html", null, true);
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
        
        $__internal_7d329739d19d900e44c59d1cb3030bfeb549fc02bc6748f82ce827a2a4d6137d->leave($__internal_7d329739d19d900e44c59d1cb3030bfeb549fc02bc6748f82ce827a2a4d6137d_prof);

    }

    // line 25
    public function block_form_actions($context, array $blocks = array())
    {
        $__internal_e29660aa3db4a79aa604cdd513f8ae8ff85c24bda15781dd64ee54c9a2c53b6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e29660aa3db4a79aa604cdd513f8ae8ff85c24bda15781dd64ee54c9a2c53b6f->enter($__internal_e29660aa3db4a79aa604cdd513f8ae8ff85c24bda15781dd64ee54c9a2c53b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_actions"));

        // line 26
        echo "                            <div class=\"record-actions pull-left\">
                                <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_client_index");
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
        
        $__internal_e29660aa3db4a79aa604cdd513f8ae8ff85c24bda15781dd64ee54c9a2c53b6f->leave($__internal_e29660aa3db4a79aa604cdd513f8ae8ff85c24bda15781dd64ee54c9a2c53b6f_prof);

    }

    public function getTemplateName()
    {
        return "tontineBundle:Client:partials/form.html.twig";
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
                    <h3 class=\"box-title\">Client: </h3>
                    <div class=\"row\">
                        <div class=\"col-sm-offset-6 col-sm-6\" style=\"text-align: center\">
                            {% if client.photo %}
                                <img  src=\"{{asset('uploads/pieces/')}}{{client.photo}}\" id=\"profile-img-tag\" class=\"btn img-circle img-responsive\" />
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
                                <a href=\"{{ path('tontine_client_index') }}\" class=\"btn btn-default\" style=\"margin: 5px;\">Retour</a>
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
</div>", "tontineBundle:Client:partials/form.html.twig", "/var/www/html/tontine/src/tontineBundle/Resources/views/Client/partials/form.html.twig");
    }
}
