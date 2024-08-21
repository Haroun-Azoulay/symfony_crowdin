<?php

namespace App\Controller;

use App\Entity\Projects;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class ProjectsController extends AbstractController
{
    #[Route('/projects', name: 'app_projects')]
    public function index(): Response
    {
        return $this->render('projects/index.html.twig', [
            'controller_name' => 'ProjectsController',
        ]);
    }

    #[Route('/projects/create', name: 'app_projects_create')]
    public function new(Request $request): Response
    {
  
        $projects = new Projects();
        $projects->setName('Write a blog post');
        $projects->setCreateDate(new \DateTimeImmutable('tomorrow'));
        $projects->setUpdateDate(new \DateTime('tomorrow'));
        $projects->setTargetLanguages('Write a blog post');


        $form = $this->createFormBuilder($projects)
            ->add('projects', TextType::class)
            ->add('CreateDate', DateType::class)
            ->add('UpdateDate', DateType::class)
            ->add('setTargetLanguages', DateType::class)
            ->add('save', SubmitType::class, ['label' => 'Create Projects'])
            ->getForm();

            $form = $this->createForm(ProjectsType::class, $projects);

            return $this->render('projects/index.html.twig', [
                'form' => $form,
            ]);
    }
}
