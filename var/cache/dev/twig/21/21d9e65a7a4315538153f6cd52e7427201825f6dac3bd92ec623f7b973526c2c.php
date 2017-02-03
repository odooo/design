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
        $__internal_517a3f2e6106c5f5c65d22fce715c097f636322b6c0d339909fa97e71741d95a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_517a3f2e6106c5f5c65d22fce715c097f636322b6c0d339909fa97e71741d95a->enter($__internal_517a3f2e6106c5f5c65d22fce715c097f636322b6c0d339909fa97e71741d95a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_517a3f2e6106c5f5c65d22fce715c097f636322b6c0d339909fa97e71741d95a->leave($__internal_517a3f2e6106c5f5c65d22fce715c097f636322b6c0d339909fa97e71741d95a_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_7cbdd19140dfdbdf65d987fd788025055a8f00f41663bccabb714dde1b4704f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cbdd19140dfdbdf65d987fd788025055a8f00f41663bccabb714dde1b4704f4->enter($__internal_7cbdd19140dfdbdf65d987fd788025055a8f00f41663bccabb714dde1b4704f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    ";
        $this->loadTemplate("@tontine/Default/header.html.twig", "default/index.html.twig", 4)->display($context);
        
        $__internal_7cbdd19140dfdbdf65d987fd788025055a8f00f41663bccabb714dde1b4704f4->leave($__internal_7cbdd19140dfdbdf65d987fd788025055a8f00f41663bccabb714dde1b4704f4_prof);

    }

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7c578991302b19aedfeafb74f2fc97292430d88dc4875d515fcdd76315589a50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c578991302b19aedfeafb74f2fc97292430d88dc4875d515fcdd76315589a50->enter($__internal_7c578991302b19aedfeafb74f2fc97292430d88dc4875d515fcdd76315589a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_7c578991302b19aedfeafb74f2fc97292430d88dc4875d515fcdd76315589a50->leave($__internal_7c578991302b19aedfeafb74f2fc97292430d88dc4875d515fcdd76315589a50_prof);

    }

    // line 10
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_97326235d9a39ebc826d1240fd81536f0dfaf70d9ad7e5fdc75c6c5c731aca0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97326235d9a39ebc826d1240fd81536f0dfaf70d9ad7e5fdc75c6c5c731aca0c->enter($__internal_97326235d9a39ebc826d1240fd81536f0dfaf70d9ad7e5fdc75c6c5c731aca0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 11
        echo "                ";
        $this->loadTemplate("@tontine/Default/sidebar.html.twig", "default/index.html.twig", 11)->display($context);
        // line 12
        echo "            ";
        
        $__internal_97326235d9a39ebc826d1240fd81536f0dfaf70d9ad7e5fdc75c6c5c731aca0c->leave($__internal_97326235d9a39ebc826d1240fd81536f0dfaf70d9ad7e5fdc75c6c5c731aca0c_prof);

    }

    // line 17
    public function block_container($context, array $blocks = array())
    {
        $__internal_364fff195f3a624c49aa5d24417d96aaa05c651c66b10afdbcabbea60e9ec637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_364fff195f3a624c49aa5d24417d96aaa05c651c66b10afdbcabbea60e9ec637->enter($__internal_364fff195f3a624c49aa5d24417d96aaa05c651c66b10afdbcabbea60e9ec637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
        
        $__internal_364fff195f3a624c49aa5d24417d96aaa05c651c66b10afdbcabbea60e9ec637->leave($__internal_364fff195f3a624c49aa5d24417d96aaa05c651c66b10afdbcabbea60e9ec637_prof);

    }

    // line 20
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_01072bf61885e721d172b057c79f2598d051cf5cf28ae8920c4b3632d2a3994e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01072bf61885e721d172b057c79f2598d051cf5cf28ae8920c4b3632d2a3994e->enter($__internal_01072bf61885e721d172b057c79f2598d051cf5cf28ae8920c4b3632d2a3994e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

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
        
        $__internal_01072bf61885e721d172b057c79f2598d051cf5cf28ae8920c4b3632d2a3994e->leave($__internal_01072bf61885e721d172b057c79f2598d051cf5cf28ae8920c4b3632d2a3994e_prof);

    }

    // line 22
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_b1fd3d069057c7015d26a43c3d1170dcf8f4ab27d61274828ca9e7159af73310 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1fd3d069057c7015d26a43c3d1170dcf8f4ab27d61274828ca9e7159af73310->enter($__internal_b1fd3d069057c7015d26a43c3d1170dcf8f4ab27d61274828ca9e7159af73310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Global Design";
        
        $__internal_b1fd3d069057c7015d26a43c3d1170dcf8f4ab27d61274828ca9e7159af73310->leave($__internal_b1fd3d069057c7015d26a43c3d1170dcf8f4ab27d61274828ca9e7159af73310_prof);

    }

    // line 24
    public function block_page_quick_actions($context, array $blocks = array())
    {
        $__internal_e6b1b74a541aeba90500af103c341cd9e050be6321591e183ce58b2288296fb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6b1b74a541aeba90500af103c341cd9e050be6321591e183ce58b2288296fb7->enter($__internal_e6b1b74a541aeba90500af103c341cd9e050be6321591e183ce58b2288296fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_quick_actions"));

        
        $__internal_e6b1b74a541aeba90500af103c341cd9e050be6321591e183ce58b2288296fb7->leave($__internal_e6b1b74a541aeba90500af103c341cd9e050be6321591e183ce58b2288296fb7_prof);

    }

    // line 29
    public function block_content($context, array $blocks = array())
    {
        $__internal_600fedd32f692d17192a42be21dcdcd8f14a07fa36d24e3ad36bd1781f0f90f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_600fedd32f692d17192a42be21dcdcd8f14a07fa36d24e3ad36bd1781f0f90f5->enter($__internal_600fedd32f692d17192a42be21dcdcd8f14a07fa36d24e3ad36bd1781f0f90f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo "No content!";
        
        $__internal_600fedd32f692d17192a42be21dcdcd8f14a07fa36d24e3ad36bd1781f0f90f5->leave($__internal_600fedd32f692d17192a42be21dcdcd8f14a07fa36d24e3ad36bd1781f0f90f5_prof);

    }

    // line 34
    public function block_footer($context, array $blocks = array())
    {
        $__internal_caf88eda0fbf930638f4cb92ac7908461c9887bc8e64b122a47f8c70b8bb318a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caf88eda0fbf930638f4cb92ac7908461c9887bc8e64b122a47f8c70b8bb318a->enter($__internal_caf88eda0fbf930638f4cb92ac7908461c9887bc8e64b122a47f8c70b8bb318a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 35
        echo "    ";
        $this->loadTemplate("@tontine/Default/footer.html.twig", "default/index.html.twig", 35)->display($context);
        
        $__internal_caf88eda0fbf930638f4cb92ac7908461c9887bc8e64b122a47f8c70b8bb318a->leave($__internal_caf88eda0fbf930638f4cb92ac7908461c9887bc8e64b122a47f8c70b8bb318a_prof);

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
