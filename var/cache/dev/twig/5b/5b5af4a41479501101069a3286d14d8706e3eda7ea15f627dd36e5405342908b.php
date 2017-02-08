<?php

/* base.html.twig */
class __TwigTemplate_e815eaf439f7616379e5e8516a4c16430bb2d398dd1d5aa57c83674629c28531 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
            'container' => array($this, 'block_container'),
            'footer' => array($this, 'block_footer'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_696d764f0ab20ecd8bbc92ffa63b108bd63fccffc0adddd039581240eb67322c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_696d764f0ab20ecd8bbc92ffa63b108bd63fccffc0adddd039581240eb67322c->enter($__internal_696d764f0ab20ecd8bbc92ffa63b108bd63fccffc0adddd039581240eb67322c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        ";
        // line 9
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\"
              href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plugins/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plugins/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plugins/dist/css/skins/skin-blue.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plugins/select2/select2.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plugins/filetype/filetype-icon-style.css"), "html", null, true);
        echo "\">
         <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/tontine/css/loader.css"), "html", null, true);
        echo "\">

        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plugins/multiselect2sides/css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plugins/multiselect2sides/lib/google-code-prettify/prettify.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/tontine/css/bootstrap-tour.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/tontine/css/help-widget.css"), "html", null, true);
        echo "\">
        ";
        // line 23
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "        
        <style>
            /*catiger*/
            @keyframes fade {
                from { opacity: 1.0; }
                50% { opacity: 0.0; }
                to { opacity: 1.0; }
            }
            
            @-webkit-keyframes fade {
                from { opacity: 1.0; }
                50% { opacity: 0.0; }
                to { opacity: 1.0; }
            }
            
            .yop-blink {
                animation:fade 1500ms infinite;
                -webkit-animation:fade 1500ms infinite;
            }
        </style>
    </head>
    <body  class=\"hold-transition skin-blue sidebar-mini\">
        <div class=\"wrapper\">
            ";
        // line 47
        $this->displayBlock('header', $context, $blocks);
        // line 48
        echo "            ";
        $this->displayBlock('menu', $context, $blocks);
        // line 49
        echo "            ";
        $this->displayBlock('container', $context, $blocks);
        // line 50
        echo "            ";
        $this->displayBlock('footer', $context, $blocks);
        // line 51
        echo "            
            <!-- Modal loader -->
            <div style=\"display: none\" class=\"modal fade\" id=\"loaderModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"loaderLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h4 class=\"modal-title\" id=\"loaderTitle\"></h4>
                        </div>
                        <div class=\"modal-body\">
                            <div id=\"loader\" class=\"cssload-loader\"></div>
                        </div>
                    </div>
                </div>
            </div>        
        </div>
        <div id=\"help-widget\">
            <a id=\"help-widget-icon\" style=\"width: 50px; height: 50px; display: inline;\"><i class=\"fa fa-question\"></i></a>
            <div id=\"help-widget-content\">
                <div class=\"main-content\">
                    <ul class=\"nav nav-tabs nav-justified\">
                        <li class=\"active\"><a data-toggle=\"tab\" href=\"#help-contact\">Contact</a></li>
                        <li><a data-toggle=\"tab\" href=\"#help-guides\">Guides</a></li>
                    </ul>
                    <div class=\"tab-content\" style=\"padding: 10px;\">
                        <div id=\"help-contact\" class=\"tab-pane fade in active\">
                            <a href=\"tel:21307683 \" class=\"btn btn-block btn-success\">
                                <span class=\"fa fa-phone\" style=\"margin-right: 5px;\"></span>
                                Appeler le 21 30 76 83 
                            </a>
                            <div class=\"text-center\" style=\"margin: 5px;\">Ou bien écrivez-nous</div>
                            <div>
                                <form action=\"\" method=\"post\">
                                    <div class=\"form-group\">
                                        <input type=\"text\" class=\"form-control\" placeholder=\"Votre nom complet\">
                                    </div>
                                    <div class=\"form-group\">
                                        <input type=\"text\" class=\"form-control\" placeholder=\"Votre numéro\">
                                    </div>
                                    <div class=\"form-group\">
                                        <textarea name=\"\" class=\"form-control\" rows=\"3\" placeholder=\"Votre message\"></textarea>
                                    </div>
                                    <div class=\"text-center\">
                                        <button class=\"btn btn-primary\" type=\"submit\">
                                            Envoyer
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div id=\"help-guides\" class=\"tab-pane fade\">
                            <div>
                                <input type=\"text\" class=\"form-control\" placeholder=\"Recherchez un guide\">
                            </div>
                            <div id=\"guides-list\">
                                <p>Aucun guide n'est disponible actuellement.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id=\"triangle\"></div>
            </div>
        </div>

        ";
        // line 115
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plugins/jQuery/jQuery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <!-- AdminLTE App -->
        <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plugins/dist/js/app.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plugins/style/jquery.accordDate.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plugins/moment/moment-with-locales.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plugins/datatables/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            
        ";
        // line 126
        echo "        ";
        // line 127
        echo "        ";
        // line 128
        echo "        ";
        // line 129
        echo "        ";
        // line 130
        echo "        ";
        // line 131
        echo "        ";
        // line 132
        echo "        ";
        // line 133
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plugins/select2/select2.full.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\"
                src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plugins/bower_components/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\"
                src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plugins/bower_components/moment/locale/fr.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\"
                src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plugins/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 141
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>

        ";
        // line 143
        $this->displayBlock('javascript', $context, $blocks);
        // line 165
        echo " 

        <script type=\"text/javascript\">
            \$(function(){
                
                \$('.datepicker').datetimepicker({
                    locale:'fr',
                    format:'DD/MM/YYYY'
                });
                
                \$('.datetimepicker').datetimepicker({
                    locale:'fr',
                    format:'DD/MM/YYYY HH:mm:s'
                });

                \$('.select2').select2([{multiple: true}]);
                
            });
            
            function refreshDatepicker(){
                \$('.datepicker').datetimepicker({
                    locale:'fr',
                    format:'DD/MM/YYYY'
                });
            }
            
            function refreshDatetimepicker(){
                \$('.datetimepicker').datetimepicker({
                    locale:'fr',
                    format:'DD/MM/YYYY HH:mm:s'
                });
            }
            
            function refreshSelect2(){
                \$('.select2').select2([{multiple: true}]);
            }
        </script>
    </body>
</html>
";
        
        $__internal_696d764f0ab20ecd8bbc92ffa63b108bd63fccffc0adddd039581240eb67322c->leave($__internal_696d764f0ab20ecd8bbc92ffa63b108bd63fccffc0adddd039581240eb67322c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d9041f50a6d0667671c0f95e0b407c3d17bf314179a5d9e3107f16f37618165d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9041f50a6d0667671c0f95e0b407c3d17bf314179a5d9e3107f16f37618165d->enter($__internal_d9041f50a6d0667671c0f95e0b407c3d17bf314179a5d9e3107f16f37618165d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Global Design";
        
        $__internal_d9041f50a6d0667671c0f95e0b407c3d17bf314179a5d9e3107f16f37618165d->leave($__internal_d9041f50a6d0667671c0f95e0b407c3d17bf314179a5d9e3107f16f37618165d_prof);

    }

    // line 23
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3eb2845702b42ae25b949a440301c54731e40364bc6f1649e7404d2809701541 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eb2845702b42ae25b949a440301c54731e40364bc6f1649e7404d2809701541->enter($__internal_3eb2845702b42ae25b949a440301c54731e40364bc6f1649e7404d2809701541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3eb2845702b42ae25b949a440301c54731e40364bc6f1649e7404d2809701541->leave($__internal_3eb2845702b42ae25b949a440301c54731e40364bc6f1649e7404d2809701541_prof);

    }

    // line 47
    public function block_header($context, array $blocks = array())
    {
        $__internal_3b0fe447262a2da414dd23f075ca5f74e75b0e4895530d01e2d362f77efd7c9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b0fe447262a2da414dd23f075ca5f74e75b0e4895530d01e2d362f77efd7c9f->enter($__internal_3b0fe447262a2da414dd23f075ca5f74e75b0e4895530d01e2d362f77efd7c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_3b0fe447262a2da414dd23f075ca5f74e75b0e4895530d01e2d362f77efd7c9f->leave($__internal_3b0fe447262a2da414dd23f075ca5f74e75b0e4895530d01e2d362f77efd7c9f_prof);

    }

    // line 48
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fdd9edfb663be818c5d8f0537d56be44741bd4938b0e590a8ede2ac0156974ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdd9edfb663be818c5d8f0537d56be44741bd4938b0e590a8ede2ac0156974ad->enter($__internal_fdd9edfb663be818c5d8f0537d56be44741bd4938b0e590a8ede2ac0156974ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        
        $__internal_fdd9edfb663be818c5d8f0537d56be44741bd4938b0e590a8ede2ac0156974ad->leave($__internal_fdd9edfb663be818c5d8f0537d56be44741bd4938b0e590a8ede2ac0156974ad_prof);

    }

    // line 49
    public function block_container($context, array $blocks = array())
    {
        $__internal_a305e69682f98f347a0c7b526166efe2655ba9cdcbc499724ddd06d51d0d285d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a305e69682f98f347a0c7b526166efe2655ba9cdcbc499724ddd06d51d0d285d->enter($__internal_a305e69682f98f347a0c7b526166efe2655ba9cdcbc499724ddd06d51d0d285d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        
        $__internal_a305e69682f98f347a0c7b526166efe2655ba9cdcbc499724ddd06d51d0d285d->leave($__internal_a305e69682f98f347a0c7b526166efe2655ba9cdcbc499724ddd06d51d0d285d_prof);

    }

    // line 50
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b9b2614b3d3f196a63bd9809248eacc6c02c12f3f54f07eb8834088aded62815 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9b2614b3d3f196a63bd9809248eacc6c02c12f3f54f07eb8834088aded62815->enter($__internal_b9b2614b3d3f196a63bd9809248eacc6c02c12f3f54f07eb8834088aded62815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_b9b2614b3d3f196a63bd9809248eacc6c02c12f3f54f07eb8834088aded62815->leave($__internal_b9b2614b3d3f196a63bd9809248eacc6c02c12f3f54f07eb8834088aded62815_prof);

    }

    // line 143
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_e5a1feb6bee847979caa22f1a57788af0698bdc5898e9653a77f6cac36c47136 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5a1feb6bee847979caa22f1a57788af0698bdc5898e9653a77f6cac36c47136->enter($__internal_e5a1feb6bee847979caa22f1a57788af0698bdc5898e9653a77f6cac36c47136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 144
        echo "
            ";
        // line 145
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "836d2fd_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_836d2fd_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/836d2fd_datatablefonction_1.js");
            // line 146
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 146, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "836d2fd"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_836d2fd") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/836d2fd.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 146, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 148
        echo "            
            ";
        // line 149
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "968148e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_968148e_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/968148e_ajaxify-search_1.js");
            // line 150
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 150, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "968148e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_968148e") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/968148e.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 150, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 152
        echo "            ";
        echo $this->env->getExtension('AjaxifySearch\AjaxifySearchTwigExtension')->initAjaxifySearch();
        echo "
            
            ";
        // line 154
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2c1dae7_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2c1dae7_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/2c1dae7_loader_1.js");
            // line 155
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 155, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "2c1dae7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2c1dae7") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/2c1dae7.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 155, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 157
        echo "            
            ";
        // line 158
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d58e22f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_d58e22f_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/d58e22f_enabledisableagent_1.js");
            // line 159
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 159, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "d58e22f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_d58e22f") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/d58e22f.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 159, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 160
        echo "                

            <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/tontine/js/awesome-selector.js"), "html", null, true);
        echo "\"></script>   
            <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/tontine/js/bootstrap-tour.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/tontine/js/help-widget.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_e5a1feb6bee847979caa22f1a57788af0698bdc5898e9653a77f6cac36c47136->leave($__internal_e5a1feb6bee847979caa22f1a57788af0698bdc5898e9653a77f6cac36c47136_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  493 => 164,  489 => 163,  485 => 162,  481 => 160,  467 => 159,  463 => 158,  460 => 157,  446 => 155,  442 => 154,  436 => 152,  422 => 150,  418 => 149,  415 => 148,  401 => 146,  397 => 145,  394 => 144,  388 => 143,  377 => 50,  366 => 49,  355 => 48,  344 => 47,  333 => 23,  321 => 5,  275 => 165,  273 => 143,  268 => 141,  264 => 140,  260 => 139,  255 => 137,  250 => 135,  244 => 133,  242 => 132,  240 => 131,  238 => 130,  236 => 129,  234 => 128,  232 => 127,  230 => 126,  225 => 123,  221 => 122,  216 => 120,  212 => 119,  208 => 118,  203 => 116,  198 => 115,  133 => 51,  130 => 50,  127 => 49,  124 => 48,  122 => 47,  97 => 24,  95 => 23,  91 => 22,  87 => 21,  83 => 20,  79 => 19,  74 => 17,  70 => 16,  66 => 15,  62 => 14,  58 => 13,  54 => 12,  50 => 11,  44 => 9,  40 => 7,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Global Design{% endblock %}</title>
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <link rel=\"icon\" href=\"{{ asset('bundles/globalsevice.ico') }}\" type=\"image/x-icon\"/>
        {# Shared style sheets #}
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/plugins/bootstrap/css/bootstrap.min.css') }}\">
        <link rel=\"stylesheet\"
              href=\"{{ asset('bundles/plugins/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') }}\"/>
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/plugins/font-awesome/css/font-awesome.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/plugins/dist/css/AdminLTE.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/plugins/dist/css/skins/skin-blue.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/plugins/select2/select2.min.css') }}\"/>
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/plugins/filetype/filetype-icon-style.css') }}\">
         <link rel=\"stylesheet\" href=\"{{ asset('bundles/tontine/css/loader.css') }}\">

        <link rel=\"stylesheet\" href=\"{{ asset('bundles/plugins/multiselect2sides/css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/plugins/multiselect2sides/lib/google-code-prettify/prettify.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/tontine/css/bootstrap-tour.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/tontine/css/help-widget.css') }}\">
        {% block stylesheets %}{% endblock %}
        
        <style>
            /*catiger*/
            @keyframes fade {
                from { opacity: 1.0; }
                50% { opacity: 0.0; }
                to { opacity: 1.0; }
            }
            
            @-webkit-keyframes fade {
                from { opacity: 1.0; }
                50% { opacity: 0.0; }
                to { opacity: 1.0; }
            }
            
            .yop-blink {
                animation:fade 1500ms infinite;
                -webkit-animation:fade 1500ms infinite;
            }
        </style>
    </head>
    <body  class=\"hold-transition skin-blue sidebar-mini\">
        <div class=\"wrapper\">
            {% block header %}{% endblock %}
            {% block menu %}{% endblock %}
            {% block container %}{% endblock %}
            {% block footer %}{% endblock %}
            
            <!-- Modal loader -->
            <div style=\"display: none\" class=\"modal fade\" id=\"loaderModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"loaderLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h4 class=\"modal-title\" id=\"loaderTitle\"></h4>
                        </div>
                        <div class=\"modal-body\">
                            <div id=\"loader\" class=\"cssload-loader\"></div>
                        </div>
                    </div>
                </div>
            </div>        
        </div>
        <div id=\"help-widget\">
            <a id=\"help-widget-icon\" style=\"width: 50px; height: 50px; display: inline;\"><i class=\"fa fa-question\"></i></a>
            <div id=\"help-widget-content\">
                <div class=\"main-content\">
                    <ul class=\"nav nav-tabs nav-justified\">
                        <li class=\"active\"><a data-toggle=\"tab\" href=\"#help-contact\">Contact</a></li>
                        <li><a data-toggle=\"tab\" href=\"#help-guides\">Guides</a></li>
                    </ul>
                    <div class=\"tab-content\" style=\"padding: 10px;\">
                        <div id=\"help-contact\" class=\"tab-pane fade in active\">
                            <a href=\"tel:21307683 \" class=\"btn btn-block btn-success\">
                                <span class=\"fa fa-phone\" style=\"margin-right: 5px;\"></span>
                                Appeler le 21 30 76 83 
                            </a>
                            <div class=\"text-center\" style=\"margin: 5px;\">Ou bien écrivez-nous</div>
                            <div>
                                <form action=\"\" method=\"post\">
                                    <div class=\"form-group\">
                                        <input type=\"text\" class=\"form-control\" placeholder=\"Votre nom complet\">
                                    </div>
                                    <div class=\"form-group\">
                                        <input type=\"text\" class=\"form-control\" placeholder=\"Votre numéro\">
                                    </div>
                                    <div class=\"form-group\">
                                        <textarea name=\"\" class=\"form-control\" rows=\"3\" placeholder=\"Votre message\"></textarea>
                                    </div>
                                    <div class=\"text-center\">
                                        <button class=\"btn btn-primary\" type=\"submit\">
                                            Envoyer
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div id=\"help-guides\" class=\"tab-pane fade\">
                            <div>
                                <input type=\"text\" class=\"form-control\" placeholder=\"Recherchez un guide\">
                            </div>
                            <div id=\"guides-list\">
                                <p>Aucun guide n'est disponible actuellement.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id=\"triangle\"></div>
            </div>
        </div>

        {# Shared JS Files #}
        <script src=\"{{ asset('bundles/plugins/jQuery/jQuery-2.1.4.min.js') }}\"></script>
        <script src=\"{{ asset('bundles/plugins/bootstrap/js/bootstrap.min.js') }}\"></script>
        <!-- AdminLTE App -->
        <script src=\"{{ asset('bundles/plugins/dist/js/app.min.js') }}\"></script>
        <script src=\"{{ asset('bundles/plugins/style/jquery.accordDate.js') }}\"></script>
        <script src=\"{{ asset('bundles/plugins/moment/moment-with-locales.js') }}\"></script>

        <script src=\"{{ asset('bundles/plugins/datatables/jquery.dataTables.min.js') }}\"></script>
        <script src=\"{{ asset('bundles/plugins/datatables/dataTables.bootstrap.min.js') }}\"></script>
            
        {#<script src=\"{{ asset('bundles/plugins/datatables/pdfmake.min.js') }}\"></script>#}
        {#<script src=\"{{ asset('bundles/plugins/datatables/vfs_fonts.js') }}\"></script>#}
        {#<script src=\"{{ asset('bundles/plugins/datatables/buttons.html5.min.js') }}\"></script>#}
        {#<script src=\"{{ asset('bundles/plugins/datatables/buttons.flash.min.js') }}\"></script>#}
        {##}
        {#<script src=\"{{ asset('bundles/plugins/datatables/szip.min.js') }}\"></script>#}
        {#<script src=\"{{ asset('bundles/plugins/datatables/dataTables.buttons.min.js') }}\"></script>#}
        {#<script src=\"{{ asset('bundles/plugins/datatables/buttons.print.min.js ') }}\"></script>#}
        <script src=\"{{ asset('bundles/plugins/select2/select2.full.min.js') }}\"></script>
        <script type=\"text/javascript\"
                src=\"{{ asset('bundles/plugins/bower_components/moment/min/moment.min.js') }}\"></script>
        <script type=\"text/javascript\"
                src=\"{{ asset('bundles/plugins/bower_components/moment/locale/fr.js') }}\"></script>
        <script type=\"text/javascript\"
                src=\"{{ asset('bundles/plugins/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}\"></script>
        <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
        <script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>

        {% block javascript %}

            {% javascripts '@tontineBundle/Resources/public/js/datatablefonction.js' %}
                <script src=\"{{ asset_url }}\"></script>
            {% endjavascripts %}
            
            {% javascripts '@tontineBundle/Resources/public/js/ajaxify-search.js' %}
                <script src=\"{{ asset_url }}\"></script>
            {% endjavascripts %}
            {{ init_ajaxify_search() }}
            
            {% javascripts '@tontineBundle/Resources/public/js/loader.js' %}
                <script src=\"{{ asset_url }}\"></script>
            {% endjavascripts %}
            
            {% javascripts '@tontineBundle/Resources/public/js/enabledisableagent.js' %}
                <script src=\"{{ asset_url }}\"></script>
            {% endjavascripts %}                

            <script src=\"{{ asset('bundles/tontine/js/awesome-selector.js') }}\"></script>   
            <script src=\"{{ asset('bundles/tontine/js/bootstrap-tour.min.js') }}\"></script>
            <script src=\"{{ asset('bundles/tontine/js/help-widget.js') }}\"></script>
        {% endblock %} 

        <script type=\"text/javascript\">
            \$(function(){
                
                \$('.datepicker').datetimepicker({
                    locale:'fr',
                    format:'DD/MM/YYYY'
                });
                
                \$('.datetimepicker').datetimepicker({
                    locale:'fr',
                    format:'DD/MM/YYYY HH:mm:s'
                });

                \$('.select2').select2([{multiple: true}]);
                
            });
            
            function refreshDatepicker(){
                \$('.datepicker').datetimepicker({
                    locale:'fr',
                    format:'DD/MM/YYYY'
                });
            }
            
            function refreshDatetimepicker(){
                \$('.datetimepicker').datetimepicker({
                    locale:'fr',
                    format:'DD/MM/YYYY HH:mm:s'
                });
            }
            
            function refreshSelect2(){
                \$('.select2').select2([{multiple: true}]);
            }
        </script>
    </body>
</html>
", "base.html.twig", "/var/www/html/tontine/app/Resources/views/base.html.twig");
    }
}
