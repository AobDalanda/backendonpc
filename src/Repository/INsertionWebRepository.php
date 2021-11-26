<?php

namespace App\Repository;

use App\Entity\INsertionWeb;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method INsertionWeb|null find($id, $lockMode = null, $lockVersion = null)
 * @method INsertionWeb|null findOneBy(array $criteria, array $orderBy = null)
 * @method INsertionWeb[]    findAll()
 * @method INsertionWeb[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class INsertionWebRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, INsertionWeb::class);
    }

    // /**
    //  * @return INsertionWeb[] Returns an array of INsertionWeb objects
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
    public function findOneBySomeField($value): ?INsertionWeb
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
