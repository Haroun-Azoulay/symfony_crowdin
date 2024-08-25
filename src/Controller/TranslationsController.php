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
    #[Route('/translations/create/{id}', name: 'app_translations')]
    public function index(Request $request, EntityManagerInterface $entityManager, int $id): Response
    {
        $source = $entityManager->getRepository(Sources::class)->find($id);

        if (!$source) {
            throw $this->createNotFoundException('No source found for id ' . $id);
        }


        $translations = new Translations();
        $translations->setSource($source);


        $form = $this->createForm(TranslationsType::class, $translations);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $translations = $form->getData();
            $entityManager->persist($translations);
            $entityManager->flush();
            return $this->redirectToRoute('app_main_homepage');
        } {
            return $this->render('translations/index.html.twig', [
                'form' => $form->createView(),
            ]);
        }
    }
}
