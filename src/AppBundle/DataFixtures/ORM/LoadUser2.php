<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\User2;

class LoadUser implements FixtureInterface
{
  public function load(ObjectManager $manager)
  {
    // Les noms d'utilisateurs à créer
    $listNames = array('Yann', 'Brice', 'Anthony', 'Julien', 'Maxence');

    foreach ($listNames as $name) {
      // On crée l'utilisateur
      $user = new User2;

      // Le nom d'utilisateur et le mot de passe sont identiques pour l'instant
      $user->setUsername($name);
      $user->setPassword($name);

      // On ne se sert pas du sel pour l'instant
      $user->setSalt('');
      // On le persiste
      $manager->persist($user);
    }

    // On déclenche l'enregistrement
    $manager->flush();
  }
}