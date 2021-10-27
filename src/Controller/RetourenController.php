<?php

namespace App\Controller;

use App\Entity\Retouren;
use App\Form\RetourenType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RetourenController extends AbstractController
{
    #[Route('/retouren', name: 'retouren')]
    public function index(): Response
    {
        return $this->render('retouren/index.html.twig', [
            'controller_name' => 'RetourenController',
        ]);
    }

    /**
     * @Route("/retouren/create", name="retouren_new", methods={"GET","POST"})
     */
    public function create(Request $request)
    {
        $retouren = new Retouren();
        $form = $this->createForm(RetourenType::class, $retouren);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($retouren);
            $entityManager->flush();

            return $this->redirectToRoute('retouren');
        }

        return $this->renderForm('retouren/create.html.twig', [
            'form' => $form,
        ]);
    }
}
