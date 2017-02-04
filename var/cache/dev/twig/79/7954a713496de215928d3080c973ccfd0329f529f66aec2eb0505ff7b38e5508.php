<?php

/* default/index.html.twig */
class __TwigTemplate_10ddff2171c61409cc78631296ef9e70aa5788d43b209bdaf7b62e1679525b86 extends Twig_Template
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
        $__internal_96064e149008ddddc1d5940bd76a9e2f76fcf0c1b78188574cc489f87ec24297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96064e149008ddddc1d5940bd76a9e2f76fcf0c1b78188574cc489f87ec24297->enter($__internal_96064e149008ddddc1d5940bd76a9e2f76fcf0c1b78188574cc489f87ec24297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96064e149008ddddc1d5940bd76a9e2f76fcf0c1b78188574cc489f87ec24297->leave($__internal_96064e149008ddddc1d5940bd76a9e2f76fcf0c1b78188574cc489f87ec24297_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_75c87d206ae2de1a8ca839e99724aa39a5c70fb3a7a7b7175faa00233366e7cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75c87d206ae2de1a8ca839e99724aa39a5c70fb3a7a7b7175faa00233366e7cf->enter($__internal_75c87d206ae2de1a8ca839e99724aa39a5c70fb3a7a7b7175faa00233366e7cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    ";
        $this->loadTemplate("@tontine/Default/header.html.twig", "default/index.html.twig", 4)->display($context);
        
        $__internal_75c87d206ae2de1a8ca839e99724aa39a5c70fb3a7a7b7175faa00233366e7cf->leave($__internal_75c87d206ae2de1a8ca839e99724aa39a5c70fb3a7a7b7175faa00233366e7cf_prof);

    }

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c88ed3a5151a8911853d4507d4f29372b0f7d6bd5e8d51ccc040418c73d14052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c88ed3a5151a8911853d4507d4f29372b0f7d6bd5e8d51ccc040418c73d14052->enter($__internal_c88ed3a5151a8911853d4507d4f29372b0f7d6bd5e8d51ccc040418c73d14052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_c88ed3a5151a8911853d4507d4f29372b0f7d6bd5e8d51ccc040418c73d14052->leave($__internal_c88ed3a5151a8911853d4507d4f29372b0f7d6bd5e8d51ccc040418c73d14052_prof);

    }

    // line 10
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_ab721d0eed485ed3701a1cbac431a9cfaca3ac898733dfdaa7b44163576f98cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab721d0eed485ed3701a1cbac431a9cfaca3ac898733dfdaa7b44163576f98cc->enter($__internal_ab721d0eed485ed3701a1cbac431a9cfaca3ac898733dfdaa7b44163576f98cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 11
        echo "                ";
        $this->loadTemplate("@tontine/Default/sidebar.html.twig", "default/index.html.twig", 11)->display($context);
        // line 12
        echo "            ";
        
        $__internal_ab721d0eed485ed3701a1cbac431a9cfaca3ac898733dfdaa7b44163576f98cc->leave($__internal_ab721d0eed485ed3701a1cbac431a9cfaca3ac898733dfdaa7b44163576f98cc_prof);

    }

    // line 17
    public function block_container($context, array $blocks = array())
    {
        $__internal_ed797d218548421cdf165658461d8595e7e8e5173f51e72ce82775b497891c04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed797d218548421cdf165658461d8595e7e8e5173f51e72ce82775b497891c04->enter($__internal_ed797d218548421cdf165658461d8595e7e8e5173f51e72ce82775b497891c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
        
        $__internal_ed797d218548421cdf165658461d8595e7e8e5173f51e72ce82775b497891c04->leave($__internal_ed797d218548421cdf165658461d8595e7e8e5173f51e72ce82775b497891c04_prof);

    }

    // line 20
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_f2931aa7c148131cb55ea3df951142826fae6edf30ea9e773e72969ab4d6b02a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2931aa7c148131cb55ea3df951142826fae6edf30ea9e773e72969ab4d6b02a->enter($__internal_f2931aa7c148131cb55ea3df951142826fae6edf30ea9e773e72969ab4d6b02a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

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
        
        $__internal_f2931aa7c148131cb55ea3df951142826fae6edf30ea9e773e72969ab4d6b02a->leave($__internal_f2931aa7c148131cb55ea3df951142826fae6edf30ea9e773e72969ab4d6b02a_prof);

    }

    // line 22
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_1ec5c1277c658e6ae4822ce53c22013fb275f14415a84a57ca2b11af1dc69438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ec5c1277c658e6ae4822ce53c22013fb275f14415a84a57ca2b11af1dc69438->enter($__internal_1ec5c1277c658e6ae4822ce53c22013fb275f14415a84a57ca2b11af1dc69438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Global Design";
        
        $__internal_1ec5c1277c658e6ae4822ce53c22013fb275f14415a84a57ca2b11af1dc69438->leave($__internal_1ec5c1277c658e6ae4822ce53c22013fb275f14415a84a57ca2b11af1dc69438_prof);

    }

    // line 24
    public function block_page_quick_actions($context, array $blocks = array())
    {
        $__internal_6c2c73be16f37e407f82cb71e8c7c477f1129445f97f891f3464c4d1f663dda5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c2c73be16f37e407f82cb71e8c7c477f1129445f97f891f3464c4d1f663dda5->enter($__internal_6c2c73be16f37e407f82cb71e8c7c477f1129445f97f891f3464c4d1f663dda5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_quick_actions"));

        
        $__internal_6c2c73be16f37e407f82cb71e8c7c477f1129445f97f891f3464c4d1f663dda5->leave($__internal_6c2c73be16f37e407f82cb71e8c7c477f1129445f97f891f3464c4d1f663dda5_prof);

    }

    // line 29
    public function block_content($context, array $blocks = array())
    {
        $__internal_e61fb0fb054b45c8f14df5d5fecc0162850559f1fff5223dfbbe87fa1354abb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e61fb0fb054b45c8f14df5d5fecc0162850559f1fff5223dfbbe87fa1354abb1->enter($__internal_e61fb0fb054b45c8f14df5d5fecc0162850559f1fff5223dfbbe87fa1354abb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo "No content!";
        
        $__internal_e61fb0fb054b45c8f14df5d5fecc0162850559f1fff5223dfbbe87fa1354abb1->leave($__internal_e61fb0fb054b45c8f14df5d5fecc0162850559f1fff5223dfbbe87fa1354abb1_prof);

    }

    // line 34
    public function block_footer($context, array $blocks = array())
    {
        $__internal_0387a8b03c2dd7e48a78a05526948c63ec1c9f1fe32d54cf111fdb9983e8a5d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0387a8b03c2dd7e48a78a05526948c63ec1c9f1fe32d54cf111fdb9983e8a5d8->enter($__internal_0387a8b03c2dd7e48a78a05526948c63ec1c9f1fe32d54cf111fdb9983e8a5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 35
        echo "    ";
        $this->loadTemplate("@tontine/Default/footer.html.twig", "default/index.html.twig", 35)->display($context);
        
        $__internal_0387a8b03c2dd7e48a78a05526948c63ec1c9f1fe32d54cf111fdb9983e8a5d8->leave($__internal_0387a8b03c2dd7e48a78a05526948c63ec1c9f1fe32d54cf111fdb9983e8a5d8_prof);

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
", "default/index.html.twig", "/var/www/html/tontine2/app/Resources/views/default/index.html.twig");
    }
}
