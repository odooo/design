<?php

/* tontineBundle:Client:preview.html.twig */
class __TwigTemplate_202aabac9bfe2985769ba68cbfed00450b9d7b41773081862c52370d77dd1db4 extends Twig_Template
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
        $__internal_4e1dfb165d3c4833b037b656068d350459b1a572da1f213146d604409dc2fd2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e1dfb165d3c4833b037b656068d350459b1a572da1f213146d604409dc2fd2f->enter($__internal_4e1dfb165d3c4833b037b656068d350459b1a572da1f213146d604409dc2fd2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tontineBundle:Client:preview.html.twig"));

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
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 9, $this->getSourceContext()); })()), "photo", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/pieces/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 9, $this->getSourceContext()); })()), "photo", array()), "html", null, true);
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
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CLIENT_EDIT")) {
            // line 20
            echo "                                    <li>
                                        <a onclick=\"getEditClientForm(";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 21, $this->getSourceContext()); })()), "id", array()), "html", null, true);
            echo ")\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_client_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 21, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
            echo "\" data-rec = \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 21, $this->getSourceContext()); })()), "id", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 27, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "</strong></div>
                    <div><strong>Adresse: </strong>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 28, $this->getSourceContext()); })()), "adresse", array()), "html", null, true);
        echo "</div>
                    <div><strong>Contact: </strong>";
        // line 29
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('phone_number_format')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 29, $this->getSourceContext()); })()), "contacts", array()), "INTERNATIONAL")), "html", null, true);
        echo "</div>
                </div>        
            </div>
        </div>
    </div>            

</div>    

";
        
        $__internal_4e1dfb165d3c4833b037b656068d350459b1a572da1f213146d604409dc2fd2f->leave($__internal_4e1dfb165d3c4833b037b656068d350459b1a572da1f213146d604409dc2fd2f_prof);

    }

    public function getTemplateName()
    {
        return "tontineBundle:Client:preview.html.twig";
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
                    <img src=\"{% if client.photo %}{{ asset('uploads/pieces/') }}{{client.photo}}{% else %}{{ asset('bundles/images/avatar04.png') }}{% endif %}\" style=\"border-radius: 50%; width: 200px;\">
                </div>
                <div class=\"col-sm-8\">
                    <div class=\"btn-group pull-right\">
                        <button type=\"button\" class=\"btn btn-primary btn-xs dropdown-toggle\" data-toggle=\"dropdown\">
                            Actions
                            <span class=\"fa fa-caret-down\"></span>
                        </button>
                        <ul class=\"dropdown-menu dropdown-menu-right\">
                            
                            {% if  is_granted('ROLE_CLIENT_EDIT') %}
                                    <li>
                                        <a onclick=\"getEditClientForm({{client.id}})\" href=\"{{ path('tontine_client_edit', { 'id': client.id }) }}\" data-rec = \"{{client.id}}\" >Modifier</a>
                                    </li>
                            {% endif  %}
                            
                        </ul>
                    </div>
                    <div><strong>Nom: </strong><strong>{{ client.name }}</strong></div>
                    <div><strong>Adresse: </strong>{{ client.adresse }}</div>
                    <div><strong>Contact: </strong>{{ client.contacts | phone_number_format('INTERNATIONAL')}}</div>
                </div>        
            </div>
        </div>
    </div>            

</div>    

", "tontineBundle:Client:preview.html.twig", "/var/www/html/tontine/src/tontineBundle/Resources/views/Client/preview.html.twig");
    }
}
