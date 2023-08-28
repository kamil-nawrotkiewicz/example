<?php

declare(strict_types=1);

namespace App\DataFixtures;

use App\UserManagement\Domain\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class UserFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();

        for ($i = 1; $i <= 5; $i++) {
            $user = new User();
            $user->setName($faker->firstName());
            $user->setSurname($faker->lastName());
            $user->setAddress($this->getReference("address_$i"));

            $manager->persist($user);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            AddressFixtures::class,
        ];
    }
}
