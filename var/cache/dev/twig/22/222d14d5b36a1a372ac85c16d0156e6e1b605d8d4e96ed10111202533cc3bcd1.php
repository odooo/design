<?php

/* tontineBundle:Agency:index.html.twig */
class __TwigTemplate_2d785514220344d7f238d3730bc9d706ac8b792cc72a6498309f22fa5c55ad94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "tontineBundle:Agency:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dffd8b606ea18413c3fd0c29ddca82f26203af59f9c04a35f1fd9f84052fac7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dffd8b606ea18413c3fd0c29ddca82f26203af59f9c04a35f1fd9f84052fac7e->enter($__internal_dffd8b606ea18413c3fd0c29ddca82f26203af59f9c04a35f1fd9f84052fac7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tontineBundle:Agency:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dffd8b606ea18413c3fd0c29ddca82f26203af59f9c04a35f1fd9f84052fac7e->leave($__internal_dffd8b606ea18413c3fd0c29ddca82f26203af59f9c04a35f1fd9f84052fac7e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b321eff8e7686c81ad13e54e1b2747999e11aec7282deb3f2f84a85b3dd9cf1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b321eff8e7686c81ad13e54e1b2747999e11aec7282deb3f2f84a85b3dd9cf1d->enter($__internal_b321eff8e7686c81ad13e54e1b2747999e11aec7282deb3f2f84a85b3dd9cf1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des agences de Global Design";
        
        $__internal_b321eff8e7686c81ad13e54e1b2747999e11aec7282deb3f2f84a85b3dd9cf1d->leave($__internal_b321eff8e7686c81ad13e54e1b2747999e11aec7282deb3f2f84a85b3dd9cf1d_prof);

    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_8983dfd4d3efc588684e359f36d2b1a7269d22e7c2336e9af2114b2d3aa0a3eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8983dfd4d3efc588684e359f36d2b1a7269d22e7c2336e9af2114b2d3aa0a3eb->enter($__internal_8983dfd4d3efc588684e359f36d2b1a7269d22e7c2336e9af2114b2d3aa0a3eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 6
        echo "    <h3>Liste des agences de Global Design</h3>
";
        
        $__internal_8983dfd4d3efc588684e359f36d2b1a7269d22e7c2336e9af2114b2d3aa0a3eb->leave($__internal_8983dfd4d3efc588684e359f36d2b1a7269d22e7c2336e9af2114b2d3aa0a3eb_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_a88852b8ad8b40c32c39b2be7e7b03cdbcf31c9d30a9cfd12e4446740bf7ae93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a88852b8ad8b40c32c39b2be7e7b03cdbcf31c9d30a9cfd12e4446740bf7ae93->enter($__internal_a88852b8ad8b40c32c39b2be7e7b03cdbcf31c9d30a9cfd12e4446740bf7ae93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <div class=\"box box-primary\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">Liste des agences de Global Design</h3>
        </div>
        <div class=\"box-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-bordered table-striped\">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom de l'agence</th>
                            <th>Contact de l'agence</th>
                            <th>Adresse de l'agence</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["agencies"]) || array_key_exists("agencies", $context) ? $context["agencies"] : (function () { throw new Twig_Error_Runtime('Variable "agencies" does not exist.', 26, $this->getSourceContext()); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["agency"]) {
            // line 27
            echo "                        <tr>
                            <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["agency"], "name", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["agency"], "contact", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["agency"], "address", array()), "html", null, true);
            echo "</td>
                        </tr>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                    </tbody>
                </table>
            </div>
        </div>
        <div class=\"box-footer\">
            <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_agencies_create");
        echo "\" class=\"btn btn-primary\">
                <i class=\"fa fa-plus\"></i>                
                Ajouter une agence
            </a>
        </div>
    </div>
";
        
        $__internal_a88852b8ad8b40c32c39b2be7e7b03cdbcf31c9d30a9cfd12e4446740bf7ae93->leave($__internal_a88852b8ad8b40c32c39b2be7e7b03cdbcf31c9d30a9cfd12e4446740bf7ae93_prof);

    }

    public function getTemplateName()
    {
        return "tontineBundle:Agency:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 39,  135 => 34,  118 => 31,  114 => 30,  110 => 29,  106 => 28,  103 => 27,  86 => 26,  68 => 10,  62 => 9,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"default/index.html.twig\" %}

{% block title %}Liste des agences de Global Design{% endblock %}

{% block content_header %}
    <h3>Liste des agences de Global Design</h3>
{% endblock %}

{% block content %}
    <div class=\"box box-primary\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">Liste des agences de Global Design</h3>
        </div>
        <div class=\"box-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-bordered table-striped\">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom de l'agence</th>
                            <th>Contact de l'agence</th>
                            <th>Adresse de l'agence</th>
                        </tr>
                    </thead>
                    <tbody>
                    {% for agency in agencies %}
                        <tr>
                            <td>{{ loop.index }}</td>
                            <td>{{ agency.name }}</td>
                            <td>{{ agency.contact }}</td>
                            <td>{{ agency.address }}</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
        <div class=\"box-footer\">
            <a href=\"{{ path('tontine_agencies_create') }}\" class=\"btn btn-primary\">
                <i class=\"fa fa-plus\"></i>                
                Ajouter une agence
            </a>
        </div>
    </div>
{% endblock %}
", "tontineBundle:Agency:index.html.twig", "/var/www/html/tontine/src/tontineBundle/Resources/views/Agency/index.html.twig");
    }
}
