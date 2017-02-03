<?php

/* @tontine/Default/header.html.twig */
class __TwigTemplate_90ee969ecb3f8b5ddf1848487dafa9f29a93ada3da955279fcd69ab4b421b835 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'button_menu' => array($this, 'block_button_menu'),
            'userProfil' => array($this, 'block_userProfil'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f84ba0d68b4c1af28bc9e74bd9c961d3b6d002868422681eb46c7200361c7e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f84ba0d68b4c1af28bc9e74bd9c961d3b6d002868422681eb46c7200361c7e0->enter($__internal_8f84ba0d68b4c1af28bc9e74bd9c961d3b6d002868422681eb46c7200361c7e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@tontine/Default/header.html.twig"));

        // line 1
        echo "<header class=\"main-header\">
    <a href=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_dashboard");
        echo "\" class=\"logo\">
        <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class=\"logo-mini\"><img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/globalsevice.png"), "html", null, true);
        echo "\" style=\"width:50px;\"
                                         class=\"img-circle\" alt=\"fiacre\"/></span>
        <!-- logo for regular state and mobile devices -->
            <span class=\"logo-lg\"><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/globalsevice.png"), "html", null, true);
        echo "\" style=\"width:70px;\"
                                       class=\"img-circle\" alt=\"fiacre\"/>Global Design</span>
    </a>
    <!-- Header Navbar -->
    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
        <!-- Sidebar toggle button-->

        ";
        // line 14
        $this->displayBlock('button_menu', $context, $blocks);
        // line 19
        echo "        ";
        if (twig_in_filter("agents", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 19, $this->getSourceContext()); })()), "request", array()), "requestUri", array()))) {
            echo "           
            <p style=\"color: white; font-weight: bold\" class=\"navbar-text\" >
                Gestion des agents
            </p>
        ";
        } elseif ((twig_in_filter("client", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 23
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 23, $this->getSourceContext()); })()), "request", array()), "requestUri", array())) || twig_in_filter("visite", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 23, $this->getSourceContext()); })()), "request", array()), "requestUri", array())))) {
            echo "           
            <p style=\"color: white; font-weight: bold\" class=\"navbar-text\" >
                Gestion des clients
            </p>
        ";
        } elseif (twig_in_filter("tontines", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 27
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 27, $this->getSourceContext()); })()), "request", array()), "requestUri", array()))) {
            echo "           
            <p style=\"color: white; font-weight: bold\" class=\"navbar-text\" >
                Gestion des tontines
            </p>
        ";
        }
        // line 32
        echo "        <div class=\"navbar-custom-menu\">
            <ul class=\"nav navbar-nav\">
                ";
        // line 34
        $context["cgnu"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["menuCounters"]) || array_key_exists("menuCounters", $context) ? $context["menuCounters"] : (function () { throw new Twig_Error_Runtime('Variable "menuCounters" does not exist.', 34, $this->getSourceContext()); })()), "countMiseAjourCG", array(), "method");
        // line 35
        echo "                ";
        $this->displayBlock('userProfil', $context, $blocks);
        // line 75
        echo "            </ul>
        </div>
    </nav>
</header>";
        
        $__internal_8f84ba0d68b4c1af28bc9e74bd9c961d3b6d002868422681eb46c7200361c7e0->leave($__internal_8f84ba0d68b4c1af28bc9e74bd9c961d3b6d002868422681eb46c7200361c7e0_prof);

    }

    // line 14
    public function block_button_menu($context, array $blocks = array())
    {
        $__internal_471225cf7d05d1dd109282d2756db13aed4f92a3429f6adc936a8b830621fd1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_471225cf7d05d1dd109282d2756db13aed4f92a3429f6adc936a8b830621fd1c->enter($__internal_471225cf7d05d1dd109282d2756db13aed4f92a3429f6adc936a8b830621fd1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_menu"));

        // line 15
        echo "            <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                <span class=\"sr-only\">Toggle navigation</span>
            </a>
        ";
        
        $__internal_471225cf7d05d1dd109282d2756db13aed4f92a3429f6adc936a8b830621fd1c->leave($__internal_471225cf7d05d1dd109282d2756db13aed4f92a3429f6adc936a8b830621fd1c_prof);

    }

    // line 35
    public function block_userProfil($context, array $blocks = array())
    {
        $__internal_ce600e89134f2bf0006de062d335a1fbb5cd1ee2bd76f7661e2d0b759aadde34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce600e89134f2bf0006de062d335a1fbb5cd1ee2bd76f7661e2d0b759aadde34->enter($__internal_ce600e89134f2bf0006de062d335a1fbb5cd1ee2bd76f7661e2d0b759aadde34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "userProfil"));

        // line 36
        echo "                    ";
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_GSP_TONTINE_ADMIN") && ((isset($context["cgnu"]) || array_key_exists("cgnu", $context) ? $context["cgnu"] : (function () { throw new Twig_Error_Runtime('Variable "cgnu" does not exist.', 36, $this->getSourceContext()); })()) != 0))) {
            // line 37
            echo "                        <li class=\"dropdown\" data-toggle=\"tooltip\" data-html=\"true\" data-placement=\"bottom\" title=\"<b>";
            echo twig_escape_filter($this->env, (isset($context["cgnu"]) || array_key_exists("cgnu", $context) ? $context["cgnu"] : (function () { throw new Twig_Error_Runtime('Variable "cgnu" does not exist.', 37, $this->getSourceContext()); })()), "html", null, true);
            echo " Condition(s) générales non à jour!</b>\">
                            <!-- Menu Toggle Button -->
                            <a href=\"#\" class=\"yop-blink btn-danger\" data-toggle=\"dropdown\">
                                Conditions Génerales
                                <span class=\"fa fa-bell\"></span>
                            </a>
                        </li>
                    ";
        }
        // line 45
        echo "                    <li class=\"dropdown\">
                        <!-- Menu Toggle Button -->
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">                            
                                ";
        // line 48
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 48, $this->getSourceContext()); })()), "user", array())) {
            // line 49
            echo "                                    ";
            if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 49, $this->getSourceContext()); })()), "user", array()), "photo", array()))) {
                // line 50
                echo "                                    <span><img  src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/pieces/"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 50, $this->getSourceContext()); })()), "user", array()), "photo", array()), "html", null, true);
                echo "\"  class=\"img-circle\" style=\"display: inline; width: 40px; margin-top: -15px; margin-bottom: -15px\"/></span>
                                ";
            } else {
                // line 52
                echo "                                    <span><img  src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/images/profil.png"), "html", null, true);
                echo "\"  class=\"img-circle\" style=\"display: inline; width: 40px\"/></span>
                                ";
            }
            // line 54
            echo "                                ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 54, $this->getSourceContext()); })()), "user", array()), "nom", array())), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 54, $this->getSourceContext()); })()), "user", array()), "prenom", array()), "html", null, true);
            echo "
                            ";
        }
        // line 56
        echo "                            <span class=\"fa fa-gears\"></span>
                        </a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            <li role=\"presentation\">
                                <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_user_profile", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 60, $this->getSourceContext()); })()), "user", array()), "id", array()))), "html", null, true);
        echo "\">
                                    <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                                    Profile
                                </a>
                            </li>
                            <li class=\"divider\" role=\"presentation\"></li>
                            <li role=\"presentation\">
                                <a href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">
                                    <i class=\"fa fa-power-off\" aria-hidden=\"true\"></i>
                                    Déconnexion
                                </a>
                            </li>
                        </ul>
                    </li>
                ";
        
        $__internal_ce600e89134f2bf0006de062d335a1fbb5cd1ee2bd76f7661e2d0b759aadde34->leave($__internal_ce600e89134f2bf0006de062d335a1fbb5cd1ee2bd76f7661e2d0b759aadde34_prof);

    }

    public function getTemplateName()
    {
        return "@tontine/Default/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 67,  166 => 60,  160 => 56,  152 => 54,  146 => 52,  139 => 50,  136 => 49,  134 => 48,  129 => 45,  117 => 37,  114 => 36,  108 => 35,  98 => 15,  92 => 14,  82 => 75,  79 => 35,  77 => 34,  73 => 32,  65 => 27,  58 => 23,  50 => 19,  48 => 14,  38 => 7,  32 => 4,  27 => 2,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header class=\"main-header\">
    <a href=\"{{ path('tontine_dashboard') }}\" class=\"logo\">
        <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class=\"logo-mini\"><img src=\"{{ asset('bundles/globalsevice.png') }}\" style=\"width:50px;\"
                                         class=\"img-circle\" alt=\"fiacre\"/></span>
        <!-- logo for regular state and mobile devices -->
            <span class=\"logo-lg\"><img src=\"{{ asset('bundles/globalsevice.png') }}\" style=\"width:70px;\"
                                       class=\"img-circle\" alt=\"fiacre\"/>Global Design</span>
    </a>
    <!-- Header Navbar -->
    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
        <!-- Sidebar toggle button-->

        {% block button_menu %}
            <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                <span class=\"sr-only\">Toggle navigation</span>
            </a>
        {% endblock %}
        {% if 'agents' in app.request.requestUri %}           
            <p style=\"color: white; font-weight: bold\" class=\"navbar-text\" >
                Gestion des agents
            </p>
        {% elseif 'client' in app.request.requestUri or 'visite' in app.request.requestUri %}           
            <p style=\"color: white; font-weight: bold\" class=\"navbar-text\" >
                Gestion des clients
            </p>
        {% elseif 'tontines' in app.request.requestUri %}           
            <p style=\"color: white; font-weight: bold\" class=\"navbar-text\" >
                Gestion des tontines
            </p>
        {% endif %}
        <div class=\"navbar-custom-menu\">
            <ul class=\"nav navbar-nav\">
                {% set cgnu = menuCounters.countMiseAjourCG()%}
                {% block userProfil %}
                    {% if (is_granted('ROLE_GSP_TONTINE_ADMIN') and (cgnu != 0)) %}
                        <li class=\"dropdown\" data-toggle=\"tooltip\" data-html=\"true\" data-placement=\"bottom\" title=\"<b>{{cgnu}} Condition(s) générales non à jour!</b>\">
                            <!-- Menu Toggle Button -->
                            <a href=\"#\" class=\"yop-blink btn-danger\" data-toggle=\"dropdown\">
                                Conditions Génerales
                                <span class=\"fa fa-bell\"></span>
                            </a>
                        </li>
                    {% endif %}
                    <li class=\"dropdown\">
                        <!-- Menu Toggle Button -->
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">                            
                                {% if app.user %}
                                    {% if app.user.photo is not null %}
                                    <span><img  src=\"{{asset('uploads/pieces/')}}{{app.user.photo}}\"  class=\"img-circle\" style=\"display: inline; width: 40px; margin-top: -15px; margin-bottom: -15px\"/></span>
                                {% else %}
                                    <span><img  src=\"{{asset('bundles/images/profil.png')}}\"  class=\"img-circle\" style=\"display: inline; width: 40px\"/></span>
                                {% endif %}
                                {{ app.user.nom|upper }}  {{ app.user.prenom }}
                            {% endif %}
                            <span class=\"fa fa-gears\"></span>
                        </a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            <li role=\"presentation\">
                                <a href=\"{{path('tontine_user_profile', {'id':app.user.id})}}\">
                                    <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                                    Profile
                                </a>
                            </li>
                            <li class=\"divider\" role=\"presentation\"></li>
                            <li role=\"presentation\">
                                <a href=\"{{path('fos_user_security_logout')}}\">
                                    <i class=\"fa fa-power-off\" aria-hidden=\"true\"></i>
                                    Déconnexion
                                </a>
                            </li>
                        </ul>
                    </li>
                {% endblock %}
            </ul>
        </div>
    </nav>
</header>", "@tontine/Default/header.html.twig", "/var/www/html/tontine/src/tontineBundle/Resources/views/Default/header.html.twig");
    }
}
