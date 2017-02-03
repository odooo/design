<?php

namespace tontineBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use tontineBundle\Entity\TransfertFonds;

/**
 * Transfertfond controller.
 *
 * @Route("transfert-fonds")
 */
class TransfertFondsController extends BaseController
{
    /**
     * Lists all transfertFond entities.
     *
     * @Route("/", name="tontine_transfert_fonds_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $transfertFonds = $em->getRepository('tontineBundle:TransfertFonds')->findAll();

        return $this->render('tontineBundle:TransfertFonds:index.html.twig', array(
            'transfertFonds' => $transfertFonds,
        ));
    }

    /**
     * Finds and displays a transfertFond entity.
     *
     * @Route("/{id}", name="tontine_transfert_fonds_show", requirements={"id"="\d+"})
     * @Method("GET")
     */
    public function showAction(TransfertFonds $transfertFond)
    {
        return $this->render('tontineBundle:TransfertFonds:show.html.twig', array(
            'transfertFond' => $transfertFond,
        ));
    }

    /**
     * Finds and displays a transfertFond entity in a popup.
     *
     * @Route("/{id}", name="tontine_transfert_fonds_preview", requirements={"id"="\d+"})
     * @Method("GET")
     */
    public function previewAction(TransfertFonds $transfertFond)
    {
        $deleteForm = $this->createDeleteForm($transfertFond);

        return $this->render('tontineBundle:TransfertFonds:partials/item-details.html.twig', array(
            'transfertFond' => $transfertFond,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a new transfertFond entity.
     *
     * @Route("/new", name="tontine_transfert_fonds_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $beginDate = $this->getTransfertBeginDate();
        $transfertFond = new TransfertFonds();
        $transfertFond->setDateDebut($beginDate);
        $form = $this->createForm('tontineBundle\Form\Type\TransfertFondsType', $transfertFond);

        if ($this->handleForm($request, $form)) {            
            return $this->redirectToRoute('tontine_transfert_fonds_show', array('id' => $transfertFond->getId()));
        }

        return $this->render('tontineBundle:TransfertFonds:new.html.twig', [
            'transfertFond' => $transfertFond,
            'form' => $form->createView(),
            'beginDate' => $beginDate
        ]);
    }

    /**
     * Displays a form to create new transfertFond entity.
     *
     * @Route("/{id}/new-form", name="tontine_transfert_fonds_new_form")
     * @Method({"GET"})
     */
    public function ajaxNewFormAction()
    {
        $form = $this->createForm('tontineBundle\Form\Type\TransfertFondsType');
            
        return $this->render('tontineBundle:TransfertFonds:partials/form.html.twig', array(
            'isModal' => true,
            'form' => $form->createView(),
        ));
    }    

    public function handleForm(Request $request, $form)
    {
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $transfer = $form->getData();
            
            if ($transfer->getPieceFile()) {
                $file = $transfer->getPieceFile();
                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                $file->move($this->getParameter('pieces_path'), $fileName);
                $transfer->setPiece($fileName);
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($transfer);
            $em->flush();

            return true;
        }

        return false;
    }

    /**
     * [estimateAmountAction description]
     *
     * @Route("/etat", name="tontine_transfert_fonds_etat")
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function estimateAmountAction(Request $request)
    {
        if ($request->isXmlHttpRequest()) {
            $form = $request->get('tontinebundle_transfertfonds'); 
            $beginDate = \DateTime::createFromFormat('d/m/Y', $form['dateDebut']);
            $endDate = \DateTime::createFromFormat('d/m/Y', $form['dateFin']);

            $amount = $this->estimateAmount($beginDate, $endDate);
            $mises = $this->misesTransfert($beginDate, $endDate);

            $commissions = $amount * $this->getParameter('taux_commission') * 0.01;
            $net = $amount - $commissions;

            return new JsonResponse([
                'amount' => $amount ?: 0,
                'table' => $this->renderView('tontineBundle:TransfertFonds:etat.html.twig', compact('mises', 'amount', 'commissions', 'net'))
            ]);
        }

        return new Response('Only ajax request allowed');
    }

    /**
     * Creates a form to delete a transfertFond entity.
     *
     * @param TransfertFonds $transfertFond The transfertFond entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TransfertFonds $transfertFond)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tontine_transfert_fonds_delete', array('id' => $transfertFond->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    private function getTransfertBeginDate()
    {
        $lastTransfer = $this->getRepository('tontineBundle:TransfertFonds')->findOneBy([], ['id' => 'DESC']);
        if ($lastTransfer) {
            return $lastTransfer->getDateFin();
        }

        $firstDepot = $this->getRepository('tontineBundle:DepotMise')->findOneBy([], ['id' => 'ASC']);

        if ($firstDepot) {
            $date = $firstDepot->getDate();
            $date->modify('-1 day');
            return $date;
        }

        return null;
    }

    private function estimateAmount($beginDate, $endDate)
    {
        return $this->getRepository('tontineBundle:DepotMise')->createQueryBuilder('d')
            ->andWhere('d.date > :beginDate')
            ->andWhere('d.date <= :endDate')
            ->setParameter('beginDate', $beginDate->format('Y-m-d'))
            ->setParameter('endDate', $endDate->format('Y-m-d'))
            ->select('SUM(d.montant) as amount')
            ->getQuery()
            ->getSingleScalarResult();
    }

    private function misesTransfert($beginDate, $endDate)
    {
        return $this->getRepository('tontineBundle:DepotMise')->createQueryBuilder('d')
            ->andWhere('d.date > :beginDate')
            ->andWhere('d.date <= :endDate')
            ->leftJoin('d.tontine', 't')
                ->addSelect('t')
            ->leftJoin('d.client', 'c')
                ->addSelect('c')
            ->setParameter('beginDate', $beginDate->format('Y-m-d'))
            ->setParameter('endDate', $endDate->format('Y-m-d'))
            ->getQuery()
            ->getResult();
    }
}
