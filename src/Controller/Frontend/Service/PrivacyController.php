<?php
namespace App\Controller\Frontend\Service;

use App\Controller\Frontend\AbstractFrontendController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PrivacyController extends AbstractFrontendController
{
    #[Route('/datenschutz')]
    public function index(): Response
    {
        $number = random_int(0, 100);

        return $this->render('frontend/service/privacy.html.twig', [
            'number' => $number,
        ]);
    }
}
