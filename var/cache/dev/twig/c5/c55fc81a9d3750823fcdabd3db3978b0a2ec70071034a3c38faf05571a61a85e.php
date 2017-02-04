<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_1f15dbef958d3e721d46713844e09c39dbc2fa69c55f657b0753d8dc3291cdc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d428bc7fa6cb819e0b407b37d0b61667b87cdc034353d8c707e19ff554d41009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d428bc7fa6cb819e0b407b37d0b61667b87cdc034353d8c707e19ff554d41009->enter($__internal_d428bc7fa6cb819e0b407b37d0b61667b87cdc034353d8c707e19ff554d41009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d428bc7fa6cb819e0b407b37d0b61667b87cdc034353d8c707e19ff554d41009->leave($__internal_d428bc7fa6cb819e0b407b37d0b61667b87cdc034353d8c707e19ff554d41009_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8c22f5c4669de83592ca1ee6895ca7cf380b50375e0c3424ad7ea61610a2147d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c22f5c4669de83592ca1ee6895ca7cf380b50375e0c3424ad7ea61610a2147d->enter($__internal_8c22f5c4669de83592ca1ee6895ca7cf380b50375e0c3424ad7ea61610a2147d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_8c22f5c4669de83592ca1ee6895ca7cf380b50375e0c3424ad7ea61610a2147d->leave($__internal_8c22f5c4669de83592ca1ee6895ca7cf380b50375e0c3424ad7ea61610a2147d_prof);

    }

    // line 7
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0f8f7291f833f51d34affb9f69e9d46eb048683906b2b5369bb4a1824347ce60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f8f7291f833f51d34affb9f69e9d46eb048683906b2b5369bb4a1824347ce60->enter($__internal_0f8f7291f833f51d34affb9f69e9d46eb048683906b2b5369bb4a1824347ce60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 8
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        var tour = new Tour({
            template: '<div class=\"popover tour\">' +
                '<div class=\"arrow\"></div>' +
                '<h3 class=\"popover-title text-center\"></h3>' +
                '<div class=\"popover-content\"></div>' +
                '<div class=\"popover-navigation\">' +
                    '<div class=\"btn-group\">' +
                        '<button class=\"btn btn-xs btn-default\" data-role=\"prev\">« Préc.</button>' + 
                        '<button class=\"btn btn-xs btn-default\" data-role=\"next\">Suiv. »</button>' + 
                    '</div>' +
                    '<button class=\"btn btn-xs btn-default\" data-role=\"end\">Finir</button>' +
                '</div>' +
            '</div>',
            
            steps: [
                {
                    element: \"#login-form\",
                    placement: \"top\",
                    title: \"Bienvenue\",
                    content: \"Bienvenue sur l'application de gestion des ventes de Global Design. Suivez le guide pour vous connecter.\"
                },
                {
                    element: \"#userName\",
                    placement: \"left\",
                    title: \"Nom d'utilisateur\",
                    content: \"Entrez votre nom d'utilisateur ou bien votre adresse e-mail\"
                },
                {
                    element: \"#userPassword\",
                    placement: \"left\",
                    title: \"Mot de passe\",
                    content: \"Entrez votre mot de passe\"
                },
                {
                    element: \"#remember_me\",
                    placement: \"left\",
                    title: \"Rester connecté\",
                    content: \"Cochez cette case pour conserver votre connexion sur ce ordinateur\"
                },
                {
                    element: \"#btn-submit\",
                    placement: \"left\",
                    content: \"Validez ici pour vous connecter.\"
                }
            ]
        });

        \$(function() {
            tour.init();
            tour.start();
        })
    </script>
";
        
        $__internal_0f8f7291f833f51d34affb9f69e9d46eb048683906b2b5369bb4a1824347ce60->leave($__internal_0f8f7291f833f51d34affb9f69e9d46eb048683906b2b5369bb4a1824347ce60_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}

{% block javascripts %}
    {{ parent() }}
    <script>
        var tour = new Tour({
            template: '<div class=\"popover tour\">' +
                '<div class=\"arrow\"></div>' +
                '<h3 class=\"popover-title text-center\"></h3>' +
                '<div class=\"popover-content\"></div>' +
                '<div class=\"popover-navigation\">' +
                    '<div class=\"btn-group\">' +
                        '<button class=\"btn btn-xs btn-default\" data-role=\"prev\">« Préc.</button>' + 
                        '<button class=\"btn btn-xs btn-default\" data-role=\"next\">Suiv. »</button>' + 
                    '</div>' +
                    '<button class=\"btn btn-xs btn-default\" data-role=\"end\">Finir</button>' +
                '</div>' +
            '</div>',
            
            steps: [
                {
                    element: \"#login-form\",
                    placement: \"top\",
                    title: \"Bienvenue\",
                    content: \"Bienvenue sur l'application de gestion des ventes de Global Design. Suivez le guide pour vous connecter.\"
                },
                {
                    element: \"#userName\",
                    placement: \"left\",
                    title: \"Nom d'utilisateur\",
                    content: \"Entrez votre nom d'utilisateur ou bien votre adresse e-mail\"
                },
                {
                    element: \"#userPassword\",
                    placement: \"left\",
                    title: \"Mot de passe\",
                    content: \"Entrez votre mot de passe\"
                },
                {
                    element: \"#remember_me\",
                    placement: \"left\",
                    title: \"Rester connecté\",
                    content: \"Cochez cette case pour conserver votre connexion sur ce ordinateur\"
                },
                {
                    element: \"#btn-submit\",
                    placement: \"left\",
                    content: \"Validez ici pour vous connecter.\"
                }
            ]
        });

        \$(function() {
            tour.init();
            tour.start();
        })
    </script>
{% endblock %}", "@FOSUser/Security/login.html.twig", "/var/www/html/tontine2/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
