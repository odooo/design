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

        return $this->render('tontineBundle:Default:dashboard.html.twig', compact('dashboardDatas', 'dashClientDatas'));
    }

    /**
     * @Route("/etats/my-today-tontines", name="tontine_dashboard_my_today_tontines")
     * @Security("has_role('ROLE_TONTINE_CREATE')")
     */
    public function agentTodayTontinesAction(Request $request)
    {
        $tontines = $this->get('tontine.manager.dashboard')->getAgentTodayCreatedTontines();

        if ($request->query->get('print', false)) {
            return $this->renderPdf(
                'tontineBundle:Default:my_today_tontines_pdf.html.twig',
                ['tontines' => $tontines],
                sprintf("Liste_des_tontines_demarrees_le_%s", date('d_m_Y'))
            );
        }

        return $this->render('tontineBundle:Default:my_today_tontines.html.twig', [
            'tontines' => $tontines,
        ]);
    }

    /**
     * @Route("/etats/my-today-collected-mises", name="tontine_dashboard_my_today_collected_mises")
     * @Security("has_role('ROLE_TONTINE_ADD_MISE')")
     */
    public function agentTodayCollectedMisesAction(Request $request)
    {
        $data = $this->get('tontine.manager.dashboard')->getAgentTodayCollectedMises();

        if ($request->query->get('print', false)) {
            return $this->renderPdf(
                'tontineBundle:Default:my_today_collected_mises_pdf.html.twig',
                $data,
                sprintf("Liste_des_mises_collectees_le_%s", date('d_m_Y'))
            );
        }

        return $this->render('tontineBundle:Default:my_today_collected_mises.html.twig', $data);
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
