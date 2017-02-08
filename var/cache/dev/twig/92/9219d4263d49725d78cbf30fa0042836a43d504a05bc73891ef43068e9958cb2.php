<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_c250621951e164a9bde0cc46bc050e6d2209bda30faf6e08198548ce303b71bd extends Twig_Template
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
        $__internal_f6488874ffe53ab1d57702b64d5a49c29e129d0305794d7c4af8e6589a865e67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6488874ffe53ab1d57702b64d5a49c29e129d0305794d7c4af8e6589a865e67->enter($__internal_f6488874ffe53ab1d57702b64d5a49c29e129d0305794d7c4af8e6589a865e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6488874ffe53ab1d57702b64d5a49c29e129d0305794d7c4af8e6589a865e67->leave($__internal_f6488874ffe53ab1d57702b64d5a49c29e129d0305794d7c4af8e6589a865e67_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f52b2d15822c7f4b96f709ef8cf241f31291997c249cd466361c3ee8c3411bfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f52b2d15822c7f4b96f709ef8cf241f31291997c249cd466361c3ee8c3411bfe->enter($__internal_f52b2d15822c7f4b96f709ef8cf241f31291997c249cd466361c3ee8c3411bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_f52b2d15822c7f4b96f709ef8cf241f31291997c249cd466361c3ee8c3411bfe->leave($__internal_f52b2d15822c7f4b96f709ef8cf241f31291997c249cd466361c3ee8c3411bfe_prof);

    }

    // line 7
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6ec127296efabeceb3205f6bcd11d5be117efcd55f2c8b5e74206f057217d90b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ec127296efabeceb3205f6bcd11d5be117efcd55f2c8b5e74206f057217d90b->enter($__internal_6ec127296efabeceb3205f6bcd11d5be117efcd55f2c8b5e74206f057217d90b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_6ec127296efabeceb3205f6bcd11d5be117efcd55f2c8b5e74206f057217d90b->leave($__internal_6ec127296efabeceb3205f6bcd11d5be117efcd55f2c8b5e74206f057217d90b_prof);

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
{% endblock %}", "@FOSUser/Security/login.html.twig", "/var/www/html/tontine/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
