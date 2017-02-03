<?php

namespace tontineBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use tontineBundle\Entity\Parameter;
use tontineBundle\Entity\Parameters;
use tontineBundle\Form\Type\ParametersType;

/**
 * @Route("/parameters")
 */
class ParameterController extends BaseController
{
    /**
     * @Route("/", name="tontine_parameters_edit")
     */
    public function editAction(Request $request)
    {
        $parameters = $this->getRepository('tontineBundle:Parameter')->findAll();

        if (empty($parameters)) {
            $parameters = $this->buildDefaultParameters();
        }

        $parametersHolder = new Parameters();
        $parametersHolder->setParameters($parameters);

        $form = $this->createForm(ParametersType::class, $parametersHolder);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            
            $em = $this->getEntityManager();
            
            foreach($form->getData()->getParameters() as $parameter) {
                $em->persist($parameter);
                $em->flush();
            }
        }

        return $this->render('tontineBundle:Parameter:edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    public function buildDefaultParameters()
    {
        return [
            new Parameter([
                'name' => 'nb_retard_journalier', 
                'type' => 'integer', 
                'label' => 'Nombre de mise de retard en mode journalier'
            ]),

            new Parameter([
                'name' => 'nb_retard_hebdo', 
                'type' => 'integer', 
                'label' => 'Nombre de mise de retard en mode hebdomandaire'
            ]),

            new Parameter([
                'name' => 'nb_retard_mensuel', 
                'type' => 'integer', 
                'label' => 'Nombre de mise de retard en mode mensuel'
            ]),

            new Parameter([
                'name' => 'taux_penalite_journalier', 
                'type' => 'integer', 
                'label' => 'Taux de pénalité en mode journalier'
            ]),

            new Parameter([
                'name' => 'taux_penalite_hebdo',
                'type' => 'integer', 
                'label' => 'Taux pénalité en mode hebdomandaire'
            ]),

            new Parameter([
                'name' => 'taux_penalite_mensuel',
                'type' => 'integer', 
                'label' => 'Taux pénalité en mode mensuel'
            ]),

            new Parameter([
                'name' => 'taux_commission',
                'type' => 'integer', 
                'label' => 'Taux commission'
            ]),
            
            new Parameter([
                'name' => 'version_cg',
                'type' => 'integer', 
                'label' => 'Version actuelle des CG'
            ])
        ];
    }
}
