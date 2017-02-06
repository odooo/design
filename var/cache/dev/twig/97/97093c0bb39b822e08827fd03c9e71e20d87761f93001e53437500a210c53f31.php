<?php

/* tontineBundle:Pagne:preview.html.twig */
class __TwigTemplate_a0cca388fd5156851f58a2a2ce03df62454800d40987e5810bf243c03127b0ad extends Twig_Template
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
        $__internal_8da6e40224bf73f4b81c99981a564995404564f883992675923378e03a0e766c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8da6e40224bf73f4b81c99981a564995404564f883992675923378e03a0e766c->enter($__internal_8da6e40224bf73f4b81c99981a564995404564f883992675923378e03a0e766c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tontineBundle:Pagne:preview.html.twig"));

        // line 1
        echo "<div style=\"padding: 10px;\">
    <div class=\"box box-primary\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">Informations sur le tissu : ";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pagne"]) || array_key_exists("pagne", $context) ? $context["pagne"] : (function () { throw new Twig_Error_Runtime('Variable "pagne" does not exist.', 4, $this->getSourceContext()); })()), "reference", array()), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"box-body\">
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/pieces/"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pagne"]) || array_key_exists("pagne", $context) ? $context["pagne"] : (function () { throw new Twig_Error_Runtime('Variable "pagne" does not exist.', 9, $this->getSourceContext()); })()), "photo", array()), "html", null, true);
        echo "\" style=\"border-radius: 50%; width: 200px;\">
                </div>
                <div class=\"col-sm-8\">
                    <div class=\"btn-group pull-right\">
                        <button type=\"button\" class=\"btn btn-primary btn-xs dropdown-toggle\" data-toggle=\"dropdown\">
                            Actions
                            <span class=\"fa fa-caret-down\"></span>
                        </button>
                        <ul class=\"dropdown-menu dropdown-menu-right\">
                            <li>
                                <a onclick=\"getEditPagneForm(";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pagne"]) || array_key_exists("pagne", $context) ? $context["pagne"] : (function () { throw new Twig_Error_Runtime('Variable "pagne" does not exist.', 19, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo ")\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_pagne_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pagne"]) || array_key_exists("pagne", $context) ? $context["pagne"] : (function () { throw new Twig_Error_Runtime('Variable "pagne" does not exist.', 19, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" data-rec = \"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pagne"]) || array_key_exists("pagne", $context) ? $context["pagne"] : (function () { throw new Twig_Error_Runtime('Variable "pagne" does not exist.', 19, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "\" >Modifier</a>
                            </li>
                        </ul>
                    </div>
                    <div><strong>Référence : </strong><strong>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pagne"]) || array_key_exists("pagne", $context) ? $context["pagne"] : (function () { throw new Twig_Error_Runtime('Variable "pagne" does not exist.', 23, $this->getSourceContext()); })()), "reference", array()), "html", null, true);
        echo "</strong></div>
                    <div><strong>Désignation : </strong>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pagne"]) || array_key_exists("pagne", $context) ? $context["pagne"] : (function () { throw new Twig_Error_Runtime('Variable "pagne" does not exist.', 24, $this->getSourceContext()); })()), "designation", array()), "html", null, true);
        echo "</div>
                    <div><strong>Mesure : </strong>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pagne"]) || array_key_exists("pagne", $context) ? $context["pagne"] : (function () { throw new Twig_Error_Runtime('Variable "pagne" does not exist.', 25, $this->getSourceContext()); })()), "mesure", array()), "html", null, true);
        echo " mètres</div>
                    <div><strong>Prix : </strong>";
        // line 26
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pagne"]) || array_key_exists("pagne", $context) ? $context["pagne"] : (function () { throw new Twig_Error_Runtime('Variable "pagne" does not exist.', 26, $this->getSourceContext()); })()), "prix", array()), 0, ",", "."), "html", null, true);
        echo " F CFA</div>
                    <div><strong>Catégorie : </strong>";
        // line 27
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pagne"]) || array_key_exists("pagne", $context) ? $context["pagne"] : (function () { throw new Twig_Error_Runtime('Variable "pagne" does not exist.', 27, $this->getSourceContext()); })()), "categorie", array())) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pagne"]) || array_key_exists("pagne", $context) ? $context["pagne"] : (function () { throw new Twig_Error_Runtime('Variable "pagne" does not exist.', 27, $this->getSourceContext()); })()), "categorie", array()), "libelle", array()), "html", null, true);
        }
        echo " </div>
                    <div><strong>Fournisseur : </strong>";
        // line 28
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pagne"]) || array_key_exists("pagne", $context) ? $context["pagne"] : (function () { throw new Twig_Error_Runtime('Variable "pagne" does not exist.', 28, $this->getSourceContext()); })()), "fournisseur", array())) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pagne"]) || array_key_exists("pagne", $context) ? $context["pagne"] : (function () { throw new Twig_Error_Runtime('Variable "pagne" does not exist.', 28, $this->getSourceContext()); })()), "fournisseur", array()), "name", array()), "html", null, true);
        }
        echo " </div>
                    <div class=\"btn-group\" style=\"margin-top: 20px\">
                        
                    </div>
                </div>        
            </div>
        </div>
    </div>            
    
    <div class=\"box box-primary\" style=\"margin-top: 20px\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">...</h3>
        </div>
        <div class=\"box-body no-padding\">
            <p class=\"text-center\">
               
            </p>            
        </div>
    </div>
</div>    

";
        
        $__internal_8da6e40224bf73f4b81c99981a564995404564f883992675923378e03a0e766c->leave($__internal_8da6e40224bf73f4b81c99981a564995404564f883992675923378e03a0e766c_prof);

    }

    public function getTemplateName()
    {
        return "tontineBundle:Pagne:preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 28,  76 => 27,  72 => 26,  68 => 25,  64 => 24,  60 => 23,  49 => 19,  35 => 9,  27 => 4,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div style=\"padding: 10px;\">
    <div class=\"box box-primary\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">Informations sur le tissu : {{ pagne.reference }}</h3>
        </div>
        <div class=\"box-body\">
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <img src=\"{{ asset('uploads/pieces/') }}{{pagne.photo}}\" style=\"border-radius: 50%; width: 200px;\">
                </div>
                <div class=\"col-sm-8\">
                    <div class=\"btn-group pull-right\">
                        <button type=\"button\" class=\"btn btn-primary btn-xs dropdown-toggle\" data-toggle=\"dropdown\">
                            Actions
                            <span class=\"fa fa-caret-down\"></span>
                        </button>
                        <ul class=\"dropdown-menu dropdown-menu-right\">
                            <li>
                                <a onclick=\"getEditPagneForm({{pagne.id}})\" href=\"{{ path('tontine_pagne_edit', { 'id': pagne.id }) }}\" data-rec = \"{{pagne.id}}\" >Modifier</a>
                            </li>
                        </ul>
                    </div>
                    <div><strong>Référence : </strong><strong>{{ pagne.reference }}</strong></div>
                    <div><strong>Désignation : </strong>{{ pagne.designation }}</div>
                    <div><strong>Mesure : </strong>{{ pagne.mesure }} mètres</div>
                    <div><strong>Prix : </strong>{{ pagne.prix|number_format(0,',','.') }} F CFA</div>
                    <div><strong>Catégorie : </strong>{% if pagne.categorie %} {{ pagne.categorie.libelle }}{% endif %} </div>
                    <div><strong>Fournisseur : </strong>{% if pagne.fournisseur %} {{ pagne.fournisseur.name }}{% endif %} </div>
                    <div class=\"btn-group\" style=\"margin-top: 20px\">
                        
                    </div>
                </div>        
            </div>
        </div>
    </div>            
    
    <div class=\"box box-primary\" style=\"margin-top: 20px\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">...</h3>
        </div>
        <div class=\"box-body no-padding\">
            <p class=\"text-center\">
               
            </p>            
        </div>
    </div>
</div>    

", "tontineBundle:Pagne:preview.html.twig", "/var/www/html/tontine/src/tontineBundle/Resources/views/Pagne/preview.html.twig");
    }
}
