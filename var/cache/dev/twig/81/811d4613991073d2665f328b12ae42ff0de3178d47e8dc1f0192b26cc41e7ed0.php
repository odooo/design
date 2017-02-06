<?php

/* default/yop-layout.html.twig */
class __TwigTemplate_1adadb26966e15beddf438b0dd61d15e5da1f57792906a241a8a9a16d20e9c3c extends Twig_Template
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
        $__internal_12036936ebcb287fb98c38b986eb0ee3a69347abe2d0c2e9cb215f7928833455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12036936ebcb287fb98c38b986eb0ee3a69347abe2d0c2e9cb215f7928833455->enter($__internal_12036936ebcb287fb98c38b986eb0ee3a69347abe2d0c2e9cb215f7928833455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/yop-layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12036936ebcb287fb98c38b986eb0ee3a69347abe2d0c2e9cb215f7928833455->leave($__internal_12036936ebcb287fb98c38b986eb0ee3a69347abe2d0c2e9cb215f7928833455_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a1f1e133b1116690674451aaee9250f078619d5558cfecbed753ba98ca24f5e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1f1e133b1116690674451aaee9250f078619d5558cfecbed753ba98ca24f5e1->enter($__internal_a1f1e133b1116690674451aaee9250f078619d5558cfecbed753ba98ca24f5e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/tontine/css/Yop.css"), "html", null, true);
        echo "\">
";
        
        $__internal_a1f1e133b1116690674451aaee9250f078619d5558cfecbed753ba98ca24f5e1->leave($__internal_a1f1e133b1116690674451aaee9250f078619d5558cfecbed753ba98ca24f5e1_prof);

    }

    // line 8
    public function block_header($context, array $blocks = array())
    {
        $__internal_139e53301c72a68769de4da102c6fdde902aa4d3092ef8561d58fb2df5348ce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_139e53301c72a68769de4da102c6fdde902aa4d3092ef8561d58fb2df5348ce0->enter($__internal_139e53301c72a68769de4da102c6fdde902aa4d3092ef8561d58fb2df5348ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 9
        echo "    ";
        $this->loadTemplate("@tontine/Default/header.html.twig", "default/yop-layout.html.twig", 9)->display($context);
        
        $__internal_139e53301c72a68769de4da102c6fdde902aa4d3092ef8561d58fb2df5348ce0->leave($__internal_139e53301c72a68769de4da102c6fdde902aa4d3092ef8561d58fb2df5348ce0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1c4fc12cc34760e6fe73afd1678c220e5f736b0d29fd862b2682397039655ab6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c4fc12cc34760e6fe73afd1678c220e5f736b0d29fd862b2682397039655ab6->enter($__internal_1c4fc12cc34760e6fe73afd1678c220e5f736b0d29fd862b2682397039655ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_1c4fc12cc34760e6fe73afd1678c220e5f736b0d29fd862b2682397039655ab6->leave($__internal_1c4fc12cc34760e6fe73afd1678c220e5f736b0d29fd862b2682397039655ab6_prof);

    }

    // line 15
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_22b1164befbaf859e098f49e13496c827e22bb4ea6687506be5eab77056d209e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22b1164befbaf859e098f49e13496c827e22bb4ea6687506be5eab77056d209e->enter($__internal_22b1164befbaf859e098f49e13496c827e22bb4ea6687506be5eab77056d209e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 16
        echo "                ";
        $this->loadTemplate("@tontine/Default/sidebar.html.twig", "default/yop-layout.html.twig", 16)->display($context);
        // line 17
        echo "            ";
        
        $__internal_22b1164befbaf859e098f49e13496c827e22bb4ea6687506be5eab77056d209e->leave($__internal_22b1164befbaf859e098f49e13496c827e22bb4ea6687506be5eab77056d209e_prof);

    }

    // line 22
    public function block_container($context, array $blocks = array())
    {
        $__internal_f2e80ce7f641c2cbf314592186e79ba9ff448edde0b430de2914463ef369bf02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2e80ce7f641c2cbf314592186e79ba9ff448edde0b430de2914463ef369bf02->enter($__internal_f2e80ce7f641c2cbf314592186e79ba9ff448edde0b430de2914463ef369bf02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 23
        echo "    <div class=\"content-wrapper\" id=\"yop-app\" style=\"position: relative;\">
    ";
        // line 24
        $this->displayBlock('content', $context, $blocks);
        // line 25
        echo "    </div>
";
        
        $__internal_f2e80ce7f641c2cbf314592186e79ba9ff448edde0b430de2914463ef369bf02->leave($__internal_f2e80ce7f641c2cbf314592186e79ba9ff448edde0b430de2914463ef369bf02_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_136507ecf68801a846f385b43dc486aff707e432d66639c5b952aa46e5ca249c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_136507ecf68801a846f385b43dc486aff707e432d66639c5b952aa46e5ca249c->enter($__internal_136507ecf68801a846f385b43dc486aff707e432d66639c5b952aa46e5ca249c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_136507ecf68801a846f385b43dc486aff707e432d66639c5b952aa46e5ca249c->leave($__internal_136507ecf68801a846f385b43dc486aff707e432d66639c5b952aa46e5ca249c_prof);

    }

    // line 32
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_036af777915a0be942778983eef4b56501533febc7f7ae97383a1801ddaf068b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_036af777915a0be942778983eef4b56501533febc7f7ae97383a1801ddaf068b->enter($__internal_036af777915a0be942778983eef4b56501533febc7f7ae97383a1801ddaf068b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_036af777915a0be942778983eef4b56501533febc7f7ae97383a1801ddaf068b->leave($__internal_036af777915a0be942778983eef4b56501533febc7f7ae97383a1801ddaf068b_prof);

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
", "default/yop-layout.html.twig", "/var/www/html/tontine/app/Resources/views/default/yop-layout.html.twig");
    }
}
