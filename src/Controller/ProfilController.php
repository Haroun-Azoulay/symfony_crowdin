<?php

namespace App\Controller;

use App\Entity\Profil;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

class ProfilController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/my-profil', name: 'app_profil')]
    public function handleProfil(): Response
    {
        $user = $this->getUser();
        $profil = $this->entityManager->getRepository(Profil::class)->findOneBy(['user' => $user]);

        return $profil
            ? $this->redirectToRoute('app_profil_show', ['id' => $profil->getId()])
            : $this->redirectToRoute('app_profil_create');
    }

    #[Route('/profil/create', name: 'app_profil_create')]
    public function createProfil(Request $request): Response
    {
        if ($request->isMethod('POST')) {
            $profil = new Profil();
            $this->saveProfil($profil, $request);
            return $this->redirectToRoute('app_profil_show', ['id' => $profil->getId()]);
        }

        return $this->render('profil/create-profil.html.twig');
    }

    #[Route('/profil/{id}', name: 'app_profil_show')]
    public function showProfil(Profil $profil): Response
    {
        return $this->render('profil/read-profil.html.twig', [
            'profil' => $profil,
            'skills' => serialize($profil->getSkills()),
        ]);
    }

    #[Route('/profil-update/{id}', name: 'app_profil_update')]
    public function updateProfil(Request $request, int $id): Response
    {
        $profil = $this->entityManager->getRepository(Profil::class)->find($id);

        if (!$profil) {
            throw $this->createNotFoundException('No profil found for id ' . $id);
        }

        if ($request->isMethod('POST')) {
            $this->saveProfil($profil, $request);
            return $this->redirectToRoute('app_profil_show', ['id' => $profil->getId()]);
        }

        return $this->render('profil/update-profil.html.twig', [
            'profil' => $profil,
        ]);
    }

    private function saveProfil(Profil $profil, Request $request): void
    {
        $description = $request->request->get('description');
        $languages = $this->getRequestArray($request->request->all('languages'));
        $skills = $this->getRequestArray($request->request->all('skills'));

        $profil->setDescription($description);
        $profil->setLanguages($languages);
        $profil->setSkills($skills);
        $profil->setUser($this->getUser());

        $this->entityManager->persist($profil);
        $this->entityManager->flush();
    }

    private function getRequestArray($input): array
    {
        return is_array($input) ? $input : [$input];
    }
}
