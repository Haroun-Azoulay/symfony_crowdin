<?php

namespace App\Controller;

use App\Entity\Projects;
use App\Form\ProjectsType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class ProjectsController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/projects', name: 'app_projects')]
    public function index(): Response
    {
        return $this->render('projects/all-projects.html.twig');
    }

    #[Route('/projects/create', name: 'app_projects_create')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response

    {
        $user = $this->getUser();
        $projects = new Projects();
        $projects->setUser($user);
        $form = $this->createForm(ProjectsType::class, $projects);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $projects = $form->getData();

            $entityManager->persist($projects);
            $entityManager->flush();
        }

        return $this->render('projects/create-project.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
