<?php

namespace App\Repository;

use App\Entity\Dioceses;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Dioceses|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dioceses|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dioceses[]    findAll()
 * @method Dioceses[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DiocesesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dioceses::class);
    }

    // /**
    //  * @return Dioceses[] Returns an array of Dioceses objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Dioceses
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
