<?php

namespace App\Repository;

use App\Entity\Lead;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;

/**
 * @extends ServiceEntityRepository<Lead>
 */
class LeadRepository extends ServiceEntityRepository
{
    private $entityManager;

    public function __construct(ManagerRegistry $registry, EntityManagerInterface $entityManager)
    {
        parent::__construct($registry, Lead::class);
        $this->entityManager = $entityManager;
    }

    public function findByUser($users)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.users = :users')
            ->setParameter('users', $users)
            ->orderBy('l.id', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }



    public function findByRole(string $role): array
    {
        return $this->createQueryBuilder('u')
            ->where('u.roles LIKE :role')
            ->setParameter('role', '%"'.$role.'"%')
            ->getQuery()
            ->getResult();
    }

    public function truncateTable()
    {
        $connection = $this->entityManager->getConnection();
        $platform = $connection->getDatabasePlatform();
        $query = "TRUNCATE TABLE lead"; // ou "DELETE FROM lead" si vous préférez une suppression avec rollback
        $statement = $connection->prepare($query);
        $statement->execute();
    }

    public function findLeadsByUserAndNullStatus($user)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.users = :user')
            ->andWhere('l.status IS NULL')
            ->setParameter('user', $user)
            ->getQuery()
            ->getResult();
    }

    public function findLeadsWithNullStatus()
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.status IS NULL')
            ->getQuery()
            ->getResult();
    }

public function findLeadsWithHistoricalStatus()
{
    return $this->createQueryBuilder('l')
        ->andWhere('l.status = :status')
        ->setParameter('status', 'historique')
        ->getQuery()
        ->getResult();
}



public function findLeadsByUserAndHistoriqueStatus($user)
{
    return $this->createQueryBuilder('l')
        ->andWhere('l.users = :user')
        ->andWhere('l.status = :status')
        ->setParameter('status', 'historique')
        ->setParameter('user', $user)
        ->getQuery()
        ->getResult();
}


// public function findLeadsByUserAndHistoriqueStatus($user)
// {
//     return $this->createQueryBuilder('l')
//         ->andWhere('l.users = :user')
//         ->andWhere('l.status IS NULL')
//         ->andWhere('l.status = :status')
//         ->setParameter('status', 'historique')
//         ->setParameter('user', $user)
//         ->getQuery()
//         ->getResult();
// }



    //    /**
    //     * @return Lead[] Returns an array of Lead objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('l')
    //            ->andWhere('l.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('l.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Lead
    //    {
    //        return $this->createQueryBuilder('l')
    //            ->andWhere('l.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
