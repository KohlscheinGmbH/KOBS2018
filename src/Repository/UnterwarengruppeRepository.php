<?php

namespace App\Repository;

use App\Entity\Unterwarengruppe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Unterwarengruppe|null find($id, $lockMode = null, $lockVersion = null)
 * @method Unterwarengruppe|null findOneBy(array $criteria, array $orderBy = null)
 * @method Unterwarengruppe[]    findAll()
 * @method Unterwarengruppe[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UnterwarengruppeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Unterwarengruppe::class);
    }

//    /**
//     * @return Unterwarengruppe[] Returns an array of Unterwarengruppe objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Unterwarengruppe
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
