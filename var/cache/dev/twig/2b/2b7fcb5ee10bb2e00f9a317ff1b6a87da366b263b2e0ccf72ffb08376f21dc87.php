<?php

/* tontineBundle:Agent:profile.html.twig */
class __TwigTemplate_9e803d7105e6e843f9d88aa0b348dc8f8a5e1893ab1967b3f3211a6d8782b942 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":default:index.html.twig", "tontineBundle:Agent:profile.html.twig", 1);
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
        $__internal_9b325aa59aaa30f7b6fb9ea05638c79a74873b9f8696fa2cfad6ee364d5581dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b325aa59aaa30f7b6fb9ea05638c79a74873b9f8696fa2cfad6ee364d5581dc->enter($__internal_9b325aa59aaa30f7b6fb9ea05638c79a74873b9f8696fa2cfad6ee364d5581dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tontineBundle:Agent:profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b325aa59aaa30f7b6fb9ea05638c79a74873b9f8696fa2cfad6ee364d5581dc->leave($__internal_9b325aa59aaa30f7b6fb9ea05638c79a74873b9f8696fa2cfad6ee364d5581dc_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_d9da62d31dac7cd30570c987a05b5783bb903092766f84d82208eb83527a0508 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9da62d31dac7cd30570c987a05b5783bb903092766f84d82208eb83527a0508->enter($__internal_d9da62d31dac7cd30570c987a05b5783bb903092766f84d82208eb83527a0508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <p class=\"label-primary\"> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new Twig_Error_Runtime('Variable "agent" does not exist.', 4, $this->getSourceContext()); })()), "profilName", array()), "html", null, true);
        echo " </p>
    <h3>Vos informations personnelles</h3>
    ";
        // line 6
        $this->loadTemplate("tontineBundle:Agent:partials/form.html.twig", "tontineBundle:Agent:profile.html.twig", 6)->display(array_merge($context, array("agent" =>         // line 8
(isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new Twig_Error_Runtime('Variable "agent" does not exist.', 8, $this->getSourceContext()); })()), "form" =>         // line 9
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_user_profile", array("id" => twig_get_attribute($this->env, $this->getSourceContext(),         // line 10
(isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new Twig_Error_Runtime('Variable "agent" does not exist.', 10, $this->getSourceContext()); })()), "id", array()))), "submit" => "Appliquer")));
        
        $__internal_d9da62d31dac7cd30570c987a05b5783bb903092766f84d82208eb83527a0508->leave($__internal_d9da62d31dac7cd30570c987a05b5783bb903092766f84d82208eb83527a0508_prof);

    }

    // line 16
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_5a389e6e8d847199e945c57109af62cfa9eebc9d523fbf0b29b71cd03edd071d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a389e6e8d847199e945c57109af62cfa9eebc9d523fbf0b29b71cd03edd071d->enter($__internal_5a389e6e8d847199e945c57109af62cfa9eebc9d523fbf0b29b71cd03edd071d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_5a389e6e8d847199e945c57109af62cfa9eebc9d523fbf0b29b71cd03edd071d->leave($__internal_5a389e6e8d847199e945c57109af62cfa9eebc9d523fbf0b29b71cd03edd071d_prof);

    }

    public function getTemplateName()
    {
        return "tontineBundle:Agent:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 17,  57 => 16,  50 => 10,  49 => 9,  48 => 8,  47 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":default:index.html.twig\" %}

{% block content %}
    <p class=\"label-primary\"> {{ agent.profilName }} </p>
    <h3>Vos informations personnelles</h3>
    {% include 'tontineBundle:Agent:partials/form.html.twig' 
        with { 
            agent: agent,
            form: form,
            action: path('tontine_user_profile', { id: agent.id }),
            submit: \"Appliquer\"
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
{% endblock %}
", "tontineBundle:Agent:profile.html.twig", "/var/www/html/tontine/src/tontineBundle/Resources/views/Agent/profile.html.twig");
    }
}
