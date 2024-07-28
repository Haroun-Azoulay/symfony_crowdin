<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
class LuckyController
{   
    #[Route('/signup', name: 'app_signup')]
    public function signuppage(): Response
    {
        return $this->render('signup.html.twig');
    }
}