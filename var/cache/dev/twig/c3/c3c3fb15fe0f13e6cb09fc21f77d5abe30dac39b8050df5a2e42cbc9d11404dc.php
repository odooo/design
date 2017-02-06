<?php

/* tontineBundle:Fournisseur:new.html.twig */
class __TwigTemplate_967a33808398c143cead9f8777100f7c54ccd54e8beaff05b4b804b37e29a243 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "tontineBundle:Fournisseur:new.html.twig", 1);
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
        $__internal_ac43c5cccf65c281fab19d0e9f4554dce2f536ee7c9ad4c3f5c84177aad04264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac43c5cccf65c281fab19d0e9f4554dce2f536ee7c9ad4c3f5c84177aad04264->enter($__internal_ac43c5cccf65c281fab19d0e9f4554dce2f536ee7c9ad4c3f5c84177aad04264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tontineBundle:Fournisseur:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac43c5cccf65c281fab19d0e9f4554dce2f536ee7c9ad4c3f5c84177aad04264->leave($__internal_ac43c5cccf65c281fab19d0e9f4554dce2f536ee7c9ad4c3f5c84177aad04264_prof);

    }

    // line 3
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_796973c1a2c607ab897e4a5b91604c70579d99006cb3aa8961240ffc24d7b33c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_796973c1a2c607ab897e4a5b91604c70579d99006cb3aa8961240ffc24d7b33c->enter($__internal_796973c1a2c607ab897e4a5b91604c70579d99006cb3aa8961240ffc24d7b33c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 4
        echo "    <h1>Creation d'un fournisseur</h1>
";
        
        $__internal_796973c1a2c607ab897e4a5b91604c70579d99006cb3aa8961240ffc24d7b33c->leave($__internal_796973c1a2c607ab897e4a5b91604c70579d99006cb3aa8961240ffc24d7b33c_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_c8c6d0f49927a601ce0bfd6c2575457c19d35f1c386ff70b7ab6965038ffb8ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8c6d0f49927a601ce0bfd6c2575457c19d35f1c386ff70b7ab6965038ffb8ed->enter($__internal_c8c6d0f49927a601ce0bfd6c2575457c19d35f1c386ff70b7ab6965038ffb8ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "        <div class=\"row\">
            <div class=\"col-sm-offset-3 col-sm-6 well\">
                ";
        // line 10
        $this->loadTemplate("tontineBundle:Fournisseur:partials/form.html.twig", "tontineBundle:Fournisseur:new.html.twig", 10)->display(array_merge($context, array("submit" => "Valider")));
        // line 11
        echo "            </div>            
        </div>

";
        
        $__internal_c8c6d0f49927a601ce0bfd6c2575457c19d35f1c386ff70b7ab6965038ffb8ed->leave($__internal_c8c6d0f49927a601ce0bfd6c2575457c19d35f1c386ff70b7ab6965038ffb8ed_prof);

    }

    // line 16
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_bf993937287374ebb492b08bb70fc3f1fd5e25327e9af5de1ec1af1f032cc7bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf993937287374ebb492b08bb70fc3f1fd5e25327e9af5de1ec1af1f032cc7bd->enter($__internal_bf993937287374ebb492b08bb70fc3f1fd5e25327e9af5de1ec1af1f032cc7bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 17
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
        
        $__internal_bf993937287374ebb492b08bb70fc3f1fd5e25327e9af5de1ec1af1f032cc7bd->leave($__internal_bf993937287374ebb492b08bb70fc3f1fd5e25327e9af5de1ec1af1f032cc7bd_prof);

    }

    public function getTemplateName()
    {
        return "tontineBundle:Fournisseur:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 17,  72 => 16,  62 => 11,  60 => 10,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'default/index.html.twig' %}

{% block content_header %}
    <h1>Creation d'un fournisseur</h1>
{% endblock %}

{% block content %}
        <div class=\"row\">
            <div class=\"col-sm-offset-3 col-sm-6 well\">
                {% include 'tontineBundle:Fournisseur:partials/form.html.twig' with { submit: 'Valider' } %}
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
{% endblock %}", "tontineBundle:Fournisseur:new.html.twig", "/var/www/html/tontine/src/tontineBundle/Resources/views/Fournisseur/new.html.twig");
    }
}
