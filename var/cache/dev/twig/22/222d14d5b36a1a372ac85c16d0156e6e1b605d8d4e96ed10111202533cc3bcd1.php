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
        $__internal_e4a506f027e89b5c08b37893364b26aa85cdd6ef28f77fdcf0183eadd93781fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4a506f027e89b5c08b37893364b26aa85cdd6ef28f77fdcf0183eadd93781fc->enter($__internal_e4a506f027e89b5c08b37893364b26aa85cdd6ef28f77fdcf0183eadd93781fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tontineBundle:Agency:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4a506f027e89b5c08b37893364b26aa85cdd6ef28f77fdcf0183eadd93781fc->leave($__internal_e4a506f027e89b5c08b37893364b26aa85cdd6ef28f77fdcf0183eadd93781fc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_565eacaf8c6ee0dec79873ebee3f966f3c3b21253648771cf2b30203aedec54a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_565eacaf8c6ee0dec79873ebee3f966f3c3b21253648771cf2b30203aedec54a->enter($__internal_565eacaf8c6ee0dec79873ebee3f966f3c3b21253648771cf2b30203aedec54a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des agences de APHEDD Finance";
        
        $__internal_565eacaf8c6ee0dec79873ebee3f966f3c3b21253648771cf2b30203aedec54a->leave($__internal_565eacaf8c6ee0dec79873ebee3f966f3c3b21253648771cf2b30203aedec54a_prof);

    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_6618867fc3efbb405786f740505be35c2c89ec725f49f26eeaf6883a185c7c13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6618867fc3efbb405786f740505be35c2c89ec725f49f26eeaf6883a185c7c13->enter($__internal_6618867fc3efbb405786f740505be35c2c89ec725f49f26eeaf6883a185c7c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 6
        echo "    <h3>Liste des agences de APHEDD Finance</h3>
";
        
        $__internal_6618867fc3efbb405786f740505be35c2c89ec725f49f26eeaf6883a185c7c13->leave($__internal_6618867fc3efbb405786f740505be35c2c89ec725f49f26eeaf6883a185c7c13_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_74018372283dc2c5166b369f4bfc7afe085cd055239218c047a75a25a2f14e30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74018372283dc2c5166b369f4bfc7afe085cd055239218c047a75a25a2f14e30->enter($__internal_74018372283dc2c5166b369f4bfc7afe085cd055239218c047a75a25a2f14e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <div class=\"box box-primary\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">Liste des agences de APHEDD Finance</h3>
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
                            ";
        // line 24
        echo "                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["agencies"]) || array_key_exists("agencies", $context) ? $context["agencies"] : (function () { throw new Twig_Error_Runtime('Variable "agencies" does not exist.', 27, $this->getSourceContext()); })()));
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
            // line 28
            echo "                        <tr>
                            <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["agency"], "name", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["agency"], "contact", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 32
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
        // line 35
        echo "                    </tbody>
                </table>
            </div>
        </div>
        <div class=\"box-footer\">
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_agencies_create");
        echo "\" class=\"btn btn-primary\">
                <i class=\"fa fa-plus\"></i>                
                Ajouter une agence
            </a>
        </div>
    </div>
";
        
        $__internal_74018372283dc2c5166b369f4bfc7afe085cd055239218c047a75a25a2f14e30->leave($__internal_74018372283dc2c5166b369f4bfc7afe085cd055239218c047a75a25a2f14e30_prof);

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
        return array (  144 => 40,  137 => 35,  120 => 32,  116 => 31,  112 => 30,  108 => 29,  105 => 28,  88 => 27,  83 => 24,  68 => 10,  62 => 9,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"default/index.html.twig\" %}

{% block title %}Liste des agences de APHEDD Finance{% endblock %}

{% block content_header %}
    <h3>Liste des agences de APHEDD Finance</h3>
{% endblock %}

{% block content %}
    <div class=\"box box-primary\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">Liste des agences de APHEDD Finance</h3>
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
                            {#<th>Actions</th>#}
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
