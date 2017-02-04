<?php

/* GuzzleBundle::debug.html.twig */
class __TwigTemplate_2c31713b9292f074b255dad01127ae1096f43f51e11ee094523c724243d37c66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "GuzzleBundle::debug.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'head' => array($this, 'block_head'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3806379e2e2fb96b493dbb74acbdea9447f1f81acf15da21fc6639703b680d62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3806379e2e2fb96b493dbb74acbdea9447f1f81acf15da21fc6639703b680d62->enter($__internal_3806379e2e2fb96b493dbb74acbdea9447f1f81acf15da21fc6639703b680d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GuzzleBundle::debug.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3806379e2e2fb96b493dbb74acbdea9447f1f81acf15da21fc6639703b680d62->leave($__internal_3806379e2e2fb96b493dbb74acbdea9447f1f81acf15da21fc6639703b680d62_prof);

    }

    // line 4
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bd514d7d5438acd5525792d48febc21d006bd955adad0b535cc5ae6db825a289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd514d7d5438acd5525792d48febc21d006bd955adad0b535cc5ae6db825a289->enter($__internal_bd514d7d5438acd5525792d48febc21d006bd955adad0b535cc5ae6db825a289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 5
        echo "
    ";
        // line 6
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 6, $this->getSourceContext()); })()), "callCount", array()) == 0)) {
            // line 7
            echo "        ";
            $context["color"] = "grey";
            // line 8
            echo "    ";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 8, $this->getSourceContext()); })()), "errorCount", array()) > 0)) {
            // line 9
            echo "        ";
            $context["color"] = "red";
            // line 10
            echo "    ";
        } else {
            // line 11
            echo "        ";
            $context["color"] = "green";
            // line 12
            echo "    ";
        }
        // line 13
        echo "
    ";
        // line 14
        ob_start();
        // line 15
        echo "        ";
        echo twig_include($this->env, $context, "@Guzzle/Icons/logo.svg.twig");
        echo "
        <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new Twig_Error_Runtime('Variable "color" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
        echo "\">
            ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 17, $this->getSourceContext()); })()), "callCount", array()), "html", null, true);
        echo "
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 20
        echo "
    ";
        // line 21
        ob_start();
        // line 22
        echo "
        <div class=\"sf-toolbar-info-piece\">
            <b>API Calls</b>
            <span>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 25, $this->getSourceContext()); })()), "callCount", array()), "html", null, true);
        echo "</span>
        </div>

        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            ";
        // line 30
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 30, $this->getSourceContext()); })()), "totalTime", array()) > 1)) {
            // line 31
            echo "                <span>";
            echo twig_escape_filter($this->env, sprintf("%0.2f", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 31, $this->getSourceContext()); })()), "totalTime", array())), "html", null, true);
            echo " s</span>
            ";
        } else {
            // line 33
            echo "                <span>";
            echo twig_escape_filter($this->env, sprintf("%0.0f", (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 33, $this->getSourceContext()); })()), "totalTime", array()) * 1000)), "html", null, true);
            echo " ms</span>
            ";
        }
        // line 35
        echo "        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 37
        echo "
    ";
        // line 38
        $this->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig", "GuzzleBundle::debug.html.twig", 38)->display(array_merge($context, array("link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_url" does not exist.', 38, $this->getSourceContext()); })()))));
        
        $__internal_bd514d7d5438acd5525792d48febc21d006bd955adad0b535cc5ae6db825a289->leave($__internal_bd514d7d5438acd5525792d48febc21d006bd955adad0b535cc5ae6db825a289_prof);

    }

    // line 42
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f832d7ff441183c551d928b270579be84487a19715cd13015fa3d15ef6a643ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f832d7ff441183c551d928b270579be84487a19715cd13015fa3d15ef6a643ac->enter($__internal_f832d7ff441183c551d928b270579be84487a19715cd13015fa3d15ef6a643ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 43
        echo "
    <span class=\"label\">
        <span class=\"icon\">
            ";
        // line 46
        echo twig_include($this->env, $context, "@Guzzle/Icons/logo.svg.twig");
        echo "
        </span>
        <strong>Guzzle</strong>
        <span class=\"count\">
            <span>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 50, $this->getSourceContext()); })()), "callCount", array()), "html", null, true);
        echo "</span>
        </span>
    </span>
";
        
        $__internal_f832d7ff441183c551d928b270579be84487a19715cd13015fa3d15ef6a643ac->leave($__internal_f832d7ff441183c551d928b270579be84487a19715cd13015fa3d15ef6a643ac_prof);

    }

    // line 56
    public function block_head($context, array $blocks = array())
    {
        $__internal_53de4c9dab5334b154547bf3857098460d723ca2475b8c50d579abc4f0a12f68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53de4c9dab5334b154547bf3857098460d723ca2475b8c50d579abc4f0a12f68->enter($__internal_53de4c9dab5334b154547bf3857098460d723ca2475b8c50d579abc4f0a12f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 57
        echo "
    ";
        // line 58
        $this->displayParentBlock("head", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/guzzle/css/main.css"), "html", null, true);
        echo "\" />
    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/guzzle/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_53de4c9dab5334b154547bf3857098460d723ca2475b8c50d579abc4f0a12f68->leave($__internal_53de4c9dab5334b154547bf3857098460d723ca2475b8c50d579abc4f0a12f68_prof);

    }

    // line 64
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3df8894e769190702342534987f7a9426c2c012d5a36aa45d548e8dc2e0d23c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3df8894e769190702342534987f7a9426c2c012d5a36aa45d548e8dc2e0d23c7->enter($__internal_3df8894e769190702342534987f7a9426c2c012d5a36aa45d548e8dc2e0d23c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 65
        echo "
    <h2>Logs</h2>

    ";
        // line 68
        $this->loadTemplate("GuzzleBundle::profiler.html.twig", "GuzzleBundle::debug.html.twig", 68)->display(array_merge($context, array("collector" => (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 68, $this->getSourceContext()); })()))));
        
        $__internal_3df8894e769190702342534987f7a9426c2c012d5a36aa45d548e8dc2e0d23c7->leave($__internal_3df8894e769190702342534987f7a9426c2c012d5a36aa45d548e8dc2e0d23c7_prof);

    }

    public function getTemplateName()
    {
        return "GuzzleBundle::debug.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 68,  194 => 65,  188 => 64,  179 => 61,  175 => 60,  170 => 58,  167 => 57,  161 => 56,  150 => 50,  143 => 46,  138 => 43,  132 => 42,  125 => 38,  122 => 37,  118 => 35,  112 => 33,  106 => 31,  104 => 30,  96 => 25,  91 => 22,  89 => 21,  86 => 20,  80 => 17,  76 => 16,  71 => 15,  69 => 14,  66 => 13,  63 => 12,  60 => 11,  57 => 10,  54 => 9,  51 => 8,  48 => 7,  46 => 6,  43 => 5,  37 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"WebProfilerBundle:Profiler:layout.html.twig\" %}


{% block toolbar %}

    {% if collector.callCount == 0 %}
        {% set color = 'grey' %}
    {% elseif collector.errorCount > 0 %}
        {% set color = 'red' %}
    {% else %}
        {% set color = 'green' %}
    {% endif %}

    {% set icon %}
        {{ include(\"@Guzzle/Icons/logo.svg.twig\") }}
        <span class=\"sf-toolbar-status sf-toolbar-status-{{ color }}\">
            {{ collector.callCount }}
        </span>
    {% endset %}

    {% set text %}

        <div class=\"sf-toolbar-info-piece\">
            <b>API Calls</b>
            <span>{{ collector.callCount }}</span>
        </div>

        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            {% if collector.totalTime > 1.0 %}
                <span>{{ '%0.2f'|format(collector.totalTime) }} s</span>
            {% else %}
                <span>{{ '%0.0f'|format(collector.totalTime * 1000) }} ms</span>
            {% endif %}
        </div>
    {% endset %}

    {% include \"WebProfilerBundle:Profiler:toolbar_item.html.twig\" with { \"link\": profiler_url } %}
{% endblock %}


{% block menu %}

    <span class=\"label\">
        <span class=\"icon\">
            {{ include(\"@Guzzle/Icons/logo.svg.twig\") }}
        </span>
        <strong>Guzzle</strong>
        <span class=\"count\">
            <span>{{ collector.callCount }}</span>
        </span>
    </span>
{% endblock %}


{% block head %}

    {{ parent() }}

    <link rel=\"stylesheet\" href=\"{{ asset('bundles/guzzle/css/main.css') }}\" />
    <script src=\"{{ asset('bundles/guzzle/js/jquery.min.js') }}\"></script>
{% endblock %}

{% block panel %}

    <h2>Logs</h2>

    {% include 'GuzzleBundle::profiler.html.twig' with { 'collector': collector } %}
{% endblock %}
", "GuzzleBundle::debug.html.twig", "/var/www/html/tontine2/vendor/eightpoints/guzzle-bundle/EightPoints/Bundle/GuzzleBundle/Resources/views/debug.html.twig");
    }
}
