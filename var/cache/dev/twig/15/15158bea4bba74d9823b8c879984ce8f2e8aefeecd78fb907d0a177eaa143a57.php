<?php

/* tontineBundle:Pagne:show.html.twig */
class __TwigTemplate_04fcbe6b3e6ea5678e9f034ec89d994a6746b079a1717540917d9c3b2655b2b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":default:index.html.twig", "tontineBundle:Pagne:show.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc4d0ca94a08453fa7e455919a78eba1748d353dff3ba87b002ab51451ec5e07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc4d0ca94a08453fa7e455919a78eba1748d353dff3ba87b002ab51451ec5e07->enter($__internal_cc4d0ca94a08453fa7e455919a78eba1748d353dff3ba87b002ab51451ec5e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tontineBundle:Pagne:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc4d0ca94a08453fa7e455919a78eba1748d353dff3ba87b002ab51451ec5e07->leave($__internal_cc4d0ca94a08453fa7e455919a78eba1748d353dff3ba87b002ab51451ec5e07_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_eefe1a3aee6ec2794ad34e65876bcc02fbc3a63b9fa8955ade5a096247cedbdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eefe1a3aee6ec2794ad34e65876bcc02fbc3a63b9fa8955ade5a096247cedbdd->enter($__internal_eefe1a3aee6ec2794ad34e65876bcc02fbc3a63b9fa8955ade5a096247cedbdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo "    
    <div class=\"box box-primary\">
        <div class=\"box-header with-border\">
            <h1 class=\"box-title\"> Details des informations des tissus </h1>
            <div class=\"box-tools pull-right\">
                <button class=\"btn btn-box-tool\" data-widget=\"collapse\">
                    <i class=\"fa fa-minus\"></i>
                </button>
            </div>
        </div>            

        <div class=\"box-body\">
            <table class=\"table table-bordered table-striped\">
                <tbody>
                    <tr>
                        <th>N° Pagne</th>
                        <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pagne"]) || array_key_exists("pagne", $context) ? $context["pagne"] : (function () { throw new Twig_Error_Runtime('Variable "pagne" does not exist.', 18, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</td>
                    </tr>                        
                    <tr>
                        <th>Coupon</th>
                        <td> 
                            <div style=\"max-width: 400px\">
                                <img class=\"img-circle img-responsive\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/pieces/"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pagne"]) || array_key_exists("pagne", $context) ? $context["pagne"] : (function () { throw new Twig_Error_Runtime('Variable "pagne" does not exist.', 24, $this->getSourceContext()); })()), "photo", array()), "html", null, true);
        echo "\"/>
                            </div>
                        </td>
                    </tr>
                    
                    <tr>
                        <th>Référence</th>
                        <td>  ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pagne"]) || array_key_exists("pagne", $context) ? $context["pagne"] : (function () { throw new Twig_Error_Runtime('Variable "pagne" does not exist.', 31, $this->getSourceContext()); })()), "reference", array()), "html", null, true);
        echo " </td>
                    </tr>
                    <tr>
                        <th>Désignation</th>
                        <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pagne"]) || array_key_exists("pagne", $context) ? $context["pagne"] : (function () { throw new Twig_Error_Runtime('Variable "pagne" does not exist.', 35, $this->getSourceContext()); })()), "designation", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Mesure</th>
                        <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pagne"]) || array_key_exists("pagne", $context) ? $context["pagne"] : (function () { throw new Twig_Error_Runtime('Variable "pagne" does not exist.', 39, $this->getSourceContext()); })()), "mesure", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Prix d'achat</th>
                        <td>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pagne"]) || array_key_exists("pagne", $context) ? $context["pagne"] : (function () { throw new Twig_Error_Runtime('Variable "pagne" does not exist.', 43, $this->getSourceContext()); })()), "prix", array()), "html", null, true);
        echo "</td>
                    </tr>                                              
                </tbody>
            </table>

            <div class=\"box-footer\">
                <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_pagne");
        echo "\">
                <button type=\"button\" class=\"btn btn-warning\">Retour à la liste</button></a>                
            </div>
        </div>
    </div>
";
        
        $__internal_eefe1a3aee6ec2794ad34e65876bcc02fbc3a63b9fa8955ade5a096247cedbdd->leave($__internal_eefe1a3aee6ec2794ad34e65876bcc02fbc3a63b9fa8955ade5a096247cedbdd_prof);

    }

    public function getTemplateName()
    {
        return "tontineBundle:Pagne:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 49,  98 => 43,  91 => 39,  84 => 35,  77 => 31,  66 => 24,  57 => 18,  34 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":default:index.html.twig\" %}
{% block content %}    
    <div class=\"box box-primary\">
        <div class=\"box-header with-border\">
            <h1 class=\"box-title\"> Details des informations des tissus </h1>
            <div class=\"box-tools pull-right\">
                <button class=\"btn btn-box-tool\" data-widget=\"collapse\">
                    <i class=\"fa fa-minus\"></i>
                </button>
            </div>
        </div>            

        <div class=\"box-body\">
            <table class=\"table table-bordered table-striped\">
                <tbody>
                    <tr>
                        <th>N° Pagne</th>
                        <td>{{ pagne.id }}</td>
                    </tr>                        
                    <tr>
                        <th>Coupon</th>
                        <td> 
                            <div style=\"max-width: 400px\">
                                <img class=\"img-circle img-responsive\" src=\"{{ asset('uploads/pieces/')}}{{pagne.photo}}\"/>
                            </div>
                        </td>
                    </tr>
                    
                    <tr>
                        <th>Référence</th>
                        <td>  {{ pagne.reference }} </td>
                    </tr>
                    <tr>
                        <th>Désignation</th>
                        <td>{{ pagne.designation }}</td>
                    </tr>
                    <tr>
                        <th>Mesure</th>
                        <td>{{ pagne.mesure}}</td>
                    </tr>
                    <tr>
                        <th>Prix d'achat</th>
                        <td>{{ pagne.prix }}</td>
                    </tr>                                              
                </tbody>
            </table>

            <div class=\"box-footer\">
                <a href=\"{{ path('tontine_pagne') }}\">
                <button type=\"button\" class=\"btn btn-warning\">Retour à la liste</button></a>                
            </div>
        </div>
    </div>
{% endblock %}", "tontineBundle:Pagne:show.html.twig", "/var/www/html/tontine/src/tontineBundle/Resources/views/Pagne/show.html.twig");
    }
}
