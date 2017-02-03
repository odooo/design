<?php

/* tontineBundle:Client:partials/index_content.html.twig */
class __TwigTemplate_4872e4b4c20cb6bbf9915d65ddba2b332438f57059f12cf4518bf8faddbb7ea9 extends Twig_Template
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
        $__internal_b2b284ef25d719c655a7f99c28a1b2552378c6f694a7857ad9dd0f9834b943b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2b284ef25d719c655a7f99c28a1b2552378c6f694a7857ad9dd0f9834b943b5->enter($__internal_b2b284ef25d719c655a7f99c28a1b2552378c6f694a7857ad9dd0f9834b943b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tontineBundle:Client:partials/index_content.html.twig"));

        // line 1
        echo "<table class=\"table table-striped table-bordered\">
    <thead>
        <tr>
            <th>Id</th>
            <th>Date de céation</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Contact</th>
            <th>Adresse</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new Twig_Error_Runtime('Variable "clients" does not exist.', 13, $this->getSourceContext()); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            echo "        
        ";
            // line 14
            $this->loadTemplate("tontineBundle:Client:partials/item.html.twig", "tontineBundle:Client:partials/index_content.html.twig", 14)->display($context);
            // line 15
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </tbody>
</table>";
        
        $__internal_b2b284ef25d719c655a7f99c28a1b2552378c6f694a7857ad9dd0f9834b943b5->leave($__internal_b2b284ef25d719c655a7f99c28a1b2552378c6f694a7857ad9dd0f9834b943b5_prof);

    }

    public function getTemplateName()
    {
        return "tontineBundle:Client:partials/index_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 16,  57 => 15,  55 => 14,  36 => 13,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table class=\"table table-striped table-bordered\">
    <thead>
        <tr>
            <th>Id</th>
            <th>Date de céation</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Contact</th>
            <th>Adresse</th>
        </tr>
    </thead>
    <tbody>
    {% for client in clients %}        
        {% include \"tontineBundle:Client:partials/item.html.twig\" %}
    {% endfor %}
    </tbody>
</table>", "tontineBundle:Client:partials/index_content.html.twig", "/var/www/html/tontine/src/tontineBundle/Resources/views/Client/partials/index_content.html.twig");
    }
}
