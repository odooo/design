<?php

/* tontineBundle:Client:new.html.twig */
class __TwigTemplate_2598b5f6d8f9fd76974805e5c224d9a54e32231e6174f7176834fc1ea86e5327 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "tontineBundle:Client:new.html.twig", 1);
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
        $__internal_762051b425e8b41866ec18b279e6346e1e7a56770db2f72c0afbea38b89679d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_762051b425e8b41866ec18b279e6346e1e7a56770db2f72c0afbea38b89679d8->enter($__internal_762051b425e8b41866ec18b279e6346e1e7a56770db2f72c0afbea38b89679d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tontineBundle:Client:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_762051b425e8b41866ec18b279e6346e1e7a56770db2f72c0afbea38b89679d8->leave($__internal_762051b425e8b41866ec18b279e6346e1e7a56770db2f72c0afbea38b89679d8_prof);

    }

    // line 3
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_30dfe6024d53632b2f84661f68516c3b425d99c89b6ef9752fea02fde0b7e3d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30dfe6024d53632b2f84661f68516c3b425d99c89b6ef9752fea02fde0b7e3d4->enter($__internal_30dfe6024d53632b2f84661f68516c3b425d99c89b6ef9752fea02fde0b7e3d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 4
        echo "    <h1>Creation d'un client</h1>
";
        
        $__internal_30dfe6024d53632b2f84661f68516c3b425d99c89b6ef9752fea02fde0b7e3d4->leave($__internal_30dfe6024d53632b2f84661f68516c3b425d99c89b6ef9752fea02fde0b7e3d4_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_15aecfa6e2aceea42d49e7a6773627b0032b1fbf7ff2b60003fbec9c597faf2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15aecfa6e2aceea42d49e7a6773627b0032b1fbf7ff2b60003fbec9c597faf2f->enter($__internal_15aecfa6e2aceea42d49e7a6773627b0032b1fbf7ff2b60003fbec9c597faf2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "        <div class=\"row\">
            <div class=\"col-sm-offset-3 col-sm-6 well\">
                ";
        // line 10
        $this->loadTemplate("tontineBundle:Client:partials/form.html.twig", "tontineBundle:Client:new.html.twig", 10)->display(array_merge($context, array("submit" => "Valider")));
        // line 11
        echo "            </div>            
        </div>

";
        
        $__internal_15aecfa6e2aceea42d49e7a6773627b0032b1fbf7ff2b60003fbec9c597faf2f->leave($__internal_15aecfa6e2aceea42d49e7a6773627b0032b1fbf7ff2b60003fbec9c597faf2f_prof);

    }

    // line 16
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_67cea9f841f62499b304cb11fae54ec4197e93b320131a392964a81ddc32485b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67cea9f841f62499b304cb11fae54ec4197e93b320131a392964a81ddc32485b->enter($__internal_67cea9f841f62499b304cb11fae54ec4197e93b320131a392964a81ddc32485b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_67cea9f841f62499b304cb11fae54ec4197e93b320131a392964a81ddc32485b->leave($__internal_67cea9f841f62499b304cb11fae54ec4197e93b320131a392964a81ddc32485b_prof);

    }

    public function getTemplateName()
    {
        return "tontineBundle:Client:new.html.twig";
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
    <h1>Creation d'un client</h1>
{% endblock %}

{% block content %}
        <div class=\"row\">
            <div class=\"col-sm-offset-3 col-sm-6 well\">
                {% include 'tontineBundle:Client:partials/form.html.twig' with { submit: 'Valider' } %}
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
{% endblock %}", "tontineBundle:Client:new.html.twig", "/var/www/html/tontine/src/tontineBundle/Resources/views/Client/new.html.twig");
    }
}
