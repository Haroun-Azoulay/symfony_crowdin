<?php

namespace App\Controller;

use App\Form\TranslationsType;
use App\Entity\Sources;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Translations;

class TranslationsController extends AbstractController
{

    #[Route('/translations/update/{id}', name: 'app_translation_update')]
    public function updateTranslations(Request $request, EntityManagerInterface $entityManager, int $id): Response
    {

        $translation = $entityManager->getRepository(Translations::class)->find($id);
    
 
        if (!$translation) {
            throw $this->createNotFoundException('No translation found for id ' . $id);
        }
    

        $source = $translation->getSource();

        $project = $source->getProjects();

        $form = $this->createForm(TranslationsType::class, $translation);
        $form->handleRequest($request);
    

        $this->denyAccessUnlessGranted('TRANSLATE_VIEW', $project);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            return $this->redirectToRoute('app_source_show', ['id' => $source->getId()]);
        }
    

        return $this->render('translations/update-translation.html.twig', [
            'form' => $form->createView(),
            'source' => $source,
        ]);
    }
    
    

    #[Route('/translations/delete/{id}', name: 'app_translation_delete')]
    public function deleteTranslations(Request $request, EntityManagerInterface $entityManager, int $id): Response
    {
        $translations = $entityManager->getRepository(Translations::class)->find($id);

        $source = $translations->getSource();

        $project = $source->getProjects();

        $this->denyAccessUnlessGranted('TRANSLATE_VIEW', $project);
    
        if (!$translations) {
            throw $this->createNotFoundException(
                'No translation found for id ' . $id
            );
        }
    
        $entityManager->remove($translations);
        $entityManager->flush();
    
        return $this->redirectToRoute('app_source_show', ['id' => $source->getId()]);
    }
    
}
