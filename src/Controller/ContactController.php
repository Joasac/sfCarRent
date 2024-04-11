<?php

namespace App\Controller;

use App\Entity\ContactType;
use App\Form\ContactTypeForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(Request $request): Response
    {
        // Create a new instance of ContactType entity
        $contact = new ContactType();

        // Create the contact form
        $form = $this->createForm(ContactTypeForm::class, $contact);

        // Handle form submission
        $form->handleRequest($request);

        // Check if form is submitted and valid
        if ($form->isSubmitted() && $form->isValid()) {
            // Save the contact form data (you can add code here to send email, save to database, etc.)
            // For example, to save to the database:
            // $entityManager = $this->getDoctrine()->getManager();
            // $entityManager->persist($contact);
            // $entityManager->flush();

            // Redirect to a success page or display a success message
            $this->addFlash('success', 'Your message has been sent successfully.');
            return $this->redirectToRoute('app_contact');
        }

        // Render the contact form template
        return $this->render('contact/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
