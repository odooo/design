<?php

/* tontineBundle:Pagne:index.html.twig */
class __TwigTemplate_2bd33e34c44f3462837a3c5673426cb4507981aaa6474ef0891de8a06c4ba728 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/yop-layout.html.twig", "tontineBundle:Pagne:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/yop-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ab399dc0fb8c87eb6fece91bb2f0ada11cafa10242d6abb91ed353babbabe8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ab399dc0fb8c87eb6fece91bb2f0ada11cafa10242d6abb91ed353babbabe8f->enter($__internal_0ab399dc0fb8c87eb6fece91bb2f0ada11cafa10242d6abb91ed353babbabe8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tontineBundle:Pagne:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ab399dc0fb8c87eb6fece91bb2f0ada11cafa10242d6abb91ed353babbabe8f->leave($__internal_0ab399dc0fb8c87eb6fece91bb2f0ada11cafa10242d6abb91ed353babbabe8f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bef3cd3277f7b9a1dfbe85a06678570cadde995c17ce8210f571c943d94aba58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bef3cd3277f7b9a1dfbe85a06678570cadde995c17ce8210f571c943d94aba58->enter($__internal_bef3cd3277f7b9a1dfbe85a06678570cadde995c17ce8210f571c943d94aba58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Gestion des tissus";
        
        $__internal_bef3cd3277f7b9a1dfbe85a06678570cadde995c17ce8210f571c943d94aba58->leave($__internal_bef3cd3277f7b9a1dfbe85a06678570cadde995c17ce8210f571c943d94aba58_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_3b209d4ce945368825cd9e782681b181f14e8751661e4a9423af4addb24d9446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b209d4ce945368825cd9e782681b181f14e8751661e4a9423af4addb24d9446->enter($__internal_3b209d4ce945368825cd9e782681b181f14e8751661e4a9423af4addb24d9446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"yop-app two-pane\">
        <div class=\"pane pane-one\" id=\"user-list\" data-title=\"Tissu : \">
            <div class=\"pane-header\">
                <div class=\"user-search-bar\">
                    <input type=\"text\" name=\"search\" class=\"form-control search-form\" placeholder=\"Recherchez un tissu...\" />                
                </div>
            </div>
            <div class=\"pane-body\">
                <div class=\"infinite-list\">
                    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagnes"]) || array_key_exists("pagnes", $context) ? $context["pagnes"] : (function () { throw new Twig_Error_Runtime('Variable "pagnes" does not exist.', 15, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tissu"]) {
            // line 16
            echo "                    <div class=\"list-item\" data-search=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tissu"], "reference", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tissu"], "designation", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tissu"], "mesure", array()), "html", null, true);
            echo "\" data-href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_pagne_preview", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["tissu"], "id", array()))), "html", null, true);
            echo "\" data-name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tissu"], "reference", array()), "html", null, true);
            echo "\">
                        <div class=\"user-photo\">
                            <img src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/pieces/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tissu"], "photo", array()), "html", null, true);
            echo "\" alt=\"Coupon du tissu ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tissu"], "reference", array()), "html", null, true);
            echo "\">
                        </div>                                                  
                        <div class=\"user-description\">
                            <div class=\"user-name\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tissu"], "reference", array()), "html", null, true);
            echo "</div>
                            <div class=\"user-phone\">
                                <span class=\"user-name\"></span>
                                ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tissu"], "designation", array()), "html", null, true);
            echo "
                            </div>
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tissu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                </div>
            </div>             
        </div>
        <div class=\"pane pane-two\" id=\"user-pagelet\" yop-with-toolbar>
        </div>
    </div>
";
        
        $__internal_3b209d4ce945368825cd9e782681b181f14e8751661e4a9423af4addb24d9446->leave($__internal_3b209d4ce945368825cd9e782681b181f14e8751661e4a9423af4addb24d9446_prof);

    }

    // line 37
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_0dae001b394c83188923dcd3555aa7ab23683cd3ff53a40dd709527c78446ab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dae001b394c83188923dcd3555aa7ab23683cd3ff53a40dd709527c78446ab2->enter($__internal_0dae001b394c83188923dcd3555aa7ab23683cd3ff53a40dd709527c78446ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 38
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    ";
        // line 39
        if (array_key_exists("agt", $context)) {
            // line 40
            echo "        <script>
            \$(function(){
                Yop.Pagelet({            
                   url: \"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tontine_pagne_preview", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pgn"]) || array_key_exists("pgn", $context) ? $context["pgn"] : (function () { throw new Twig_Error_Runtime('Variable "pgn" does not exist.', 43, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
            echo "\",
                   pagelet: '#user-pagelet',
                   title: '";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pgn"]) || array_key_exists("pgn", $context) ? $context["pgn"] : (function () { throw new Twig_Error_Runtime('Variable "pgn" does not exist.', 45, $this->getSourceContext()); })()), "reference", array()), "html", null, true);
            echo "'
               });
            });
        </script>
    ";
        }
        
        $__internal_0dae001b394c83188923dcd3555aa7ab23683cd3ff53a40dd709527c78446ab2->leave($__internal_0dae001b394c83188923dcd3555aa7ab23683cd3ff53a40dd709527c78446ab2_prof);

    }

    public function getTemplateName()
    {
        return "tontineBundle:Pagne:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 45,  140 => 43,  135 => 40,  133 => 39,  128 => 38,  122 => 37,  109 => 29,  98 => 24,  92 => 21,  83 => 18,  69 => 16,  65 => 15,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'default/yop-layout.html.twig' %}

{% block title %}Gestion des tissus{% endblock %}

{% block content %}
    <div class=\"yop-app two-pane\">
        <div class=\"pane pane-one\" id=\"user-list\" data-title=\"Tissu : \">
            <div class=\"pane-header\">
                <div class=\"user-search-bar\">
                    <input type=\"text\" name=\"search\" class=\"form-control search-form\" placeholder=\"Recherchez un tissu...\" />                
                </div>
            </div>
            <div class=\"pane-body\">
                <div class=\"infinite-list\">
                    {% for tissu in pagnes %}
                    <div class=\"list-item\" data-search=\"{{ tissu.reference }} {{ tissu.designation }} {{ tissu.mesure }}\" data-href=\"{{ path('tontine_pagne_preview', { 'id': tissu.id }) }}\" data-name=\"{{ tissu.reference }}\">
                        <div class=\"user-photo\">
                            <img src=\"{{ asset('uploads/pieces/') }}{{tissu.photo}}\" alt=\"Coupon du tissu {{ tissu.reference }}\">
                        </div>                                                  
                        <div class=\"user-description\">
                            <div class=\"user-name\">{{ tissu.reference }}</div>
                            <div class=\"user-phone\">
                                <span class=\"user-name\"></span>
                                {{ tissu.designation }}
                            </div>
                        </div>
                    </div>
                    {% endfor %}
                </div>
            </div>             
        </div>
        <div class=\"pane pane-two\" id=\"user-pagelet\" yop-with-toolbar>
        </div>
    </div>
{% endblock %}

{% block javascript %}
    {{ parent() }}
    {% if agt is defined %}
        <script>
            \$(function(){
                Yop.Pagelet({            
                   url: \"{{ path('tontine_pagne_preview', {'id':pgn.id }) }}\",
                   pagelet: '#user-pagelet',
                   title: '{{ pgn.reference }}'
               });
            });
        </script>
    {% endif %}
{% endblock %}", "tontineBundle:Pagne:index.html.twig", "/var/www/html/tontine/src/tontineBundle/Resources/views/Pagne/index.html.twig");
    }
}
