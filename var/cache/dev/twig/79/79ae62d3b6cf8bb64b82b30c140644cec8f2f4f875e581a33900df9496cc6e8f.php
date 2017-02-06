<?php

/* tontineBundle:Agent:partials/form.html.twig */
class __TwigTemplate_4dc0e5ca5c263f9ed5ebe04e585a278c37579dd6e5f61c1d9a78da1673b38eef extends Twig_Template
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
        $__internal_b56a3b412cad07cce6b34ecabb59fa54525b870e0b73ba2c2859caba7667f4b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b56a3b412cad07cce6b34ecabb59fa54525b870e0b73ba2c2859caba7667f4b0->enter($__internal_b56a3b412cad07cce6b34ecabb59fa54525b870e0b73ba2c2859caba7667f4b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tontineBundle:Agent:partials/form.html.twig"));

        // line 1
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), array(0 => "bootstrap_3_layout.html.twig"));
        // line 2
        echo "
<div class=\"container-fluid container-small\">
    <div class='row'>
        <div class=\"col-sm-offset-3 col-sm-6\">
            ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start', array("method" => "POST", "action" => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 6, $this->getSourceContext()); })())));
        echo "
            <div class=\"box box-primary\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Agent: </h3>
                    <div class=\"row\">
                        <div class=\"col-sm-offset-6 col-sm-6 text-center\">
                            ";
        // line 12
        if (array_key_exists("agent", $context)) {
            // line 13
            echo "                                ";
            if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new Twig_Error_Runtime('Variable "agent" does not exist.', 13, $this->getSourceContext()); })()), "photo", array()))) {
                // line 14
                echo "                                    <img  src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/pieces/"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new Twig_Error_Runtime('Variable "agent" does not exist.', 14, $this->getSourceContext()); })()), "photo", array()), "html", null, true);
                echo "\" id=\"profile-img-tag\" class=\"btn img-circle img-responsive\" />
                                ";
            } else {
                // line 16
                echo "                                    <img  src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/images/profil.png"), "html", null, true);
                echo "\" id=\"profile-img-tag\" class=\"btn img-circle img-responsive\" />
                                ";
            }
            // line 18
            echo "                            ";
        } else {
            // line 19
            echo "                                <img  src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/images/profil.png"), "html", null, true);
            echo "\" id=\"profile-img-tag\" class=\"btn img-circle img-responsive\" />
                            ";
        }
        // line 21
        echo "                        </div>
                    </div>
                </div>
                <div class=\"box-body\">            
                    ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->getSourceContext()); })()), 'rest');
        echo "
                </div>
                <div class=\"box-footer\">        
                    <button type=\"submit\" class=\"btn btn-success pull-right\">";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["submit"]) || array_key_exists("submit", $context) ? $context["submit"] : (function () { throw new Twig_Error_Runtime('Variable "submit" does not exist.', 28, $this->getSourceContext()); })()), "html", null, true);
        echo "</button>
                    <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_agent");
        echo "\" type=\"button\" class=\"btn btn-primary\">Annuler</a>
                </div>
            </div>            
            ";
        // line 32
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), 'form_end');
        echo "
        </div>
    </div>
</div>";
        
        $__internal_b56a3b412cad07cce6b34ecabb59fa54525b870e0b73ba2c2859caba7667f4b0->leave($__internal_b56a3b412cad07cce6b34ecabb59fa54525b870e0b73ba2c2859caba7667f4b0_prof);

    }

    public function getTemplateName()
    {
        return "tontineBundle:Agent:partials/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 32,  82 => 29,  78 => 28,  72 => 25,  66 => 21,  60 => 19,  57 => 18,  51 => 16,  44 => 14,  41 => 13,  39 => 12,  30 => 6,  24 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form 'bootstrap_3_layout.html.twig' %}

<div class=\"container-fluid container-small\">
    <div class='row'>
        <div class=\"col-sm-offset-3 col-sm-6\">
            {{ form_start(form, { 'method': 'POST', 'action': action }) }}
            <div class=\"box box-primary\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Agent: </h3>
                    <div class=\"row\">
                        <div class=\"col-sm-offset-6 col-sm-6 text-center\">
                            {% if agent is defined %}
                                {% if agent.photo is not null %}
                                    <img  src=\"{{asset('uploads/pieces/')}}{{agent.photo}}\" id=\"profile-img-tag\" class=\"btn img-circle img-responsive\" />
                                {% else %}
                                    <img  src=\"{{asset('bundles/images/profil.png')}}\" id=\"profile-img-tag\" class=\"btn img-circle img-responsive\" />
                                {% endif %}
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
                    <button type=\"submit\" class=\"btn btn-success pull-right\">{{ submit }}</button>
                    <a href=\"{{path('tontine_agent')}}\" type=\"button\" class=\"btn btn-primary\">Annuler</a>
                </div>
            </div>            
            {{ form_end(form) }}
        </div>
    </div>
</div>", "tontineBundle:Agent:partials/form.html.twig", "/var/www/html/tontine/src/tontineBundle/Resources/views/Agent/partials/form.html.twig");
    }
}
