<?php

namespace App\Repository;

use App\Entity\CategoriesOrganismes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CategoriesOrganismes|null find($id, $lockMode = null, $lockVersion = null)
 * @method CategoriesOrganismes|null findOneBy(array $criteria, array $orderBy = null)
 * @method CategoriesOrganismes[]    findAll()
 * @method CategoriesOrganismes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategoriesOrganismesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CategoriesOrganismes::class);
    }

    // /**
    //  * @return CategoriesOrganismes[] Returns an array of CategoriesOrganismes objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CategoriesOrganismes
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
