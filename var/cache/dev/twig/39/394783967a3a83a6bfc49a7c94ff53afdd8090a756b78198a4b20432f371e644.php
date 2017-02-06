<?php

/* tontineBundle:Modele:new.html.twig */
class __TwigTemplate_dd269560010ce4bb6eb7943be132a9bd4928820bcf77f235a25beee7cee8f846 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "tontineBundle:Modele:new.html.twig", 1);
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
        $__internal_36eb9ab4a2f252542e74561f1eb37784ec1b7709cc7c3ed5832610870eb8a01c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36eb9ab4a2f252542e74561f1eb37784ec1b7709cc7c3ed5832610870eb8a01c->enter($__internal_36eb9ab4a2f252542e74561f1eb37784ec1b7709cc7c3ed5832610870eb8a01c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tontineBundle:Modele:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36eb9ab4a2f252542e74561f1eb37784ec1b7709cc7c3ed5832610870eb8a01c->leave($__internal_36eb9ab4a2f252542e74561f1eb37784ec1b7709cc7c3ed5832610870eb8a01c_prof);

    }

    // line 3
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_b4ab0e143b8e02a5d6b778bf0904240f91331fb7983847def05def0172c5f589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4ab0e143b8e02a5d6b778bf0904240f91331fb7983847def05def0172c5f589->enter($__internal_b4ab0e143b8e02a5d6b778bf0904240f91331fb7983847def05def0172c5f589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 4
        echo "    <h1>Creation d'un modèle</h1>
";
        
        $__internal_b4ab0e143b8e02a5d6b778bf0904240f91331fb7983847def05def0172c5f589->leave($__internal_b4ab0e143b8e02a5d6b778bf0904240f91331fb7983847def05def0172c5f589_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_89a41c10ec1dd325dbffec06f9fdd180060bd01eeb04a96e421569d9c3e39437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89a41c10ec1dd325dbffec06f9fdd180060bd01eeb04a96e421569d9c3e39437->enter($__internal_89a41c10ec1dd325dbffec06f9fdd180060bd01eeb04a96e421569d9c3e39437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "        <div class=\"row\">
            <div class=\"col-sm-offset-3 col-sm-6 well\">
                ";
        // line 10
        $this->loadTemplate("tontineBundle:Modele:partials/form.html.twig", "tontineBundle:Modele:new.html.twig", 10)->display(array_merge($context, array("submit" => "Valider")));
        // line 11
        echo "            </div>            
        </div>

";
        
        $__internal_89a41c10ec1dd325dbffec06f9fdd180060bd01eeb04a96e421569d9c3e39437->leave($__internal_89a41c10ec1dd325dbffec06f9fdd180060bd01eeb04a96e421569d9c3e39437_prof);

    }

    // line 16
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_93e1dca22a9a5ba3a5be988522a4e272483c8862fcf3e8600d6a6557e84a2cf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93e1dca22a9a5ba3a5be988522a4e272483c8862fcf3e8600d6a6557e84a2cf0->enter($__internal_93e1dca22a9a5ba3a5be988522a4e272483c8862fcf3e8600d6a6557e84a2cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_93e1dca22a9a5ba3a5be988522a4e272483c8862fcf3e8600d6a6557e84a2cf0->leave($__internal_93e1dca22a9a5ba3a5be988522a4e272483c8862fcf3e8600d6a6557e84a2cf0_prof);

    }

    public function getTemplateName()
    {
        return "tontineBundle:Modele:new.html.twig";
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
    <h1>Creation d'un modèle</h1>
{% endblock %}

{% block content %}
        <div class=\"row\">
            <div class=\"col-sm-offset-3 col-sm-6 well\">
                {% include 'tontineBundle:Modele:partials/form.html.twig' with { submit: 'Valider' } %}
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
{% endblock %}", "tontineBundle:Modele:new.html.twig", "/var/www/html/tontine/src/tontineBundle/Resources/views/Modele/new.html.twig");
    }
}
