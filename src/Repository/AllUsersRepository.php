<?php

namespace App\Repository;

use App\Entity\AllUsers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AllUsers|null find($id, $lockMode = null, $lockVersion = null)
 * @method AllUsers|null findOneBy(array $criteria, array $orderBy = null)
 * @method AllUsers[]    findAll()
 * @method AllUsers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AllUsersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AllUsers::class);
    }

    /**
     * Retourne la liste des utilisateurs de la base de données
     * Retourne un tableau
     */
      public function apiFindAll(): array
      {
          $qb= $this->createQueryBuilder('u')
              ->select('u.id','u.Nom','u.Prenom','u.Mail','u.TypeUtilisateur')
              ->orderBy('u.Nom','DESC');
          $query= $qb->getQuery();
          return $query->execute();
      }

   /**
    * Retourne les données d'un utilisateur donnée
    * retourne un array
    */
       public function findSingleUser($id):array
       {
           $qb=$this->createQueryBuilder('u')
               ->select('u.id','u.Nom','u.Prenom','u.Mail','u.TypeUtilisateur')
               ->where('u.id = :identifiant')
               ->setParameter('identifiant', $id);
           $query= $qb->getQuery();
           return $query->execute();

       }

    /**
     * @param $mail
     * @return array
     */
       public function finduserByMail($mail):array
       {
           $qd=$this->createQueryBuilder('u')
               ->select('u.id','u.Nom','u.Prenom','u.Mail','u.TypeUtilisateur','u.MotDePasse')
               ->where('u.Mail = :mail')
               ->setParameter('mail', $mail);
           $query= $qd->getQuery();
           return $query->execute();
       }



       /**
        * verify email to avoid duplication
        */
       public function singlemail($email)
       {
           $qd=$this->createQueryBuilder('u')
               ->select('count(u.id)')
               ->where('u.Mail = :mail')
               ->setParameter('mail', $email);
           $query= $qd->getQuery();
           return $query->execute();
       }
    // /**
    //  * @return AllUsers[] Returns an array of AllUsers objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AllUsers
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
