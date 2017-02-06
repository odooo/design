<?php

/* tontineBundle:Fournisseur:preview.html.twig */
class __TwigTemplate_2993bc1023e0f8efec911e5dc63e5fdf87859e9ebf86fbbd98fd0f60fc7bcd61 extends Twig_Template
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
        $__internal_3871be3412c45cf41025a33c9da8bcee0c47664eb544228b1a7b30d649e5ab0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3871be3412c45cf41025a33c9da8bcee0c47664eb544228b1a7b30d649e5ab0b->enter($__internal_3871be3412c45cf41025a33c9da8bcee0c47664eb544228b1a7b30d649e5ab0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tontineBundle:Fournisseur:preview.html.twig"));

        // line 1
        echo "<div style=\"padding: 10px;\">
    <div class=\"box box-primary\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">Informations de l'utilisateur</h3>
        </div>
        <div class=\"box-body\">
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <img src=\"";
        // line 9
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new Twig_Error_Runtime('Variable "fournisseur" does not exist.', 9, $this->getSourceContext()); })()), "photo", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/pieces/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new Twig_Error_Runtime('Variable "fournisseur" does not exist.', 9, $this->getSourceContext()); })()), "photo", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/images/avatar04.png"), "html", null, true);
        }
        echo "\" style=\"border-radius: 50%; width: 200px;\">
                </div>
                <div class=\"col-sm-8\">
                    <div class=\"btn-group pull-right\">
                        <button type=\"button\" class=\"btn btn-primary btn-xs dropdown-toggle\" data-toggle=\"dropdown\">
                            Actions
                            <span class=\"fa fa-caret-down\"></span>
                        </button>
                        <ul class=\"dropdown-menu dropdown-menu-right\">
                            
                            ";
        // line 19
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_FOURNISSEUR_EDIT")) {
            // line 20
            echo "                                    <li>
                                        <a onclick=\"getEditFournisseurForm(";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new Twig_Error_Runtime('Variable "fournisseur" does not exist.', 21, $this->getSourceContext()); })()), "id", array()), "html", null, true);
            echo ")\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_fournisseur_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new Twig_Error_Runtime('Variable "fournisseur" does not exist.', 21, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
            echo "\" data-rec = \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new Twig_Error_Runtime('Variable "fournisseur" does not exist.', 21, $this->getSourceContext()); })()), "id", array()), "html", null, true);
            echo "\" >Modifier</a>
                                    </li>
                            ";
        }
        // line 24
        echo "                            
                        </ul>
                    </div>
                    <div><strong>Nom: </strong><strong>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new Twig_Error_Runtime('Variable "fournisseur" does not exist.', 27, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "</strong></div>
                    <div><strong>Contact: </strong>";
        // line 28
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('phone_number_format')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new Twig_Error_Runtime('Variable "fournisseur" does not exist.', 28, $this->getSourceContext()); })()), "contacts", array()), "INTERNATIONAL")), "html", null, true);
        echo "</div>
                    <div><strong>Adresse: </strong>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new Twig_Error_Runtime('Variable "fournisseur" does not exist.', 29, $this->getSourceContext()); })()), "adresse", array()), "html", null, true);
        echo "</div>
                </div>        
            </div>
        </div>
    </div>            

</div>    

";
        
        $__internal_3871be3412c45cf41025a33c9da8bcee0c47664eb544228b1a7b30d649e5ab0b->leave($__internal_3871be3412c45cf41025a33c9da8bcee0c47664eb544228b1a7b30d649e5ab0b_prof);

    }

    public function getTemplateName()
    {
        return "tontineBundle:Fournisseur:preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 29,  74 => 28,  70 => 27,  65 => 24,  55 => 21,  52 => 20,  50 => 19,  32 => 9,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div style=\"padding: 10px;\">
    <div class=\"box box-primary\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">Informations de l'utilisateur</h3>
        </div>
        <div class=\"box-body\">
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <img src=\"{% if fournisseur.photo %}{{ asset('uploads/pieces/') }}{{fournisseur.photo}}{% else %}{{ asset('bundles/images/avatar04.png') }}{% endif %}\" style=\"border-radius: 50%; width: 200px;\">
                </div>
                <div class=\"col-sm-8\">
                    <div class=\"btn-group pull-right\">
                        <button type=\"button\" class=\"btn btn-primary btn-xs dropdown-toggle\" data-toggle=\"dropdown\">
                            Actions
                            <span class=\"fa fa-caret-down\"></span>
                        </button>
                        <ul class=\"dropdown-menu dropdown-menu-right\">
                            
                            {% if  is_granted('ROLE_FOURNISSEUR_EDIT') %}
                                    <li>
                                        <a onclick=\"getEditFournisseurForm({{fournisseur.id}})\" href=\"{{ path('tontine_fournisseur_edit', { 'id': fournisseur.id }) }}\" data-rec = \"{{fournisseur.id}}\" >Modifier</a>
                                    </li>
                            {% endif  %}
                            
                        </ul>
                    </div>
                    <div><strong>Nom: </strong><strong>{{ fournisseur.name }}</strong></div>
                    <div><strong>Contact: </strong>{{ fournisseur.contacts | phone_number_format('INTERNATIONAL')}}</div>
                    <div><strong>Adresse: </strong>{{ fournisseur.adresse }}</div>
                </div>        
            </div>
        </div>
    </div>            

</div>    

", "tontineBundle:Fournisseur:preview.html.twig", "/var/www/html/tontine/src/tontineBundle/Resources/views/Fournisseur/preview.html.twig");
    }
}
