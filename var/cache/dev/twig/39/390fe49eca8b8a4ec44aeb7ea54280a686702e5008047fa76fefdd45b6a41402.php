<?php

/* tontineBundle:Client:edit.html.twig */
class __TwigTemplate_189209ee18b3509ee37d2787f8606fa02a96ee58fea1ad701ec699927ffce52b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "tontineBundle:Client:edit.html.twig", 1);
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
        $__internal_a0098735ec095ff86325c2a26ebf8bd2b9e41d9f26fdd24e8b3a1aea9e95748d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0098735ec095ff86325c2a26ebf8bd2b9e41d9f26fdd24e8b3a1aea9e95748d->enter($__internal_a0098735ec095ff86325c2a26ebf8bd2b9e41d9f26fdd24e8b3a1aea9e95748d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tontineBundle:Client:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0098735ec095ff86325c2a26ebf8bd2b9e41d9f26fdd24e8b3a1aea9e95748d->leave($__internal_a0098735ec095ff86325c2a26ebf8bd2b9e41d9f26fdd24e8b3a1aea9e95748d_prof);

    }

    // line 3
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_be257b733e99b639f59257ed19b82cac70178e1524699ef4332fa14ed39f94fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be257b733e99b639f59257ed19b82cac70178e1524699ef4332fa14ed39f94fe->enter($__internal_be257b733e99b639f59257ed19b82cac70178e1524699ef4332fa14ed39f94fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 4
        echo "    <h1>Mofification des infos du client</h1>
";
        
        $__internal_be257b733e99b639f59257ed19b82cac70178e1524699ef4332fa14ed39f94fe->leave($__internal_be257b733e99b639f59257ed19b82cac70178e1524699ef4332fa14ed39f94fe_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_a3393cf87dc4ca59d8fa3d0c2817e440d140983758a7fb613676eb76a905156d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3393cf87dc4ca59d8fa3d0c2817e440d140983758a7fb613676eb76a905156d->enter($__internal_a3393cf87dc4ca59d8fa3d0c2817e440d140983758a7fb613676eb76a905156d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <div class=\"row\">
        <div class=\"col-sm-offset-3 col-sm-6 well\">
            ";
        // line 10
        $this->loadTemplate("tontineBundle:Client:partials/form.html.twig", "tontineBundle:Client:edit.html.twig", 10)->display(array_merge($context, array("submit" => "Modifier")));
        // line 11
        echo "        </div>
    </div>

";
        
        $__internal_a3393cf87dc4ca59d8fa3d0c2817e440d140983758a7fb613676eb76a905156d->leave($__internal_a3393cf87dc4ca59d8fa3d0c2817e440d140983758a7fb613676eb76a905156d_prof);

    }

    // line 17
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_293210fcd6f739482346d95168384043299065aa1533e5e9a6fb81c17e5e73eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_293210fcd6f739482346d95168384043299065aa1533e5e9a6fb81c17e5e73eb->enter($__internal_293210fcd6f739482346d95168384043299065aa1533e5e9a6fb81c17e5e73eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_293210fcd6f739482346d95168384043299065aa1533e5e9a6fb81c17e5e73eb->leave($__internal_293210fcd6f739482346d95168384043299065aa1533e5e9a6fb81c17e5e73eb_prof);

    }

    public function getTemplateName()
    {
        return "tontineBundle:Client:edit.html.twig";
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
    <h1>Mofification des infos du client</h1>
{% endblock %}    

{% block content %}
    <div class=\"row\">
        <div class=\"col-sm-offset-3 col-sm-6 well\">
            {% include 'tontineBundle:Client:partials/form.html.twig' with { submit: 'Modifier' } %}
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

", "tontineBundle:Client:edit.html.twig", "/var/www/html/tontine/src/tontineBundle/Resources/views/Client/edit.html.twig");
    }
}
