<?php

/* tontineBundle:Etat:listclientjournalier.html.twig */
class __TwigTemplate_beff1d03cc7589b209b0a7467ca2242cf1285fcd8367a5494f34116de68e89ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "tontineBundle:Etat:listclientjournalier.html.twig", 1);
        $this->blocks = array(
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
        $__internal_71a9b12b7a49134beeaa1efe172ebfe2c874f63d2849e97f5d1223cb452d4716 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71a9b12b7a49134beeaa1efe172ebfe2c874f63d2849e97f5d1223cb452d4716->enter($__internal_71a9b12b7a49134beeaa1efe172ebfe2c874f63d2849e97f5d1223cb452d4716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tontineBundle:Etat:listclientjournalier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71a9b12b7a49134beeaa1efe172ebfe2c874f63d2849e97f5d1223cb452d4716->leave($__internal_71a9b12b7a49134beeaa1efe172ebfe2c874f63d2849e97f5d1223cb452d4716_prof);

    }

    // line 3
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_9aaf3d1f62a9dcae1ea659dfcc2bfbcff729a67a62c08e3f4854a7181f421fd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aaf3d1f62a9dcae1ea659dfcc2bfbcff729a67a62c08e3f4854a7181f421fd4->enter($__internal_9aaf3d1f62a9dcae1ea659dfcc2bfbcff729a67a62c08e3f4854a7181f421fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 4
        echo "    <h1>Liste des clients enrégistrés le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "m/d/Y"), "html", null, true);
        echo "</h1>
";
        
        $__internal_9aaf3d1f62a9dcae1ea659dfcc2bfbcff729a67a62c08e3f4854a7181f421fd4->leave($__internal_9aaf3d1f62a9dcae1ea659dfcc2bfbcff729a67a62c08e3f4854a7181f421fd4_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_854a58766ba334432d21401143e2b36e0dbca2d2a7bb1eb9624fb4e969f7c9de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_854a58766ba334432d21401143e2b36e0dbca2d2a7bb1eb9624fb4e969f7c9de->enter($__internal_854a58766ba334432d21401143e2b36e0dbca2d2a7bb1eb9624fb4e969f7c9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <div class='row-fluid'>
        <div class=\"col-md-12\">
            <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_etat_client_enregistrer_journalier_print");
        echo "\" class=\"btn pull-right btn-primary\"><i class=\"fa fa-print\"></i> Imprimer</a>
        </div>
    </div>
    ";
        // line 13
        $this->loadTemplate("tontineBundle:Client:partials/index_content.html.twig", "tontineBundle:Etat:listclientjournalier.html.twig", 13)->display($context);
        // line 14
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new Twig_Error_Runtime('Variable "clients" does not exist.', 14, $this->getSourceContext()); })())) == 0)) {
            // line 15
            echo "        <div>
            <h4 style=\"text-align: center; color: black\">Aucun client</h4>
        </div>
    ";
        }
        
        $__internal_854a58766ba334432d21401143e2b36e0dbca2d2a7bb1eb9624fb4e969f7c9de->leave($__internal_854a58766ba334432d21401143e2b36e0dbca2d2a7bb1eb9624fb4e969f7c9de_prof);

    }

    public function getTemplateName()
    {
        return "tontineBundle:Etat:listclientjournalier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 15,  69 => 14,  67 => 13,  61 => 10,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'default/index.html.twig' %}

{% block content_header %}
    <h1>Liste des clients enrégistrés le {{ \"now\"|date(\"m/d/Y\") }}</h1>
{% endblock %}

{% block content %}
    <div class='row-fluid'>
        <div class=\"col-md-12\">
            <a href=\"{{path('tontine_etat_client_enregistrer_journalier_print')}}\" class=\"btn pull-right btn-primary\"><i class=\"fa fa-print\"></i> Imprimer</a>
        </div>
    </div>
    {% include \"tontineBundle:Client:partials/index_content.html.twig\" %}
    {% if clients | length == 0 %}
        <div>
            <h4 style=\"text-align: center; color: black\">Aucun client</h4>
        </div>
    {% endif %}
{% endblock %}

", "tontineBundle:Etat:listclientjournalier.html.twig", "/var/www/html/tontine/src/tontineBundle/Resources/views/Etat/listclientjournalier.html.twig");
    }
}
