<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Task;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 1; $i <= 20; $i++) {
            $task = new Task();
            $task->setTitle('Task ' . $i);
            $task->setDescription('This is the description for Task ' . $i);
            $task->setIsCompleted($i % 2 === 0);

            $manager->persist($task);
        }

        $manager->flush();
    }
}
