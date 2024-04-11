<?php

namespace App\Repository;

use App\Entity\CarReserve;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CarReserve>
 *
 * @method CarReserve|null find($id, $lockMode = null, $lockVersion = null)
 * @method CarReserve|null findOneBy(array $criteria, array $orderBy = null)
 * @method CarReserve[]    findAll()
 * @method CarReserve[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CarReserveRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CarReserve::class);
    }

    //    /**
    //     * @return CarReserve[] Returns an array of CarReserve objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('c.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?CarReserve
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
