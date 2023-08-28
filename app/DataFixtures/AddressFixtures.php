<?php

declare(strict_types=1);

namespace App\DataFixtures;

use App\UserManagement\Domain\Entity\Address;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AddressFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();

        for ($i = 1; $i <= 5; $i++) {
            $address = new Address();
            $address->setStreet($faker->streetAddress());
            $address->setCity($faker->city());

            $this->addReference("address_$i", $address);
            $manager->persist($address);
        }

        $manager->flush();
    }
}
