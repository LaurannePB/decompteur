<?php

namespace App\DataFixtures;

use App\Entity\Image;
use App\Enum\Category;
use App\Enum\Status;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 1; $i < 15; $i++)
        {
            $category = ($i <= 5) ? Category::MOTIVATION : (($i <= 10) ? Category::HELP : Category::CAT);

            $image = new Image();
            $image->setAuthor('Lauranne');
            $image->setCategoryId($category->value);
            $image->setCreationDate(new DateTime());
            $image->setStatusId(Status::VALIDATED->value);
            $image->setSourceUrl('http://google.com');
            $image->setFileName($i . '.png');
            $manager->persist($image);
        }

        $manager->flush();
    }
}
