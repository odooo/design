<?php

/* MisdPhoneNumberBundle:Form:tel.html.twig */
class __TwigTemplate_855265edb3ad56ab17f9945823ed80b54bc2ae89b71a418f03e4d6d993d413e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'tel_widget' => array($this, 'block_tel_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b9ede860a09c3a6dbc0996c4ceafb2d724ab81bf01ddf417ae18ff17b77aa88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b9ede860a09c3a6dbc0996c4ceafb2d724ab81bf01ddf417ae18ff17b77aa88->enter($__internal_8b9ede860a09c3a6dbc0996c4ceafb2d724ab81bf01ddf417ae18ff17b77aa88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MisdPhoneNumberBundle:Form:tel.html.twig"));

        // line 1
        $this->displayBlock('tel_widget', $context, $blocks);
        
        $__internal_8b9ede860a09c3a6dbc0996c4ceafb2d724ab81bf01ddf417ae18ff17b77aa88->leave($__internal_8b9ede860a09c3a6dbc0996c4ceafb2d724ab81bf01ddf417ae18ff17b77aa88_prof);

    }

    public function block_tel_widget($context, array $blocks = array())
    {
        $__internal_4bdc2ceaa97a7010c87d8a30411dbf2ca70f485fd079347119740102706abbad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bdc2ceaa97a7010c87d8a30411dbf2ca70f485fd079347119740102706abbad->enter($__internal_4bdc2ceaa97a7010c87d8a30411dbf2ca70f485fd079347119740102706abbad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        // line 2
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 2, $this->getSourceContext()); })()) === constant("Misd\\PhoneNumberBundle\\Form\\Type\\PhoneNumberType::WIDGET_COUNTRY_CHOICE"))) {
            // line 3
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 4
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), "country", array()), 'widget');
            // line 5
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), "number", array()), 'widget');
            // line 6
            echo "</div>
    ";
        } else {
            // line 8
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_4bdc2ceaa97a7010c87d8a30411dbf2ca70f485fd079347119740102706abbad->leave($__internal_4bdc2ceaa97a7010c87d8a30411dbf2ca70f485fd079347119740102706abbad_prof);

    }

    public function getTemplateName()
    {
        return "MisdPhoneNumberBundle:Form:tel.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  49 => 8,  45 => 6,  43 => 5,  41 => 4,  37 => 3,  35 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block tel_widget -%}
    {% if widget is constant('Misd\\\\PhoneNumberBundle\\\\Form\\\\Type\\\\PhoneNumberType::WIDGET_COUNTRY_CHOICE') %}
        <div {{ block('widget_container_attributes') }}>
            {{- form_widget(form.country) -}}
            {{- form_widget(form.number) -}}
        </div>
    {% else -%}
        {{- block('form_widget_simple') -}}
    {%- endif %}
{%- endblock tel_widget %}
", "MisdPhoneNumberBundle:Form:tel.html.twig", "/var/www/html/tontine/vendor/misd/phone-number-bundle/Resources/views/Form/tel.html.twig");
    }
}
