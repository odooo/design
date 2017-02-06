<?php

/* tontineBundle:Agent:Group/create.html.twig */
class __TwigTemplate_3c532d8fa919ab8fc779ab791c1924784d3659b0a8b6b5c31dfdad02edac52e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "tontineBundle:Agent:Group/create.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a46611db3377deabe536a85fd8a06ea5134df1e5bbc2540a5a194fc2e4ebf572 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a46611db3377deabe536a85fd8a06ea5134df1e5bbc2540a5a194fc2e4ebf572->enter($__internal_a46611db3377deabe536a85fd8a06ea5134df1e5bbc2540a5a194fc2e4ebf572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tontineBundle:Agent:Group/create.html.twig"));

        // line 2
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->getSourceContext()); })()), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a46611db3377deabe536a85fd8a06ea5134df1e5bbc2540a5a194fc2e4ebf572->leave($__internal_a46611db3377deabe536a85fd8a06ea5134df1e5bbc2540a5a194fc2e4ebf572_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_54389fd9a53a7fdce52e832a348125ced9375bc6016f0211c15c6cf8e60a1f59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54389fd9a53a7fdce52e832a348125ced9375bc6016f0211c15c6cf8e60a1f59->enter($__internal_54389fd9a53a7fdce52e832a348125ced9375bc6016f0211c15c6cf8e60a1f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Créer un nouveau groupe d'agent";
        
        $__internal_54389fd9a53a7fdce52e832a348125ced9375bc6016f0211c15c6cf8e60a1f59->leave($__internal_54389fd9a53a7fdce52e832a348125ced9375bc6016f0211c15c6cf8e60a1f59_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_e37de0f41fadea1bec127ca6b7b5c33adcbc6d28cb5466ed5b0c56ac8bf7ac1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e37de0f41fadea1bec127ca6b7b5c33adcbc6d28cb5466ed5b0c56ac8bf7ac1d->enter($__internal_e37de0f41fadea1bec127ca6b7b5c33adcbc6d28cb5466ed5b0c56ac8bf7ac1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "    ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'form_start');
        echo "
    <div class=\"box box-primary\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">Créer un nouveau groupe d'utilisateur</h3>
        </div>
        <div class=\"box-body\">
            <div class=\"container\" style=\"max-width: 700px\">
                ";
        // line 14
        $this->loadTemplate("tontineBundle:Agent:Group/form_body.html.twig", "tontineBundle:Agent:Group/create.html.twig", 14)->display($context);
        // line 15
        echo "            </div>
        </div>
        <div class=\"box-footer\">
            <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_agents_groups_index");
        echo "\" class=\"btn btn-default pull-left\">Retour</a>
            <button type=\"submit\" class=\"btn btn-primary pull-right\">Valider</button>
        </div>
    </div>
    ";
        // line 22
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_e37de0f41fadea1bec127ca6b7b5c33adcbc6d28cb5466ed5b0c56ac8bf7ac1d->leave($__internal_e37de0f41fadea1bec127ca6b7b5c33adcbc6d28cb5466ed5b0c56ac8bf7ac1d_prof);

    }

    // line 26
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_de75c04d8f3c2c141a75aeaf2de1adb534f4e21db120338fea514f8cbd240afb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de75c04d8f3c2c141a75aeaf2de1adb534f4e21db120338fea514f8cbd240afb->enter($__internal_de75c04d8f3c2c141a75aeaf2de1adb534f4e21db120338fea514f8cbd240afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 27
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        h3.role-group {
            margin: 15px 0 5px 17px;
            font-size: 14px;
            font-weight: bold;
        }

        .checkbox {
            margin: 0;
        }

        .checkbox label {
            display: block;
            margin: 2px;
            padding: 5px;
            cursor: pointer;
            background: #cccccc;
        }

        .checkbox label.checked {
            background: green;
            color: #ffffff;
        }

        .checkbox label.checked:before {
            content: \"\\f00c\";
            margin-right: 5px;
        }

        .checkbox input[type=\"checkbox\"] {
            opacity: 0;
        }
    </style>
";
        
        $__internal_de75c04d8f3c2c141a75aeaf2de1adb534f4e21db120338fea514f8cbd240afb->leave($__internal_de75c04d8f3c2c141a75aeaf2de1adb534f4e21db120338fea514f8cbd240afb_prof);

    }

    // line 63
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_39c461b5236380b1080ee2d38950b9879eb44ca37843db0509617414f9b75baf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39c461b5236380b1080ee2d38950b9879eb44ca37843db0509617414f9b75baf->enter($__internal_39c461b5236380b1080ee2d38950b9879eb44ca37843db0509617414f9b75baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 64
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script>
        \$(function() {
            \$('.checkbox label').each(function() {
                var \$checkbox = \$(this).find('input[type=\"checkbox\"]');

                if (\$checkbox.is(':checked')) {
                    \$(this).addClass('checked');
                }

                \$(this).on('click', function() {                
                    if (\$checkbox.is(':checked')) {
                        \$(this).addClass('checked');
                    } else {
                        \$(this).removeClass('checked');
                    }
                });
            });
        });
    </script>
";
        
        $__internal_39c461b5236380b1080ee2d38950b9879eb44ca37843db0509617414f9b75baf->leave($__internal_39c461b5236380b1080ee2d38950b9879eb44ca37843db0509617414f9b75baf_prof);

    }

    public function getTemplateName()
    {
        return "tontineBundle:Agent:Group/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 64,  141 => 63,  98 => 27,  92 => 26,  83 => 22,  76 => 18,  71 => 15,  69 => 14,  58 => 7,  52 => 6,  40 => 4,  33 => 1,  31 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'default/index.html.twig' %}
{% form_theme form 'bootstrap_3_layout.html.twig' %}

{% block title %}Créer un nouveau groupe d'agent{% endblock %}

{% block content %}
    {{ form_start(form) }}
    <div class=\"box box-primary\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">Créer un nouveau groupe d'utilisateur</h3>
        </div>
        <div class=\"box-body\">
            <div class=\"container\" style=\"max-width: 700px\">
                {% include 'tontineBundle:Agent:Group/form_body.html.twig' %}
            </div>
        </div>
        <div class=\"box-footer\">
            <a href=\"{{ path('tontine_agents_groups_index') }}\" class=\"btn btn-default pull-left\">Retour</a>
            <button type=\"submit\" class=\"btn btn-primary pull-right\">Valider</button>
        </div>
    </div>
    {{ form_end(form) }}
{% endblock %}


{% block stylesheets %}
    {{ parent() }}
    <style>
        h3.role-group {
            margin: 15px 0 5px 17px;
            font-size: 14px;
            font-weight: bold;
        }

        .checkbox {
            margin: 0;
        }

        .checkbox label {
            display: block;
            margin: 2px;
            padding: 5px;
            cursor: pointer;
            background: #cccccc;
        }

        .checkbox label.checked {
            background: green;
            color: #ffffff;
        }

        .checkbox label.checked:before {
            content: \"\\f00c\";
            margin-right: 5px;
        }

        .checkbox input[type=\"checkbox\"] {
            opacity: 0;
        }
    </style>
{% endblock %}

{% block javascript %}
    {{ parent() }}
    <script>
        \$(function() {
            \$('.checkbox label').each(function() {
                var \$checkbox = \$(this).find('input[type=\"checkbox\"]');

                if (\$checkbox.is(':checked')) {
                    \$(this).addClass('checked');
                }

                \$(this).on('click', function() {                
                    if (\$checkbox.is(':checked')) {
                        \$(this).addClass('checked');
                    } else {
                        \$(this).removeClass('checked');
                    }
                });
            });
        });
    </script>
{% endblock %}", "tontineBundle:Agent:Group/create.html.twig", "/var/www/html/tontine/src/tontineBundle/Resources/views/Agent/Group/create.html.twig");
    }
}
