<?php

namespace App\Controller;

use App\Entity\Cours;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CoursController extends AbstractController
{
    /**
     * Renvoie la page de détail d'un cours
     * @Route("/cours/{slug}", name="app_cours_show")
     * @return Response
     */
    #[Route('/cours/{slug}', name: 'app_cours_show')]
    public function index(EntityManagerInterface $entityManagerInterface, string $slug): Response
    {
        $cours = $entityManagerInterface->getRepository(Cours::class)->findOneBySlug($slug);
        if(!$cours){
            throw $this->createNotFoundException('Le cours demandé n\'existe pas');
        }
        return $this->render('pages/show.cours.html.twig',[
            'cours' => $cours
        ]);
    }
}
