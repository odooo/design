<?php

/* tontineBundle:Modele:index.html.twig */
class __TwigTemplate_72330a8f3630ad7663c8010a6115db49257da1584b09bbbdd79e2865471e7023 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "tontineBundle:Modele:index.html.twig", 1);
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
        $__internal_0aee842b744069050f7be71741c5fea48fa5e93128085819d7f79b70c590a3ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aee842b744069050f7be71741c5fea48fa5e93128085819d7f79b70c590a3ec->enter($__internal_0aee842b744069050f7be71741c5fea48fa5e93128085819d7f79b70c590a3ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tontineBundle:Modele:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0aee842b744069050f7be71741c5fea48fa5e93128085819d7f79b70c590a3ec->leave($__internal_0aee842b744069050f7be71741c5fea48fa5e93128085819d7f79b70c590a3ec_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4cc87f2ef5fbf08d3be6bd841b631093fe4f6e53894e5b1ca337edb1ea9d5fe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cc87f2ef5fbf08d3be6bd841b631093fe4f6e53894e5b1ca337edb1ea9d5fe1->enter($__internal_4cc87f2ef5fbf08d3be6bd841b631093fe4f6e53894e5b1ca337edb1ea9d5fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des modèles";
        
        $__internal_4cc87f2ef5fbf08d3be6bd841b631093fe4f6e53894e5b1ca337edb1ea9d5fe1->leave($__internal_4cc87f2ef5fbf08d3be6bd841b631093fe4f6e53894e5b1ca337edb1ea9d5fe1_prof);

    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_6837f64f72357f5c6ebd49246751b26254839aee6dbd20107857582008013365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6837f64f72357f5c6ebd49246751b26254839aee6dbd20107857582008013365->enter($__internal_6837f64f72357f5c6ebd49246751b26254839aee6dbd20107857582008013365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 6
        echo "    <h3>Liste des modèles</h3>
";
        
        $__internal_6837f64f72357f5c6ebd49246751b26254839aee6dbd20107857582008013365->leave($__internal_6837f64f72357f5c6ebd49246751b26254839aee6dbd20107857582008013365_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_b7b0bf8cb36c3d77e15a9d6a8e3efdcf160eb39523760937ad740de4c6936a94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7b0bf8cb36c3d77e15a9d6a8e3efdcf160eb39523760937ad740de4c6936a94->enter($__internal_b7b0bf8cb36c3d77e15a9d6a8e3efdcf160eb39523760937ad740de4c6936a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <div class=\"box box-primary\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">Liste des modèles</h3>
        </div>
        <div class=\"box-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-bordered table-striped\">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Libellé</th>
                            <th>
                            <div class=\"btn-group pull-right\">
                                <button type=\"button\" class=\"btn btn-primary btn-xs dropdown-toggle\" data-toggle=\"dropdown\">
                                    Actions
                                    <span class=\"fa fa-caret-down\"></span>
                                </button>
                            </div>
                            <th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modeles"]) || array_key_exists("modeles", $context) ? $context["modeles"] : (function () { throw new Twig_Error_Runtime('Variable "modeles" does not exist.', 32, $this->getSourceContext()); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["modele"]) {
            // line 33
            echo "                        <tr>
                            <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["modele"], "libelle", array()), "html", null, true);
            echo "</td>
                            <td>
                            <div class=\"btn-group pull-right\">
                                <button type=\"button\" class=\"btn btn-primary btn-xs dropdown-toggle\" data-toggle=\"dropdown\">
                                    Actions
                                    <span class=\"fa fa-caret-down\"></span>
                                </button>
                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                    
                                    ";
            // line 44
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_MODELE_EDIT")) {
                // line 45
                echo "                                            <li>
                                                <a onclick=\"getEditModeleForm(";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["modele"], "id", array()), "html", null, true);
                echo ")\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_modele_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["modele"], "id", array()))), "html", null, true);
                echo "\" data-rec = \"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["modele"], "id", array()), "html", null, true);
                echo "\" >Modifier</a>
                                            </li>
                                    ";
            }
            // line 49
            echo "                                    
                                </ul>
                            </div>
                            </td>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modele'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                    </tbody>
                </table>
            </div>
        </div>
        <div class=\"box-footer\">
            <a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_modele_new");
        echo "\" class=\"btn btn-primary\">
                <i class=\"fa fa-plus\"></i>                
                Ajouter un modèle
            </a>
        </div>
    </div>
";
        
        $__internal_b7b0bf8cb36c3d77e15a9d6a8e3efdcf160eb39523760937ad740de4c6936a94->leave($__internal_b7b0bf8cb36c3d77e15a9d6a8e3efdcf160eb39523760937ad740de4c6936a94_prof);

    }

    public function getTemplateName()
    {
        return "tontineBundle:Modele:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 60,  162 => 55,  143 => 49,  133 => 46,  130 => 45,  128 => 44,  116 => 35,  112 => 34,  109 => 33,  92 => 32,  68 => 10,  62 => 9,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"default/index.html.twig\" %}

{% block title %}Liste des modèles{% endblock %}

{% block content_header %}
    <h3>Liste des modèles</h3>
{% endblock %}

{% block content %}
    <div class=\"box box-primary\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">Liste des modèles</h3>
        </div>
        <div class=\"box-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-bordered table-striped\">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Libellé</th>
                            <th>
                            <div class=\"btn-group pull-right\">
                                <button type=\"button\" class=\"btn btn-primary btn-xs dropdown-toggle\" data-toggle=\"dropdown\">
                                    Actions
                                    <span class=\"fa fa-caret-down\"></span>
                                </button>
                            </div>
                            <th>
                        </tr>
                    </thead>
                    <tbody>
                    {% for modele in modeles %}
                        <tr>
                            <td>{{ loop.index }}</td>
                            <td>{{ modele.libelle }}</td>
                            <td>
                            <div class=\"btn-group pull-right\">
                                <button type=\"button\" class=\"btn btn-primary btn-xs dropdown-toggle\" data-toggle=\"dropdown\">
                                    Actions
                                    <span class=\"fa fa-caret-down\"></span>
                                </button>
                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                    
                                    {% if  is_granted('ROLE_MODELE_EDIT') %}
                                            <li>
                                                <a onclick=\"getEditModeleForm({{modele.id}})\" href=\"{{ path('tontine_modele_edit', { 'id': modele.id }) }}\" data-rec = \"{{modele.id}}\" >Modifier</a>
                                            </li>
                                    {% endif  %}
                                    
                                </ul>
                            </div>
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
        <div class=\"box-footer\">
            <a href=\"{{ path('tontine_modele_new') }}\" class=\"btn btn-primary\">
                <i class=\"fa fa-plus\"></i>                
                Ajouter un modèle
            </a>
        </div>
    </div>
{% endblock %}
", "tontineBundle:Modele:index.html.twig", "/var/www/html/tontine/src/tontineBundle/Resources/views/Modele/index.html.twig");
    }
}
