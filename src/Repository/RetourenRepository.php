<?php

namespace App\Repository;

use App\Entity\Retouren;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Retouren|null find($id, $lockMode = null, $lockVersion = null)
 * @method Retouren|null findOneBy(array $criteria, array $orderBy = null)
 * @method Retouren[]    findAll()
 * @method Retouren[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RetourenRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Retouren::class);
    }

    // /**
    //  * @return Retouren[] Returns an array of Retouren objects
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
    public function findOneBySomeField($value): ?Retouren
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
