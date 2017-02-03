<?php

namespace GSPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Yaml\Exception\ParseException;

class HttpClientController extends Controller
{
    
    protected function getEntityManager()
    {
        return $this->getDoctrine()->getManager();
    }

    protected function getGspEntityManager()
    {
        return $this->get('tontine.gsp.entity_manager');
    }

    protected function getRepository($entity)
    {
        return $this->getEntityManager()->getRepository($entity);
    }

    public function arrondir($montant)
    {
        return ceil($montant/10)*10;
    }

    public function back()
    {
        $referer = $this->getRequest()->headers->get('referer');

        return $this->redirect($referer);
    }

    public function isSuccesful($response)
    {
        
        if($response->getStatusCode()=='200') return true; else return false;
    }

	public function getHttpClient()
    {
        ///** @var \GuzzleHttp\Client $client */
        return $this->get('guzzle.client.api_gspmanager');
    }


    public function getHttpResponse($response)
    {
           $contents =$response->getBody();
            return $this->Tojson($contents);
    }


	public  function jsonDecode($json, $assoc = false, $depth = 512, $options = 0)
    {
        static $jsonErrors = [
            JSON_ERROR_DEPTH => 'JSON_ERROR_DEPTH - Maximum stack depth exceeded',
            JSON_ERROR_STATE_MISMATCH => 'JSON_ERROR_STATE_MISMATCH - Underflow or the modes mismatch',
            JSON_ERROR_CTRL_CHAR => 'JSON_ERROR_CTRL_CHAR - Unexpected control character found',
            JSON_ERROR_SYNTAX => 'JSON_ERROR_SYNTAX - Syntax error, malformed JSON',
            JSON_ERROR_UTF8 => 'JSON_ERROR_UTF8 - Malformed UTF-8 characters, possibly incorrectly encoded'
        ];
        $data = \json_decode($json, $assoc, $depth, $options);
        if (JSON_ERROR_NONE !== json_last_error()) {
            $last = json_last_error();
            throw new \InvalidArgumentException(
                'Unable to parse JSON data: '
                . (isset($jsonErrors[$last])
                    ? $jsonErrors[$last]
                    : 'Unknown error')
            );
        }
        return $data;
    }


    public function Tojson($content,array $config = [])
    {
        try {
            return $this->jsonDecode(
                $content,
                isset($config['object']) ? !$config['object'] : true,
                512,
                isset($config['big_int_strings']) ? JSON_BIGINT_AS_STRING : 0
            );
        } catch (\InvalidArgumentException $e) {
            throw new ParseException(
                $e->getMessage(),
                $this
            );
        }
    }


}
