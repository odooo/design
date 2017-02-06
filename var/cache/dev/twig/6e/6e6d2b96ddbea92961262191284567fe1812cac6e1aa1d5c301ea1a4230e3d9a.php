<?php

/* tontineBundle:Pagne:new.html.twig */
class __TwigTemplate_673c27b18d8dc8cde6bc82eeea0a5f40dbca15641ad35521feed3ea48c3154d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":default:index.html.twig", "tontineBundle:Pagne:new.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_787a89fcfaeceec5fa4106c4829509c50ff90cb5efc1cae2116bd4dc0c3f2644 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_787a89fcfaeceec5fa4106c4829509c50ff90cb5efc1cae2116bd4dc0c3f2644->enter($__internal_787a89fcfaeceec5fa4106c4829509c50ff90cb5efc1cae2116bd4dc0c3f2644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tontineBundle:Pagne:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_787a89fcfaeceec5fa4106c4829509c50ff90cb5efc1cae2116bd4dc0c3f2644->leave($__internal_787a89fcfaeceec5fa4106c4829509c50ff90cb5efc1cae2116bd4dc0c3f2644_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_10a855a36355675d50d567b07f47a9ebf015f75cd40df89bce2786148653bb28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10a855a36355675d50d567b07f47a9ebf015f75cd40df89bce2786148653bb28->enter($__internal_10a855a36355675d50d567b07f47a9ebf015f75cd40df89bce2786148653bb28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h3>Enregistrement d'un tissu</h3>
    ";
        // line 5
        $this->loadTemplate("tontineBundle:Pagne:partials/form.html.twig", "tontineBundle:Pagne:new.html.twig", 5)->display(array_merge($context, array("form" =>         // line 7
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_pagne_new"), "submit" => "Ajouter un tissu")));
        
        $__internal_10a855a36355675d50d567b07f47a9ebf015f75cd40df89bce2786148653bb28->leave($__internal_10a855a36355675d50d567b07f47a9ebf015f75cd40df89bce2786148653bb28_prof);

    }

    // line 14
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_05ad39157ec706733d78e953f93cd460dc165dba54a68885b63d4974cfce0414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05ad39157ec706733d78e953f93cd460dc165dba54a68885b63d4974cfce0414->enter($__internal_05ad39157ec706733d78e953f93cd460dc165dba54a68885b63d4974cfce0414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 15
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    \$('#profile-img-tag').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        \$(\".fselect\").change(function(){
            readURL(this);
        });
        \$(\"#profile-img-tag\").on('click', function(){
            \$(\".fselect\").click();
        })
    </script>
";
        
        $__internal_05ad39157ec706733d78e953f93cd460dc165dba54a68885b63d4974cfce0414->leave($__internal_05ad39157ec706733d78e953f93cd460dc165dba54a68885b63d4974cfce0414_prof);

    }

    public function getTemplateName()
    {
        return "tontineBundle:Pagne:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 15,  52 => 14,  45 => 7,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":default:index.html.twig\" %}

{% block content %}
    <h3>Enregistrement d'un tissu</h3>
    {% include 'tontineBundle:Pagne:partials/form.html.twig' 
        with { 
                form: form,
                action: path('tontine_pagne_new'),
                submit: \"Ajouter un tissu\"
            }
    %}
{% endblock %}

{% block javascript %}
    {{parent()}}
    <script type=\"text/javascript\">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    \$('#profile-img-tag').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        \$(\".fselect\").change(function(){
            readURL(this);
        });
        \$(\"#profile-img-tag\").on('click', function(){
            \$(\".fselect\").click();
        })
    </script>
{% endblock %}", "tontineBundle:Pagne:new.html.twig", "/var/www/html/tontine/src/tontineBundle/Resources/views/Pagne/new.html.twig");
    }
}
