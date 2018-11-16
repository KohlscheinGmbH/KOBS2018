<?php

namespace App\Repository;

use App\Entity\Mengeneinheit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Mengeneinheit|null find($id, $lockMode = null, $lockVersion = null)
 * @method Mengeneinheit|null findOneBy(array $criteria, array $orderBy = null)
 * @method Mengeneinheit[]    findAll()
 * @method Mengeneinheit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MengeneinheitRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Mengeneinheit::class);
    }

//    /**
//     * @return Mengeneinheit[] Returns an array of Mengeneinheit objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Mengeneinheit
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
