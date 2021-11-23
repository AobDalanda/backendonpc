<?php

namespace App\Repository;

use App\Entity\EmplacementPublicite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method EmplacementPublicite|null find($id, $lockMode = null, $lockVersion = null)
 * @method EmplacementPublicite|null findOneBy(array $criteria, array $orderBy = null)
 * @method EmplacementPublicite[]    findAll()
 * @method EmplacementPublicite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EmplacementPubliciteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EmplacementPublicite::class);
    }


    public function findEmplacementPub(){
        $qd=$this->createQueryBuilder('e')
            ->select('e.id', 'e.Libelle') ;
        $query= $qd->getQuery();
        return $query->execute();
    }



    // /**
    //  * @return EmplacementPublicite[] Returns an array of EmplacementPublicite objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?EmplacementPublicite
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
