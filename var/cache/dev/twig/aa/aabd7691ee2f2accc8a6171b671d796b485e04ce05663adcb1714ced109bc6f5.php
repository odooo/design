<?php

/* tontineBundle:Agent:Group/edit.html.twig */
class __TwigTemplate_527575019171727a91e03c39e46db69d5ada5e9e7b407d9900c1a52719a68e84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "tontineBundle:Agent:Group/edit.html.twig", 1);
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
        $__internal_b3c1808070749f34f5b0765834ab0db408a86a866ab2cd403e92457bdc36cd6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3c1808070749f34f5b0765834ab0db408a86a866ab2cd403e92457bdc36cd6e->enter($__internal_b3c1808070749f34f5b0765834ab0db408a86a866ab2cd403e92457bdc36cd6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tontineBundle:Agent:Group/edit.html.twig"));

        // line 2
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->getSourceContext()); })()), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3c1808070749f34f5b0765834ab0db408a86a866ab2cd403e92457bdc36cd6e->leave($__internal_b3c1808070749f34f5b0765834ab0db408a86a866ab2cd403e92457bdc36cd6e_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c241daa3177674ce5cb4cdc4eda6cfec28ffca57f22ce59d4336afff61fd5b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c241daa3177674ce5cb4cdc4eda6cfec28ffca57f22ce59d4336afff61fd5b8->enter($__internal_3c241daa3177674ce5cb4cdc4eda6cfec28ffca57f22ce59d4336afff61fd5b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Créer un nouveau groupe d'agent";
        
        $__internal_3c241daa3177674ce5cb4cdc4eda6cfec28ffca57f22ce59d4336afff61fd5b8->leave($__internal_3c241daa3177674ce5cb4cdc4eda6cfec28ffca57f22ce59d4336afff61fd5b8_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_c46f5cd33e58863567053e5dba71413ddd3c3e56d893a88c30f6d30b91c3dacf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c46f5cd33e58863567053e5dba71413ddd3c3e56d893a88c30f6d30b91c3dacf->enter($__internal_c46f5cd33e58863567053e5dba71413ddd3c3e56d893a88c30f6d30b91c3dacf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        $this->loadTemplate("tontineBundle:Agent:Group/form_body.html.twig", "tontineBundle:Agent:Group/edit.html.twig", 14)->display($context);
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
        
        $__internal_c46f5cd33e58863567053e5dba71413ddd3c3e56d893a88c30f6d30b91c3dacf->leave($__internal_c46f5cd33e58863567053e5dba71413ddd3c3e56d893a88c30f6d30b91c3dacf_prof);

    }

    // line 25
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a0f9dfc947a81eb8e1cd03677180e100425bc36cc174eb8f524946297b2912da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0f9dfc947a81eb8e1cd03677180e100425bc36cc174eb8f524946297b2912da->enter($__internal_a0f9dfc947a81eb8e1cd03677180e100425bc36cc174eb8f524946297b2912da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 26
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
        
        $__internal_a0f9dfc947a81eb8e1cd03677180e100425bc36cc174eb8f524946297b2912da->leave($__internal_a0f9dfc947a81eb8e1cd03677180e100425bc36cc174eb8f524946297b2912da_prof);

    }

    // line 62
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_0251585537451a3e02165426e8d5c596b85f9d5a6869361984ed666e75d884bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0251585537451a3e02165426e8d5c596b85f9d5a6869361984ed666e75d884bb->enter($__internal_0251585537451a3e02165426e8d5c596b85f9d5a6869361984ed666e75d884bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 63
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
        
        $__internal_0251585537451a3e02165426e8d5c596b85f9d5a6869361984ed666e75d884bb->leave($__internal_0251585537451a3e02165426e8d5c596b85f9d5a6869361984ed666e75d884bb_prof);

    }

    public function getTemplateName()
    {
        return "tontineBundle:Agent:Group/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 63,  141 => 62,  98 => 26,  92 => 25,  83 => 22,  76 => 18,  71 => 15,  69 => 14,  58 => 7,  52 => 6,  40 => 4,  33 => 1,  31 => 2,  11 => 1,);
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
{% endblock %}", "tontineBundle:Agent:Group/edit.html.twig", "/var/www/html/tontine/src/tontineBundle/Resources/views/Agent/Group/edit.html.twig");
    }
}
