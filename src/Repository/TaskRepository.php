<?php

namespace App\Repository;

use App\Entity\Task;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class TaskRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Task::class);
    }

    public function findByCompletionStatus(bool $isCompleted): array
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.isCompleted = :status')
            ->setParameter('status', $isCompleted)
            ->orderBy('r.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findRecentRecipes(int $days): array
    {
        $date = new \DateTime();
        $date->modify(sprintf('-%d days', $days));

        return $this->createQueryBuilder('r')
            ->andWhere('r.createdAt >= :date')
            ->setParameter('date', $date)
            ->orderBy('r.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }
}