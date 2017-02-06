<?php

/* tontineBundle:Agent:Group/index.html.twig */
class __TwigTemplate_a691d1477f4872ea62432d1f060ece9728bf1757c1d4cfa75d478e14e4fbf5ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "tontineBundle:Agent:Group/index.html.twig", 1);
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
        $__internal_2e56e5ee8cc4266711d47706c7cdb8b80a2b82a5cc8091b9b3e2a6ef32265779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e56e5ee8cc4266711d47706c7cdb8b80a2b82a5cc8091b9b3e2a6ef32265779->enter($__internal_2e56e5ee8cc4266711d47706c7cdb8b80a2b82a5cc8091b9b3e2a6ef32265779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tontineBundle:Agent:Group/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e56e5ee8cc4266711d47706c7cdb8b80a2b82a5cc8091b9b3e2a6ef32265779->leave($__internal_2e56e5ee8cc4266711d47706c7cdb8b80a2b82a5cc8091b9b3e2a6ef32265779_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd285f3afecb6893034dd2f845410b501c1a0ad8b4380e5874fb757e4c197724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd285f3afecb6893034dd2f845410b501c1a0ad8b4380e5874fb757e4c197724->enter($__internal_fd285f3afecb6893034dd2f845410b501c1a0ad8b4380e5874fb757e4c197724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des groupes d'agents";
        
        $__internal_fd285f3afecb6893034dd2f845410b501c1a0ad8b4380e5874fb757e4c197724->leave($__internal_fd285f3afecb6893034dd2f845410b501c1a0ad8b4380e5874fb757e4c197724_prof);

    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_3d3ab33c6610ada81e698c5d97321d48edb6fc28aba38760d9073cb391134851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d3ab33c6610ada81e698c5d97321d48edb6fc28aba38760d9073cb391134851->enter($__internal_3d3ab33c6610ada81e698c5d97321d48edb6fc28aba38760d9073cb391134851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 6
        echo "    <h1>Liste des groupes d'agents</h1>
";
        
        $__internal_3d3ab33c6610ada81e698c5d97321d48edb6fc28aba38760d9073cb391134851->leave($__internal_3d3ab33c6610ada81e698c5d97321d48edb6fc28aba38760d9073cb391134851_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_9ecaf0627034078d9dab68707eaf15182357582ff67c4eea02d2d0e926c5eb56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ecaf0627034078d9dab68707eaf15182357582ff67c4eea02d2d0e926c5eb56->enter($__internal_9ecaf0627034078d9dab68707eaf15182357582ff67c4eea02d2d0e926c5eb56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <div class=\"box box-primary\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">Liste des groupes d'agents</h3>
        </div>
        <div class=\"box-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-bordered table-striped\">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom du groupe</th>
                            <th>Actions</th>
                        </tr>                        
                    </thead>
                    <tbody>
                    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new Twig_Error_Runtime('Variable "groups" does not exist.', 25, $this->getSourceContext()); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 26
            echo "                        <tr>
                            <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "name", array()), "html", null, true);
            echo "</td>
                            <td class=\"text-center\">
                                ";
            // line 30
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_GROUP_EDIT")) {
                // line 31
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_agents_groups_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary btn-xs\">Modifier</a>
                                ";
            }
            // line 33
            echo "                                ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_GROUP_CREATE")) {
                // line 34
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_agents_groups_create", array("group" => twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary btn-xs\">Copier</a>
                                ";
            }
            // line 36
            echo "                            </td>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                    </tbody>
                </table>
            </div>
        </div>
        <div class=\"box-footer\">
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_agents_groups_create");
        echo "\" class=\"btn btn-primary\">
                Créer un nouveau groupe
            </a>
        </div>
    </div>
";
        
        $__internal_9ecaf0627034078d9dab68707eaf15182357582ff67c4eea02d2d0e926c5eb56->leave($__internal_9ecaf0627034078d9dab68707eaf15182357582ff67c4eea02d2d0e926c5eb56_prof);

    }

    public function getTemplateName()
    {
        return "tontineBundle:Agent:Group/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 44,  147 => 39,  131 => 36,  125 => 34,  122 => 33,  116 => 31,  114 => 30,  109 => 28,  105 => 27,  102 => 26,  85 => 25,  68 => 10,  62 => 9,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'default/index.html.twig' %}

{% block title %}Liste des groupes d'agents{% endblock %}

{% block content_header %}
    <h1>Liste des groupes d'agents</h1>
{% endblock %}

{% block content %}
    <div class=\"box box-primary\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">Liste des groupes d'agents</h3>
        </div>
        <div class=\"box-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-bordered table-striped\">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom du groupe</th>
                            <th>Actions</th>
                        </tr>                        
                    </thead>
                    <tbody>
                    {% for group in groups %}
                        <tr>
                            <td>{{ loop.index }}</td>
                            <td>{{ group.name }}</td>
                            <td class=\"text-center\">
                                {% if is_granted('ROLE_GROUP_EDIT') %}
                                    <a href=\"{{ path('tontine_agents_groups_edit', {id: group.id}) }}\" class=\"btn btn-primary btn-xs\">Modifier</a>
                                {% endif %}
                                {% if is_granted('ROLE_GROUP_CREATE') %}
                                    <a href=\"{{ path('tontine_agents_groups_create', {group: group.id}) }}\" class=\"btn btn-primary btn-xs\">Copier</a>
                                {% endif %}
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
        <div class=\"box-footer\">
            <a href=\"{{ path('tontine_agents_groups_create') }}\" class=\"btn btn-primary\">
                Créer un nouveau groupe
            </a>
        </div>
    </div>
{% endblock %}", "tontineBundle:Agent:Group/index.html.twig", "/var/www/html/tontine/src/tontineBundle/Resources/views/Agent/Group/index.html.twig");
    }
}
