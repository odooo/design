<?php

/* default/index.html.twig */
class __TwigTemplate_b4fa52091be5204a590fdb2a2c4259da424b4088e38679e41c6e7fc6e1e977e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
            'sidebar' => array($this, 'block_sidebar'),
            'container' => array($this, 'block_container'),
            'content_header' => array($this, 'block_content_header'),
            'page_title' => array($this, 'block_page_title'),
            'page_quick_actions' => array($this, 'block_page_quick_actions'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c8a32b3657514cb4ac1e7fcec6468cf2ec7a1e37d6586c0b991d81d936634f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c8a32b3657514cb4ac1e7fcec6468cf2ec7a1e37d6586c0b991d81d936634f1->enter($__internal_7c8a32b3657514cb4ac1e7fcec6468cf2ec7a1e37d6586c0b991d81d936634f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c8a32b3657514cb4ac1e7fcec6468cf2ec7a1e37d6586c0b991d81d936634f1->leave($__internal_7c8a32b3657514cb4ac1e7fcec6468cf2ec7a1e37d6586c0b991d81d936634f1_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_2acd962a4992478547ee6258b1e2b8a6dce984557a08ecfa5e6127c781b6b53d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2acd962a4992478547ee6258b1e2b8a6dce984557a08ecfa5e6127c781b6b53d->enter($__internal_2acd962a4992478547ee6258b1e2b8a6dce984557a08ecfa5e6127c781b6b53d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    ";
        $this->loadTemplate("@tontine/Default/header.html.twig", "default/index.html.twig", 4)->display($context);
        
        $__internal_2acd962a4992478547ee6258b1e2b8a6dce984557a08ecfa5e6127c781b6b53d->leave($__internal_2acd962a4992478547ee6258b1e2b8a6dce984557a08ecfa5e6127c781b6b53d_prof);

    }

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        $__internal_295ed1a0dfcd00e6c1af6342f10ff20f48c0dcb8cbdf1b45878a8cca8600c5a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_295ed1a0dfcd00e6c1af6342f10ff20f48c0dcb8cbdf1b45878a8cca8600c5a5->enter($__internal_295ed1a0dfcd00e6c1af6342f10ff20f48c0dcb8cbdf1b45878a8cca8600c5a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 8
        echo "    <div class=\"main-sidebar\">
        <div class=\"sidebar\">
            ";
        // line 10
        $this->displayBlock('sidebar', $context, $blocks);
        // line 13
        echo "        </div>
    </div>
";
        
        $__internal_295ed1a0dfcd00e6c1af6342f10ff20f48c0dcb8cbdf1b45878a8cca8600c5a5->leave($__internal_295ed1a0dfcd00e6c1af6342f10ff20f48c0dcb8cbdf1b45878a8cca8600c5a5_prof);

    }

    // line 10
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_e1c8d3d8a651854917b4d90d6e06509548fd6f19d360d35b0f72c8b5e42a7c71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1c8d3d8a651854917b4d90d6e06509548fd6f19d360d35b0f72c8b5e42a7c71->enter($__internal_e1c8d3d8a651854917b4d90d6e06509548fd6f19d360d35b0f72c8b5e42a7c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 11
        echo "                ";
        $this->loadTemplate("@tontine/Default/sidebar.html.twig", "default/index.html.twig", 11)->display($context);
        // line 12
        echo "            ";
        
        $__internal_e1c8d3d8a651854917b4d90d6e06509548fd6f19d360d35b0f72c8b5e42a7c71->leave($__internal_e1c8d3d8a651854917b4d90d6e06509548fd6f19d360d35b0f72c8b5e42a7c71_prof);

    }

    // line 17
    public function block_container($context, array $blocks = array())
    {
        $__internal_d8ec59b78d1aa2ed77bb638b731929b295d86f52dcc427bc41077bb524b5d5f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8ec59b78d1aa2ed77bb638b731929b295d86f52dcc427bc41077bb524b5d5f3->enter($__internal_d8ec59b78d1aa2ed77bb638b731929b295d86f52dcc427bc41077bb524b5d5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 18
        echo "    <div class=\"content-wrapper\">
        <section class=\"content-header\">
            ";
        // line 20
        $this->displayBlock('content_header', $context, $blocks);
        // line 27
        echo "        </section>
        <section class=\"content putHtml\">
            ";
        // line 29
        $this->displayBlock('content', $context, $blocks);
        // line 30
        echo "        </section>
    </div>
";
        
        $__internal_d8ec59b78d1aa2ed77bb638b731929b295d86f52dcc427bc41077bb524b5d5f3->leave($__internal_d8ec59b78d1aa2ed77bb638b731929b295d86f52dcc427bc41077bb524b5d5f3_prof);

    }

    // line 20
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_f9fa4291c8c56045f5e4d110474cf6f8e8ec118dcb71e6db45abb0d55a55331d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9fa4291c8c56045f5e4d110474cf6f8e8ec118dcb71e6db45abb0d55a55331d->enter($__internal_f9fa4291c8c56045f5e4d110474cf6f8e8ec118dcb71e6db45abb0d55a55331d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 21
        echo "                <h1>
                    ";
        // line 22
        $this->displayBlock('page_title', $context, $blocks);
        // line 23
        echo "
                    <div class=\"page-quick-actions pull-right\">";
        // line 24
        $this->displayBlock('page_quick_actions', $context, $blocks);
        echo "</div>
                </h1>
            ";
        
        $__internal_f9fa4291c8c56045f5e4d110474cf6f8e8ec118dcb71e6db45abb0d55a55331d->leave($__internal_f9fa4291c8c56045f5e4d110474cf6f8e8ec118dcb71e6db45abb0d55a55331d_prof);

    }

    // line 22
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_03347f145fa05d9c4e8dfab6f41991201158a913e24aecbc42ea7d8467ff970c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03347f145fa05d9c4e8dfab6f41991201158a913e24aecbc42ea7d8467ff970c->enter($__internal_03347f145fa05d9c4e8dfab6f41991201158a913e24aecbc42ea7d8467ff970c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Global Design";
        
        $__internal_03347f145fa05d9c4e8dfab6f41991201158a913e24aecbc42ea7d8467ff970c->leave($__internal_03347f145fa05d9c4e8dfab6f41991201158a913e24aecbc42ea7d8467ff970c_prof);

    }

    // line 24
    public function block_page_quick_actions($context, array $blocks = array())
    {
        $__internal_8d4628ca4d800d584fccdf129ef76e8c0f841d96f2ff4f91bb7377b5fda97ee9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d4628ca4d800d584fccdf129ef76e8c0f841d96f2ff4f91bb7377b5fda97ee9->enter($__internal_8d4628ca4d800d584fccdf129ef76e8c0f841d96f2ff4f91bb7377b5fda97ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_quick_actions"));

        
        $__internal_8d4628ca4d800d584fccdf129ef76e8c0f841d96f2ff4f91bb7377b5fda97ee9->leave($__internal_8d4628ca4d800d584fccdf129ef76e8c0f841d96f2ff4f91bb7377b5fda97ee9_prof);

    }

    // line 29
    public function block_content($context, array $blocks = array())
    {
        $__internal_1e53bd49d6dcef12aea668799e12812de9260afa8916be1102f36ff206b6b361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e53bd49d6dcef12aea668799e12812de9260afa8916be1102f36ff206b6b361->enter($__internal_1e53bd49d6dcef12aea668799e12812de9260afa8916be1102f36ff206b6b361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo "No content!";
        
        $__internal_1e53bd49d6dcef12aea668799e12812de9260afa8916be1102f36ff206b6b361->leave($__internal_1e53bd49d6dcef12aea668799e12812de9260afa8916be1102f36ff206b6b361_prof);

    }

    // line 34
    public function block_footer($context, array $blocks = array())
    {
        $__internal_e35e1893c96a5412e5085910f63278026de4cab29d87ce1d0b417f3e23df7f68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e35e1893c96a5412e5085910f63278026de4cab29d87ce1d0b417f3e23df7f68->enter($__internal_e35e1893c96a5412e5085910f63278026de4cab29d87ce1d0b417f3e23df7f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 35
        echo "    ";
        $this->loadTemplate("@tontine/Default/footer.html.twig", "default/index.html.twig", 35)->display($context);
        
        $__internal_e35e1893c96a5412e5085910f63278026de4cab29d87ce1d0b417f3e23df7f68->leave($__internal_e35e1893c96a5412e5085910f63278026de4cab29d87ce1d0b417f3e23df7f68_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 35,  179 => 34,  167 => 29,  156 => 24,  144 => 22,  134 => 24,  131 => 23,  129 => 22,  126 => 21,  120 => 20,  111 => 30,  109 => 29,  105 => 27,  103 => 20,  99 => 18,  93 => 17,  86 => 12,  83 => 11,  77 => 10,  68 => 13,  66 => 10,  62 => 8,  56 => 7,  48 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block header %}
    {% include \"@tontine/Default/header.html.twig\" %}
{% endblock %}

{% block menu %}
    <div class=\"main-sidebar\">
        <div class=\"sidebar\">
            {% block sidebar %}
                {% include \"@tontine/Default/sidebar.html.twig\" %}
            {% endblock %}
        </div>
    </div>
{% endblock %}

{% block container %}
    <div class=\"content-wrapper\">
        <section class=\"content-header\">
            {% block content_header %}
                <h1>
                    {% block page_title %}Global Design{% endblock %}

                    <div class=\"page-quick-actions pull-right\">{% block page_quick_actions %}{% endblock %}</div>
                </h1>
            {% endblock %}
        </section>
        <section class=\"content putHtml\">
            {% block content %}No content!{% endblock %}
        </section>
    </div>
{% endblock %}

{% block footer %}
    {% include \"@tontine/Default/footer.html.twig\" %}
{% endblock %}
", "default/index.html.twig", "/var/www/html/tontine/app/Resources/views/default/index.html.twig");
    }
}
