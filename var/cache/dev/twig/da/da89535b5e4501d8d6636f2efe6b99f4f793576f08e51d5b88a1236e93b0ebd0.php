<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_0d0e6a2d0d78b270c20adc0a9acbf7d6380a15c5376d536650302f09d1b17491 extends Twig_Template
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
        $__internal_854d087d316518900df2ba904c038f566388358f1c94f7fe4a9eedc6a9c00e30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_854d087d316518900df2ba904c038f566388358f1c94f7fe4a9eedc6a9c00e30->enter($__internal_854d087d316518900df2ba904c038f566388358f1c94f7fe4a9eedc6a9c00e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_854d087d316518900df2ba904c038f566388358f1c94f7fe4a9eedc6a9c00e30->leave($__internal_854d087d316518900df2ba904c038f566388358f1c94f7fe4a9eedc6a9c00e30_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4f33d2cd2f67c3367478d95d5e3713700d2e4a9c57ee7ce14d764e9b367bdf00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f33d2cd2f67c3367478d95d5e3713700d2e4a9c57ee7ce14d764e9b367bdf00->enter($__internal_4f33d2cd2f67c3367478d95d5e3713700d2e4a9c57ee7ce14d764e9b367bdf00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_4f33d2cd2f67c3367478d95d5e3713700d2e4a9c57ee7ce14d764e9b367bdf00->leave($__internal_4f33d2cd2f67c3367478d95d5e3713700d2e4a9c57ee7ce14d764e9b367bdf00_prof);

    }

    // line 7
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0384f0b052b1540d70a79b750d0fc6a558d875e0e1e784dc3cc2dbe9236c9518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0384f0b052b1540d70a79b750d0fc6a558d875e0e1e784dc3cc2dbe9236c9518->enter($__internal_0384f0b052b1540d70a79b750d0fc6a558d875e0e1e784dc3cc2dbe9236c9518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_0384f0b052b1540d70a79b750d0fc6a558d875e0e1e784dc3cc2dbe9236c9518->leave($__internal_0384f0b052b1540d70a79b750d0fc6a558d875e0e1e784dc3cc2dbe9236c9518_prof);

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
{% endblock %}", "@FOSUser/Security/login.html.twig", "/var/www/html/design/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
