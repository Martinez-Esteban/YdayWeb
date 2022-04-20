<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Users;

class UsersFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $user = new Users();
        $user->setEmail('esteban47150@gmail.com');
        $user->setPassword(password_hash('verySecurePassword', PASSWORD_BCRYPT));
        $manager->persist($user);
        $manager->flush();
    }
}
