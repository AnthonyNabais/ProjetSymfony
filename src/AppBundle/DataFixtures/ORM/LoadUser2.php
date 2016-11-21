<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\User2;

class LoadUser implements FixtureInterface
{
  public function load(ObjectManager $manager)
  {
    $listNames = array('Yann', 'Brice', 'Anthony', 'Julien', 'Maxence');

    foreach ($listNames as $name) {
      $user = new User2;

      $user->setUsername($name);
      $user->setPassword($name);

      $user->setSalt('');
      $user->setRoles(array('ROLE_ADMIN'));
      $manager->persist($user);
    }

    $manager->flush();
  }
}