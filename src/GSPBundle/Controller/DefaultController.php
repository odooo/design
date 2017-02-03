<?php

namespace GSPBundle\Controller;

use GSPBundle\Controller\HttpClientController;

class DefaultController extends HttpClientController
{
    public function indexAction()
    {
       
		$client   = $this->getHttpClient();
		$response = $client->request('GET', 'biens/3');
		if($this->isSuccesful($response))
		{
			//$content =$this->getHttpResponse($response);
			$content=0.3/3;
			var_dump($content);
			die();
		}
		return $this->render('GSPBundle:Default:index.html.twig');
    }
}
