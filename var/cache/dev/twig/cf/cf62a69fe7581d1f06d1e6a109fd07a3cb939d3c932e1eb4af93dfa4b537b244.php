<?php

/* tontineBundle:Categorie:new.html.twig */
class __TwigTemplate_d665daecc14cc63922933e6d1e9f66f7468959a705107e0f46335eb3b3c40d24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "tontineBundle:Categorie:new.html.twig", 1);
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
        $__internal_a635a17bf95d9abc7fa27836449363614b59820a9372994c0db2a8b5b2874849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a635a17bf95d9abc7fa27836449363614b59820a9372994c0db2a8b5b2874849->enter($__internal_a635a17bf95d9abc7fa27836449363614b59820a9372994c0db2a8b5b2874849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tontineBundle:Categorie:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a635a17bf95d9abc7fa27836449363614b59820a9372994c0db2a8b5b2874849->leave($__internal_a635a17bf95d9abc7fa27836449363614b59820a9372994c0db2a8b5b2874849_prof);

    }

    // line 3
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_28cee86df560f2353d8c612a72ac6d4bafddb0f997eaee469e218056c3b4ded8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28cee86df560f2353d8c612a72ac6d4bafddb0f997eaee469e218056c3b4ded8->enter($__internal_28cee86df560f2353d8c612a72ac6d4bafddb0f997eaee469e218056c3b4ded8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 4
        echo "    <h1>Creation d'une catégorie</h1>
";
        
        $__internal_28cee86df560f2353d8c612a72ac6d4bafddb0f997eaee469e218056c3b4ded8->leave($__internal_28cee86df560f2353d8c612a72ac6d4bafddb0f997eaee469e218056c3b4ded8_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_07c98375bada818bb92679338bb887a51ebce6812cd97d966e62ac9e1bab2f17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07c98375bada818bb92679338bb887a51ebce6812cd97d966e62ac9e1bab2f17->enter($__internal_07c98375bada818bb92679338bb887a51ebce6812cd97d966e62ac9e1bab2f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "        <div class=\"row\">
            <div class=\"col-sm-offset-3 col-sm-6 well\">
                ";
        // line 10
        $this->loadTemplate("tontineBundle:Categorie:partials/form.html.twig", "tontineBundle:Categorie:new.html.twig", 10)->display(array_merge($context, array("submit" => "Valider")));
        // line 11
        echo "            </div>            
        </div>

";
        
        $__internal_07c98375bada818bb92679338bb887a51ebce6812cd97d966e62ac9e1bab2f17->leave($__internal_07c98375bada818bb92679338bb887a51ebce6812cd97d966e62ac9e1bab2f17_prof);

    }

    // line 16
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_0dc3dcc59de9498b726a637c1e8d45b29c6bff40b638b042f899419ac9316685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dc3dcc59de9498b726a637c1e8d45b29c6bff40b638b042f899419ac9316685->enter($__internal_0dc3dcc59de9498b726a637c1e8d45b29c6bff40b638b042f899419ac9316685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_0dc3dcc59de9498b726a637c1e8d45b29c6bff40b638b042f899419ac9316685->leave($__internal_0dc3dcc59de9498b726a637c1e8d45b29c6bff40b638b042f899419ac9316685_prof);

    }

    public function getTemplateName()
    {
        return "tontineBundle:Categorie:new.html.twig";
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
    <h1>Creation d'une catégorie</h1>
{% endblock %}

{% block content %}
        <div class=\"row\">
            <div class=\"col-sm-offset-3 col-sm-6 well\">
                {% include 'tontineBundle:Categorie:partials/form.html.twig' with { submit: 'Valider' } %}
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
{% endblock %}", "tontineBundle:Categorie:new.html.twig", "/var/www/html/tontine/src/tontineBundle/Resources/views/Categorie/new.html.twig");
    }
}
