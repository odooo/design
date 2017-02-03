<?php

/* tontineBundle:Agent:new.html.twig */
class __TwigTemplate_b3140ac738474eb86e43616be89b283fe89380d3af0a9b9e2591449b6edb45da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":default:index.html.twig", "tontineBundle:Agent:new.html.twig", 1);
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
        $__internal_5388ba1ecb8e255a09cb7445096e1c7122367f51c21ad2fea980fb4f18e0ad28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5388ba1ecb8e255a09cb7445096e1c7122367f51c21ad2fea980fb4f18e0ad28->enter($__internal_5388ba1ecb8e255a09cb7445096e1c7122367f51c21ad2fea980fb4f18e0ad28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tontineBundle:Agent:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5388ba1ecb8e255a09cb7445096e1c7122367f51c21ad2fea980fb4f18e0ad28->leave($__internal_5388ba1ecb8e255a09cb7445096e1c7122367f51c21ad2fea980fb4f18e0ad28_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_906d6e5f99a5f518633cb772ee6bcddd5db90c3be24b1a02ce8b7600290f9e7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_906d6e5f99a5f518633cb772ee6bcddd5db90c3be24b1a02ce8b7600290f9e7f->enter($__internal_906d6e5f99a5f518633cb772ee6bcddd5db90c3be24b1a02ce8b7600290f9e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h3>Enrégistrement d'un agent</h3>
    ";
        // line 5
        $this->loadTemplate("tontineBundle:Agent:partials/form.html.twig", "tontineBundle:Agent:new.html.twig", 5)->display(array_merge($context, array("form" =>         // line 7
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_agent_new"), "submit" => "Créer l'agent")));
        
        $__internal_906d6e5f99a5f518633cb772ee6bcddd5db90c3be24b1a02ce8b7600290f9e7f->leave($__internal_906d6e5f99a5f518633cb772ee6bcddd5db90c3be24b1a02ce8b7600290f9e7f_prof);

    }

    // line 14
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_140a29f0d6662debb344dfbadcf7d17ed9cec034096aaa9e3a18d27836ca79ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_140a29f0d6662debb344dfbadcf7d17ed9cec034096aaa9e3a18d27836ca79ce->enter($__internal_140a29f0d6662debb344dfbadcf7d17ed9cec034096aaa9e3a18d27836ca79ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_140a29f0d6662debb344dfbadcf7d17ed9cec034096aaa9e3a18d27836ca79ce->leave($__internal_140a29f0d6662debb344dfbadcf7d17ed9cec034096aaa9e3a18d27836ca79ce_prof);

    }

    public function getTemplateName()
    {
        return "tontineBundle:Agent:new.html.twig";
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
    <h3>Enrégistrement d'un agent</h3>
    {% include 'tontineBundle:Agent:partials/form.html.twig' 
        with { 
                form: form,
                action: path('tontine_agent_new'),
                submit: \"Créer l'agent\"
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
{% endblock %}", "tontineBundle:Agent:new.html.twig", "/var/www/html/tontine/src/tontineBundle/Resources/views/Agent/new.html.twig");
    }
}
