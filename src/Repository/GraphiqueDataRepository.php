<?php

namespace App\Repository;

use App\Entity\GraphiqueData;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method GraphiqueData|null find($id, $lockMode = null, $lockVersion = null)
 * @method GraphiqueData|null findOneBy(array $criteria, array $orderBy = null)
 * @method GraphiqueData[]    findAll()
 * @method GraphiqueData[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GraphiqueDataRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GraphiqueData::class);
    }

    // /**
    //  * @return GraphiqueData[] Returns an array of GraphiqueData objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?GraphiqueData
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
