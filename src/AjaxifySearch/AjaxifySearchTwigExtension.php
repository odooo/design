<?php

namespace AjaxifySearch;

class AjaxifySearchTwigExtension extends \Twig_Extension
{
    private $twig;

    private $router;

    public function __construct($twig, $router)
    {
        $this->twig = $twig;
        $this->router = $router;
    }

    public function getFunctions()
    {
        return array(
            'init_ajaxify_search'  => new \Twig_SimpleFunction(
                'init_ajaxify_search',
                array($this, 'initAjaxifySearch'),
                array('is_safe' => array('html'))
            ),
        );
    }

    public function initAjaxifySearch()
    {
        $template =  '<script>AjaxifySearch.URL = {';
        $template .= 'count: "{{ count_url }}",';
        $template .= 'search: "{{ search_url }}"';
        $template .= '}';
        $template .= '</script>';

        return $this->twig->createTemplate($template)->render(array(
            'count_url' => $this->router->generate('ajaxify_search_count_all'),
            'search_url' => $this->router->generate('ajaxify_search_search'),
        ));
    }

    public function getName()
    {
        return 'ajaxify_search';
    }
}