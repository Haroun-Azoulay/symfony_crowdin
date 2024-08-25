<?php

namespace App\Controller;

use App\Entity\Projects;
use App\Entity\Sources;
use App\Entity\Translations;
use App\Form\TranslationsType;
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

        $this->denyAccessUnlessGranted('SOURCE_VIEW', $project);

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

    #[Route('/source/{id}', name: 'app_source_show')]
    public function showSource(Request $request, EntityManagerInterface $entityManager, int $id): Response
    {

        $source = $entityManager->getRepository(Sources::class)->find($id);


        if (!$source) {
            throw $this->createNotFoundException(
                'No source found for id ' . $id
            );
        }

        $existingTranslation = $entityManager->getRepository(Translations::class)->findOneBy(['source' => $source]);

        if ($existingTranslation) {
            $translations = $entityManager->getRepository(Translations::class)->findAllOrderedByName($id);
    
            return $this->render('sources/show-source.html.twig', [
                'source' => $source,
                'translations' => $translations,
                'form' => null,  // Passer un formulaire nul ou vide
            ]);
        }

        $translations = new Translations();
        $translations->setSource($source);
        $form = $this->createForm(TranslationsType::class, $translations);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // $project = $request->request->get('projet');
            $translations = $form->getData();
            $entityManager->persist($translations);
            $entityManager->flush();
            return $this->redirectToRoute('app_source_show', ['id' => $id]);
        }

              if (!$translations) {
            throw $this->createNotFoundException(
                'No translation found for id ' . $id
            );
        }

        $translations = $entityManager->getRepository(Translations::class)->findAllOrderedByName($id);


        return $this->render('sources/show-source.html.twig', [
            'source' => $source,
            'form' => $form->createView(),
            'translations' =>$translations
        ]);
    }




    #[Route('/source/update/{id}', name: 'app_source_update')]
public function updateSource(Request $request, EntityManagerInterface $entityManager, int $id): Response
{

    $source = $entityManager->getRepository(Sources::class)->find($id);

    if (!$source) {
        throw $this->createNotFoundException('No source found for id ' . $id);
    }


    $project = $source->getProjects();
    $this->denyAccessUnlessGranted('SOURCE_VIEW', $project);
    $source->setKey($project->getName());

    $form = $this->createForm(SourcesType::class, $source);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager->flush();
        return $this->redirectToRoute('app_main_homepage');
    }

    return $this->render('sources/update-source.html.twig', [
        'form' => $form->createView(),
    ]);
}

    
    #[Route('/source/delete/{id}', name: 'app_source_delete')]
    public function deleteSource(EntityManagerInterface $entityManager, int $id): Response
    {
        $source = $entityManager->getRepository(Sources::class)->find($id);
        $project = $source->getProjects();
        $this->denyAccessUnlessGranted('SOURCE_VIEW', $project);

        if (!$source) {
            throw $this->createNotFoundException(
                'No source found for id ' . $id
            );
        }

        $projectId = $source->getProjects()->getId();

        $entityManager->remove($source);

        $entityManager->flush();

        return $this->redirectToRoute('app_projects_show', ['id' => $projectId]);
    }
}
