<?php

namespace App\Controller;

use App\Entity\Animal;
use App\Repository\AnimalRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AnimalController extends AbstractController
{
    /**
     * @Route("/", name="animaux")
     */
    public function index(AnimalRepository $repository)
    {
        $animaux = $repository->findAll();
        return $this->render('animal/index.html.twig', [
            "animaux" => $animaux
        ]);
    }
    /**
     * @Route("/animal/{id}", name="afficher_animal")
     */
    public function afficherAnimal(Animal $animal)
    {
        return $this->render('animal/afficherAnimal.html.twig', [
            "animal" => $animal
        ]);
    }
}
