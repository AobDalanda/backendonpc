<?php

namespace App\Repository;

use App\Entity\RegionsInternatGuide;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RegionsInternatGuide|null find($id, $lockMode = null, $lockVersion = null)
 * @method RegionsInternatGuide|null findOneBy(array $criteria, array $orderBy = null)
 * @method RegionsInternatGuide[]    findAll()
 * @method RegionsInternatGuide[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RegionsInternatGuideRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RegionsInternatGuide::class);
    }

    // /**
    //  * @return RegionsInternatGuide[] Returns an array of RegionsInternatGuide objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RegionsInternatGuide
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
