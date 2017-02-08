<?php

namespace tontineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Dompdf\Dompdf;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $dashboardDatas = $this->get('tontine.manager.dashboard')
            ->getDashboardDatas();

        $dashClientDatas = $this->get('tontine.manager.dashboard')
            ->getDashClientDatas();

        $dashCommandeDatas = $this->get('tontine.manager.dashboard')
            ->getDashCommandeDatas();

        $dashVenteDatas = $this->get('tontine.manager.dashboard')
            ->getDashVenteDatas();

        $dashMainDatas = $this->get('tontine.manager.dashboard')
            ->getDashMainDatas();

        $dashModeleDatas = $this->get('tontine.manager.dashboard')
            ->getDashModeleDatas();

        return $this->render('tontineBundle:Default:dashboard.html.twig', compact('dashboardDatas', 'dashClientDatas', 'dashCommandeDatas', 'dashVenteDatas', 'dashMainDatas', 'dashModeleDatas'));
    }

    private function renderPdf($template, $data = array(), $fileName)
    {
        $html = $this->renderView($template, $data);

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);        
        @$dompdf->render();
        return $dompdf->stream($fileName);
    }
}
