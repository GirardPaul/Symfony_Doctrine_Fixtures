<?php

namespace App\Controller;

use App\Entity\Continent;
use App\Repository\ContinentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ContinentController extends AbstractController
{
    /**
     * @Route("/continents", name="continents")
     */
    public function index(ContinentRepository $repository)
    {
        $continents = $repository->findAll();
        return $this->render('continent/continents.html.twig', [
            "continents" => $continents
        ]);
    }
    /**
     * @Route("/continent/{id}", name="afficher_continent")
     */
    public function afficherContinent(Continent $continent)
    {
        return $this->render('continent/afficherContinent.html.twig', [
            "continent" => $continent
        ]);
    }
}
