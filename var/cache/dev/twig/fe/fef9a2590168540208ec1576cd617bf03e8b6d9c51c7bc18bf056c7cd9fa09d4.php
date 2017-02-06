<?php

/* tontineBundle:Categorie:edit.html.twig */
class __TwigTemplate_07992e5a36a67470562734e5d68688c88a3d88d6f85411d0fc2b526ad688435d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "tontineBundle:Categorie:edit.html.twig", 1);
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
        $__internal_aea01b79e480cc0028eeec0b5d4b9b3d0715da6ae50a89e6841d5b7f4c002333 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aea01b79e480cc0028eeec0b5d4b9b3d0715da6ae50a89e6841d5b7f4c002333->enter($__internal_aea01b79e480cc0028eeec0b5d4b9b3d0715da6ae50a89e6841d5b7f4c002333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tontineBundle:Categorie:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aea01b79e480cc0028eeec0b5d4b9b3d0715da6ae50a89e6841d5b7f4c002333->leave($__internal_aea01b79e480cc0028eeec0b5d4b9b3d0715da6ae50a89e6841d5b7f4c002333_prof);

    }

    // line 3
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_c00c975dca60c7c937e2d33cece56fdd6d2f26e7dc8a29dab4029000fc46d63c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c00c975dca60c7c937e2d33cece56fdd6d2f26e7dc8a29dab4029000fc46d63c->enter($__internal_c00c975dca60c7c937e2d33cece56fdd6d2f26e7dc8a29dab4029000fc46d63c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 4
        echo "    <h1>Mofification de la catégorie</h1>
";
        
        $__internal_c00c975dca60c7c937e2d33cece56fdd6d2f26e7dc8a29dab4029000fc46d63c->leave($__internal_c00c975dca60c7c937e2d33cece56fdd6d2f26e7dc8a29dab4029000fc46d63c_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_cf0375ecc69552e6b76562db491aeeb01e6f98243afeffc8965b9fc270083309 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf0375ecc69552e6b76562db491aeeb01e6f98243afeffc8965b9fc270083309->enter($__internal_cf0375ecc69552e6b76562db491aeeb01e6f98243afeffc8965b9fc270083309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <div class=\"row\">
        <div class=\"col-sm-offset-3 col-sm-6 well\">
            ";
        // line 10
        $this->loadTemplate("tontineBundle:Categorie:partials/form.html.twig", "tontineBundle:Categorie:edit.html.twig", 10)->display(array_merge($context, array("submit" => "Modifier")));
        // line 11
        echo "        </div>
    </div>

";
        
        $__internal_cf0375ecc69552e6b76562db491aeeb01e6f98243afeffc8965b9fc270083309->leave($__internal_cf0375ecc69552e6b76562db491aeeb01e6f98243afeffc8965b9fc270083309_prof);

    }

    // line 17
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_f7a8cf6faff5388b5e2569f767357f09bb4e8a37f5f282af5a1745203c8e0559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7a8cf6faff5388b5e2569f767357f09bb4e8a37f5f282af5a1745203c8e0559->enter($__internal_f7a8cf6faff5388b5e2569f767357f09bb4e8a37f5f282af5a1745203c8e0559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_f7a8cf6faff5388b5e2569f767357f09bb4e8a37f5f282af5a1745203c8e0559->leave($__internal_f7a8cf6faff5388b5e2569f767357f09bb4e8a37f5f282af5a1745203c8e0559_prof);

    }

    public function getTemplateName()
    {
        return "tontineBundle:Categorie:edit.html.twig";
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

", "tontineBundle:Categorie:edit.html.twig", "/var/www/html/tontine/src/tontineBundle/Resources/views/Categorie/edit.html.twig");
    }
}
