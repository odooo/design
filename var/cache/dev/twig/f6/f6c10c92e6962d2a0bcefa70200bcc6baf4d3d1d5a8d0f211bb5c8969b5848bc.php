<?php

/* tontineBundle:Modele:edit.html.twig */
class __TwigTemplate_bc80c9ec6209389bd16f77ebccb00a56be75857a51dd9a93c7e79c7088efd9c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "tontineBundle:Modele:edit.html.twig", 1);
        $this->blocks = array(
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f97365648fcd6730712ea02684af39909a82b90495376d76a63381715fff844b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f97365648fcd6730712ea02684af39909a82b90495376d76a63381715fff844b->enter($__internal_f97365648fcd6730712ea02684af39909a82b90495376d76a63381715fff844b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tontineBundle:Modele:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f97365648fcd6730712ea02684af39909a82b90495376d76a63381715fff844b->leave($__internal_f97365648fcd6730712ea02684af39909a82b90495376d76a63381715fff844b_prof);

    }

    // line 3
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_89e6eaf028da89e97f812523d407f2f242ea53eaab8f5a66fa799636ad0fc31a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89e6eaf028da89e97f812523d407f2f242ea53eaab8f5a66fa799636ad0fc31a->enter($__internal_89e6eaf028da89e97f812523d407f2f242ea53eaab8f5a66fa799636ad0fc31a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 4
        echo "    <h1>Mofification de la catégorie</h1>
";
        
        $__internal_89e6eaf028da89e97f812523d407f2f242ea53eaab8f5a66fa799636ad0fc31a->leave($__internal_89e6eaf028da89e97f812523d407f2f242ea53eaab8f5a66fa799636ad0fc31a_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_f9d299232e87a741b3d2b087c246a941e913da57dd4966116c92b1a94627847d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9d299232e87a741b3d2b087c246a941e913da57dd4966116c92b1a94627847d->enter($__internal_f9d299232e87a741b3d2b087c246a941e913da57dd4966116c92b1a94627847d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <div class=\"row\">
        <div class=\"col-sm-offset-3 col-sm-6 well\">
            ";
        // line 10
        $this->loadTemplate("tontineBundle:Categorie:partials/form.html.twig", "tontineBundle:Modele:edit.html.twig", 10)->display(array_merge($context, array("submit" => "Modifier")));
        // line 11
        echo "        </div>
    </div>

";
        
        $__internal_f9d299232e87a741b3d2b087c246a941e913da57dd4966116c92b1a94627847d->leave($__internal_f9d299232e87a741b3d2b087c246a941e913da57dd4966116c92b1a94627847d_prof);

    }

    // line 17
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_55d3a00be1dbf706fde8741a27a40730ff154390a60d016690e57ced8bcff71a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55d3a00be1dbf706fde8741a27a40730ff154390a60d016690e57ced8bcff71a->enter($__internal_55d3a00be1dbf706fde8741a27a40730ff154390a60d016690e57ced8bcff71a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 18
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
        
        $__internal_55d3a00be1dbf706fde8741a27a40730ff154390a60d016690e57ced8bcff71a->leave($__internal_55d3a00be1dbf706fde8741a27a40730ff154390a60d016690e57ced8bcff71a_prof);

    }

    public function getTemplateName()
    {
        return "tontineBundle:Modele:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 18,  72 => 17,  62 => 11,  60 => 10,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'default/index.html.twig' %}

{% block content_header %}
    <h1>Mofification de la catégorie</h1>
{% endblock %}    

{% block content %}
    <div class=\"row\">
        <div class=\"col-sm-offset-3 col-sm-6 well\">
            {% include 'tontineBundle:Categorie:partials/form.html.twig' with { submit: 'Modifier' } %}
        </div>
    </div>

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
{% endblock %}

", "tontineBundle:Modele:edit.html.twig", "/var/www/html/tontine/src/tontineBundle/Resources/views/Modele/edit.html.twig");
    }
}
