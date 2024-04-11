<?php

namespace App\Controller;

use App\Entity\Car;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface; // Import EntityManagerInterface

class SearchController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    // Controller methods
    #[Route('/search', name: 'search')]
    public function search(Request $request): Response
    {
        // Controller logic
        $searchQuery = $request->query->get('query');
        $carRepository = $this->entityManager->getRepository(Car::class);
        $cars = $carRepository->findBySearchQuery($searchQuery);
    
        return $this->render('search/index.html.twig', [
            'cars' => $cars,
        ]);
    }
}