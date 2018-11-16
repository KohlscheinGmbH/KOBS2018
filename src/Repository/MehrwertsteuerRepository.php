<?php

namespace App\Repository;

use App\Entity\Mehrwertsteuer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Mehrwertsteuer|null find($id, $lockMode = null, $lockVersion = null)
 * @method Mehrwertsteuer|null findOneBy(array $criteria, array $orderBy = null)
 * @method Mehrwertsteuer[]    findAll()
 * @method Mehrwertsteuer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MehrwertsteuerRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Mehrwertsteuer::class);
    }

//    /**
//     * @return Mehrwertsteuer[] Returns an array of Mehrwertsteuer objects
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
    public function findOneBySomeField($value): ?Mehrwertsteuer
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
