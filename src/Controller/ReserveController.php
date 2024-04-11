<?php

namespace App\Controller;

use App\Entity\CarReserve;
use App\Form\CarReserveType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReserveController extends AbstractController
{
    
    #[Route('/reserve', name:'app_reserve', methods: ['GET', 'POST'])] 
    public function index(Request $request): Response
    {
        // Create a new instance of CarReserve entity
        $carReserve = new CarReserve();

        // Create the car reservation form
        $form = $this->createForm(CarReserveType::class, $carReserve);

        // Handle form submission
        $form->handleRequest($request);

        // Check if form is submitted and valid
        if ($form->isSubmitted() && $form->isValid()) {
            // Save the car reservation (you can add code here to save to database, etc.)
            // For example, to save to the database:
            // $entityManager = $this->getDoctrine()->getManager();
            // $entityManager->persist($carReserve);
            // $entityManager->flush();

            // Optionally, add a flash message
            $this->addFlash('success', 'Your car reservation has been successfully submitted.');

            // Redirect to a success page or display a success message
            return $this->redirectToRoute('app_reserve');
        }

        // Render the car reservation form template
        return $this->render('reserve/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
