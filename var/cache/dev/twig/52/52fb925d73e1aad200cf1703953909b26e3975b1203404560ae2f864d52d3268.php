<?php

/* tontineBundle:Categorie:preview.html.twig */
class __TwigTemplate_38b67deabcab60d533cf79c1309b7af2bf8a2bd1a9885362a93719d7852c9e9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_afd181be29102300926c6ebdf5208bba09fb74599d9489eaef63d2e995609a4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afd181be29102300926c6ebdf5208bba09fb74599d9489eaef63d2e995609a4d->enter($__internal_afd181be29102300926c6ebdf5208bba09fb74599d9489eaef63d2e995609a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tontineBundle:Categorie:preview.html.twig"));

        // line 1
        echo "<div style=\"padding: 10px;\">
    <div class=\"box box-primary\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">Informations</h3>
        </div>
        <div class=\"box-body\">
            <div class=\"row\">
                <div class=\"col-sm-8\">
                    <div class=\"btn-group pull-right\">
                        <button type=\"button\" class=\"btn btn-primary btn-xs dropdown-toggle\" data-toggle=\"dropdown\">
                            Actions
                            <span class=\"fa fa-caret-down\"></span>
                        </button>
                        <ul class=\"dropdown-menu dropdown-menu-right\">
                            
                            ";
        // line 16
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CATEGORIE_EDIT")) {
            // line 17
            echo "                                    <li>
                                        <a onclick=\"getEditCategorieForm(";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new Twig_Error_Runtime('Variable "categorie" does not exist.', 18, $this->getSourceContext()); })()), "id", array()), "html", null, true);
            echo ")\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_categorie_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new Twig_Error_Runtime('Variable "categorie" does not exist.', 18, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
            echo "\" data-rec = \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new Twig_Error_Runtime('Variable "categorie" does not exist.', 18, $this->getSourceContext()); })()), "id", array()), "html", null, true);
            echo "\" >Modifier</a>
                                    </li>
                            ";
        }
        // line 21
        echo "                            
                        </ul>
                    </div>
                    <div><strong>Libellé : </strong><strong>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new Twig_Error_Runtime('Variable "categorie" does not exist.', 24, $this->getSourceContext()); })()), "libelle", array()), "html", null, true);
        echo "</strong></div>
                </div>        
            </div>
        </div>
    </div>            

</div>    

";
        
        $__internal_afd181be29102300926c6ebdf5208bba09fb74599d9489eaef63d2e995609a4d->leave($__internal_afd181be29102300926c6ebdf5208bba09fb74599d9489eaef63d2e995609a4d_prof);

    }

    public function getTemplateName()
    {
        return "tontineBundle:Categorie:preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 24,  54 => 21,  44 => 18,  41 => 17,  39 => 16,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div style=\"padding: 10px;\">
    <div class=\"box box-primary\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">Informations</h3>
        </div>
        <div class=\"box-body\">
            <div class=\"row\">
                <div class=\"col-sm-8\">
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
                    <div><strong>Libellé : </strong><strong>{{ categorie.libelle }}</strong></div>
                </div>        
            </div>
        </div>
    </div>            

</div>    

", "tontineBundle:Categorie:preview.html.twig", "/var/www/html/tontine/src/tontineBundle/Resources/views/Categorie/preview.html.twig");
    }
}
