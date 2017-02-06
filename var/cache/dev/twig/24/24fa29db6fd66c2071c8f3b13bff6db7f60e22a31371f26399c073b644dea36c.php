<?php

/* tontineBundle:Agent:preview.html.twig */
class __TwigTemplate_299b978ed50115a15c4f59a0813b0eda40d4b23311e5565ac91b6359be13afa2 extends Twig_Template
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
        $__internal_fc40b7d15fc78f527abc7302ef2be3ad0531886c45fd447c4db25e122d87e211 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc40b7d15fc78f527abc7302ef2be3ad0531886c45fd447c4db25e122d87e211->enter($__internal_fc40b7d15fc78f527abc7302ef2be3ad0531886c45fd447c4db25e122d87e211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tontineBundle:Agent:preview.html.twig"));

        // line 1
        echo "<div style=\"padding: 10px;\">
    <div class=\"box box-primary\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">Informations de l'agent: ";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new Twig_Error_Runtime('Variable "agent" does not exist.', 4, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"box-body\">
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/pieces/"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new Twig_Error_Runtime('Variable "agent" does not exist.', 9, $this->getSourceContext()); })()), "photo", array()), "html", null, true);
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
                                <a onclick=\"getEditAgentForm(";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new Twig_Error_Runtime('Variable "agent" does not exist.', 19, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo ")\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_agent_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new Twig_Error_Runtime('Variable "agent" does not exist.', 19, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" data-rec = \"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new Twig_Error_Runtime('Variable "agent" does not exist.', 19, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "\" >Modifier</a>
                            </li>
                            <li>
                                <div class=\"btn-group btn-toggle\" onclick=\"onOffBtn(";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new Twig_Error_Runtime('Variable "agent" does not exist.', 22, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo ", this)\"> 
                                    ";
        // line 23
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new Twig_Error_Runtime('Variable "agent" does not exist.', 23, $this->getSourceContext()); })()), "enabled", array())) {
            // line 24
            echo "                                        <button class=\"btn btn-sm btn-success active\">Activé</button>
                                        <button class=\"btn btn-sm btn-default\">Désactivé</button>
                                    ";
        } else {
            // line 27
            echo "                                        <button class=\"btn btn-sm btn-default\">Activé</button>
                                        <button class=\"btn btn-sm btn-danger active\">Désactivé</button>
                                    ";
        }
        // line 30
        echo "                                </div>
                            </li>
                            <li class=\"divider\"></li>
                        </ul>
                    </div>
                    <div><strong>Nom: </strong><strong>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new Twig_Error_Runtime('Variable "agent" does not exist.', 35, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "</strong></div>
                    <div><strong>Contact: </strong>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new Twig_Error_Runtime('Variable "agent" does not exist.', 36, $this->getSourceContext()); })()), "contact", array()), "html", null, true);
        echo "</div>
                    <div><strong>Titre: </strong>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new Twig_Error_Runtime('Variable "agent" does not exist.', 37, $this->getSourceContext()); })()), "profilName", array()), "html", null, true);
        echo "</div>
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
        
        $__internal_fc40b7d15fc78f527abc7302ef2be3ad0531886c45fd447c4db25e122d87e211->leave($__internal_fc40b7d15fc78f527abc7302ef2be3ad0531886c45fd447c4db25e122d87e211_prof);

    }

    public function getTemplateName()
    {
        return "tontineBundle:Agent:preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 37,  86 => 36,  82 => 35,  75 => 30,  70 => 27,  65 => 24,  63 => 23,  59 => 22,  49 => 19,  35 => 9,  27 => 4,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div style=\"padding: 10px;\">
    <div class=\"box box-primary\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">Informations de l'agent: {{agent.name}}</h3>
        </div>
        <div class=\"box-body\">
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <img src=\"{{ asset('uploads/pieces/') }}{{agent.photo}}\" style=\"border-radius: 50%; width: 200px;\">
                </div>
                <div class=\"col-sm-8\">
                    <div class=\"btn-group pull-right\">
                        <button type=\"button\" class=\"btn btn-primary btn-xs dropdown-toggle\" data-toggle=\"dropdown\">
                            Actions
                            <span class=\"fa fa-caret-down\"></span>
                        </button>
                        <ul class=\"dropdown-menu dropdown-menu-right\">
                            <li>
                                <a onclick=\"getEditAgentForm({{agent.id}})\" href=\"{{ path('tontine_agent_edit', { 'id': agent.id }) }}\" data-rec = \"{{agent.id}}\" >Modifier</a>
                            </li>
                            <li>
                                <div class=\"btn-group btn-toggle\" onclick=\"onOffBtn({{agent.id}}, this)\"> 
                                    {% if agent.enabled %}
                                        <button class=\"btn btn-sm btn-success active\">Activé</button>
                                        <button class=\"btn btn-sm btn-default\">Désactivé</button>
                                    {% else %}
                                        <button class=\"btn btn-sm btn-default\">Activé</button>
                                        <button class=\"btn btn-sm btn-danger active\">Désactivé</button>
                                    {% endif %}
                                </div>
                            </li>
                            <li class=\"divider\"></li>
                        </ul>
                    </div>
                    <div><strong>Nom: </strong><strong>{{ agent.name }}</strong></div>
                    <div><strong>Contact: </strong>{{ agent.contact }}</div>
                    <div><strong>Titre: </strong>{{ agent.profilName }}</div>
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

", "tontineBundle:Agent:preview.html.twig", "/var/www/html/tontine/src/tontineBundle/Resources/views/Agent/preview.html.twig");
    }
}
