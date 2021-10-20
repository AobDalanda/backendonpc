<?php

namespace App\Repository;

use App\Entity\OrdresParticipationsProduits;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method OrdresParticipationsProduits|null find($id, $lockMode = null, $lockVersion = null)
 * @method OrdresParticipationsProduits|null findOneBy(array $criteria, array $orderBy = null)
 * @method OrdresParticipationsProduits[]    findAll()
 * @method OrdresParticipationsProduits[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrdresParticipationsProduitsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OrdresParticipationsProduits::class);
    }

    // /**
    //  * @return OrdresParticipationsProduits[] Returns an array of OrdresParticipationsProduits objects
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
    public function findOneBySomeField($value): ?OrdresParticipationsProduits
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
