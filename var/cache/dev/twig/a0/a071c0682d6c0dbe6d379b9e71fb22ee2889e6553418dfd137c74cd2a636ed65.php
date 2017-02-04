<?php

/* tontineBundle:Default:sidebar/etat.html.twig */
class __TwigTemplate_e42037ab917362415972f0c8a04fad7837d444d61ea9cd898c2ca11aa4c2fe99 extends Twig_Template
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
        $__internal_fe1b827f44c6421f3890e3c06cebad1df00d7e74ffb22966260da2977414b370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe1b827f44c6421f3890e3c06cebad1df00d7e74ffb22966260da2977414b370->enter($__internal_fe1b827f44c6421f3890e3c06cebad1df00d7e74ffb22966260da2977414b370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tontineBundle:Default:sidebar/etat.html.twig"));

        // line 1
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ETAT_VIEW")) {
            // line 2
            echo "        <li class=\"treeview\">
            <a href=\"#\">
                <i class=\"fa fa-state\"></i>
                <span>Les états</span>
                <span class=\"pull-right-container\">
                    <i class=\"fa fa-state pull-right\"></i>
                </span>
            </a>
            <ul class=\"treeview-menu\">
                <li>
                    <a href=\"";
            // line 12
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_etat_mise");
            echo "\"><i class=\"fa fa-flag\"></i> <span>Etat des mises</span></a>
                </li>
                <li>
                    <a href=\"";
            // line 15
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_etat_client");
            echo "\"><i class=\"fa fa-list\"></i> <span>Etat des clients </span></a>
                </li>
                <li>
                    <a href=\"";
            // line 18
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_etat_transfert_fonds");
            echo "\"><i class=\"fa fa-money\"></i> <span>Etat des TR de fonds</span></a>
                </li>
                <li>
                    <a href=\"";
            // line 21
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_etat_contrat");
            echo "\"><i class=\"fa fa-minus\"></i> <span>Etat contrats resiliés </span></a>
                </li>
                <li>
                    <a href=\"";
            // line 24
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_etat_transfert_commissions");
            echo "\"><i class=\"fa fa-envelope\"></i> <span>Etat des TR de commissions</span></a>
                </li>
                ";
            // line 26
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ETAT_BIEN_VIEW")) {
                // line 27
                echo "                    <li>
                        <a href=\"#\"><i class=\"fa fa-bien\"></i> <span>Etat des biens en tontine</span></a>
                    </li>
                ";
            }
            // line 31
            echo "            </ul>
        </li>
    ";
        }
        // line 33
        echo " ";
        
        $__internal_fe1b827f44c6421f3890e3c06cebad1df00d7e74ffb22966260da2977414b370->leave($__internal_fe1b827f44c6421f3890e3c06cebad1df00d7e74ffb22966260da2977414b370_prof);

    }

    public function getTemplateName()
    {
        return "tontineBundle:Default:sidebar/etat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 33,  73 => 31,  67 => 27,  65 => 26,  60 => 24,  54 => 21,  48 => 18,  42 => 15,  36 => 12,  24 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if is_granted('ROLE_ETAT_VIEW') %}
        <li class=\"treeview\">
            <a href=\"#\">
                <i class=\"fa fa-state\"></i>
                <span>Les états</span>
                <span class=\"pull-right-container\">
                    <i class=\"fa fa-state pull-right\"></i>
                </span>
            </a>
            <ul class=\"treeview-menu\">
                <li>
                    <a href=\"{{ path('tontine_etat_mise') }}\"><i class=\"fa fa-flag\"></i> <span>Etat des mises</span></a>
                </li>
                <li>
                    <a href=\"{{ path('tontine_etat_client') }}\"><i class=\"fa fa-list\"></i> <span>Etat des clients </span></a>
                </li>
                <li>
                    <a href=\"{{ path('tontine_etat_transfert_fonds') }}\"><i class=\"fa fa-money\"></i> <span>Etat des TR de fonds</span></a>
                </li>
                <li>
                    <a href=\"{{ path('tontine_etat_contrat') }}\"><i class=\"fa fa-minus\"></i> <span>Etat contrats resiliés </span></a>
                </li>
                <li>
                    <a href=\"{{ path('tontine_etat_transfert_commissions') }}\"><i class=\"fa fa-envelope\"></i> <span>Etat des TR de commissions</span></a>
                </li>
                {% if is_granted('ROLE_ETAT_BIEN_VIEW') %}
                    <li>
                        <a href=\"#\"><i class=\"fa fa-bien\"></i> <span>Etat des biens en tontine</span></a>
                    </li>
                {% endif %}
            </ul>
        </li>
    {% endif %} ", "tontineBundle:Default:sidebar/etat.html.twig", "/var/www/html/tontine/src/tontineBundle/Resources/views/Default/sidebar/etat.html.twig");
    }
}