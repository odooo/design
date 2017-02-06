<?php

/* tontineBundle:Categorie:index.html.twig */
class __TwigTemplate_26053ae7f43acfc61d2bcb9e5da9b7138d5adb302002ae3bd6a2a5611be5c5b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "tontineBundle:Categorie:index.html.twig", 1);
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
        $__internal_55700a55097401c40c9994ab67260c1d7287b7219b6c01ff4756dc7db931904e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55700a55097401c40c9994ab67260c1d7287b7219b6c01ff4756dc7db931904e->enter($__internal_55700a55097401c40c9994ab67260c1d7287b7219b6c01ff4756dc7db931904e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tontineBundle:Categorie:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55700a55097401c40c9994ab67260c1d7287b7219b6c01ff4756dc7db931904e->leave($__internal_55700a55097401c40c9994ab67260c1d7287b7219b6c01ff4756dc7db931904e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e77aded6966114d45e922171a5dc88dd7c0b26b60f5083c755244bd972f0bdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e77aded6966114d45e922171a5dc88dd7c0b26b60f5083c755244bd972f0bdf->enter($__internal_4e77aded6966114d45e922171a5dc88dd7c0b26b60f5083c755244bd972f0bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des catégories de tissu";
        
        $__internal_4e77aded6966114d45e922171a5dc88dd7c0b26b60f5083c755244bd972f0bdf->leave($__internal_4e77aded6966114d45e922171a5dc88dd7c0b26b60f5083c755244bd972f0bdf_prof);

    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_e09955d122d93dac51657fc476838e32ea3827896f995d6ddfca81f65144a319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e09955d122d93dac51657fc476838e32ea3827896f995d6ddfca81f65144a319->enter($__internal_e09955d122d93dac51657fc476838e32ea3827896f995d6ddfca81f65144a319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 6
        echo "    <h3>Liste des catégories</h3>
";
        
        $__internal_e09955d122d93dac51657fc476838e32ea3827896f995d6ddfca81f65144a319->leave($__internal_e09955d122d93dac51657fc476838e32ea3827896f995d6ddfca81f65144a319_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_c161066dd5ecc7a5ac79094de8f4da81c42e8656e4256801f6d37f1266fc4a56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c161066dd5ecc7a5ac79094de8f4da81c42e8656e4256801f6d37f1266fc4a56->enter($__internal_c161066dd5ecc7a5ac79094de8f4da81c42e8656e4256801f6d37f1266fc4a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <div class=\"box box-primary\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">Liste des catégories de tissus</h3>
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
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 32, $this->getSourceContext()); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 33
            echo "                        <tr>
                            <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["categorie"], "libelle", array()), "html", null, true);
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
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CATEGORIE_EDIT")) {
                // line 45
                echo "                                            <li>
                                                <a onclick=\"getEditCategorieForm(";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["categorie"], "id", array()), "html", null, true);
                echo ")\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_categorie_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["categorie"], "id", array()))), "html", null, true);
                echo "\" data-rec = \"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["categorie"], "id", array()), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                    </tbody>
                </table>
            </div>
        </div>
        <div class=\"box-footer\">
            <a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_categorie_new");
        echo "\" class=\"btn btn-primary\">
                <i class=\"fa fa-plus\"></i>                
                Ajouter une catégorie
            </a>
        </div>
    </div>
";
        
        $__internal_c161066dd5ecc7a5ac79094de8f4da81c42e8656e4256801f6d37f1266fc4a56->leave($__internal_c161066dd5ecc7a5ac79094de8f4da81c42e8656e4256801f6d37f1266fc4a56_prof);

    }

    public function getTemplateName()
    {
        return "tontineBundle:Categorie:index.html.twig";
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

{% block title %}Liste des catégories de tissu{% endblock %}

{% block content_header %}
    <h3>Liste des catégories</h3>
{% endblock %}

{% block content %}
    <div class=\"box box-primary\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">Liste des catégories de tissus</h3>
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
                    {% for categorie in categories %}
                        <tr>
                            <td>{{ loop.index }}</td>
                            <td>{{ categorie.libelle }}</td>
                            <td>
                            <div class=\"btn-group pull-right\">
                                <button type=\"button\" class=\"btn btn-primary btn-xs dropdown-toggle\" data-toggle=\"dropdown\">
                                    Actions
                                    <span class=\"fa fa-caret-down\"></span>
                                </button>
                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                    
                                    {% if  is_granted('ROLE_CATEGORIE_EDIT') %}
                                            <li>
                                                <a onclick=\"getEditCategorieForm({{categorie.id}})\" href=\"{{ path('tontine_categorie_edit', { 'id': categorie.id }) }}\" data-rec = \"{{categorie.id}}\" >Modifier</a>
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
            <a href=\"{{ path('tontine_categorie_new') }}\" class=\"btn btn-primary\">
                <i class=\"fa fa-plus\"></i>                
                Ajouter une catégorie
            </a>
        </div>
    </div>
{% endblock %}
", "tontineBundle:Categorie:index.html.twig", "/var/www/html/tontine/src/tontineBundle/Resources/views/Categorie/index.html.twig");
    }
}
