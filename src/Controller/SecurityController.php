<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Psr\Log\LoggerInterface;

class SecurityController extends AbstractController
{
    #[Route(path: '/connection', name: 'app_connection')]
    public function connection(AuthenticationUtils $authenticationUtils): Response
    {
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user but it's this case it's mail
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/connection.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }

    #[Route('/inscription', name: 'app_inscription')]
    public function inscription(Request $request, UserPasswordHasherInterface $passwordHasher, EntityManagerInterface $entityManager, LoggerInterface $logger): Response
    {
        $error = null;

        if ($request->isMethod('POST')) {
            $email = $request->request->get('email');
            $plainPassword = $request->request->get('password');
            $pseudo = $request->request->get('pseudo');
            $roles = $request->request->get('roles');
            $existingUser = $entityManager->getRepository(User::class)->findOneBy(['pseudo' => $pseudo]);

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error = 'Invalid email address.';
            } elseif ($existingUser !== null) {
                $error = 'Pseudo is already used. Please you filed new pseudo';
            } elseif (strlen($plainPassword) < 6) {
                $error = 'Password must be at least 6 characters long.';
            } elseif (is_null($roles)) {
                $error = 'Checkbox must be checked.';
            } else {

                $user = new User();
                $user->setEmail($email);
                $user->setPseudo($pseudo);
                $hashedPassword = $passwordHasher->hashPassword($user, $plainPassword);
                $user->setPassword($hashedPassword);
                $user->setRoles([$roles]);

                $entityManager->persist($user);
                $entityManager->flush();

                $logger->debug('This is a log message.');
                $logger->debug($roles);
                return $this->redirectToRoute('app_connection');
            }
        }

        return $this->render('security/inscription.html.twig', [
            'error' => $error
        ]);
    }


    #[Route(path: '/disconnection', name: 'app_disconnection')]
    public function disconnection(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
