<?php

namespace App\Controller;

use App\Entity\Projects;
use App\Entity\Sources;
use App\Form\SourcesType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

class SourcesController extends AbstractController
{

    #[Route('/sources/create/{id}', name: 'app_sources_create')]
    public function createSources(Request $request, EntityManagerInterface $entityManager, int $id): Response
    {
        $project = $entityManager->getRepository(Projects::class)->find($id);

        if (!$project) {
            throw $this->createNotFoundException('sources not found');
        }

        $sources = new Sources();
        $sources->setProjects($project);
        $sources->setKey($project->getName());
        $form = $this->createForm(SourcesType::class, $sources);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $project = $request->request->get('projet');
            $sources = $form->getData();
            $entityManager->persist($sources);
            $entityManager->flush();
            return $this->redirectToRoute('app_main_homepage');
        }

        return $this->render('sources/create-source.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}

