<?php

namespace App\DataFixtures;

use App\Entity\Mediatheque;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class FilmFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i=0;$i<40;$i++)
        {
            $film = new Mediatheque();
            $film->setTitre("game of the throne");
            $film->setDateSortie(new \DateTime());
            $film->setSynopsis("George R.R. Martin's best-selling book series `A Song of Ice and Fire' is brought to the screen as HBO sinks its considerable storytelling teeth into the medieval fantasy epic. It's the depiction of two powerful families - kings and queens, knights and renegades, liars and honest men - playing a dea");
            $film->setPicture("https://cdn.pixabay.com/photo/2018/10/13/17/31/fall-leaves-3744649_960_720.jpg");
            $manager->persist($film);
        }
        $manager->flush();
    }
}
