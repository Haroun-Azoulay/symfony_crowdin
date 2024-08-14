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
    public function createProfil(Request $request, EntityManagerInterface $entityManager): Response
    {
        // Vérifier si la méthode est POST
        if ($request->isMethod('POST')) {
            

            $user = $this->getUser();
            

            $description = $request->request->get('description');
            $languages = $request->request->all('languages');
            if (!is_array($languages)) {
                $languages = [$languages];
            }

            $profil = new Profil();
            $profil->setDescription($description);
            $profil->setLanguages($languages);


            $profil->setUser($user);

            $entityManager->persist($profil);
            $entityManager->flush();

            return new Response('Saved new profil with id '.$profil->getId());
        }

        return $this->render('profil.html.twig');
    }
}
