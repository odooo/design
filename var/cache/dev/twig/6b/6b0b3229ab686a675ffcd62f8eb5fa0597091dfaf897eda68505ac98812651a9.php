<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_71d13ff2d7d8a0fb6884b5106dbcabe330fa93b0e78ce72911b647e68a681ce8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8272636f674976333c4553301b672d50fc2d94b7637dcd66aae7b08666b53d57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8272636f674976333c4553301b672d50fc2d94b7637dcd66aae7b08666b53d57->enter($__internal_8272636f674976333c4553301b672d50fc2d94b7637dcd66aae7b08666b53d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <link rel=\"icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/globalsevice.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plugins/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plugins/dist/css/skins/skin-blue.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plugins/filetype/filetype-icon-style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/tontine/css/bootstrap-tour.min.css"), "html", null, true);
        echo "\">
        <style>
            @import url(http://fonts.googleapis.com/css?family=Roboto:400);
            body {
            background-color:#fff;
            -webkit-font-smoothing: antialiased;
            font: normal 14px Roboto,arial,sans-serif;
            }

            .container {
                padding: 25px;
                position: fixed;
            }

            .form-login {
                background-color: #EDEDED;
                padding-top: 10px;
                padding-bottom: 20px;
                padding-left: 20px;
                padding-right: 20px;
                border-radius: 15px;
                border-color:#d2d2d2;
                border-width: 5px;
                box-shadow:0 1px 0 #cfcfcf;
            }

            h4 { 
            border:0 solid #fff; 
            border-bottom-width:1px;
            padding-bottom:10px;
            text-align: center;
            }

            .form-control {
                border-radius: 10px;
            }

            .wrapper {
                text-align: center;
            }
        </style>
    </head>
    <body  style=\"background-color: #b8c3d2\">
        <section class=\"content putHtml\">
            <div class=\"container-fluid\">    
                ";
        // line 58
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 58, $this->getSourceContext()); })()), "request", array()), "hasPreviousSession", array())) {
            // line 59
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 59, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 60
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 61
                    echo "                            <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                                ";
                    // line 62
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                            </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "                ";
        }
        echo "            
                <div>
                    ";
        // line 68
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 70
        echo "                </div>
            </div>
        </section>        
        ";
        // line 73
        $this->displayBlock('javascripts', $context, $blocks);
        // line 80
        echo "    </body>
</html>";
        
        $__internal_8272636f674976333c4553301b672d50fc2d94b7637dcd66aae7b08666b53d57->leave($__internal_8272636f674976333c4553301b672d50fc2d94b7637dcd66aae7b08666b53d57_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a1b604d54d1d23641612b8e2988a36e5b0761bc90841ca927ab943f7aa6b16ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1b604d54d1d23641612b8e2988a36e5b0761bc90841ca927ab943f7aa6b16ed->enter($__internal_a1b604d54d1d23641612b8e2988a36e5b0761bc90841ca927ab943f7aa6b16ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Login|Global design";
        
        $__internal_a1b604d54d1d23641612b8e2988a36e5b0761bc90841ca927ab943f7aa6b16ed->leave($__internal_a1b604d54d1d23641612b8e2988a36e5b0761bc90841ca927ab943f7aa6b16ed_prof);

    }

    // line 68
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_13aff32cf0a7d4fe8c6579e598b761261389960e6f131c08724cac65ea6d5aec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13aff32cf0a7d4fe8c6579e598b761261389960e6f131c08724cac65ea6d5aec->enter($__internal_13aff32cf0a7d4fe8c6579e598b761261389960e6f131c08724cac65ea6d5aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 69
        echo "                    ";
        
        $__internal_13aff32cf0a7d4fe8c6579e598b761261389960e6f131c08724cac65ea6d5aec->leave($__internal_13aff32cf0a7d4fe8c6579e598b761261389960e6f131c08724cac65ea6d5aec_prof);

    }

    // line 73
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2b294dccdf5570aab322292bac5be677d4f5d7160fd5e7e89fbd0cfb6adb572a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b294dccdf5570aab322292bac5be677d4f5d7160fd5e7e89fbd0cfb6adb572a->enter($__internal_2b294dccdf5570aab322292bac5be677d4f5d7160fd5e7e89fbd0cfb6adb572a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 74
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plugins/jQuery/jQuery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plugins/dist/js/app.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plugins/style/jquery.accordDate.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/tontine/js/bootstrap-tour.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_2b294dccdf5570aab322292bac5be677d4f5d7160fd5e7e89fbd0cfb6adb572a->leave($__internal_2b294dccdf5570aab322292bac5be677d4f5d7160fd5e7e89fbd0cfb6adb572a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 78,  207 => 77,  203 => 76,  199 => 75,  194 => 74,  188 => 73,  181 => 69,  175 => 68,  163 => 5,  155 => 80,  153 => 73,  148 => 70,  146 => 68,  140 => 66,  134 => 65,  125 => 62,  120 => 61,  115 => 60,  110 => 59,  108 => 58,  60 => 13,  56 => 12,  52 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Login|Global design{% endblock %}</title>
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <link rel=\"icon\" href=\"{{ asset('bundles/globalsevice.ico') }}\" type=\"image/x-icon\"/>
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/plugins/bootstrap/css/bootstrap.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/plugins/font-awesome/css/font-awesome.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/plugins/dist/css/AdminLTE.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/plugins/dist/css/skins/skin-blue.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/plugins/filetype/filetype-icon-style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/tontine/css/bootstrap-tour.min.css') }}\">
        <style>
            @import url(http://fonts.googleapis.com/css?family=Roboto:400);
            body {
            background-color:#fff;
            -webkit-font-smoothing: antialiased;
            font: normal 14px Roboto,arial,sans-serif;
            }

            .container {
                padding: 25px;
                position: fixed;
            }

            .form-login {
                background-color: #EDEDED;
                padding-top: 10px;
                padding-bottom: 20px;
                padding-left: 20px;
                padding-right: 20px;
                border-radius: 15px;
                border-color:#d2d2d2;
                border-width: 5px;
                box-shadow:0 1px 0 #cfcfcf;
            }

            h4 { 
            border:0 solid #fff; 
            border-bottom-width:1px;
            padding-bottom:10px;
            text-align: center;
            }

            .form-control {
                border-radius: 10px;
            }

            .wrapper {
                text-align: center;
            }
        </style>
    </head>
    <body  style=\"background-color: #b8c3d2\">
        <section class=\"content putHtml\">
            <div class=\"container-fluid\">    
                {% if app.request.hasPreviousSession %}
                    {% for type, messages in app.session.flashbag.all() %}
                        {% for message in messages %}
                            <div class=\"flash-{{ type }}\">
                                {{ message }}
                            </div>
                        {% endfor %}
                    {% endfor %}
                {% endif %}            
                <div>
                    {% block fos_user_content %}
                    {% endblock fos_user_content %}
                </div>
            </div>
        </section>        
        {% block javascripts %}
            <script src=\"{{ asset('bundles/plugins/jQuery/jQuery-2.1.4.min.js') }}\"></script>
            <script src=\"{{ asset('bundles/plugins/bootstrap/js/bootstrap.min.js') }}\"></script>
            <script src=\"{{ asset('bundles/plugins/dist/js/app.min.js') }}\"></script>
            <script src=\"{{ asset('bundles/plugins/style/jquery.accordDate.js') }}\"></script>
            <script src=\"{{ asset('bundles/tontine/js/bootstrap-tour.min.js') }}\"></script>
        {% endblock %}
    </body>
</html>", "@FOSUser/layout.html.twig", "/var/www/html/tontine2/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}