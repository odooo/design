<?php

/* tontineBundle:Tontine:search.html.twig */
class __TwigTemplate_fd3d43a156104ff40a71197f141ed918f4ab7580e1597f7b1f951f9540f2f89c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "tontineBundle:Tontine:search.html.twig", 1);
        $this->blocks = array(
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa8b109842898278e85332d83aac705bfe1fa8bc8ead30bae81ee28ad2b02c19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa8b109842898278e85332d83aac705bfe1fa8bc8ead30bae81ee28ad2b02c19->enter($__internal_aa8b109842898278e85332d83aac705bfe1fa8bc8ead30bae81ee28ad2b02c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tontineBundle:Tontine:search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa8b109842898278e85332d83aac705bfe1fa8bc8ead30bae81ee28ad2b02c19->leave($__internal_aa8b109842898278e85332d83aac705bfe1fa8bc8ead30bae81ee28ad2b02c19_prof);

    }

    // line 4
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_35f0101dbf6e30d77dd7fe5d429bf9f72cb06a18f112982e33ef3b3820112959 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35f0101dbf6e30d77dd7fe5d429bf9f72cb06a18f112982e33ef3b3820112959->enter($__internal_35f0101dbf6e30d77dd7fe5d429bf9f72cb06a18f112982e33ef3b3820112959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 5
        echo "    <h1>Rechercher un bien</h1>
";
        
        $__internal_35f0101dbf6e30d77dd7fe5d429bf9f72cb06a18f112982e33ef3b3820112959->leave($__internal_35f0101dbf6e30d77dd7fe5d429bf9f72cb06a18f112982e33ef3b3820112959_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_89f6f1c0c8430f44997787609a7fb3d6a8fa985eddf69b88b77c95f917ba2021 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89f6f1c0c8430f44997787609a7fb3d6a8fa985eddf69b88b77c95f917ba2021->enter($__internal_89f6f1c0c8430f44997787609a7fb3d6a8fa985eddf69b88b77c95f917ba2021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <div class=\"row\">
        <div class=\"col-sm-3\">
            <div class=\"box box-primary\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Rechercher un bien</h3>
                </div>
                <div class=\"box-body\">
                    ";
        // line 16
        $this->loadTemplate("tontineBundle:Search:form.html.twig", "tontineBundle:Tontine:search.html.twig", 16)->display(array_merge($context, array("form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()))));
        // line 17
        echo "                </div>
            </div>
        </div>
        <div class=\"col-sm-9\">
            <div class=\"box box-primary\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Résultats de la recherche</h3>
                </div>
                <div class=\"box-body\">
                    ";
        // line 26
        if ((twig_length_filter($this->env, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 26, $this->getSourceContext()); })())) > 0)) {
            // line 27
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 27, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 28
                echo "                            <div class=\"well well-sm\">
                                <a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_tontines_new", array("bien" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["option"], "bienTontine", array()), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-xs btn-primary pull-right\">Choisir ce bien</a>
                                <p>
                                    <strong style=\"padding: 2px; color: darkorange\" class=\"label-primary\">Option N°";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["option"], "id", array()), "html", null, true);
                echo "</strong>
                                    <br/><strong>Code du bien: ";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["option"], "bienTontine", array()), "code", array()), "html", null, true);
                echo "</strong>
                                    <br/><strong>Zone: ";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["option"], "bienTontine", array()), "zone", array()), "html", null, true);
                echo "</strong>
                                    <br/><strong>Zone: ";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["option"], "bienTontine", array()), "quartier", array()), "html", null, true);
                echo "</strong>
                                </p>
                                <p>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["option"], "bienTontine", array()), "description", array()), "html", null, true);
                echo "</p> 
                                <p>
                                <table class=\"table table-striped table-bordered\">
                                    <thead>
                                        <tr>
                                            <th>Durée</th>
                                            <th>Mode</th>
                                            <th>Mise</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["option"], "duree", array()), "html", null, true);
                echo " an(s)</td>
                                            <td>";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["option"], "TypeTontine", array()), "libelle", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 50
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["option"], "montant", array()), 0, ",", " "), "html", null, true);
                echo " F CFA</td>
                                        </tr>
                                    </tbody>
                                </table>
                                </p>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                    ";
        } else {
            echo " 
                        <div class=\"text-center\">
                            Aucun bien ne corresponds aux critères.
                        </div>
                    ";
        }
        // line 62
        echo "                </div>
            </div>
        </div>
    </div>            

    ";
        // line 67
        $this->loadTemplate("default/modal.html.twig", "tontineBundle:Tontine:search.html.twig", 67)->display(array_merge($context, array("modalId" => "preview-modal")));
        // line 68
        echo "    ";
        // line 69
        echo "    ";
        $this->loadTemplate("default/modal.html.twig", "tontineBundle:Tontine:search.html.twig", 69)->display(array_merge($context, array("modalId" => "edit-modal")));
        
        $__internal_89f6f1c0c8430f44997787609a7fb3d6a8fa985eddf69b88b77c95f917ba2021->leave($__internal_89f6f1c0c8430f44997787609a7fb3d6a8fa985eddf69b88b77c95f917ba2021_prof);

    }

    // line 72
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_9b1138b5d203b30f6dfa14a4ba4ef8d45cfc77e97e4c69e399fcc8b08f6192a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b1138b5d203b30f6dfa14a4ba4ef8d45cfc77e97e4c69e399fcc8b08f6192a1->enter($__internal_9b1138b5d203b30f6dfa14a4ba4ef8d45cfc77e97e4c69e399fcc8b08f6192a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 73
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        \$(function() {
            var \$dureeType = \$('.duree-type');

            \$('#mode').on('change', function() {
                switch(\$(this).val()) {
                    case 'j':
                        \$dureeType.text('Jours');
                        break;
                    case 'h':
                        \$dureeType.text('Sem.');
                        break;
                    case 'm':
                        \$dureeType.text('Mois');
                        break;
                }
            })
        });
    </script>
";
        
        $__internal_9b1138b5d203b30f6dfa14a4ba4ef8d45cfc77e97e4c69e399fcc8b08f6192a1->leave($__internal_9b1138b5d203b30f6dfa14a4ba4ef8d45cfc77e97e4c69e399fcc8b08f6192a1_prof);

    }

    public function getTemplateName()
    {
        return "tontineBundle:Tontine:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 73,  174 => 72,  166 => 69,  164 => 68,  162 => 67,  155 => 62,  146 => 57,  133 => 50,  129 => 49,  125 => 48,  110 => 36,  105 => 34,  101 => 33,  97 => 32,  93 => 31,  88 => 29,  85 => 28,  80 => 27,  78 => 26,  67 => 17,  65 => 16,  56 => 9,  50 => 8,  42 => 5,  36 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'default/index.html.twig' %}


{% block content_header %}
    <h1>Rechercher un bien</h1>
{% endblock %}

{% block content %}
    <div class=\"row\">
        <div class=\"col-sm-3\">
            <div class=\"box box-primary\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Rechercher un bien</h3>
                </div>
                <div class=\"box-body\">
                    {% include 'tontineBundle:Search:form.html.twig' with { form: form } %}
                </div>
            </div>
        </div>
        <div class=\"col-sm-9\">
            <div class=\"box box-primary\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Résultats de la recherche</h3>
                </div>
                <div class=\"box-body\">
                    {% if options | length > 0 %}
                        {% for option in options %}
                            <div class=\"well well-sm\">
                                <a href=\"{{ path('tontine_tontines_new', {bien: option.bienTontine.id}) }}\" class=\"btn btn-xs btn-primary pull-right\">Choisir ce bien</a>
                                <p>
                                    <strong style=\"padding: 2px; color: darkorange\" class=\"label-primary\">Option N°{{ option.id}}</strong>
                                    <br/><strong>Code du bien: {{ option.bienTontine.code }}</strong>
                                    <br/><strong>Zone: {{ option.bienTontine.zone}}</strong>
                                    <br/><strong>Zone: {{ option.bienTontine.quartier}}</strong>
                                </p>
                                <p>{{ option.bienTontine.description }}</p> 
                                <p>
                                <table class=\"table table-striped table-bordered\">
                                    <thead>
                                        <tr>
                                            <th>Durée</th>
                                            <th>Mode</th>
                                            <th>Mise</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{option.duree}} an(s)</td>
                                            <td>{{option.TypeTontine.libelle}}</td>
                                            <td>{{option.montant | number_format(0, ',', ' ') }} F CFA</td>
                                        </tr>
                                    </tbody>
                                </table>
                                </p>
                            </div>
                        {% endfor %}
                    {% else %} 
                        <div class=\"text-center\">
                            Aucun bien ne corresponds aux critères.
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>            

    {% include 'default/modal.html.twig' with { modalId: 'preview-modal' } %}
    {#% include 'tontineBundle:Tontine:modals/new-modal.html.twig' %#}
    {% include 'default/modal.html.twig' with { modalId: 'edit-modal' } %}
{% endblock %}

{% block javascript %}
    {{ parent() }}
    <script type=\"text/javascript\">
        \$(function() {
            var \$dureeType = \$('.duree-type');

            \$('#mode').on('change', function() {
                switch(\$(this).val()) {
                    case 'j':
                        \$dureeType.text('Jours');
                        break;
                    case 'h':
                        \$dureeType.text('Sem.');
                        break;
                    case 'm':
                        \$dureeType.text('Mois');
                        break;
                }
            })
        });
    </script>
{% endblock %}    
", "tontineBundle:Tontine:search.html.twig", "/var/www/html/tontine/src/tontineBundle/Resources/views/Tontine/search.html.twig");
    }
}
