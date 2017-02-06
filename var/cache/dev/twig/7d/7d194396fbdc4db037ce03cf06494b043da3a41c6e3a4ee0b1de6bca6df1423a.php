<?php

/* default/yop-layout.html.twig */
class __TwigTemplate_0a376713a59c9b39b3bcd96661aefd2c2d625a55552187477597ce86736858c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/yop-layout.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
            'sidebar' => array($this, 'block_sidebar'),
            'container' => array($this, 'block_container'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8efa7865a32961d1f52a1ff14f59811e22fccdfebd1d7840067ab84f41555859 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8efa7865a32961d1f52a1ff14f59811e22fccdfebd1d7840067ab84f41555859->enter($__internal_8efa7865a32961d1f52a1ff14f59811e22fccdfebd1d7840067ab84f41555859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/yop-layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8efa7865a32961d1f52a1ff14f59811e22fccdfebd1d7840067ab84f41555859->leave($__internal_8efa7865a32961d1f52a1ff14f59811e22fccdfebd1d7840067ab84f41555859_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a29a3ee249bae3f258c9ccc0a56005b416cafb066c505e0c6df9c801615e8827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a29a3ee249bae3f258c9ccc0a56005b416cafb066c505e0c6df9c801615e8827->enter($__internal_a29a3ee249bae3f258c9ccc0a56005b416cafb066c505e0c6df9c801615e8827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/tontine/css/Yop.css"), "html", null, true);
        echo "\">
";
        
        $__internal_a29a3ee249bae3f258c9ccc0a56005b416cafb066c505e0c6df9c801615e8827->leave($__internal_a29a3ee249bae3f258c9ccc0a56005b416cafb066c505e0c6df9c801615e8827_prof);

    }

    // line 8
    public function block_header($context, array $blocks = array())
    {
        $__internal_6896a32fa054944d8bcb314cb588dff5193b695deab074f856bf82199a8fe0de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6896a32fa054944d8bcb314cb588dff5193b695deab074f856bf82199a8fe0de->enter($__internal_6896a32fa054944d8bcb314cb588dff5193b695deab074f856bf82199a8fe0de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 9
        echo "    ";
        $this->loadTemplate("@tontine/Default/header.html.twig", "default/yop-layout.html.twig", 9)->display($context);
        
        $__internal_6896a32fa054944d8bcb314cb588dff5193b695deab074f856bf82199a8fe0de->leave($__internal_6896a32fa054944d8bcb314cb588dff5193b695deab074f856bf82199a8fe0de_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ee513b0553efbab9a04784efc0e1fd104bdbd9cf40ff9c4f917cfe495a30b971 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee513b0553efbab9a04784efc0e1fd104bdbd9cf40ff9c4f917cfe495a30b971->enter($__internal_ee513b0553efbab9a04784efc0e1fd104bdbd9cf40ff9c4f917cfe495a30b971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <aside class=\"main-sidebar\">
        <section class=\"sidebar\">
            ";
        // line 15
        $this->displayBlock('sidebar', $context, $blocks);
        // line 18
        echo "        </section>
    </aside>
";
        
        $__internal_ee513b0553efbab9a04784efc0e1fd104bdbd9cf40ff9c4f917cfe495a30b971->leave($__internal_ee513b0553efbab9a04784efc0e1fd104bdbd9cf40ff9c4f917cfe495a30b971_prof);

    }

    // line 15
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_12baafaea8fe5bba606e887bd47f17796c4c2324ce3a0bf4fb294c52d2fdea8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12baafaea8fe5bba606e887bd47f17796c4c2324ce3a0bf4fb294c52d2fdea8c->enter($__internal_12baafaea8fe5bba606e887bd47f17796c4c2324ce3a0bf4fb294c52d2fdea8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 16
        echo "                ";
        $this->loadTemplate("@tontine/Default/sidebar.html.twig", "default/yop-layout.html.twig", 16)->display($context);
        // line 17
        echo "            ";
        
        $__internal_12baafaea8fe5bba606e887bd47f17796c4c2324ce3a0bf4fb294c52d2fdea8c->leave($__internal_12baafaea8fe5bba606e887bd47f17796c4c2324ce3a0bf4fb294c52d2fdea8c_prof);

    }

    // line 22
    public function block_container($context, array $blocks = array())
    {
        $__internal_efad3b8a0095894076b7e3ab85d720865b925c498e08af83d7d553488a131ce5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efad3b8a0095894076b7e3ab85d720865b925c498e08af83d7d553488a131ce5->enter($__internal_efad3b8a0095894076b7e3ab85d720865b925c498e08af83d7d553488a131ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 23
        echo "    <div class=\"content-wrapper\" id=\"yop-app\" style=\"position: relative;\">
    ";
        // line 24
        $this->displayBlock('content', $context, $blocks);
        // line 25
        echo "    </div>
";
        
        $__internal_efad3b8a0095894076b7e3ab85d720865b925c498e08af83d7d553488a131ce5->leave($__internal_efad3b8a0095894076b7e3ab85d720865b925c498e08af83d7d553488a131ce5_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_38322f9f8f880630ca70f155764cf8e1a95dc27367292b47cd05f350d8b3c729 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38322f9f8f880630ca70f155764cf8e1a95dc27367292b47cd05f350d8b3c729->enter($__internal_38322f9f8f880630ca70f155764cf8e1a95dc27367292b47cd05f350d8b3c729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_38322f9f8f880630ca70f155764cf8e1a95dc27367292b47cd05f350d8b3c729->leave($__internal_38322f9f8f880630ca70f155764cf8e1a95dc27367292b47cd05f350d8b3c729_prof);

    }

    // line 32
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_fff2b96e081dec58ca26b383501bb4afb2fa499ff4d14174b5701063b39b0be6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fff2b96e081dec58ca26b383501bb4afb2fa499ff4d14174b5701063b39b0be6->enter($__internal_fff2b96e081dec58ca26b383501bb4afb2fa499ff4d14174b5701063b39b0be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 33
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/tontine/js/yop.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function() {
            Yop.mount('#yop-app');

            Yop.onDom(function() {
                refreshDatetimepicker();
                refreshDatepicker();
                refreshSelect2();
                \$('[data-select=\"awesome-selector\"]').awesomeSelector();
            });
        });
    </script>

    <script src='";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/tontine/js/client.js"), "html", null, true);
        echo "'></script>
    <script src='";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/tontine/js/tontine.js"), "html", null, true);
        echo "'></script>
    <script src='";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/tontine/js/visite.js"), "html", null, true);
        echo "'></script>
    <script src='";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/tontine/js/contrat.js"), "html", null, true);
        echo "'></script>
    <script src='";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/tontine/js/conditiongenerale.js"), "html", null, true);
        echo "'></script>     
    <script src='";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/tontine/js/fincontrat.js"), "html", null, true);
        echo "'></script>     
    <script src='";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/tontine/js/resiliationcontrat.js"), "html", null, true);
        echo "'></script>     
    <script src='";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/tontine/js/fincontrat.js"), "html", null, true);
        echo "'></script>    
";
        
        $__internal_fff2b96e081dec58ca26b383501bb4afb2fa499ff4d14174b5701063b39b0be6->leave($__internal_fff2b96e081dec58ca26b383501bb4afb2fa499ff4d14174b5701063b39b0be6_prof);

    }

    public function getTemplateName()
    {
        return "default/yop-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 55,  193 => 54,  189 => 53,  185 => 52,  181 => 51,  177 => 50,  173 => 49,  169 => 48,  152 => 34,  147 => 33,  141 => 32,  130 => 24,  122 => 25,  120 => 24,  117 => 23,  111 => 22,  104 => 17,  101 => 16,  95 => 15,  86 => 18,  84 => 15,  80 => 13,  74 => 12,  66 => 9,  60 => 8,  51 => 5,  46 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/tontine/css/Yop.css') }}\">
{% endblock %}

{% block header %}
    {% include \"@tontine/Default/header.html.twig\" %}
{% endblock %}

{% block menu %}
    <aside class=\"main-sidebar\">
        <section class=\"sidebar\">
            {% block sidebar %}
                {% include \"@tontine/Default/sidebar.html.twig\" %}
            {% endblock %}
        </section>
    </aside>
{% endblock %}

{% block container %}
    <div class=\"content-wrapper\" id=\"yop-app\" style=\"position: relative;\">
    {% block content %}{% endblock %}
    </div>
{% endblock %}

{#{% block footer %}
    {% include \"@tontine/Default/footer.html.twig\" %}
{% endblock %}#}

{% block javascript %}
    {{ parent() }}
    <script src=\"{{ asset('bundles/tontine/js/yop.js') }}\"></script>
    <script>
        \$(function() {
            Yop.mount('#yop-app');

            Yop.onDom(function() {
                refreshDatetimepicker();
                refreshDatepicker();
                refreshSelect2();
                \$('[data-select=\"awesome-selector\"]').awesomeSelector();
            });
        });
    </script>

    <script src='{{ asset('bundles/tontine/js/client.js') }}'></script>
    <script src='{{ asset('bundles/tontine/js/tontine.js') }}'></script>
    <script src='{{ asset('bundles/tontine/js/visite.js') }}'></script>
    <script src='{{ asset('bundles/tontine/js/contrat.js') }}'></script>
    <script src='{{ asset('bundles/tontine/js/conditiongenerale.js') }}'></script>     
    <script src='{{ asset('bundles/tontine/js/fincontrat.js') }}'></script>     
    <script src='{{ asset('bundles/tontine/js/resiliationcontrat.js') }}'></script>     
    <script src='{{ asset('bundles/tontine/js/fincontrat.js') }}'></script>    
{% endblock %}
", "default/yop-layout.html.twig", "/var/www/html/tontine2/app/Resources/views/default/yop-layout.html.twig");
    }
}
