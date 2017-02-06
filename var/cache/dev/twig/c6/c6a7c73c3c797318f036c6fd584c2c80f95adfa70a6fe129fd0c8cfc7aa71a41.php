<?php

/* tontineBundle:Pagne:edit.html.twig */
class __TwigTemplate_f8e7d2545c35e1cc17feb066ce5274fdea92a4861ef619ea515b626daf6509d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":default:index.html.twig", "tontineBundle:Pagne:edit.html.twig", 1);
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
        $__internal_f7e67b6a2394c7d5ee94445c3ac07940c5817f8ade0528dd31741d433e0e89f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7e67b6a2394c7d5ee94445c3ac07940c5817f8ade0528dd31741d433e0e89f1->enter($__internal_f7e67b6a2394c7d5ee94445c3ac07940c5817f8ade0528dd31741d433e0e89f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tontineBundle:Pagne:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7e67b6a2394c7d5ee94445c3ac07940c5817f8ade0528dd31741d433e0e89f1->leave($__internal_f7e67b6a2394c7d5ee94445c3ac07940c5817f8ade0528dd31741d433e0e89f1_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_8094aef5d2acd5f4ecc62a1b58ee2f18e0fc93b82943134561382d958ad2ec22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8094aef5d2acd5f4ecc62a1b58ee2f18e0fc93b82943134561382d958ad2ec22->enter($__internal_8094aef5d2acd5f4ecc62a1b58ee2f18e0fc93b82943134561382d958ad2ec22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h3>Modification des infos du tissu</h3>
    ";
        // line 5
        $this->loadTemplate("tontineBundle:Pagne:partials/form.html.twig", "tontineBundle:Pagne:edit.html.twig", 5)->display(array_merge($context, array("pagne" =>         // line 7
(isset($context["pagne"]) || array_key_exists("pagne", $context) ? $context["pagne"] : (function () { throw new Twig_Error_Runtime('Variable "pagne" does not exist.', 7, $this->getSourceContext()); })()), "form" =>         // line 8
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_pagne_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(),         // line 9
(isset($context["pagne"]) || array_key_exists("pagne", $context) ? $context["pagne"] : (function () { throw new Twig_Error_Runtime('Variable "pagne" does not exist.', 9, $this->getSourceContext()); })()), "id", array()))), "submit" => "Modifier")));
        
        $__internal_8094aef5d2acd5f4ecc62a1b58ee2f18e0fc93b82943134561382d958ad2ec22->leave($__internal_8094aef5d2acd5f4ecc62a1b58ee2f18e0fc93b82943134561382d958ad2ec22_prof);

    }

    // line 15
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_9ede2a3c23bb6707a37ebebb5384abff1f151539d8bc366affe9834a5e2fd3fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ede2a3c23bb6707a37ebebb5384abff1f151539d8bc366affe9834a5e2fd3fe->enter($__internal_9ede2a3c23bb6707a37ebebb5384abff1f151539d8bc366affe9834a5e2fd3fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 16
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
        
        $__internal_9ede2a3c23bb6707a37ebebb5384abff1f151539d8bc366affe9834a5e2fd3fe->leave($__internal_9ede2a3c23bb6707a37ebebb5384abff1f151539d8bc366affe9834a5e2fd3fe_prof);

    }

    public function getTemplateName()
    {
        return "tontineBundle:Pagne:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 16,  54 => 15,  47 => 9,  46 => 8,  45 => 7,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":default:index.html.twig\" %}

{% block content %}
    <h3>Modification des infos du tissu</h3>
    {% include 'tontineBundle:Pagne:partials/form.html.twig' 
        with { 
                pagne: pagne,
                form: form,
                action: path('tontine_pagne_edit', {'id':pagne.id}),
                submit: \"Modifier\"
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
{% endblock %}", "tontineBundle:Pagne:edit.html.twig", "/var/www/html/tontine/src/tontineBundle/Resources/views/Pagne/edit.html.twig");
    }
}
