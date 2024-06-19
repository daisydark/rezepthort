<?php
namespace App\Controller\Frontend\Service;

use App\Controller\Frontend\AbstractFrontendController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ImprintController extends AbstractFrontendController
{
    #[Route('/impressum')]
    public function index(): Response
    {
        $number = random_int(0, 100);

        return $this->render('frontend/service/imprint.html.twig', [
            'number' => $number,
        ]);
    }
}
