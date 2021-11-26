<?php

namespace App\Repository;

use App\Entity\InsertionWeb;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method InsertionWeb|null find($id, $lockMode = null, $lockVersion = null)
 * @method InsertionWeb|null findOneBy(array $criteria, array $orderBy = null)
 * @method InsertionWeb[]    findAll()
 * @method InsertionWeb[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class INsertionWebRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InsertionWeb::class);
    }

    // /**
    //  * @return InsertionWeb[] Returns an array of InsertionWeb objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?InsertionWeb
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
