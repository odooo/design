<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_2ad03afcd332837d19e8a3df9eb7d8ae35f3f3960ba04cc00e1e559d40a4a6f9 extends Twig_Template
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
        $__internal_62a6fb4028e66a308030742e05198250badc776b8d88f4945c8cc914e4375026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62a6fb4028e66a308030742e05198250badc776b8d88f4945c8cc914e4375026->enter($__internal_62a6fb4028e66a308030742e05198250badc776b8d88f4945c8cc914e4375026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
<div class=\"row-fluid\">
    <div class=\" col-sm-offset-4 col-sm-4\" style=\"margin-top: 12%\">
        <form action=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\" id=\"login-form\">
            ";
        // line 6
        if ((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 6, $this->getSourceContext()); })())) {
            // line 7
            echo "                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 7, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />
            ";
        }
        // line 9
        echo "            <div class=\"form-login\">
                <h4>Global Design | Bienvenu</h4>

                ";
        // line 12
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 12, $this->getSourceContext()); })())) {
            // line 13
            echo "                    <div class=\"alert alert-danger\" style=\"margin-bottom: 10px;\">
                        ";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 14, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 14, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 17
        echo "
                <div class=\"form-group\">
                    <input type=\"text\" 
                        id=\"userName\" 
                        name=\"_username\" 
                        value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 22, $this->getSourceContext()); })()), "html", null, true);
        echo "\" 
                        required=\"required\" 
                        class=\"form-control input-sm chat-input\" 
                        placeholder=\"Nom d'utilisateur\" />
                </div>
                
                <div class=\"form-group\">
                    <input type=\"password\" 
                        id=\"userPassword\" 
                        name=\"_password\" 
                        required=\"required\"
                        class=\"form-control input-sm chat-input\"
                         placeholder=\"Mot de passe\" />
                </div>

                <div class=\"form-group text-center\">
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" form-control />
                    <label for=\"remember_me\">Rester connecté</label>
                </div>                

                <div class=\"form-group text-center\">
                    <button type=\"submit\" id=\"btn-submit\" class=\"btn btn-primary btn-md\">Connexion <i class=\"fa fa-sign-in\"></i></button>
                </div> 

                <div class=\"text-center\">
                    <a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\">Mot de passe oublié ?</a>
                </div>               
            </div>
        </form>
    </div>
</div>
";
        
        $__internal_62a6fb4028e66a308030742e05198250badc776b8d88f4945c8cc914e4375026->leave($__internal_62a6fb4028e66a308030742e05198250badc776b8d88f4945c8cc914e4375026_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 47,  62 => 22,  55 => 17,  49 => 14,  46 => 13,  44 => 12,  39 => 9,  33 => 7,  31 => 6,  27 => 5,  22 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"row-fluid\">
    <div class=\" col-sm-offset-4 col-sm-4\" style=\"margin-top: 12%\">
        <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\" id=\"login-form\">
            {% if csrf_token %}
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
            {% endif %}
            <div class=\"form-login\">
                <h4>Global Design | Bienvenu</h4>

                {% if error %}
                    <div class=\"alert alert-danger\" style=\"margin-bottom: 10px;\">
                        {{ error.messageKey|trans(error.messageData, 'security') }}
                    </div>
                {% endif %}

                <div class=\"form-group\">
                    <input type=\"text\" 
                        id=\"userName\" 
                        name=\"_username\" 
                        value=\"{{ last_username }}\" 
                        required=\"required\" 
                        class=\"form-control input-sm chat-input\" 
                        placeholder=\"Nom d'utilisateur\" />
                </div>
                
                <div class=\"form-group\">
                    <input type=\"password\" 
                        id=\"userPassword\" 
                        name=\"_password\" 
                        required=\"required\"
                        class=\"form-control input-sm chat-input\"
                         placeholder=\"Mot de passe\" />
                </div>

                <div class=\"form-group text-center\">
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" form-control />
                    <label for=\"remember_me\">Rester connecté</label>
                </div>                

                <div class=\"form-group text-center\">
                    <button type=\"submit\" id=\"btn-submit\" class=\"btn btn-primary btn-md\">Connexion <i class=\"fa fa-sign-in\"></i></button>
                </div> 

                <div class=\"text-center\">
                    <a href=\"{{ path('fos_user_resetting_request') }}\">Mot de passe oublié ?</a>
                </div>               
            </div>
        </form>
    </div>
</div>
", "@FOSUser/Security/login_content.html.twig", "/var/www/html/tontine/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
