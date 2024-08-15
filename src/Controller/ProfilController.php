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
    #[Route('/my-profil', name: 'app_profil')]
    public function handleProfil(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        $profil = $entityManager->getRepository(Profil::class)->findOneBy(['user' => $user]);

        if ($profil) {
            return $this->redirectToRoute('app_profil_show', ['id' => $profil->getId()]);
        } else {
            return $this->redirectToRoute('app_profil_create');
        }
    }

    #[Route('/profil/create', name: 'app_profil_create')]
    public function createProfil(Request $request, EntityManagerInterface $entityManager): Response
    {
        if ($request->isMethod('POST')) {
            $user = $this->getUser();
            $description = $request->request->get('description');
            $languages = $request->request->all('languages');
            $skills = $request->request->all('skills');

            if (!is_array($languages)) {
                $languages = [$languages];
            }
            if (!is_array($skills)) {
                $skills = [$skills];
            }

            $profil = new Profil();
            $profil->setDescription($description);
            $profil->setLanguages($languages);
            $profil->setSkills($skills);
            $profil->setUser($user);

            $entityManager->persist($profil);
            $entityManager->flush();

            return $this->redirectToRoute('app_profil_show', ['id' => $profil->getId()]);
        }

        return $this->render('profil.html.twig');
    }

    #[Route('/profil/{id}', name: 'app_profil_show')]
    public function showProfil(Profil $profil): Response
    {
        $skills = serialize($profil->getSkills());
        return $this->render('sow.html.twig', [
            'profil' => $profil,
            'skills' => $skills,
        ]);
    }
    #[Route('/profil-update/{id}', name: 'app_profil_update')]
    public function updateProfil(Request $request, int $id, EntityManagerInterface $entityManager): Response
    {
        $profil = $entityManager->getRepository(Profil::class)->find($id);
    
        if (!$profil) {
            throw $this->createNotFoundException('No profil found for id ' . $id);
        }
    
        if ($request->isMethod('POST')) {
            $description = $request->request->get('description');
            $languages = $request->request->all('languages');
            $skills = $request->request->all('skills');
    
            if (!is_array($languages)) {
                $languages = [$languages];
            }
            if (!is_array($skills)) {
                $skills = [$skills];
            }
    
            $profil->setDescription($description);
            $profil->setLanguages($languages);
            $profil->setSkills($skills);
    

            $entityManager->flush();
    

            return $this->redirectToRoute('app_profil_show', [
                'id' => $profil->getId(),
            ]);
        }

        return $this->render('sasa.html.twig', [
            'profil' => $profil,
        ]);
    }
}