<?php

namespace App\Repository;

use App\Entity\TypesEtablissements;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TypesEtablissements|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypesEtablissements|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypesEtablissements[]    findAll()
 * @method TypesEtablissements[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypesEtablissementsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypesEtablissements::class);
    }

    // /**
    //  * @return TypesEtablissements[] Returns an array of TypesEtablissements objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TypesEtablissements
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
