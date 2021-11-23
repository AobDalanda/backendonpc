<?php

namespace App\Repository;

use App\Entity\FormatsPublicites;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FormatsPublicites|null find($id, $lockMode = null, $lockVersion = null)
 * @method FormatsPublicites|null findOneBy(array $criteria, array $orderBy = null)
 * @method FormatsPublicites[]    findAll()
 * @method FormatsPublicites[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FormatsPublicitesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FormatsPublicites::class);
    }

    public function findformatpub(){
        $qd=$this->createQueryBuilder('f')
            ->select('f.id', 'f.Libelle') ;
        $query= $qd->getQuery();
        return $query->execute();
    }



    // /**
    //  * @return FormatsPublicites[] Returns an array of FormatsPublicites objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FormatsPublicites
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
