<?php

namespace App\Repository;

use App\Entity\AllUsers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AllUsers|null find($id, $lockMode = null, $lockVersion = null)
 * @method AllUsers|null findOneBy(array $criteria, array $orderBy = null)
 * @method AllUsers[]    findAll()
 * @method AllUsers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AllUsersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AllUsers::class);
    }

    // /**
    //  * @return AllUsers[] Returns an array of AllUsers objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AllUsers
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
