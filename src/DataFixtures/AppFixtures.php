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
            $image->set_author('Lauranne');
            $image->set_category_id($category->value);
            $image->set_creation_date(new DateTime());
            $image->set_status_id(Status::VALIDATED->value);
            $image->set_source_url('http://google.com');
            $image->set_file_name($i . '.png');
            $manager->persist($image);
        }

        $manager->flush();
    }
}
