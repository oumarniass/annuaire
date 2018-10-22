<?php

namespace App\Controller;

use App\Entity\Mediatheque;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Meditheque;

class FilmIndexController extends AbstractController
{
    /**
     * @Route("/list_film", name="film_index")
     */
    public function index()
    {
        $repo = $this->getDoctrine()->getRepository(Mediatheque::class);
        $affichage = $repo->findAll();

        return $this->render('film_index/index.html.twig', [
            'test' => $affichage,
        ]);
    }

    /**
     * @Route("/list_film/{id}", name="detail")
     */
    public function afficher($id)
    {
        $repo = $this->getDoctrine()->getRepository(Mediatheque::class);

        $affiche = $repo->find($id);

        return $this->render('film.html.twig',['affiche' => $affiche]);


    }
}
