<?php

/* default/modal.html.twig */
class __TwigTemplate_1304463022191bc6c911c5cd36db3d1843de28d3409e321cb6bbe67cdc029baa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd657079c1aed4b01fd009d7c7ab8d733d103cb2834c6694e2301766f958eed8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd657079c1aed4b01fd009d7c7ab8d733d103cb2834c6694e2301766f958eed8->enter($__internal_bd657079c1aed4b01fd009d7c7ab8d733d103cb2834c6694e2301766f958eed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/modal.html.twig"));

        // line 1
        echo "<div ";
        if (array_key_exists("modalId", $context)) {
            echo "id='";
            echo twig_escape_filter($this->env, (isset($context["modalId"]) || array_key_exists("modalId", $context) ? $context["modalId"] : (function () { throw new Twig_Error_Runtime('Variable "modalId" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
            echo "'";
        }
        echo " class=\"modal fade\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog ";
        // line 2
        if (array_key_exists("modalSize", $context)) {
            echo twig_escape_filter($this->env, (isset($context["modalSize"]) || array_key_exists("modalSize", $context) ? $context["modalSize"] : (function () { throw new Twig_Error_Runtime('Variable "modalSize" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true);
        }
        echo " ";
        if (array_key_exists("modalClass", $context)) {
            echo twig_escape_filter($this->env, (isset($context["modalClass"]) || array_key_exists("modalClass", $context) ? $context["modalClass"] : (function () { throw new Twig_Error_Runtime('Variable "modalClass" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true);
        }
        echo "\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\">";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</h4>
            </div>
            <div class=\"modal-body\">
                ";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 10
        echo "            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                ";
        // line 13
        $this->displayBlock('footer', $context, $blocks);
        // line 15
        echo "            </div>
        </div><!-- /.modal-content -->
    </div>    
</div>

<!-- If to bock screen waiting for ajax response -->
<div class=\"modal hide\" id=\"pleaseWaitDialog\" data-backdrop=\"static\" data-keyboard=\"false\">
    <div class=\"modal-body\" style=\"position:absolute;
                                    left: 50%;
                                    top: 50%;
                                    width: 200px;
                                    margin-left: -100px;
                                    margin-top: -100px;
                                    background-color: rgba(0, 0, 0, 0);
                                    \">
        <div class=\"progress progress-striped active\" style=\"text-align: center; height: 100px; background-color: rgba(0, 0, 0, 0);\">
            <div class=\"bar\">
                <i class=\"fa fa-circle-o-notch fa-spin fa-5x fa-fw\" style=\"color: #f5f5f5;\"></i>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_bd657079c1aed4b01fd009d7c7ab8d733d103cb2834c6694e2301766f958eed8->leave($__internal_bd657079c1aed4b01fd009d7c7ab8d733d103cb2834c6694e2301766f958eed8_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_2adc884e260f0fb09ab3b803817b996e6af58b81506ff41bd2934c258c35d206 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2adc884e260f0fb09ab3b803817b996e6af58b81506ff41bd2934c258c35d206->enter($__internal_2adc884e260f0fb09ab3b803817b996e6af58b81506ff41bd2934c258c35d206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        if (array_key_exists("modalTitle", $context)) {
            echo twig_escape_filter($this->env, (isset($context["modalTitle"]) || array_key_exists("modalTitle", $context) ? $context["modalTitle"] : (function () { throw new Twig_Error_Runtime('Variable "modalTitle" does not exist.', 6, $this->getSourceContext()); })()), "html", null, true);
        }
        
        $__internal_2adc884e260f0fb09ab3b803817b996e6af58b81506ff41bd2934c258c35d206->leave($__internal_2adc884e260f0fb09ab3b803817b996e6af58b81506ff41bd2934c258c35d206_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_476018b67a31e9759fd66309b51ff5454dc1b1b980e3ca0ee64ee0ff697d3939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_476018b67a31e9759fd66309b51ff5454dc1b1b980e3ca0ee64ee0ff697d3939->enter($__internal_476018b67a31e9759fd66309b51ff5454dc1b1b980e3ca0ee64ee0ff697d3939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_476018b67a31e9759fd66309b51ff5454dc1b1b980e3ca0ee64ee0ff697d3939->leave($__internal_476018b67a31e9759fd66309b51ff5454dc1b1b980e3ca0ee64ee0ff697d3939_prof);

    }

    // line 13
    public function block_footer($context, array $blocks = array())
    {
        $__internal_47966939be92bcf71ae28f66398e8a37088d90bf8fb720b716e534b757ae333f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47966939be92bcf71ae28f66398e8a37088d90bf8fb720b716e534b757ae333f->enter($__internal_47966939be92bcf71ae28f66398e8a37088d90bf8fb720b716e534b757ae333f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 14
        echo "                ";
        
        $__internal_47966939be92bcf71ae28f66398e8a37088d90bf8fb720b716e534b757ae333f->leave($__internal_47966939be92bcf71ae28f66398e8a37088d90bf8fb720b716e534b757ae333f_prof);

    }

    public function getTemplateName()
    {
        return "default/modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 14,  115 => 13,  104 => 9,  90 => 6,  62 => 15,  60 => 13,  55 => 10,  53 => 9,  47 => 6,  34 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div {% if modalId is defined %}id='{{ modalId }}'{% endif %} class=\"modal fade\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog {% if modalSize is defined %}{{ modalSize }}{% endif %} {% if modalClass is defined %}{{ modalClass }}{% endif %}\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\">{% block title %}{% if modalTitle is defined %}{{ modalTitle }}{% endif %}{% endblock %}</h4>
            </div>
            <div class=\"modal-body\">
                {% block body %}{% endblock %}
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                {% block footer %}
                {% endblock %}
            </div>
        </div><!-- /.modal-content -->
    </div>    
</div>

<!-- If to bock screen waiting for ajax response -->
<div class=\"modal hide\" id=\"pleaseWaitDialog\" data-backdrop=\"static\" data-keyboard=\"false\">
    <div class=\"modal-body\" style=\"position:absolute;
                                    left: 50%;
                                    top: 50%;
                                    width: 200px;
                                    margin-left: -100px;
                                    margin-top: -100px;
                                    background-color: rgba(0, 0, 0, 0);
                                    \">
        <div class=\"progress progress-striped active\" style=\"text-align: center; height: 100px; background-color: rgba(0, 0, 0, 0);\">
            <div class=\"bar\">
                <i class=\"fa fa-circle-o-notch fa-spin fa-5x fa-fw\" style=\"color: #f5f5f5;\"></i>
            </div>
        </div>
    </div>
</div>", "default/modal.html.twig", "/var/www/html/tontine/app/Resources/views/default/modal.html.twig");
    }
}
