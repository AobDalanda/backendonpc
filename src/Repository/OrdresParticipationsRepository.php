<?php

namespace App\Repository;

use App\Entity\OrdresParticipations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method OrdresParticipations|null find($id, $lockMode = null, $lockVersion = null)
 * @method OrdresParticipations|null findOneBy(array $criteria, array $orderBy = null)
 * @method OrdresParticipations[]    findAll()
 * @method OrdresParticipations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrdresParticipationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OrdresParticipations::class);
    }

    // /**
    //  * @return OrdresParticipations[] Returns an array of OrdresParticipations objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?OrdresParticipations
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
